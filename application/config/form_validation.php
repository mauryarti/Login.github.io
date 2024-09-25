<?php
$config=[
 'signup'=> [       
[
		'field'=>'uname',
		'label'=>'User name',
		'rules'=>'required|trim'

	],

	[
	'field'=>'uemail',
		'label'=>'email',
		'rules'=>'required|trim'
],

[
'field'=>'password',
		'label'=>'password',
	'rules'=>'required|trim'
	 
],

],

'login'=> [       
[
		'field'=>'username',
		'label'=>'User name',
		'rules'=>'required|trim'
],
],
];
   
$config['error_prefix']='<div class="text-danger mt-1 mb-3">';
$config['error_suffix']='</div>';