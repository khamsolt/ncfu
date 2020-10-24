<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ResumeActivities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     * $table->id();
        $table->integer("resume_id")->nullable();
        $table->foreign("resume_id")->references("id")->on("resumies");
        $table->date("date_start")->nullable();
        $table->date("date_end")->nullable();
        $table->text("content");
        $table->integer("status");
        $table->integer("type");
        $table->timestamps();
        $table->softDeletes();
     */
    public function run()
    {
        DB::table('resume_activities')->insert([
           'resume_id' => Str::random(4),
            'content' => Str::random(256),
            'status' => Str::random(2),
            'type' => Str::random(4)
        ]);
    }
}
