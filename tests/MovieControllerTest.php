<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MovieControllerTest extends WebTestCase
{
    public function testGetMovieAction()
    {
        //$jsonString = "[{\"id\":1,\"name\":\"film 1\",\"description\":\"film vempire\"},{\"id\":2,\"name\":\"film 2\",\"description\":\"film action\"}]";
        $client = static::createClient();
        $crawler = $client->request('GET', '/api/movies');
        $response = $client->getResponse();
        $this->assertSame(200, $client->getResponse()->getStatusCode());
        //$this->assertJsonStringEqualsJsonString($jsonString, $response->getContent());
    }

    public function testPostMovieOkAction()
    {
        $client = static::createClient();

        $client->request(
            'POST',
            '/api/movie',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            '{"name":"Baye", "description":"ceci est un test"}'
        );

        
        //$client->request('POST', '/api/movie', ['name' => 'Baye', 'description'=>'ceci est un test']);
        $response = $client->getResponse();
        //var_dump($response);
        $this->assertSame(201, $client->getResponse()->getStatusCode());
        //$this->assertJsonStringEqualsJsonString($jsonString, $response->getContent());
    }

    public function testPostMovieKoAction()
    {
        $client = static::createClient();

        $client->request(
            'POST',
            '/api/movie',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            '{"name":"Baye", "description":""}'
        );

        
        //$client->request('POST', '/api/movie', ['name' => 'Baye', 'description'=>'ceci est un test']);
        $response = $client->getResponse();
        var_dump($response);
        $this->assertSame(200, $client->getResponse()->getStatusCode());
        //$this->assertJsonStringEqualsJsonString($jsonString, $response->getContent());
    }
}
