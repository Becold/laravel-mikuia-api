<?php

namespace Becold\MikuiaApi\Services;

use Becold\MikuiaApi\API\Levels;

class MikuiaApiService
{
	public function getLevels($streamer, $limit = 100, $offset = 0)
	{
		$levels = new Levels();

		return $levels->levels($streamer, $limit, $offset);
	}
}