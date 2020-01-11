<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('index');
            $table->string('name');
            $table->text('picture');
            $table->timestamps();
        });

        Schema::create('album_picture', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('index');
            $table->bigInteger('album_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->text('picture');
            $table->string('url')->nullable();
            $table->timestamps();

            $table->index('album_id');
            $table->foreign('album_id')
                    ->references('id')
                    ->on('album')
                    ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('album_picture');
        schema::drop('album');
    }
}
