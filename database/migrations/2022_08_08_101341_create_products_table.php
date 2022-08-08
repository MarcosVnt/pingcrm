<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id')->index();
            
            $table->string('nombre', 150);
            $table->string('descripcion', 150);
            
            $table->double('bultos', 13, 3);
            $table->double('cantidad', 13, 3);
            $table->string('medida', 25);



            $table->string('imagen')->nullable();
            $table->string('fichero')->nullable();            
            $table->string('familia', 150)->nullable();

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
        Schema::dropIfExists('products');
    }
}
