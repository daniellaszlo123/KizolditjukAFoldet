<?php

use App\Models\Bejegyzesek;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBejegyzeseksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bejegyzeseks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenysegs');
            $table->integer('osztaly_id');
            $table->char('allapot', 1)->default('V'); //v= varakozasra var, j = jovahagyott
            $table->timestamps();
        });

        Bejegyzesek::create(['tevekenyseg_id' => 1, 'osztaly_id'=>1]);
        Bejegyzesek::create(['tevekenyseg_id' => 2, 'osztaly_id'=>2]);
        Bejegyzesek::create(['tevekenyseg_id' => 3, 'osztaly_id'=>1]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bejegyzeseks');
    }
}
