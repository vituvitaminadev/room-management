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
        Schema::table('guests', function (Blueprint $table) {
            $table->foreignId('room_id')->after('id')->constrained('rooms');
            $table->foreignId('event_id')->after('room_id')->constrained('events');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('guests', function (Blueprint $table) {
            $table->dropForeign(['room_id']);
            $table->dropForeign(['event_id']);
            $table->dropColumn('room_id');
            $table->dropColumn('event_id');
        });
    }
};
