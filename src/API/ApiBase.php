<?php

namespace Becold\MikuiaApi\API;

abstract class ApiBase
{
	protected $apiClient;

	public function __construct($httpClient = null)
	{
		$this->apiClient = new ApiClient($httpClient);
    }
}