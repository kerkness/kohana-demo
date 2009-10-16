<?php 

class Controller_Url extends Controller_Demo 
{
	public function action_index()
	{
		$this->template->title = "Kohana_URL";
		$this->template->content = View::factory('demo/url');
	}
}