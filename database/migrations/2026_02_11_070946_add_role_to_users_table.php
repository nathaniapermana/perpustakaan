<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Tambahkan baris ini saja:
            $table->string('role')->default('peminjam'); 
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Tambahkan baris ini untuk membatalkan jika ada error:
            $table->dropColumn('role');
        });
    }
};
