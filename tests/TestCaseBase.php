<?php

namespace Becold\MikuiaApi\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use Becold\MikuiaApi\API\ApiClient;
use Becold\MikuiaApi\Providers\MikuiaApiServiceProvider;

abstract class TestCaseBase extends \Orchestra\Testbench\TestCase
{
    protected $httpClient;
    
    protected $mockHandler;

    protected function __construct()
    {
        parent::__construct();
    }
    
    protected function setUp(): void
    {
        parent::setUp();
        
        $this->mockHandler = new MockHandler();
        
        $this->httpClient = new Client([
            'handler' => $this->mockHandler,
        ]);
    }
    
    protected function getPackageProviders($app)
    {
        return [
            MikuiaApiServiceProvider::class,
        ];
    }
    
    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}