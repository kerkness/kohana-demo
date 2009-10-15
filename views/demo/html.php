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

<br/>

<?php echo Html::email('jimmy@fallon.org'); ?>

<br/>

<?php echo Html::mailto('jimmy@fallon.org'); ?>

<br/>

<?php echo Html::style('media/css/demo/style.css'); ?>

<br/>

<?php echo Html::style('media/css/demo/style.css', array('media'=>'screen, projection'), TRUE); ?>

<br/>

<?php echo Html::script('media/js/demo/script.js'); ?>

<br/>

<?php echo Html::script('http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js'); ?>

<br/>

<?php echo Html::image('media/img/demo/icon.png'); ?>

<br/>

<?php echo Html::image('media/img/demo/icon.png', array('class'=>'no_border')); ?>

<br/>

<?php 
 Html::$windowed_urls = TRUE;
 echo Html::anchor('http://google.com','New Window');

?>


