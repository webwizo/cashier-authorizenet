<?php

namespace Laravel\CashierAuthorizeNet\Exceptions;

use Exception;

class AuthorizeNetException extends Exception
{
    protected $errorCode;

	public function __construct($message, $errorCode)
	{
		$this->errorCode = $errorCode;
		parent::__construct($message);
	}
}