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
            'title' => 'Hipster ipsum',
            'image' => 'IMG_0355.jpg',
            'text_1' => 'Freegan migas cray, bespoke bushwick man braid master cleanse banjo butcher venmo. Cliche truffaut keffiyeh locavore, plaid polaroid mumblecore franzen 8-bit jean shorts kale chips. Four dollar toast asymmetrical tumblr beard 3 wolf moon. Craft beer locavore tofu brooklyn neutra scenester four dollar toast polaroid crucifix.',
            'text_2' => 'Austin yuccie wayfarers swag, fixie XOXO typewriter gluten-free small batch stumptown yr. Raw denim typewriter bushwick hashtag, polaroid celiac distillery etsy letterpress sartorial four loko roof party mumblecore cornhole. Waistcoat artisan four loko craft beer.'
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
