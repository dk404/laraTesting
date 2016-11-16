<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{
    public function testCreateNewPost()
    {

        $randomString = str_random(10);

        $this->visit('/post/create')
            ->type($randomString, 'name')
            ->type('I am in the body', 'body')
            ->select(1, 'is_published')
            ->press('Create')
            ->seePageIs('/post');
    }

}