<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_web_formdata_js', function (Blueprint $table) {
            $table->id();
            $table->longText('inputvalue')->nullable();
            $table->string('inputclassname')->nullable();
            $table->string('formaction')->nullable();
            $table->string('url')->nullable();
            $table->string('formclass')->nullable();
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
        Schema::dropIfExists('all_web_formdata_js');
    }
};
