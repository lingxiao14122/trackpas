<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ManagerControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    
    public function test_tracking_delivered()
    {
        $users = User::manager()->first();
        $response = $this->actingAs($users)->get(route('manager.parcel_delivered'));
        $response->assertStatus(200);
        $response->assertSee('Parcel Delivered');
    }
    
    /**
     * ling xiao
     */
    public function test_index()
    {
    }
    
    /**
     * ling xiao
     */
    public function test_tracking_in_transit()
    {
    }
    
    /**
     * ling xiao
     */
    public function test_tracking_in_transit_single()
    {
    }
    
    /**
     * ling xiao
     */
    public function test_tracking_not_dispatch()
    {
    }
    
}
