<?php

use PHPUnit\Framework\TestCase;

class fizzbuzz_test extends TestCase {
    /*
     * TEST: test_input_three
     * Description: Test the Function given an input of 3.
     * Based on UAC, this should print 'fizz'.
     */
    function test_input_three() {
        $test_value = 3;

        /* Utilize the mockbuild to create a mock version of the container object.
         * set the methods which we intend to call and supply the paramters.
         */
        $mock = $this->getMockBuilder('container')
            ->setMethods(['__construct','get_value','set_result','get_result'])
            ->setConstructorArgs(["$test_value"])
            ->getMock();

        /* Specify the expects of the mock.
         * When we run the code we expect get_value to be called exactly 3 times.
         * We then supply what the method will return. Remember we are not testing the container here.
         * So we are free to fake all container code.
         */
        $mock->expects($this->exactly(3))
            ->method('get_value')
            ->will($this->returnValue($test_value));

        /* Specify that we intend to call set_result only once in the Function Under Test. */
        $mock->expects($this->once())
            ->method('set_result')
            ->with($this->equalTo('fizz'));

        /* Specify that we intend to call get_result only once in the Function Under Test. */
        $mock->expects($this->once())
            ->method('get_result')
            ->will($this->returnValue('fizz'));

        // Run the code.
        fizzbuzz($mock);

        // Check that the result is what was specified in the User Acceptance Criteria #1
        $this->assertEquals('fizz', $mock->get_result());
    }

    /*
     * TEST: test_input_five
     * Description: Test the Function given an input of 5.
     * Based on UAC, this should print 'buzz'.
     */
    function test_input_five() {
        $test_value = 5;

        $mock = $this->getMockBuilder('container')
            ->setMethods(['__construct','get_value','append_result','get_result'])
            ->setConstructorArgs(["$test_value"])
            ->getMock();

        $mock->expects($this->exactly(4))
            ->method('get_value')
            ->will($this->returnValue($test_value));

        $mock->expects($this->once())
            ->method('append_result')
            ->with($this->equalTo('buzz'));


        $mock->expects($this->once())
            ->method('get_result')
            ->will($this->returnValue('buzz'));

        // Run the code.
        fizzbuzz($mock);

        $this->assertEquals('buzz', $mock->get_result());
    }

    /*
     * TEST: test_input_fifteen
     * Description: Test the Function given an input of 15.
     * Based on UAC, this should print 'fizzbuzz'. Because of the additional considerations.
     */
    function test_input_fifteen() {
        $test_value = 15;

        $mock = $this->getMockBuilder('container')
            ->setMethods(['__construct','get_value','append_result','set_result','get_result'])
            ->setConstructorArgs(["$test_value"])
            ->getMock();

        $mock->expects($this->exactly(3))
            ->method('get_value')
            ->will($this->returnValue($test_value));

        $mock->expects($this->once())
            ->method('set_result')
            ->with($this->equalTo('fizz'));

        $mock->expects($this->once())
            ->method('append_result')
            ->with($this->equalTo('buzz'));


        $mock->expects($this->once())
            ->method('get_result')
            ->will($this->returnValue('fizzbuzz'));

        // Run the code.
        fizzbuzz($mock);

        $this->assertEquals('fizzbuzz', $mock->get_result());
    }

    /*
     * TEST: test_input_seven
     * Description: Test the Function given an input of 7.
     * Based on UAC, this should print '7'.
     */
    function test_input_seven() {
        $test_value = 7;

        $mock = $this->getMockBuilder('container')
            ->setMethods(['__construct','get_value','append_result','get_result'])
            ->setConstructorArgs(["$test_value"])
            ->getMock();

        $mock->expects($this->exactly(5))
            ->method('get_value')
            ->will($this->returnValue($test_value));

        $mock->expects($this->once())
            ->method('append_result')
            ->with($this->equalTo($test_value));


        $mock->expects($this->once())
            ->method('get_result')
            ->will($this->returnValue($test_value));

        // Run the code.
        fizzbuzz($mock);

        $this->assertEquals('7', $mock->get_result());
    }
}