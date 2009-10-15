<?php 

class Controller_Text extends Controller_Demo
{
	public function action_index()
	{
		$this->template->title = 'Kohana_Text';
		$this->template->content = View::factory('demo/text');
	}
	}
