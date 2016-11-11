<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends Application {

    public function index() {
		$userrole = $this->session->userdata('userrole');
		if ($userrole != 'admin') {
			$message = 'You are not authorized to access this page. Go away';
			$this->data['content'] = $message;
			$this->render();
			return;
		} 
		
		$this->data['pagebody'] ='mtce';
		$this->data['items'] = $this->Menu->all();
		$this->render();
	}
	function edit($id=null) {
		// try the session first
		$this->load->helper('formfields');
		
		$key = $this->session->userdata('key');
		$record = $this->session->userdata('record');
		// if not there, get them from the database
		if (empty($key)) {
			$record = $this->Menu->get($id);
			$key = $id;
			$this->session->set_userdata('key',$id);
			$this->session->set_userdata('record',$record);
		}
		
		// build the form fields
		$this->data['fid'] = makeTextField('Menu code', 'id', $record->id);
		$this->data['fname'] = makeTextField('Item name', 'name', $record->name);
		$this->data['fdescription'] = makeTextArea('Description', 'description', $record->description);
		$this->data['fprice'] = makeTextField('Price, each', 'price', $record->price);
		$this->data['fpicture'] = makeTextField('Item image', 'picture', $record->picture);
		$cats = $this->Categories->all(); // get an array of category objects
		foreach($cats as $code => $category) // make it into an associative array
		 $codes[$code] = $category->name;
		$this->data['fcategory'] = makeCombobox('Category', 'category', $record->category,$codes);

		
		$this->data['zsubmit'] = makeSubmitButton('Save', 'Submit changes');
		
		// show the editing form
		$this->data['pagebody'] = "mtce-edit";
		$this->render();
	}

	function cancel() {
		$this->session->unset_userdata('key');
		$this->session->unset_userdata('record');
		$this->index();
	}
	

}