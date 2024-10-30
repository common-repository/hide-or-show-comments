<?php
/*
Plugin Name: Hide or Show Comments
Plugin URI: http://www.bombolom.com/weblog_en/wordpress/PluginHideShowComments2-2007-10-23-01-35.html
Description: Hides the comments by default and allows to show or hide them on request.
Version: 2.0
Author: José Lopes
Author URI: http://www.bombolom.com/
*/


/*

This plugin provides an easy way to set the comments hidden as default, with
a link to show and hide back again the comments when requested.

*/


/*	Copyright 2007 Jose Lopes (email: jose.lopes@paxjulia.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/
if(function_exists('load_plugin_textdomain'))
        load_plugin_textdomain('hideshowcomments','wp-content/plugins/hide-or-show-comments');

function hideshowComments () {

   $linkText1 = __("Click here to see the comments", "hideshowcomments");
   $linkText2 = __("or add a new comment", "hideshowcomments");
   $relinkText = __("Click here to hide again the comments", "hideshowcomments");

   echo "<script type=\"text/javascript\"> 
var currLayerId = \"show\"; 

function togLayer(id) 
{ 
if(currLayerId) setDisplay(currLayerId, \"none\"); 
if(id)setDisplay(id, \"block\"); 
currLayerId = id; 
}

function setDisplay(id,value) 
{ 
var elm = document.getElementById(id); 
elm.style.display = value; 
} 

</script>

<div id=\"show\" style=\"display: block;\">
<center>
<a href=\"#\" style=\"text-decoration:none\" onclick=\"togLayer('hide');return false;\" title=\"\">",
$linkText1, " (", comments_number('0','1','%'), ") ", $linkText2,
"</a>
</center>
</div>

<div id=\"hide\" style=\"display: none;\">

<center>
<a href=\"#\" style=\"text-decoration:none\" onclick=\"togLayer('show');return false;\" title=\"\">",
$relinkText,
"</a>
</center>

", comments_template(), "</div>";

	}

?>
