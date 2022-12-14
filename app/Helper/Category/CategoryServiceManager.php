<?php

namespace App\Helper\Category;



use App\Helper\Category\Handler\Detail;


class CategoryServiceManager {
	private $strategy;

	/**
	 * Category Manager
	 *
	 * @param $strRequestType
	 */
	public function __construct()
	{
		$this->strategy = new Detail();
	}

	
	public function make()
	{
		return $this->strategy->make();
	}
}
