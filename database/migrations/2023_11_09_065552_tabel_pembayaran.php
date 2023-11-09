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
        Schema::create("pembayaran", function (Blueprint $table) {
            $table->integer("id_pembayaran")->autoIncrement;
            $table->integer("id_petugas");
            $table->string("nisn",10);
            $table->date("date");
            $table->string("bulan_bayar",8);
            $table->string("tahun_bayar",4);
            $table->integer("id_spp");
            $table->integer("jumlah_bayar",11);
                });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop("tabel_pembayaran");
    }
};
