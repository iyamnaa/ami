<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
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
            $table->string('NIA');
            $table->string('amil_name');

            //data transaksi
            $table->enum('status',['terkirim','proses','gagal','berhasil','cancel'])->default('terkirim');
            $table->string('akad');
            $table->integer('amount');
            $table->timestamps();

            $table->index('user_id');
            $table->index('campaign_id');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('campaign_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('donations', function (Blueprint $table)
        // {
        //     $table->dropIndex(['campaign_id']);
        //     $table->dropIndex(['user_id']);
        // });
        Schema::dropIfExists('donations');
    }
}
