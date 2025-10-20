<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Authentication extends BaseController
{
    public function login()
    {
        $session = session();

        return view('auth/login', [
            'errors' => $session->getFlashdata('login_errors') ?? [],
            'old'    => $session->getFlashdata('login_old') ?? [],
            'success' => $session->getFlashdata('success') ?? null, // for signup success
        ]);
    }
    public function loginPost()
    {
        $session = session();
        $request = service('request');
        $post = $request->getPost();

        $loginErrors = [];

        // Manual empty check
        if (empty($post['username'])) {
            $loginErrors['username'] = 'Username is required';
        }
        if (empty($post['password'])) {
            $loginErrors['password'] = 'Password is required';
        }

        if (!empty($loginErrors)) {
            $session->setFlashdata('login_errors', $loginErrors);
            $session->setFlashdata('login_old', $post);
            return redirect()->back()->withInput();
        }

        $userModel = new UsersModel();
        $user = $userModel->where('username', $post['username'])->first();

        if (!$user) {
            $loginErrors['username'] = 'No account found with that username';
            $session->setFlashdata('login_errors', $loginErrors);
            $session->setFlashdata('login_old', ['username' => $post['username']]);
            return redirect()->back()->withInput();
        }

        $userArr = is_array($user) ? $user : ($user->toArray() ?? (array)$user);

        if (!password_verify($post['password'], $userArr['password_hash'] ?? '')) {
            $loginErrors['password'] = 'Incorrect password';
            $session->setFlashdata('login_errors', $loginErrors);
            $session->setFlashdata('login_old', ['username' => $post['username']]);
            return redirect()->back()->withInput();
        }

        // Successful login
        $session->set('user', [
            'id' => $userArr['id'],
            'username' => $userArr['username'],
            'display_name' => $userArr['display_name'],
            'email' => $userArr['email'],
            'type' => $userArr['type'] ?? 'client'
        ]);

        return strtolower($userArr['type'] ?? 'client') === 'manager'
            ? redirect()->to('/admin/dashboard')
            : redirect()->to('/');
    }

    public function logout()
    {
        session()->destroy();
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
        return redirect()->to('/');
    }

    public function signup()
    {
        helper(['form']);
        return view('auth/signup');
    }

    public function signupPost()
    {
        helper(['form']);
        $request = service('request');
        $post = $request->getPost();

        $validation = \Config\Services::validation();

        // Set rules
        $validation->setRules([
            'username' => [
                'label' => 'Username',
                'rules' => 'required|min_length[3]|max_length[100]|is_unique[users.username]',
                'errors' => [
                    'required'  => 'Username is required.',
                    'min_length' => 'Username must be at least 3 characters.',
                    'max_length' => 'Username cannot exceed 100 characters.',
                    'is_unique' => 'Username is already taken.'
                ]
            ],
            'display_name' => [
                'label' => 'Display Name',
                'rules' => 'required|min_length[3]|max_length[100]',
                'errors' => [
                    'required'  => 'Display Name is required.',
                    'min_length' => 'Display Name must be at least 3 characters.',
                    'max_length' => 'Display Name cannot exceed 100 characters.'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required'    => 'Email is required.',
                    'valid_email' => 'Please enter a valid email address.',
                    'is_unique'   => 'Email is already registered.'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required'   => 'Password is required.',
                    'min_length' => 'Password must be at least 8 characters.'
                ]
            ],
            'confirm_password' => [
                'label' => 'Confirm Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Please confirm your password.',
                    'matches'  => 'Passwords do not match.'
                ]
            ],
        ]);

        // If validation fails, return view with errors and old input
        if (!$validation->run($post)) {
            session()->setFlashdata('signup_errors', $validation->getErrors());
            session()->setFlashdata('signup_old', $post);
            return redirect()->back()->withInput();
        }
        // Prepare user data
        $userModel = new \App\Models\UsersModel();
        $data = [
            'username'      => $post['username'],
            'display_name'  => $post['display_name'],
            'email'         => $post['email'],
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
            'coins'         => 0,
            'type'          => 'client',
            'account_status' => 1,
            'email_activated' => 0
        ];

        // Try saving user
        if (!$userModel->insert($data)) {
            $errors = $userModel->errors() ?: ['general' => 'Failed to create account. Please try again later.'];
            session()->setFlashdata('signup_errors', $errors);
            session()->setFlashdata('signup_old', $post);
            return redirect()->back()->withInput();
        }


        // On success, redirect to login with flashdata success message
        return redirect()->to('/login')->with('success', 'Account created successfully! You can now log in.');
    }
}
