<?php
namespace Payum\Paypal\ExpressCheckout\Nvp\Examples\Model;

class AwesomeCart
{
    protected $paymentDetails;

    public function getId()
    {
        return 1;
    }

    public function getPrice()
    {
        return 10;
    }

    public function getCurrency()
    {
        return 'USD';
    }

    public function setPaymentDetails($paymentDetails)
    {
        $this->paymentDetails = $paymentDetails;
    }

    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }
}
