<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 180);
            $table->text('description')->nullable();
            $table->string('thumb');
            $table->string('price', 20);
            $table->string('series', 100);
            $table->string('sale_date', 50);
            $table->string('type', 50);
            $table->timestamps();
        });
        // 35min
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
