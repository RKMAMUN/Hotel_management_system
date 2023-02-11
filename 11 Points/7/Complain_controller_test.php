<?php

class ComplainControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testComplainMethod()
    {
        $response = $this->get(route('complain'));
        $response->assertViewIs('backend.complain');
    }

    public function testGetComplainMethod()
    {
        factory(ComplainModel::class, 5)->create();

        $response = $this->get(route('getcomplain'));
        $response->assertStatus(200);
        $this->assertCount(5, $response->original);
    }

    public function testResolveMethod()
    {
        $complain = factory(ComplainModel::class)->create();

        $response = $this->put(route('resolve'), ['id' => $complain->id, 'budget' => 1000]);
        $response->assertStatus(200);
        $this->assertDatabaseHas('complains', ['id' => $complain->id, 'budget' => 1000]);
    }
}
