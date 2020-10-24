<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     * $table->id();
        $table->integer("user_id");
        $table->foreign("user_id")->references("id")->on("users");
        $table->string("goal");
        $table->text("description");
        $table->integer("status");
        $table->timestamps();
        $table->softDeletes();
     */
    public function run()
    {
        DB::table('resumies')->insert([
           'user_id' => Str::random(4),
           'goal' => Str::random(24),
           'description' => Str::random(256),
           'status' => Str::random(4)
        ]);
    }
}
