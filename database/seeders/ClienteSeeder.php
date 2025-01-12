<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientes = [
            ['email' => 'john.doe@example.com', 'name' => 'John Doe', 'phone' => '1234567890'],
            ['email' => 'jane.smith@example.com', 'name' => 'Jane Smith', 'phone' => '0987654321'],
            ['email' => 'alice.johnson@example.com', 'name' => 'Alice Johnson', 'phone' => '1122334455'],
            ['email' => 'bob.brown@example.com', 'name' => 'Bob Brown', 'phone' => '2233445566'],
            ['email' => 'charlie.davis@example.com', 'name' => 'Charlie Davis', 'phone' => '3344556677'],
        ];

        DB::table('clientes')->insert($clientes);
    }
}
