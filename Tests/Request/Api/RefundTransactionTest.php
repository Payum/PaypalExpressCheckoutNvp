<?php
namespace Workup\Payum\Paypal\ExpressCheckout\Nvp\Tests\Request\Api;

use Payum\Core\Request\Generic;
use Workup\Payum\Paypal\ExpressCheckout\Nvp\Request\Api\DoVoid;
use Workup\Payum\Paypal\ExpressCheckout\Nvp\Request\Api\RefundTransaction;

class RefundTransactionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldBeSubClassOfGeneric()
    {
        $rc = new \ReflectionClass(RefundTransaction::class);

        $this->assertTrue($rc->isSubclassOf(Generic::class));
    }
}
