<?php

/**
 * phpwcms content management system
 *
 * @author Oliver Georgi <oliver@phpwcms.de>
 * @copyright Copyright (c) 2002-2012, Oliver Georgi
 * @license http://opensource.org/licenses/GPL-2.0 GNU GPL-2
 * @link http://www.phpwcms.de
 *
 **/

// some mod ADS functions only needed in frontend


function renderAds($match) {


	return empty($match[1]) ? '' : '<p>Ad banner '.$match[1].'</p>';

}


?>