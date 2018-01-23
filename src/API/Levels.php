<?php

namespace Becold\MikuiaApi\API;

class Levels extends Api
{
	public function levels($streamer, $limit = 100, $offset = 0)
	{
		return $this->sendRequest('GET', 'levels/' . $streamer . '?limit=' . $limit . '&offset=' . $offset);
	}

}