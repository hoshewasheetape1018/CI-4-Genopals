<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Profile extends BaseController
{
    public function index()
    {
        // Get the currently logged-in user's ID from session
        $userId = session()->get('user_id');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $UsersModel = new UsersModel();
        $user = $UsersModel->find($userId);

        if (!$user) {
            return redirect()->to('/login')->with('error', 'User not found.');
        }

        return view('user/profile', [
            'user' => $user,
        ]);
    }

    public function updateProfile()
    {
        $userId = session()->get('user_id');
        if (!$userId) {
            return redirect()->to('/login');
        }

        $UsersModel = new UsersModel();
        $data = [
            'display_name' => $this->request->getPost('display_name'),
            'avatar'       => $this->request->getPost('avatar'),
        ];

        $UsersModel->update($userId, $data);

        return redirect()->to('/profile')->with('message', 'Profile updated successfully!');
    }

    public function settings()
    {
        $userId = session()->get('user_id');
        if (!$userId) {
            return redirect()->to('/login');
        }

        $UsersModel = new UsersModel();
        $user = $UsersModel->find($userId);

        return view('user/settings', ['user' => $user]);
    }

    public function updateSettings()
    {
        return redirect()->to('/profile/settings')->with('message', 'Settings updated!');
    }
}
