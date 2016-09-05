<?php
namespace Payum\Paypal\ExpressCheckout\Nvp\Tests\Request\Api;

use Payum\Core\Request\Generic;
use Payum\Paypal\ExpressCheckout\Nvp\Request\Api\DoVoid;

class DoVoidTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldBeSubClassOfGeneric()
    {
        $rc = new \ReflectionClass(DoVoid::class);

        $this->assertTrue($rc->isSubclassOf(Generic::class));
    }

    /**
     * @test
     */
    public function couldBeConstructedWithModelAndPaymentRequestNAsArguments()
    {
        new DoVoid(new \stdClass(), $paymentRequestN = 5);
    }

    /**
     * @test
     */
    public function shouldAllowGetPaymentRequestNSetInConstructor()
    {
        $expectedPaymentRequestN = 7;

        $request = new DoVoid(new \stdClass(), $expectedPaymentRequestN);

        $this->assertSame($expectedPaymentRequestN, $request->getPaymentRequestN());
    }
}
