<?php

namespace Payum\Paypal\ExpressCheckout\Nvp\Tests\Functional\Bridge\Doctrine\Document;

use Payum\Paypal\ExpressCheckout\Nvp\Examples\Document\PaymentDetails;
use Payum\Paypal\ExpressCheckout\Nvp\Tests\Functional\Bridge\Doctrine\MongoTest;


class PaymentDetailsTest extends MongoTest
{
    /**
     * @test
     */
    public function shouldAllowPersist()
    {
        $paymentDetails = new PaymentDetails;
        $paymentDetails->setToken('foo');

        // guard
        $this->assertNull($paymentDetails->getId());

        $this->dm->persist($paymentDetails);
        $this->dm->flush();

        $this->assertGreaterThan(0, $paymentDetails->getId());
    }

    /**
     * @test
     */
    public function shouldAllowFindPersistedPaymentDetails()
    {
        $paymentDetails = new PaymentDetails;
        $paymentDetails->setToken($expectedToken = 'theToken');
        $paymentDetails->setPaymentrequestAmt(0, $expectedAmount = 123.15);
        $paymentDetails->setPaymentrequestPaymentaction(0, $expectedAction = 'thePaymentAction');
        print_r($paymentDetails->getPaymentrequestAmt(0));
        $this->dm->persist($paymentDetails);
        $this->dm->flush();

        $id = $paymentDetails->getId();

        $this->dm->clear();

        $foundInstruction = $this->dm->find(get_class($paymentDetails), $id);

        $this->assertNotSame($paymentDetails, $foundInstruction);

        $this->assertEquals($expectedToken, $foundInstruction->getToken());
        print_r($foundInstruction);die();
        $this->assertEquals($expectedAmount, $foundInstruction->getPaymentrequestAmt(0));
        $this->assertEquals($expectedAction, $foundInstruction->getPaymentrequestPaymentaction(0));
    }
}
