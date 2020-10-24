<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_activities', function (Blueprint $table) {
            $table->id();
            $table->integer("resume_id")->nullable();
            $table->foreign("resume_id")->references("id")->on("resumies");
            $table->date("date_start")->nullable();
            $table->date("date_end")->nullable();
            $table->text("content");
            $table->smallInteger("status")->default(0);
            $table->smallInteger("type")->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resume_activities');
    }
}
