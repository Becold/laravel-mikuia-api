<?php

namespace Becold\MikuiaApi\API;

class Levels extends Api
{
	public function levels($streamer)
	{
		return $this->sendRequest('GET', 'levels/' . $streamer);
	}

}