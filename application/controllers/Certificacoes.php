<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificacoes extends CI_Controller {

	public function index()
	{
		$this->template->show('certificacoes.php');
	}
}
