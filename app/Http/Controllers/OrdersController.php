<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \Serverfireteam\Panel\CrudController;

use App\Orders;
use App\Items;

class OrdersController extends CrudController
{
    public function getSum($amount, $item_id) {
        $item = Items::where('id', $item_id)->get()[0];

        return $amount * $item->price;
    }

    public function all($entity){
        parent::all($entity);

        $data = \DataFilter::source(Orders::with('item'));

        $this->filter = $data;
        $this->filter->add('name', 'Name', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('name', 'Name');
        $this->grid->add('email', 'Email');
        $this->grid->add('{{ ( $address ? $address . ", " : "") . $zip . " " . $city }}', 'Address');
        $this->grid->add('phone', 'Phone');
        $this->grid->add('item.name', 'Item');
        $this->grid->add('amount', 'Amount');
        $this->grid->add('sum', 'Total');

        $this->addStylesToGrid();


        return $this->returnView();
    }

    public function edit($entity){

        parent::edit($entity);

        Orders::creating(function($data) {
            $data->sum = $this->getSum($data->amount, $data->item);
        });

        Orders::updating(function($data) {
            $data->sum = $this->getSum($data->amount, $data->item);
        });

        $this->edit = \DataEdit::source(new Orders());

        $this->edit->label('Edit Order');

        $this->edit->add('name', 'Name', 'text')->rule('required|max:255');
        $this->edit->add('email', 'Email', 'text')->rule('required|max:255|email');
        $this->edit->add('address', 'Address', 'text');
        $this->edit->add('city', 'City', 'text');
        $this->edit->add('zip', 'Zip', 'text')->rule('digits:5');
        $this->edit->add('phone', 'Phone', 'text');
        $this->edit->add('item', 'Item', 'select')->options(Items::lists('name', 'id')->all())->rule('required|exists:items,id');
        $this->edit->add('amount', 'Amount', 'number');

        return $this->returnEditView();
    }
}
