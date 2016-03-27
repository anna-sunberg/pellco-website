<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class ItemsController extends CrudController{

	public function all($entity){
		parent::all($entity);

		/** Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
		 */

		$this->filter = \DataFilter::source(new \App\Item);
		$this->filter->add('name', 'Name', 'text');
		$this->filter->submit('search');
		$this->filter->reset('reset');
		$this->filter->build();

		$this->grid = \DataGrid::source($this->filter);
		$this->grid->add('name', 'Name');
		$this->grid->add('price', 'Price, e');
		$this->grid->add('weight', 'Weight, kg');
		$this->grid->add('{{ $active ? "Yes" : "No" }}', 'Available');
		$this->addStylesToGrid();

		return $this->returnView();
	}

	public function  edit($entity){

		parent::edit($entity);

		/* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
        */

		$this->edit = \DataEdit::source(new \App\Item());

		$this->edit->label('Edit Item');

		$this->edit->add('name', 'Name', 'text');
		$this->edit->add('price', 'Price, e', 'number')->rule('required');
		$this->edit->add('weight', 'Weight, kg', 'number')->rule('required');
		$this->edit->add('description', 'Description', 'textarea');
		$this->edit->add('free_sample', 'Free sample', 'checkbox')->insertValue(0);
		$this->edit->add('active', 'Available', 'checkbox')->insertValue(1);

		return $this->returnEditView();
	}
}
