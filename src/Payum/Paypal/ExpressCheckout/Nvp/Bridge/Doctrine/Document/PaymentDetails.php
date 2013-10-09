<?php
namespace Payum\Paypal\ExpressCheckout\Nvp\Bridge\Doctrine\Document;

use Payum\Paypal\ExpressCheckout\Nvp\Model\PaymentDetails as BasePaymentDetails;

class PaymentDetails extends BasePaymentDetails
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
