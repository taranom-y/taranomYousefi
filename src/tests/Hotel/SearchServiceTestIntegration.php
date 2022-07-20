<?php

namespace App\Tests\Hotel;

use App\Hotel\SearchService;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
class SearchServiceTestIntegration extends KernelTestCase
{

    public function testSearch()
    {
        self::bootKernel();
        $container = static ::getContainer();

       $searchService  = $container->get(SearchService::class);
       $result=$searchService ->search("grand");


        $this->assertNotEmpty($result);

    }
}
