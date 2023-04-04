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
        Schema::table('Mahasiswa', function (Blueprint $table) {
            $table->string('Email', 50)->after('No_Handphone')->index();
            $table->string('Tanggal_Lahir', 30)->after('Email')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Mahasiswa', function (Blueprint $table) {
            //
        });
    }
};
