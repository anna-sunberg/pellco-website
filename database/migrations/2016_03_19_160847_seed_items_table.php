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
                'name' => 'Säkki',
                'price' => 6.5,
                'weight' => 15
            ));

        DB::table('items')->insert(
            array(
                'name' => 'Europaletti',
                'price' => 315.0,
                'weight' => 975
            ));

        DB::table('items')->insert(
            array(
                'name' => 'Big bag',
                'price' => 148.0,
                'weight' => 1000,
                'active' => 0
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
