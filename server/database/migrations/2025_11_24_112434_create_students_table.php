<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('studentName', 50)->notNull();
            $table->foreignId('schoolclassId')->constrained('schoolclasses');
            $table->tinyInteger('gender');
            $table->string('postalcode')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('idNumber')->nullable();
            $table->decimal('gpa', 2,1)->nullable();
            $table->decimal('scholarship', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
