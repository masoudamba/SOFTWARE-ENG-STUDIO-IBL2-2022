<?php

use App\LoginUser;
class LoggingInTest extends \PHPUnit\Framework\TestCase
{

    function setUp(): void{
        // $password = new Login\LoginUser;
    }

public function testPasswswordLength()
   {
    $password = new LoginUser;
    $password->setPassword("hh");
    $this->assertEquals("weak", $password->checkPasswordLength());
   }
}