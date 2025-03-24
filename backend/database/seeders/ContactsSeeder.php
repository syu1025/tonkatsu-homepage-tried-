<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            ['name' => 'John Doe', 'email' => 'john@example.com', 'message' => '初期メッセ'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'message' => 'お試しメッセ'],
            // 他の初期データを追加
        ]);
    }
}
