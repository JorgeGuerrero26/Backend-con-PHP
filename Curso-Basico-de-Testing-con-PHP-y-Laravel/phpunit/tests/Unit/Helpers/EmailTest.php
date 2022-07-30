<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;
class EmailTest extends TestCase
{

    public function testEmail()
    {
        //$email = 'example@example.com';
        //$result = (bool) filter_var($email,FILTER_VALIDATE_EMAIL);

        $result = Email::validate('example@example.com');
        $this->assertTrue($result);

        $result = Email::validate('example@@example.com');
        $this->assertFalse($result);
    }
}
