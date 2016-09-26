<?php
/**
 * Created by PhpStorm.
 * User: filipkulig
 * Date: 25/09/2016
 * Time: 16:29
 */

namespace ES;


class Route
{

	const PROGRESS_NEW = 1;

	public function parse($url)
	{
		if ( $url == '/progress/new') {
			return self::PROGRESS_NEW;
		}
	}

}