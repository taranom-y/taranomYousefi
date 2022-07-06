<?php

namespace App\Tests\Hotel;

use App\Hotel\SearchService;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SearchServiceTestApplication extends WebTestCase
{

    public function testSearch()
    {
       $client= static::createClient();
       $crawler =$client ->request('GET','/search?query=grand');
       $this->assertResponseIsSuccessful();

    }
}
