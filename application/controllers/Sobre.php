<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre extends CI_Controller {

	public function index()
	{
		$this->template->show('sobre.php');
	}
}
