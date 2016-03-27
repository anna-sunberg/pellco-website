<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

use App\Posts;

class PostsController extends CrudController{

    public function all($entity){
        parent::all($entity);

		$this->filter = \DataFilter::source(new Posts);
		$this->filter->add('title', 'Title', 'text');
		$this->filter->submit('search');
		$this->filter->reset('reset');
		$this->filter->build();

		$this->grid = \DataGrid::source($this->filter);
		$this->grid->add('title', 'Title');
		$this->addStylesToGrid();

		
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

		$this->edit = \DataEdit::source(new Posts);

		$this->edit->label('Edit Post');
		$this->edit->add('title', 'Title', 'text')->rule('required');
		$this->edit->add('image', 'Image', 'file')->rule('required')->move('img/');
		$this->edit->add('text_1', 'Text', 'redactor')->rule('required');
		$this->edit->add('text_2', 'Text', 'redactor')->rule('required');
       
        return $this->returnEditView();
    }    
}
