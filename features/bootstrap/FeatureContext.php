<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use television\Television;

require_once __DIR__ . '/../../vendor/autoload.php';

class FeatureContext extends BehatContext
{

    public function __construct(array $parameters)
    {
        $this->television = new Television();
    }

    /**
     * @Given /^the volume is at "([^"]*)"$/
     */
    public function theVolumeIsAt($arg1)
    {
        $this->television->volume = $arg1;
    }

    /**
     * @Given /^I set the volume to "([^"]*)"$/
     */
    public function iSetTheVolumeTo($arg1)
    {
        $this->television->volume($arg1);
    }

    /**
     * @Then /^the volume should be at "([^"]*)"$/
     */
    public function theVolumeShouldBeAt($arg1)
    {
        if ($this->television->volume != $arg1) {
            throw new Exception('Actual output is: ' . $arg1);
        }
    }

}