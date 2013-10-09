<?php
namespace Payum\Paypal\ExpressCheckout\Nvp\Bridge\Doctrine\Document;

use Payum\Paypal\ExpressCheckout\Nvp\Model\RecurringPaymentDetails as BaseRecurringPaymentDetails;

class RecurringPaymentDetails extends BaseRecurringPaymentDetails
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
