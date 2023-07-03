<?php
/**
* 2023 Wasya Co
*
* @author    Victor Pudeyev <victor@wasya.co>
* @copyright 2023 Wasya Co
* @license   https://wasya.co/mit-license
**/

header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');

header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

header('Location: ../');
exit;