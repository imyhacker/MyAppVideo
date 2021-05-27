<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yt', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('tag');
            $table->longText('description');
            $table->longText('publishedAt');
            $table->longText('likeCount');
            $table->longText('dislikeCount');
            $table->longText('commentCount');
            $table->longText('id_youtube');
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
        Schema::dropIfExists('yt');
    }
}
