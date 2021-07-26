<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simulacao extends CI_Controller {

	public function index()
	{
		$this->template->show('simulacao.php');
	}
}
