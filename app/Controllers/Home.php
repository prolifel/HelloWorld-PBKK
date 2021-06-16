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
	
	public function store()
	{
		$studentModel = new StudentModel();
		$post = $this->request->getPost();

		$data = [
			'nrp' => $post['nrp'],
			'name' => $post['name'],
			'address' => $post['address'],
			'department' => $post['department'],
			'phone' => $post['phone'],
		];

		$studentModel->insert($data);

		echo json_encode(array('status' => TRUE));
	}

	public function get($id)
	{
		$studentModel = new StudentModel();

		$data = $studentModel->find($id);

		echo json_encode(array($data));
	}

	public function edit()
	{
		$studentModel = new StudentModel();
		$post = $this->request->getPost();

		$id = $post['id'];
		$data = [
			'nrp' => $post['nrp'],
			'name' => $post['name'],
			'address' => $post['address'],
			'department' => $post['department'],
			'phone' => $post['phone'],
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
