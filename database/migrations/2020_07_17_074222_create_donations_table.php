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
            $table->string('telephone');
            $table->text('address');
            $table->boolean('as_anonymous');

            //data amil
            $table->string('NIA');
            $table->string('amil_name');

            //data transaksi
            $table->enum('status',['proses','gagal','berhasil','cancel']);
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
        Schema::dropIfExists('donations');
    }
}
