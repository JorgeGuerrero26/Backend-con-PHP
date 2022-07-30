<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testEmail()
    {
        $result = validate_email('i@admin.com');
        $this->assertTrue($result);
        
        $result = validate_email('i@@admin.com');
        $this->assertFalse($result);
    }
}
