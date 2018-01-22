<?php

namespace Becold\MikuiaApi\Services;

use Becold\MikuiaApi\API\Api;
use Becold\MikuiaApi\API\Levels;

class MikuiaApiService extends Api
{
	public function getLevels($streamer)
	{
		$levels = new Levels();

		return $levels->levels($streamer);
	}
}