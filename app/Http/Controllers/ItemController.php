<?php 

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

use App\Item;

class ItemController extends Controller {

	public function getAll() {
		return Item::where('active', true)
			->orderBy('price', 'asc')
			->get();
	}
}
