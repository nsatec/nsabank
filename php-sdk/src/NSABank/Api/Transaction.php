<?php namespace NSABank\Api;

use NSABank\Common\NSABankModel;

/**
 * Class Transaction
 * @property \NSABank\Api\Amount amount
 *
 */

class Transaction extends NSABankModel
{

    /**
     * @param \NSABank\Api\Amount $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}