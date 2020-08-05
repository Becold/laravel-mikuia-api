<?php

namespace Becold\MikuiaApi\Tests\Unit;

use GuzzleHttp\Psr7\Response;
use Becold\MikuiaApi\API\Levels;
use Becold\MikuiaApi\Tests\TestCaseBase;

class LevelsTest extends TestCaseBase
{
    private $levels;

    public function __construct()
    {
        parent::__construct();
    }
    
    public function setUp(): void
    {
        parent::setUp();
        
        $this->levels = new Levels($this->httpClient);
    }
    
    /**
     * @test
     */
    public function it_should_returns_levels()
    {
        $this->mockHandler->append(new Response(200, ['Content-type' => 'application/json;charset=utf-8'], \file_get_contents(__DIR__ . '/../Samples/levels.json')));

        $response = $this->levels->levels("tromks_");

        $this->assertSame(22, $response['total']);
        $this->assertCount(22, $response['users']);
    }
}