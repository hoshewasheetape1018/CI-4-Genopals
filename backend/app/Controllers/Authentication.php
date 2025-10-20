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
            'errors' => $session->getFlashdata('errors') ?? [],
            'old' => $session->getFlashdata('old') ?? []
        ]);
    }

    public function loginPost()
    {
        $session = session();
        $request = service('request');
        $validation = \Config\Services::validation();

        $post = $request->getPost();
        $validation->setRule('username', 'Username', 'required');
        $validation->setRule('password', 'Password', 'required');

        if (!$validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $userModel = new UsersModel();
        $user = $userModel->where('username', $post['username'])->first();

        if (!$user) {
            $session->setFlashdata('errors', ['username' => 'No account found with that username']);
            $session->setFlashdata('old', ['username' => $post['username']]);
            return redirect()->back()->withInput();
        }

        $userArr = is_array($user) ? $user : ($user->toArray() ?? (array)$user);

        if (!password_verify($post['password'], $userArr['password_hash'] ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['username' => $post['username']]);
            return redirect()->back()->withInput();
        }

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

    public function signUp()
    {
        $session = session();
        return view('auth/sign_up', [
            'errors' => $session->getFlashdata('errors') ?? [],
            'old' => $session->getFlashdata('old') ?? []
        ]);
    }

    public function signUpPost()
    {
        $session = session();
        $request = service('request');
        $validation = \Config\Services::validation();

        $post = $request->getPost();
        $validation->setRule('username', 'Username', 'required|min_length[3]|max_length[100]|is_unique[users.username]');
        $validation->setRule('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $validation->setRule('password', 'Password', 'required|min_length[8]');
        $validation->setRule('confirm_password', 'Confirm Password', 'required|matches[password]');

        if (!$validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $userModel = new UsersModel();
        $data = [
            'username' => $post['username'],
            'display_name' => $post['display_name'] ?? $post['username'],
            'email' => $post['email'],
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
            'coins' => 0,
            'type' => 'client',
            'account_status' => 1,
            'email_activated' => 0
        ];

        $insertedId = $userModel->insert($data);
        if ($insertedId) {
            $session->setFlashdata('success', 'Account created successfully! You can now log in.');
            return redirect()->to('/login');
        }

        $session->setFlashdata('errors', ['general' => 'Failed to create account. Please try again.']);
        return redirect()->back()->withInput();
    }
}
