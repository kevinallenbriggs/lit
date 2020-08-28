<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {   
        $userAttributes = [
            'name' => 'test name',
            'email' => 'test@email.com'
        ];

        factory(User::class)->create($userAttributes);

        $this->assertDatabaseHas('users', $userAttributes);
        
    }
}
