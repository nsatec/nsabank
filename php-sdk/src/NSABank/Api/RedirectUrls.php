<?php

namespace NSABank\Api;

use NSABank\Common\NSABankModel;

/**
 * Class RedirectUrls
 * @property string returnUrl
 * @property string cancelUrl
 *
 */

class RedirectUrls extends NSABankModel
{
    public function setSuccessUrl($url)
    {
        $this->successUrl = $url;
        return $this;
    }

    public function getSuccessUrl()
    {
        return $this->successUrl;
    }

    public function setCancelUrl($url)
    {
        $this->cancelUrl = $url;
        return $this;
    }

    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }
}