<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Termos extends CI_Controller {

	public function index()
	{
		$this->template->show('termos.php');
	}
}
