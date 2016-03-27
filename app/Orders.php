<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model {

    protected $table = 'Orders';

    public function item() {
        return $this->belongsTo('\App\Items', 'item');
    }
}
