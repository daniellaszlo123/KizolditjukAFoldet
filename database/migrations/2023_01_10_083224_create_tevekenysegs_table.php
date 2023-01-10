<?php

use App\Models\Tevekenyseg;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTevekenysegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tevekenysegs', function (Blueprint $table) {
            $table->id('tevekenyseg_id');
            $table->string('tevekenyseg_nev');
            $table->integer('pontszam');
            $table->timestamps();
        });

        Tevekenyseg::create(['tevekenyseg_nev' => 'kerekparral jottem iskolaba', 'pontszam'=>2]);
        Tevekenyseg::create(['tevekenyseg_nev' => 'rollerrel jottem iskolaba', 'pontszam'=>2]);
        Tevekenyseg::create(['tevekenyseg_nev' => 'ultettem fat', 'pontszam'=>10]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tevekenysegs');
    }
}
