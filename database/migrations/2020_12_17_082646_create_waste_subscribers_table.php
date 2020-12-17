<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWasteSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waste_subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('company_id')->nullable();
            $table->string('day')->nullable();
            $table->string('location')->nullable();
            $table->string('description')->nullable();
            $table->string('desc')->nullable();
                  $table->string('date')->nullable();
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
        Schema::dropIfExists('waste_subscribers');
    }
}
