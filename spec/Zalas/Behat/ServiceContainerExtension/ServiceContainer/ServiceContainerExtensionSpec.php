<?php

namespace spec\Zalas\Behat\ServiceContainerExtension\ServiceContainer;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ServiceContainerExtensionSpec extends ObjectBehavior
{
    function it_is_a_testwork_extension()
    {
        $this->shouldHaveType('Behat\Testwork\ServiceContainer\Extension');
    }

    function it_has_a_config_key()
    {
        $this->getConfigKey()->shouldReturn('service_container');
    }
}
