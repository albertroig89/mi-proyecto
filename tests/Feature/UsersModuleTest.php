<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     * @test
     */
    
    function it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
                ->assertStatus(200)
                ->assertSee('Usuarios');
    }
    
    /**
     * @test
     */
    
    function it_loads_the_users_details_page()
    {
        $this->get('/usuarios/5')
                ->assertStatus(200)
                ->assertSee('Mostrando detalle del usuario: 5');
    }
    
    /**
     * @test
     */
    
    function it_loads_the_new_users_page()
    {
        $this->get('/usuarios/nuevo')
                ->assertStatus(200)
                ->assertSee('Crear nuevo usuario');
    }
    
    
}
