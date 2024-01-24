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
        Schema::create('meeting_tables', function (Blueprint $table) {
            $table->id();
            $table->string("Event_Name");
            $table->date('Event_date', $precision = 0);
            $table->integer('Event_people');
            $table->longText('Event_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting_tables');
    }
};
