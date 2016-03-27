<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedTableLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('links')->delete();
        
        DB::table('links')->insert([
            array(
                'display' => 'Posts',
                'url' =>  'Posts'
            ),
            array(
                'display' => 'Items',
                'url' => 'Items'
            ),
            array(
                'display' => 'Orders',
                'url' =>  'Orders'
            )
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('links')->delete();
    }
}
