<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PetModel;
use CodeIgniter\HTTP\ResponseInterface;

class Adopt extends BaseController
{
    public function index()
    {
        return view('user/adopt_form');
    }

    /**
     * Handles the adopt POST request
     */
    public function adoptRequest()
    {
        $session = session();
        $request = service('request');
        $petModel = new PetModel();

        // get current user
        $user = $session->get('user');
        if (!$user) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'You must be logged in to adopt a pet.',
            ]);
        }

        $userId = $user['id'];
        $species = $request->getPost('species');
        $name = $request->getPost('name');

        // check current pets
        $petCount = $petModel->where('user_id', $userId)->countAllResults();
        if ($petCount >= 3) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'You already have 3 pets!',
            ]);
        }

        // species-based defaults
        $speciesStats = [
            'bunny' => [
                'image' => 'https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab1.png',
                'base_affection' => 90,
                'base_energy' => 70,
                'base_maintenance' => 30,
            ],
            'goat' => [
                'image' => 'https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab2.png',
                'base_affection' => 40,
                'base_energy' => 30,
                'base_maintenance' => 90,
            ],
            'fish' => [
                'image' => 'https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab3.png',
                'base_affection' => 70,
                'base_energy' => 95,
                'base_maintenance' => 50,
            ],
        ];

        if (!array_key_exists($species, $speciesStats)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Invalid species type.',
            ]);
        }

        $data = array_merge(
            ['user_id' => $userId, 'name' => $name, 'species' => $species],
            $speciesStats[$species]
        );

        $petModel->insert($data);

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Pet adopted successfully!',
        ]);
    }
}
