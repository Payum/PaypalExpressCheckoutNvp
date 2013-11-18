<?php
namespace Payum\Paypal\ExpressCheckout\Nvp\Tests\Model\Issue;

use Payum\Paypal\ExpressCheckout\Nvp\Model\PaymentDetails;

class Issue24Test extends \PHPUnit_Framework_TestCase
{

    public static function provideMultiArrayMultiItemValues()
    {
        return array(
            array('getLPaymentrequestName', 'setLPaymentrequestName', 'L_PAYMENTREQUEST_0_NAME0', 'L_PAYMENTREQUEST_0_NAME1'),
            array('getLPaymentrequestDesc', 'setLPaymentrequestDesc', 'L_PAYMENTREQUEST_0_DESC0', 'L_PAYMENTREQUEST_0_DESC1'),
            array('getLPaymentrequestQty', 'setLPaymentrequestQty', 'L_PAYMENTREQUEST_0_QTY0', 'L_PAYMENTREQUEST_0_QTY1'),
            array('getLPaymentrequestAmt', 'setLPaymentrequestAmt', 'L_PAYMENTREQUEST_0_AMT0', 'L_PAYMENTREQUEST_1_AMT1'),
            array('getLPaymentrequestItemcategory', 'setLPaymentrequestItemcategory', 'L_PAYMENTREQUEST_0_ITEMCATEGORY0', 'L_PAYMENTREQUEST_0_ITEMCATEGORY1'),
        );
    }

    /**
     * @group bugfix
     * @test
     * @dataProvider provideMultiArrayMultiItemValues
     */
    public function shouldCorrectlySetOffsetMultiItemValues($getter, $setter, $paypalName00, $paypalName01){
        $value = 'theValue';

        $details = new PaymentDetails();

        $details->$setter(0, 0, $value);
        $this->assertEquals($value, $details->$getter(0,0, $value));
        $details->$setter(0, 1, $value);
        $this->assertEquals($value, $details->$getter(0,1, $value));
    }

    /**
     * @group bugfix
     * @test
     * @dataProvider provideMultiArrayMultiItemValues
     */
    public function shouldCorrectlySetOffsetMultiItemArrayWay($getter, $setter, $paypalName00, $paypalName01){
        $value = 'theValue';

        $details = new PaymentDetails();
        $details[$paypalName00] = $value;
        $details[$paypalName01] = $value;

        $this->assertEquals($value, $details[$paypalName00]);
        $this->assertEquals($value, $details[$paypalName01]);
    }
}