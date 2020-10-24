<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     * $table->string('first_name');
        $table->string('middle_name');
        $table->string('last_name');
        $table->string("citizenship");
        $table->string("phone");
        $table->string("gender");
        $table->string("username");
        $table->string('password');
        $table->date("birthday_at");
        $table->string('email')->unique();
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => Str::random(8),
            'middle_name' => Str::random(8),
            'last_name' => Str::random(8),
            'citizenship' => Str::random(12),
            'phone' => Str::random(9),
            'gender' => Str::random(6),
            'username' => Str::random(12),
            'password' => Hash::make('password'),
            'email' => Str::random(6)."@gmail.com"
        ]);
    }
}
