<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Home extends BaseController
{
	public function index()
	{
		$studentModel = new StudentModel();
		$data = $studentModel->findAll();

		return view('index', ['data' => $data]);
	}
	
	public function create()
	{
		return view('create');
	}

	public function store()
	{
		# code...
	}

	public function update()
	{
		$studentModel = new StudentModel();
		$id = $this->request->getPost('id');
		
		$data = [
			'nrp' => $this->request->getPost('nrp'),
			'name' => $this->request->getPost('name'),
			'address' => $this->request->getPost('address'),
			'department' => $this->request->getPost('department'),
			'phone' => $this->request->getPost('phone'),
		];

		$studentModel->update($id, $data);

		echo json_encode(array('status' => TRUE));
	}

	public function delete($id)
	{
		$studentModel = new StudentModel();

		$studentModel->delete($id);
		
		echo json_encode(array("status" => TRUE));
	}
}
