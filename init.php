<?php 

Route::set('demo', 'demo(/<controller>(/<action>(/<id>(/<stuff>))))', array('stuff' => '.*?'))
	->defaults(array(
		'controller' => 'html',
		'action'     => 'index',
	));

Route::set('demo-sample', 'products(/<category>(/<id>))')
	->defaults(array(
		'controller' => 'products',
		'action'     => 'index',
	));
	