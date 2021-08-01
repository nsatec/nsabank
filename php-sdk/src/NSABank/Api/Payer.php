<?php
namespace NSABank\Api;

use NSABank\Common\NSABankModel;

/**
 * Class Payer
 * @property string paymentMethod
 *
 */
class Payer extends NSABankModel
{

    /**
     * Valid Values: ["nsabank"]
     * method will be like nsabank, paypal, stripe etc
     * @param  string  $method
     * @return $this
     */
    public function setPaymentMethod($method)
    {
        $this->paymentMethod = $method;
        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

}
