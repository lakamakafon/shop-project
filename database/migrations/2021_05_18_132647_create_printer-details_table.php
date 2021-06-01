<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrinterDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printer-details', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('type');
            $table->string('format');
            $table->string('resolution');
            $table->string('page_speed');
            $table->string('duplex');
            $table->string('wifi');
            $table->string('feeder');
            $table->string('scan')->nullable();
            $table->string('scan_resolution')->nullable();
            $table->string('scan_duplex')->nullable();
            $table->string('size');
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
        //
    }
}
