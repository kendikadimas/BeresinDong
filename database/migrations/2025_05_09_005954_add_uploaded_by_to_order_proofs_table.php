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
        Schema::table('order_proofs', function (Blueprint $table) {
            $table->string('uploaded_by')->default('tukang');
            $table->foreignId('uploaded_by_user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_proofs', function (Blueprint $table) {
            //
        });
    }
};
