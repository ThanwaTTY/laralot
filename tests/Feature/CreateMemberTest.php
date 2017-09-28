<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateMemberTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function it_see_create_user_text()
    {
        //$this->withExceptionHandling();

        $response = $this->get('/members/create');

        $response->assertSee('เพิ่มสมาชิก');
        $response->assertSee(route('members.store'));
    }

    /** @test */
    public function it_can_create_member()
    {
        //$this->withExceptionHandling();

        $member = [
            'level' => 1,
            'username' => 'TEST',
            'password' => 'password',
            'credit' => 10000,
            'name' => 'John',
            'phone' => '123456'

        ];

        $response = $this->post('/members', $member);

        $this->assertDatabaseHas('members', $member);

        $response->assertRedirect('/members/create');
    }
}
