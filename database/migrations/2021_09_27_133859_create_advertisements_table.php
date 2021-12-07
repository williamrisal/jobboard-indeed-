<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->longText("description");
            $table->string("date")->nullable();
            $table->string("published")->nullable();
            $table->foreignId('company_id');
            $table->foreign('company_id')->references("id")->on("companies")->cascadeOnDelete();
            $table->string("contract_type");
            $table->integer("wage");
            $table->string("city");
            $table->integer("working_time")->nullable();
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
        Schema::dropIfExists('advertisements');
    }
}
