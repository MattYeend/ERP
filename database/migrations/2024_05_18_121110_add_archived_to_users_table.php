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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('archived')->default(false);
            $table->timestamp('archived_when')->nullable();
            $table->unsignedBigInteger('archived_by')->nullable();
            $table->foreign('archived_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['archived_by']);
            $table->dropColumn(['archived', 'archived_when', 'archived_by']);
        });
    }
};
