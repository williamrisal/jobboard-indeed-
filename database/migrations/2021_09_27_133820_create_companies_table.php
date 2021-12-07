<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("activities");
            $table->integer("postal_code");
            $table->string("city");
            $table->string("siret");
            $table->string("password");
            $table->string("number_employees");
            $table->string("website");
            $table->string("phone");
            $table->string("email")->unique();
            $table->string("contact_name");
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
        Schema::dropIfExists('companies');
    }
}
