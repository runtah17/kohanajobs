<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Post extends Controller_Website {

	public function action_index()
	{
		$this->template->content = 'New job form';
	}

}