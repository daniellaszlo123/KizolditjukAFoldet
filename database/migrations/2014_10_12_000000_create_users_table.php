<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->integer('osztaly_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name' => 'valaki', 'password'=> Hash::make('Aa123456@'), 'email'=>'vki@gmail.com', 'osztaly_id'=>1]);
        User::create(['name' => 'ember', 'password'=> Hash::make('Aa123456@'), 'email'=>'emb@gmail.com', 'osztaly_id'=>2]);
        User::create(['name' => 'admin', 'password'=> Hash::make('Aa123456@'), 'email'=>'adm@gmail.com']);
    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
