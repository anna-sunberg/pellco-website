<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model {

    protected $table = 'orders';

    public function item() {
        return $this->belongsTo('\App\Items', 'item');
    }
}
