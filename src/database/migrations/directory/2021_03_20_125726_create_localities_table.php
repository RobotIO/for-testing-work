<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->foreignId('region_id')->constrained('regions');
        });
    }

    /**
     * Reverse the migrations.locality
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localities');
    }
}
