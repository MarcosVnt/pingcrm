<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->id();

            $table->integer('account_id')->index();
            $table->integer('product_id')->nullable()->index();
            $table->string('tipo', 25);

            $table->string('descripcion', 25);
            $table->double('bultos', 13, 3);
            $table->double('cantidad', 13, 3);

            $table->string('destino', 25);



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
        Schema::dropIfExists('movements');
    }
}
