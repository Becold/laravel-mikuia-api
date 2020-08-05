<?php

namespace Becold\MikuiaApi\Tests\Unit;

use GuzzleHttp\Psr7\Response;
use Becold\MikuiaApi\API\ApiClient;
use Becold\MikuiaApi\Tests\TestCaseBase;

class ApiClientTest extends TestCaseBase
{
    private $apiClient;

    public function __construct()
    {
        parent::__construct();
    }
    
    public function setUp(): void
    {
        parent::setUp();

        $this->apiClient = new ApiClient($this->httpClient);
    }
    
    /**
     * @test
     */
    public function it_should_returns_response_on_200()
    {
        $this->mockHandler->append(new Response(200, ['Content-type' => 'application/json;charset=utf-8'], '{"success": true}'));

        $response = $this->apiClient->sendRequest('GET', '/');

        $this->assertTrue($response['success']);
    }
}