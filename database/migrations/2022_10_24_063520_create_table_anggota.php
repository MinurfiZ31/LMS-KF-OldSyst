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


Schema::create('table_anggota', function (Blueprint $table) {


$table->bigIncrements('id_anggota');


$table->string('nama_anggota',50);


$table->string('jenis_kelamin',50);

$table->string('posisi',50);


$table->string('no_tlp',20);


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
        Schema::dropIfExists('table_anggota');
    }
};
