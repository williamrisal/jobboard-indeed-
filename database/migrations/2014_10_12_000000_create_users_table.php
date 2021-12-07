<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("last_name");
            $table->string("first_name");
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string("gender")->nullable();
            $table->string("birth_date")->nullable();
            $table->string("address")->nullable();
            $table->integer("postal_code")->nullable();
            $table->string("city")->nullable();
            $table->string("cv")->nullable();
            $table->integer("phone")->nullable();
            $table->string("website")->nullable();
            $table->string("picture")->nullable();
            $table->boolean("is_admin");
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
