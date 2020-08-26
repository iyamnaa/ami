<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zakats', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('transaction_id')->unique();

            //data donatur
            $table->string('name');
            $table->string('email');
            $table->string('telephone');
            $table->text('address');
            $table->boolean('as_anonymous');

            //data amil
            $table->string('NIA')->nullable();
            $table->string('amil_name')->nullable();

            //data transaksi
            $table->enum('status',['terkirim','proses','gagal','berhasil','cancel'])->default('terkirim');
            $table->string('akad');
            $table->integer('amount');
            $table->integer('qty');
            $table->timestamps();

            $table->index('user_id');
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('zakats', function (Blueprint $table)
        // {
        //     $table->dropIndex(['user_id']);
        // });
        Schema::dropIfExists('zakats');
    }
}
