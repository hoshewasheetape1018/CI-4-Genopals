<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $users = [
            [
                'username'      => 'Nova',
                'display_name'  => 'Nova Celeste',
                'level'         => 5,
                'coins'         => 200,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'username'      => 'Kiyo',
                'display_name'  => 'Kiyo Sato',
                'level'         => 2,
                'coins'         => 50,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'username'      => 'Umcha',
                'display_name'  => 'Umcha',
                'level'         => 10,
                'coins'         => 9999,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
        ];

        $this->db->table('users')->insertBatch($users);
    }
}
