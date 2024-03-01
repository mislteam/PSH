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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('assigned_to_id')->constrained('users')->onDelete('cascade');
            $table->string('subject');
            $table->text('description');
            $table->string('status')->comment('open, closed');
            $table->string('priority')->comment('low, medium, high');
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
        Schema::dropIfExists('tickets');
    }
};
