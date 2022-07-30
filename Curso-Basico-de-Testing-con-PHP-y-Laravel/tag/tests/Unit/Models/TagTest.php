<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\Tag;
class TagTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_slug()
    {
        $tag = new Tag;
        $tag->name='Proyecto PHP';
        $this->assertEquals('proyecto-php',$tag->slug);
    }
}
