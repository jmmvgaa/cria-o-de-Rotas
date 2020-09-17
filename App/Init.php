<?php

namespace App;

use UNIS\Init\Bootstrap;

class Init extends Bootstrap
{
	protected function initRoutes()
	{
	    $taskRoutes['home'] = [
	       'route' => '/',
	       'controller' => 'index',
	       'action' => 'index'
	    ];
		$taskRoutes['usuario'] = [
			'route' => '/usuario',
			'controller' => 'usuario',
			'action' => 'adicionar'
		];
		$taskRoutes['delete'] = [
			'route' => '/delete',
			'controller' => 'Tasks',
			'action' => 'deletar'
		];
	    $this->setRoutes($taskRoutes);
	}
}