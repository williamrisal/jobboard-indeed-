<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string("last_name");
            $table->string("first_name");
            $table->string("gender");
            $table->string("password")->nullable();
            $table->string("birth_date");
            $table->string("email");
            $table->string("address")->nullable();
            $table->integer("postal_code");
            $table->string("city")->nullable();
            $table->string("cv")->nullable();
            $table->integer("phone")->nullable();
            $table->string("website")->nullable();
            $table->string("picture")->nullable();
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
        Schema::dropIfExists('people');
    }
}
