<?php

namespace Laravel\CashierAuthorizeNet\Exceptions;

use Exception;

class AuthorizeNetException extends Exception
{
    private $errorCode;

	public function __construct($message, $errorCode)
	{
		$this->errorCode = $errorCode;
		parent::__construct($message);
	}

	public function getErrorCode() {
    	return $this->errorCode;
    }
}