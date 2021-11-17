<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->unsignedBigInteger('id');

            $table->unsignedBigInteger('user_id');
                    $table->foreign('user_id')
                        ->references('id')
                        ->on('User')
                        ->cascade('delete');
            $table->unsignedBigInteger('book_id');
                    // $table->foreign('book_id')
                    //     ->references('id')
                    //     ->on('Book')
                    //     ->cascade('delete');
            // $table->foreign('id')
            //     ->references('id')
            //     ->on('book')
            //     ->cascade('delete');
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
        Schema::dropIfExists('levels');
    }
}
