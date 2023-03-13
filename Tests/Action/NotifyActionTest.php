<?php
namespace Workup\Payum\Paypal\ExpressCheckout\Nvp\Tests\Action;

use Payum\Core\GatewayAwareInterface;
use Payum\Core\Request\Notify;
use Payum\Core\Tests\GenericActionTest;
use Workup\Payum\Paypal\ExpressCheckout\Nvp\Action\NotifyAction;

class NotifyActionTest extends GenericActionTest
{
    protected $requestClass = Notify::class;

    protected $actionClass = NotifyAction::class;

    /**
     * @test
     */
    public function shouldImplementGatewayAwareInterface()
    {
        $rc = new \ReflectionClass(NotifyAction::class);

        $this->assertTrue($rc->implementsInterface(GatewayAwareInterface::class));
    }

    /**
     * @test
     */
    public function shouldSubExecuteSyncWithSameModel()
    {
        $expectedModel = array('foo' => 'fooVal');

        $testCase = $this;

        $gatewayMock = $this->createGatewayMock();
        $gatewayMock
            ->expects($this->once())
            ->method('execute')
            ->with($this->isInstanceOf('Payum\Core\Request\Sync'))
        ;

        $action = new NotifyAction();
        $action->setGateway($gatewayMock);

        $action->execute(new Notify($expectedModel));
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|\Payum\Core\GatewayInterface
     */
    protected function createGatewayMock()
    {
        return $this->createMock('Payum\Core\GatewayInterface');
    }
}
