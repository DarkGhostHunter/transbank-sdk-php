<?php
namespace Transbank\PatpassByWebpay\Exceptions;

use Transbank\Webpay\Exceptions\TransbankException;

class TransactionStatusException extends TransbankException {
    const DEFAULT_MESSAGE = 'Transaction could not be created. Please verify given parameters';

    public function __construct($message = self::DEFAULT_MESSAGE, $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}
