<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use Tests\TestClient;
use App\Models\Domain;

class DomainControllerTest extends TestCase
{
    use RefreshDatabase;
  
    public function testIndex()
    {
        $response = $this->get(route('domains.index'));
        $response->assertStatus(200);
    }

    public function testStore()
    {
        $domain = 'yandex.ru';     
        $response = $this->post(route('domains.store'), ['name' => $domain]);
        $response->assertStatus(302);
        $this->assertDatabaseHas('domains', [
            'name' => $domain
        ]);
    }

    public function testShow()
    {
        $domain = (Domain::class)::factory()->create();
        $response = $this->get(route('domains.show', ['id' => $domain]));
        $response->assertStatus(200);
        $this->assertDatabaseHas('domains', [
            'name' => $domain->name,
        ]);
    }
}
