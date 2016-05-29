<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('posts')->insert([
            'title' => 'Miksi juuri meidän pellettimme',
            'image' => 'IMG_0355.jpg',
            'text_1' => 'PellCompany Oy tarjoaa asiakkailleen vain puupuruista valmistettuja pellettejä. Raaka-aineena on Venäjän pohjoisalueiden puhdas kuivattu ympäristöystävällinen puuraaka-aine, joka täysin vastaa eurooppalaisen EN PLUS A-1 -standardin vaatimuksia.',
            'text_2' => 'Tilatkaa kotiinkuljetus ja vakuuttukaa pellettimme korkeasta laadusta!'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('posts')->delete();
    }
}
