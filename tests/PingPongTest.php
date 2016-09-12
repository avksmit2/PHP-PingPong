<?php
    require_once "src/PingPong.php";

    class PingPongTest extends PHPUnit_Framework_TestCase
    {
        function test_convertPingPong_isNumber()
        {
            $test_PingPong = new PingPong;
            $input = 5;

            $result = $test_PingPong->convertPingPong($input);

            $this->assertEquals(5, $result);
        }
    }
?>
