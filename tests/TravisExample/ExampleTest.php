<?php
namespace TravisExampleTest;

class ExampleTest extends \PHPUnit_Framework_TestCase {

    /**
     * For the purpose of this example, this method should always return true.
     *
     * @test
     *
     * @return bool
     */
    public function example()
    {
        $object = new \TravisExample\Example;

        $this->assertEquals(true, $object->example());
    }
}