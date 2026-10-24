<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Alice Johnson', 'email' => 'alice@example.com', 'phone' => '555-0101'],
            ['full_name' => 'Bob Smith', 'email' => 'bob@example.com', 'phone' => '555-0102'],
            ['full_name' => 'Charlie Brown', 'email' => 'charlie@example.com', 'phone' => '555-0103'],
            ['full_name' => 'Diana Prince', 'email' => 'diana@example.com', 'phone' => '555-0104'],
            ['full_name' => 'Evan Wright', 'email' => 'evan@example.com', 'phone' => '555-0105'],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}