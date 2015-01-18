<?php
/**
 * License: GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * 
 * configuration file for template "MyOwn"
 * 
 * @author: Tony Baldwin
 * @homepage: http://myownsite.me
 */

/**
 * This text is placed in "keywords" meta tag
 */
$conf['tpl_MyOwn']['keywords'] = 'dokuwiki,template';

/**
 * This text is placed in "description" meta tag
 */
$conf['tpl_MyOwn']['description'] = 'page description';

/** 
 * This Text is displayed in footer
 * If you remove the wikibar below, a login link might be useful
 */
$conf['tpl_MyOwn']['footer'] = 'Web Design, Development &amp Hosting by <a href="http://myownsite.me">MyOwnSite.Me</a> | <a href="doku.php?do=login">login</a>';

/** 
 * Set the menu2 to be permanent (menu2.txt is taken from main directory)
 */
$conf['tpl_MyOwn']['menu2Permanent'] = false;

/** 
 * Displays Wiki Bar (Recent Changes, Old Version, Login)
 */
$conf['tpl_MyOwn']['wikiBar'] = false;

/** 
 * Search Form visible on page
 */
$conf['tpl_MyOwn']['searchForm'] = true;

//Setup: vim enc=utf-8 tb=4
?>
