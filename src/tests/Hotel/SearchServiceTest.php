<?php

namespace App\Tests\Hotel;

use App\Hotel\SearchService;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class SearchServiceTest extends TestCase
{

    public function testSearch()
    {
        $searchService = new SearchService(null);
      $actual=  $searchService ->makeSearchParameter("test");
      $this->assertEquals("%test%",$actual);

        $actual=  $searchService ->makeSearchParameter("");
        $this->assertEquals("%%",$actual);

        $actual=  $searchService ->makeSearchParameter("123");
        $this->assertEquals("%123%",$actual);
    }

    public function testSearch_when_inputIsNull_shouldFail()
    {
        $this->expectException(\InvalidArgumentException::class);
        $searchService = new SearchService(null);
        $actual=  $searchService ->makeSearchParameter(null);


    }
}
