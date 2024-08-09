<?php
/*
Plugin Name: Hello World
Description: Starter plugin 
Version: 1.0
Author: GetSimple CE
Author URI: https://www.getsimple-ce.ovh
*/
 
# get correct id for plugin
$thisfile=basename(__FILE__, ".php");
 
# register plugin
register_plugin(
	$thisfile, //Plugin id
	'Hello World', 	//Plugin name
	'1.0', 		//Plugin version
	'GetSimple CE',  //Plugin author
	'https://www.getsimple-ce.ovh/', //author website
	'Starter Plugin for yours next project', //Plugin description
	'plugins', //page type - on which admin tab to display
	'hello_world_show'  //main function (administration)
);
 
# activate filter 
add_action('plugins-footer','hello_world'); 
 
# add a link in the admin tab 'theme'
add_action('plugins-sidebar','createSideMenu',array($thisfile,'Hello World description'));
 
# functions
function hello_world() {
	echo '<p>Hello World</p>';
}
 
function hello_world_show() {
	echo '<p>I like to echo "Hello World" in the footers of all themes.</p>';
}
?>