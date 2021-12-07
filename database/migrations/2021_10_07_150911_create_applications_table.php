<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId("advertisement_id");
            $table->foreignId("user_id");

            $table->foreign("advertisement_id")->references("id")->on("advertisements")->cascadeOnDelete();
            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete();

            $table->string("motivation_people");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
