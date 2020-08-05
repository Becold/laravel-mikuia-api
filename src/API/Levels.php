<?php

namespace Becold\MikuiaApi\API;

class Levels extends ApiBase
{
	public function levels($streamer, $limit = 100, $offset = 0)
	{
		return $this->apiClient
		            ->sendRequest('GET', 'levels/' . $streamer . '?limit=' . $limit . '&offset=' . $offset);
	}
}