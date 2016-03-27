<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('items')->insert(
            array(
                'name' => 'Bag',
                'price' => 6.3,
                'weight' => 16,
                'free_sample' => true
            ));

        DB::table('items')->insert(
            array(
                'name' => 'Storage',
                'price' => 148.0,
                'weight' => 416
            ));

        DB::table('items')->insert(
            array(
                'name' => 'Big bag',
                'price' => 148.0,
                'weight' => 1000
            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('items')->delete();
    }
}
