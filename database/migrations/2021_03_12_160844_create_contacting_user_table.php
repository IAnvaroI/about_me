<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactingUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacting_user', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->string('surname', 128);
            $table->string('email', 128);
            $table->string('phoneNumber', 20);
            $table->string('comment', 512);
            $table->tinyInteger('rating');
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
        Schema::dropIfExists('contacting_user');
    }
}
