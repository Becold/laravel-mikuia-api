<?php

namespace Becold\MikuiaApi\API;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;
use Becold\MikuiaApi\Exceptions\NotFoundException;

class ApiClient
{
	protected $client;

	public function __construct($httpClient)
	{
		if ($httpClient)
		{
			$this->client = $httpClient;
		}
		else
		{
			$this->client = new Client([
				'base_uri' => 'https://mikuia.tv/api/'
			]);
		}
	}

	public function sendRequest($method, $path)
	{
		try
		{
			$options = [
				'headers' => [
					'accept' => 'application/json'
				]
			];

			$request = new Request($method, $path, $options);

			$response = $this->client->send($request);

			if ($response->getStatusCode() === 404 ||
				$response->getBody() === "Not Found")
			{
				throw new NotFoundException();
			}

			return json_decode($response->getBody(), true);
		}
		catch(RequestException $e)
		{
			if ($e->hasResponse())
			{
				return json_decode($e->getResponse()->getBody(), true);
			}
			else
			{
				return [
					'status' => 500,
					'message' => 'Service unavailable',
					'error' => $e->getMessage()
				];
			}
		}
	}
}