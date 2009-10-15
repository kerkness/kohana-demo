<?php 

class Controller_Html extends Controller
{
	public function action_index()
	{
		echo Html::chars('<p>"I\'m hungry"&mdash;Cookie Monster said.</p>');
				
		echo '<br/>&nbsp;<br/>';
		
		echo Html::chars('<p>"I\'m hungry"&mdash;Cookie Monster said.</p>', FALSE);
		
		echo '<br/>&nbsp;<br/>';
		
		echo Html::anchor('controller/action', 'My Link');
		
		echo '<br/>&nbsp;<br/>';
		
		echo Html::anchor('http://kohanaphp.com', 'Kohana PHP');

		echo '<br/>&nbsp;<br/>';
		
		echo Html::anchor('controller/action', 'My Link', array('id'=>'link_id'), 'ftp');

		echo '<br/>&nbsp;<br/>';
		
		echo Html::anchor('controller/action', Html::image('media/img/icon.png'));

		echo '<br/>&nbsp;<br/>';
		
		echo Html::anchor(Route::get('demo-sample')->uri(array('category'=>'books', 'id'=>5)), 'My link');  		
	}
}