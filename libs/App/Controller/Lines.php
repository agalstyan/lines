<?php

namespace App\Controller;

use \App\Model as Model;
use \App\View as View;

/**
 * Created by JetBrains PhpStorm.
 * User: macbook
 * Date: 13.05.13
 * Time: 23:57
 * To change this template use File | Settings | File Templates.
 */
class Lines extends AbstractController
{
	public function index()
	{
		$model = new Model\Lines();
		$view = new View\Lines();

		$view->setField('lines', $model->getLines())
			->setField('proportion', $model->getProportion())
			->setTemplate('lines.tpl')
			->render();
	}
}
