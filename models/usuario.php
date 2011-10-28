<?php
class Usuario extends AppModel{
 	var $name = 'Usuario';

	var $validate = array(
		'nombre' => array(
			'blank' => array(
				'rule' => 'notEmpty',
				'message' => 'Ingrese nombre'
			),
		),
		'apellido' => array(
			'blank' => array(
				'rule' => 'notEmpty',
				'message' => 'Ingrese apellido'
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email',true),
				'message' => 'Ingrese email correcto'
			),
			'blank' => array(
				'rule' => 'notEmpty',
				'message' => 'Ingrese email'
			),
		),
		'nick' => array(
			'blank' => array(
				'rule' => 'notEmpty',
				'message' => 'Ingrese nick'
			),			
		),
		'pass' => array(
			'blank' => array(
				'rule' => 'notEmpty',
				'message' => 'Ingrese password'
			),			
		)
			
		
		
	);
}
?>
