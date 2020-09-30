<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
		$query = $db->query('SELECT * from test');
		$results = $query->getResult();
		$results['results'] = $results;
		return view('index', $results);
	}

	//--------------------------------------------------------------------

}
