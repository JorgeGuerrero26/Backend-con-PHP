<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
class UserTest extends TestCase
{
    use RefreshDatabase; //migrate
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUser()
    {
        //Proceso
        
        User::Factory()->create([
            'email' => 'i@example.com',
        ]);
        $this->assertDatabaseHas('users',[
            'email' => 'i@example.com'
        ]);

        $this->assertDatabaseMissing('users',[
            'email' => 'no@existe.com'
        ]);
    }
}
