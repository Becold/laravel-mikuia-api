<?php

namespace Becold\MikuiaApi\API;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;

class Api
{
	protected $client;

	public function __construct()
	{
		$this->client = new Client([
			'base_uri' => 'https://mikuia.tv/api/'
		]);
	}

	public function sendRequest($method, $path)
	{
		try
		{
			$data = [
				'headers' => [
					'accept' => 'application/json'
				]
			];

			$request = new Request($method, $path, $data);

			$response = $this->client->send($request);

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