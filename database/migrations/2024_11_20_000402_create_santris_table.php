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
        Schema::create('santris', function (Blueprint $table) {
            $table->id();
            
            // Data Santri
            $table->string('no_induk')->unique();
            $table->string('pas_foto')->nullable(); 
            $table->string('nama');
            $table->string('ttl'); 
            $table->enum('jenis_kelamin', ['L', 'P']); 
            $table->integer('jumlah_saudara'); 
            $table->integer('anak_ke'); 
            $table->string('asal_sekolah'); 
            
            // Data Orang Tua
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->decimal('penghasilan_ayah', 15, 2); 
            $table->decimal('penghasilan_ibu', 15, 2); 
            $table->text('alamat_ortu'); 
            // Data Wali
            $table->string('nama_wali');
            $table->string('pekerjaan_wali');
            $table->decimal('penghasilan_wali', 15, 2); 
            $table->string('no_hp_wali'); 
            $table->text('alamat_wali'); 
            
            // Status
            $table->string('status'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santris');
    }
};
