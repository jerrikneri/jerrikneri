<?php

use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create(array(
            'email' => 'jaewrek@email.com',
            'password' => Hash::make('password'),
            'name' => 'Jerrik Test'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        User::delete(array(
            'email' => 'jaewrek@email.com',
            'password' => Hash::make('password'),
            'name' => 'Jerrik Test'
        ));
    }
}
