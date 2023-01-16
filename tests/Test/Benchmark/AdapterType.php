<?php

namespace Test\Benchmark;

use InvalidArgumentException;

class AdapterType
{
	const REDIS = 1<<0;
	const REDISNG = 1<<1;
	const REDISTXN = 1<<2;

	/**
	 * @param int $type
	 * @return string
	 */
	public static function toString(int $type): string
	{
		switch ($type) {
			case AdapterType::REDIS:
				return 'redis';
			case AdapterType::REDISNG:
				return 'redisng';
			case AdapterType::REDISTXN:
				return 'redistxn';
		}

		throw new InvalidArgumentException("Invalid adapter type: {$type}");
	}
}