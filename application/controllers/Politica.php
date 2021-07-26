<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Politica extends CI_Controller {

	public function index()
	{
		$this->template->show('politica.php');
	}
}
