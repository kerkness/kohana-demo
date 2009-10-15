<?php 

class Controller_Html extends Controller_Demo 
{	
	public function action_index()
	{
		$this->template->title = 'Kohana_HTML';
		$this->template->content = View::factory('demo/html');
	}
}