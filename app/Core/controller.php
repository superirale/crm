<?php 
namespace Core;

use Core\View as View;

class Controller
{
	public $data;
	public $template;
	
	function __construct()
	{
		$this->data = array();
		$this->data['base_url'] = TEMPLATE_PATH;
		
		$this->gump = new \Gump();
	}

}



 ?>