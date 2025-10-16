<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use CodeIgniter\HTTP\ResponseInterface;

class Authentication extends BaseController
{
    /**
     * Show Login Page
     */
    public function login()
    {
        $session = session();
        return view('auth/login', [
            'errors' => $session->getFlashdata('errors'),
            'old' => $session->getFlashdata('old')
        ]);
    }

    /**
     * Handle Login Logic
     */
    public function loginPost()
    {
        $session = session();
        $request = service('request');
        $validation = \Config\Services::validation();

        // validation rules
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');

        $post = $request->getPost();

        if (!$validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $email = $post['email'];

        $userModel = new UsersModel();
        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $userArr = is_array($user) ? $user : (method_exists($user, 'toArray') ? $user->toArray() : (array) $user);

        if (!password_verify($post['password'], $userArr['password_hash'] ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        // start user session
        $session->set('user', [
            'id' => $userArr['id'],
            'email' => $userArr['email'],
            'username' => $userArr['username'],
            'display_name' => $userArr['display_name'],
            'type' => $userArr['type'] ?? 'client',
        ]);

        // redirect based on user type
        $type = strtolower($userArr['type'] ?? 'client');
        if ($type === 'manager') {
            return redirect()->to('/admin/dashboard');
        }

        return redirect()->to('/');
    }

    /**
     * Show Signup Page
     */
    public function sign_up()
    {
        $session = session();
        return view('auth/sign_up', [
            'errors' => $session->getFlashdata('errors'),
            'old' => $session->getFlashdata('old')
        ]);
    }

    /**
     * Handle Signup Logic
     */
    public function signUpPost()
    {
        $session = session();
        $request = service('request');
        $validation = \Config\Services::validation();

        $validation->setRule('username', 'Username', 'required|min_length[3]|max_length[100]|is_unique[users.username]');
        $validation->setRule('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $validation->setRule('password', 'Password', 'required|min_length[8]');
        $validation->setRule('confirm_password', 'Confirm Password', 'required|matches[password]');

        $post = $request->getPost();

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
            'email_activated' => 0,
        ];

        $inserted = $userModel->insert($data);

        if ($inserted) {
            $session->setFlashdata('success', 'Account created successfully! You can now log in.');
            return redirect()->to('/login');
        }

        $session->setFlashdata('errors', ['general' => 'Failed to create account. Please try again.']);
        return redirect()->back()->withInput();
    }

    /**
     * Logout
     */
    public function logout()
    {
        session()->destroy();
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
        return redirect()->to('/');
    }
}
