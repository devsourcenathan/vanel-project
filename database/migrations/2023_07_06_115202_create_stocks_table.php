<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('ref');
            $table->string('designation');
            $table->string('categories');
            $table->string('prix_unitaire');
            $table->string('qte');
            $table->string('stock');
            $table->string('duree_moyenne');
            $table->string('duree_total');
            $table->string('emplacement');
            $table->string('prix_total');
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
        Schema::dropIfExists('stocks');
    }
}
