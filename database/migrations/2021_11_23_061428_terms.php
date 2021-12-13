<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Terms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temrs', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name', 150);
            $table->string('slug',150);
            $table->string('term_type',150);
            $table->string('taxonomy_name',150);
            $table->longText('description');
            $table->string('parent',150);
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
        Schema::dropIfExists('temrs');
    }
}
