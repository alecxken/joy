<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEwasteCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ewaste_companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_desc')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('ewaste_companies');
    }
}
