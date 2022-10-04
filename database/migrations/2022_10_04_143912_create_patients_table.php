<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Patient;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            // hn
            $table->unsignedInteger('hn')->unique();
            // full name
            $table->string('full_name'); // default 255 chars
            // gender
            $table->unsignedTinyInteger('gender'); // f/m/u => 1/2/3
            // dob
            $table->date('dob');
            $table->string('phone',10);
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
        Schema::dropIfExists('patients');
    }
};
