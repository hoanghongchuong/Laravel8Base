<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('social_in')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('zalo')->nullable();
            $table->string('email')->nullable();
            $table->string('name_vi')->nullable();
            $table->string('name_en')->nullable();
            $table->string('title_vi')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_es')->nullable();
            $table->text('keyword_vi')->nullable();
            $table->text('keyword_en')->nullable();
            $table->text('keyword_es')->nullable();
            $table->text('description_vi')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_es')->nullable();
            $table->string('company_vi')->nullable();
            $table->string('company_en')->nullable();
            $table->string('company_es')->nullable();
            $table->string('address_vi')->nullable();
            $table->string('address_en')->nullable();
            $table->string('address_es')->nullable();
            $table->string('phone')->nullable();
            $table->string('hotline')->nullable();
            $table->string('logo')->nullable();
            $table->text('des_vi')->nullable();
            $table->text('des_en')->nullable();
            $table->text('des_es')->nullable();
            $table->string('copyright')->nullable();
            $table->text('iframe_map')->nullable();
            $table->string('favicon')->nullable();

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
        Schema::dropIfExists('settings');
    }
}
