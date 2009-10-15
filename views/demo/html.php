<?php echo Html::chars('<p>"I\'m hungry"&mdash;Cookie Monster said.</p>'); ?>

<br/>				
		
<?php echo Html::chars('<p>"I\'m hungry"&mdash;Cookie Monster said.</p>', FALSE); ?>
		
<br/>				
		
<?php echo Html::anchor('controller/action', 'My Link'); ?>
		
<br/>				
		
<?php echo Html::anchor('http://kohanaphp.com', 'Kohana PHP'); ?>

<br/>				
		
<?php echo Html::anchor('controller/action', 'My Link', array('id'=>'link_id'), 'ftp'); ?>

<br/>				
		
<?php echo Html::anchor('controller/action', Html::image('media/img/icon.png')); ?>

<br/>
		
<?php echo Html::anchor(Route::get('demo-sample')->uri(array('category'=>'books', 'id'=>5)), 'My link');  ?>