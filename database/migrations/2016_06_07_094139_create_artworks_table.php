<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('artworks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('date');
            $table->timestamps();
            $table->integer('paint_id');
            $table->integer('sculpture_id');
            $table->integer('calligraphy_id');
            $table->integer('loan_id');
            $table->integer('permanent_collection_id');
            $table->foreign('paint_id')
                ->references('id')
                ->on('paints')
                ->onDelete('cascade');
                            $table->foreign('sculpture_id')
                ->references('id')
                ->on('sculptures')
                ->onDelete('cascade');
                            $table->foreign('calligraphy_id')
                ->references('id')
                ->on('calligraphies')
                ->onDelete('cascade');
                            $table->foreign('loan_id')
                ->references('id')
                ->on('loans')
                ->onDelete('cascade');
                $table->foreign('permanent_collection_id')
                ->references('id')
                ->on('permanent_collections')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
