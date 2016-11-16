<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DummyTest extends TestCase
{
    public function testCreateNewDummy()
    {

        $randomString = str_random(10);

        $this->visit('/dummy/create')
             ->type($randomString, 'name')
             ->press('Create')
             ->seePageIs('/dummy');
    }

}