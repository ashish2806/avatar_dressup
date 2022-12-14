<?php

namespace App\Helper\User;

use App\Contracts\Constants\User as UserConstant;
use App\Helper\User\Handler\CurrentAvatar;
use App\Helper\User\Handler\DressUp;
use App\Helper\User\Handler\PurchaseItem;


class UserServiceManager implements  UserConstant {
	private $strategy;

	/**
	 * Category Manager
	 *
	 * @param $strRequestType
	 */
	public function __construct(string $strRequestType)
	{
		switch ($strRequestType) {
			case self::PURCHASE_ITEM:
				$this->strategy = new PurchaseItem();
				break;	
			case self::DRESS_UP:
				$this->strategy = new DressUp();
				break;	
			case self::CURRENT_AVATAR:
				$this->strategy = new CurrentAvatar();
				break;	
			default:
				abort(501, 'Invalid action type.');
				break;
		}
	}

	
	public function make($objRequest)
	{
		return $this->strategy->make($objRequest);
	}
}
