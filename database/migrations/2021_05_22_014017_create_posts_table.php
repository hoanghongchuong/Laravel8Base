<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->string('name_vi')->nullable();
            $table->string('name_en')->nullable();
            $table->string('slug_vi')->nullable();
            $table->string('slug_en')->nullable();
            $table->string('description_vi')->nullable();
            $table->string('description_en')->nullable();
            $table->string('content_vi')->nullable();
            $table->string('content_en')->nullable();
            $table->string('image_vi')->nullable();
            $table->string('image_en')->nullable();
            $table->boolean('status_vi')->default(true);
            $table->boolean('status_en')->default(true);
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
        Schema::dropIfExists('posts');
    }
}
