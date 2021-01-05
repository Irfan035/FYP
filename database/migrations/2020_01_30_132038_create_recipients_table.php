<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recipient_id');
            $table->integer('category_id')->unsigned();
            $table->integer('subCategory_id')->unsigned();
//            $table->foreign('category_id')->references('id')
//                ->on('categories')->onUpdate('cascade')->onDelete('cascade');

            $table->string('value');
            $table->string('unit');
            $table->string('message');
            $table->string('Ebill');
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('recipients');
    }
}
