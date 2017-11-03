<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Bet;
use App\BetDetail;

class MemberBetTest extends TestCase
{
    use RefreshDatabase;


 
    // public function user_must_sign_in_before_bet()
    // {
    //     $this->withoutExceptionHandling();
    //     $lotto = factory('App\Lotto')->create();

    //     $response = $this->post('/placebet/' . $lotto->id, ['betData' =>[
    //             ['line'=>1, 'number'=>'123', 'up'=> 10, 'down'=> 20, 'tode'=> 30]
    //         ]
    //     ]);

    //     $response->assertStatus(302);
    //     $response->assertRedirect('/login');
    // }

    /** @test */
    public function it_can_place_bet_up_down_tode()
    {
        $this->withoutExceptionHandling();
        $lotto = factory('App\Lotto')->create();

        $response = $this->post('/placebet/' . $lotto->id, ['betData' =>[
                ['line'=>1, 'number'=>'123', 'up'=> 10, 'down'=> 20, 'tode'=> 30]
            ]
        ]);


        $response->assertStatus(200);
        $bet = Bet::first();
        $this->assertEquals($lotto->id, $bet->lotto_id);

        $up3 = BetDetail::where('bet_id', $bet->id)->where('type', 'up3')->first();
        $down3 = BetDetail::where('bet_id', $bet->id)->where('type', 'down3')->first();
         $tode3 = BetDetail::where('bet_id', $bet->id)->where('type', 'tode3')->first();

        $this->assertEquals('123', $up3->number);
        $this->assertEquals(10, $up3->amount);
        
        $this->assertEquals('123', $down3->number);
        $this->assertEquals(20, $down3->amount);
       
        $this->assertEquals('123', $tode3->number);
        $this->assertEquals(30, $tode3->amount);
    }

    /** @test */
    public function it_not_record_bet_that_do_not_have_amount()
    {
        $this->withoutExceptionHandling();
        $lotto = factory('App\Lotto')->create();

        $response = $this->post('/placebet/' . $lotto->id, ['betData' =>[
                ['line'=>1, 'number'=>'123', 'up'=> '', 'down'=> '', 'tode'=> '30']
            ]
        ]);


        $response->assertStatus(200);
        $bet = Bet::first();
        $this->assertEquals($lotto->id, $bet->lotto_id);

        $up3 = BetDetail::where('bet_id', $bet->id)->where('type', 'up3')->first();
        $down3 = BetDetail::where('bet_id', $bet->id)->where('type', 'down3')->first();
        $tode3 = BetDetail::where('bet_id', $bet->id)->where('type', 'tode3')->first();

        $this->assertNull( $up3);
        $this->assertNull( $down3);

        $this->assertEquals('123', $tode3->number);
        $this->assertEquals(30, $tode3->amount);
    }

    /** @test */
    public function it_not_record_bet_that_not_number_place()
    {
        $this->withoutExceptionHandling();
        $lotto = factory('App\Lotto')->create();

        $response = $this->post('/placebet/' . $lotto->id, ['betData' =>[
                ['line'=>1, 'number'=>'abc', 'up'=> '10', 'down'=> '20', 'tode'=> '30']
            ]
        ]);
    }
}
