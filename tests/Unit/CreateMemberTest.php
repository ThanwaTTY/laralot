<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Member;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateMemberTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function it_can_insert_member_data_to_database()
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

        Member::create($member);

        $this->assertDatabaseHas('members', $member);
    }
}
