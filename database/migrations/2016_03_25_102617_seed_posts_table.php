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
            'text_1' => 'PellCompany Oy tarjoaa asiakkailleen vain puupuruista valmistettuja pellettejä. Ostamme puupuruja mekaaniselta puunjalostusteollisuudelta, joka käyttää Venäjän pohjoisalueiden puhdasta kuivattua ympäristöystävällistä puuraaka-ainetta. Se antaa mahdollisuuden optimoida tuotantoa ja tuottaa ympäristöystävällisiä, laadukkaita ja edullisia pellettejä.',
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
