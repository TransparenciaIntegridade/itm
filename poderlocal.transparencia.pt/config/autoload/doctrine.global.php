<?php
//config/autoload/doctrine.global.php
return array(
		'doctrine' => array(
				'connection' => array(
						'orm_default' => array(
								'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
								'params' => array(
										'host' => 'localhost',
										'port' => '',
										'dbname' => 'itm',
										'charset' => 'utf8',
								),
						),
				)
		));