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
        Schema::create('tb_pegawai', function (Blueprint $table) {
            $table->bigIncrements('id_pegawai');
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin', ['laki_laki', 'perempuan']);
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('no_telpon');
            $table->string('foto')->nullable();
            $table->string('email');
            $table->string('jabatan');
            $table->decimal('gaji', 10, 2);
            $table->integer('is_active')->nullable();
            $table->date('tanggal_masuk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pegawai');
    }
};
