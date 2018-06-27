<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMahasiswa extends Migration
{
  
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->bigIncrements('nim');
			$table->string('nm_mhs',30);
			$table->string('fakultas',30);
			$table->string('jk',30);
			$table->string('prodi',30);
			$table->string('agama',30);
			$table->string('notlp',30);
			$table->string('alamat',30);
            $table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
        //
    });
    }

}
