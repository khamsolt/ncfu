<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->times(1000)->create();
    }
}
