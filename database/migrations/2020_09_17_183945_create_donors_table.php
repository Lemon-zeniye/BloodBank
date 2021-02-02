<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('bloodgroup');
            $table->string('gender');
            $table->integer('birthdate');
            $table->string('month');
            $table->string('year');
            $table->integer('weight');
            $table->string('state');
            $table->string('district');
            $table->string('village');
            $table->bigInteger('mobile')->nullable();
            $table->integer('password')->nullable();
            $table->integer('Lday')->nullable();
            $table->string('Lmonth')->nullable();
            $table->integer('Lyear')->nullable();
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
        Schema::dropIfExists('donors');
    }
}
