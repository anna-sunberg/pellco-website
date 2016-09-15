<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use \Serverfireteam\Panel\CrudController;

use App;
use Illuminate\Support\Facades\URL;

class SitemapController extends CrudController{

    public function all($entity){
		$sitemap = App::make("sitemap");

		$url = URL::to('/');
		$sitemap->add($url, date('c'), '1.0', 'weekly', [
			array('url' => $url . '/img/img01_2560.jpg'),
			array('url' => $url . '/img/img02_2560.jpg'),
			array('url' => $url . '/img/img03_2560.jpg')
		]);

		$sitemap->store('xml', 'sitemap');
    }
}
