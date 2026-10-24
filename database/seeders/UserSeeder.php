<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'admin_joe', 'full_name' => 'Joe Administrator'],
            ['username' => 'cashier_sue', 'full_name' => 'Sue Cashier'],
            ['username' => 'manager_bob', 'full_name' => 'Bob Manager'],
            ['username' => 'staff_lisa', 'full_name' => 'Lisa Staff'],
            ['username' => 'cashier_tim', 'full_name' => 'Tim Cashier'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}