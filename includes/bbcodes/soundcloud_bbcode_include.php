<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2014 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: soundcloud_bbcode_include.php
| Author: KasteR
| Website: http://www.kaster.us/
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }
//soundcloud bbcode
$text = preg_replace('#\[soundcloud\](.*?)\[/soundcloud\]#si', '<object height="81" width="100%"><param name="movie" value="http://player.soundcloud.com/player.swf?url=\1&amp;g=bb"></param><param name="allowscriptaccess" value="always"></param><embed allowscriptaccess="always" height="81" src="http://player.soundcloud.com/player.swf?url=\1&amp;g=bb" type="application/x-shockwave-flash" width="100%"></embed></object> <a href="\1">\1</a>', $text);
?>
