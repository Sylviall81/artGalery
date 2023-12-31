<?php

namespace Tests\Feature\Api;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     */

     use RefreshDatabase;

    public function test_user_can_register(): void
    {
        $this->postJson('api/register', [
            'name' => 'Elena',
            'email'=>'e.mail@gmail.com',
            'password' => Hash::make ('123456789')
        ]);

        $this->assertCount(1, User::all());
       
    }
}
