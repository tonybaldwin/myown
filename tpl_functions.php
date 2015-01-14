<?php
/**
 * functions for MyOwn Template
 *
 * License: GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 * @author: Tony Baldwin
 * @homepage: http://tonybaldwin.me
 */

require_once('conf.php');
 
/**
 * Displays the menu1 
 *
 */
function tpl_menu1() 
{
    global $conf, $ID, $REV, $INFO;

    $html = p_wiki_xhtml ('menu1', '', false );
    $html = str_replace( '<p>', '', $html );
    $html = str_replace( '</p>', '', $html );

    $pos = strrpos($ID, ":");

    if ($pos === false) {
        $html = str_replace( '<a href="/'.$ID.'"', '<a href="/'.$ID.'" class="activepage"', $html );
        } 
    else {
        $IDLINK = str_replace (":", "/", $ID);
        $html = str_replace( '<a href="/'.$IDLINK.'"', '<a href="/'.$IDLINK.'" class="activepage"', $html ); 
    };

    if ($pos !== false) {
        $html = str_replace( '<a href="/'.$ID.'"', '<a href="/'.$ID.'" class="activepage"', $html );
    };

    echo $html;

    if ( $INFO['perm'] > AUTH_READ )
    {
        print '<ul><li><a href="?id=menu1&amp;do=edit" class="wikilink2" title="Edit">Edit</a></li></ul>';
    }
}

/**
 * Displays the bottombar
 *
 */
function tpl_bottombar() 
{
    global $INFO,$ID,$lang;
    $perm = $INFO['perm'];
   
    echo '<a href="?do=recent" class="interwiki" title="'.$lang['btn_rec'].'">'.$lang['btn_recent'].'</a>'
        .'&nbsp;&middot;&nbsp;';
    
    if($perm > AUTH_READ) {
        echo '<a href="?do=revisions" class="interwiki" title="'.$lang['btn_revs'].'">'.$lang['btn_revs'].'</a>'
            .'&nbsp;&middot;&nbsp;';
        if(file_exists(wikiFN($ID))) {
            echo '<a href="?id='.$ID.'&amp;do=edit" class="interwiki" title="'.$lang['btn_edit'].'">'.$lang['btn_edit'].'</a>';
        } else {
            echo '<a href="?id='.$ID.'&amp;do=edit" class="interwiki" title="'.$lang['btn_create'].'">'.$lang['btn_create'].'</a>';
        }
        echo '&nbsp;&middot;&nbsp;';
    } else {
        echo '<a href="?id='.$ID.'&amp;do=edit" class="interwiki" title="'.$lang['btn_source'].'">'.$lang['btn_source'].'</a>'
            .'&nbsp;&middot;&nbsp;';
    }

    if($perm > AUTH_WRITE) {
        echo '<a href="?do=admin" class="interwiki" title="'.$lang['btn_admin'].'">'.$lang['btn_admin'].'</a>'
            .'&nbsp;&middot;&nbsp;';
    }

    if(isset($INFO['userinfo']['name'])) {
				echo '<a href="?do=profile" class="interwiki" title="'.$lang['btn_profile'].'">'.$lang['btn_profile'].'</a>'
            .'&nbsp;&middot;&nbsp;';
				echo '<a href="?do=logout" class="interwiki" title="'.$lang['btn_logout'].'">'.$lang['btn_logout'].'</a>';
    } else {
        echo '<a href="?do=login" class="interwiki" title="'.$lang['btn_login'].'">'.$lang['btn_login'].'</a>';
    }
}

/**
 * Displays the menu2 
 *
 */
function tpl_menu2() 
{
	global $conf, $ID, $REV, $INFO, $lang;
	$currID = false;

	$pos = strrpos($ID, ":");
    	if ($pos !== false) {
        	$namespacechar = ":";
        }
	else {
		$namespacechar = "/";
	}


	if ( $conf['tpl_MyOwn']['menu2Permanent'] )
	{
		$path = "";
	}
	else
	{
		if ( false != strpos($ID, $namespacechar) )
		{
			$path = substr($ID, 0, strpos($ID, $namespacechar));
		}
		else
		{
			$path = $ID;
		}
	}

	if (  $INFO['perm'] >= AUTH_READ )
	{
		print "<h1>";
		print $path;
		print "</h1>";
		print p_wiki_xhtml($path.$namespacechar."menu2", '', false);
	}

	if (  $INFO['perm'] > AUTH_READ )
	{
		print '<ul><li><a href="?id='.$path.$namespacechar.'menu2&amp;do=edit" class="wikilink1" title="Edit"><b>Edit</b></a></li></ul>';
	}
}

/**
 * Check if menu2 is present for this page
 *
 */
function tpl_isMenu2()
{
	global $conf, $ID, $REV, $INFO, $ACT;

	if ( $ACT == 'edit' || $ACT == 'preview' )
	{
		return false;
	}

	// Permanent Sidebar
	if ( true == $conf['tpl_MyOwn']['menu2Permanent'] && true == file_exists( (wikiFN("menu2") ) ) )
	{
		return true;	
	}
	
	if ( false != strpos($ID, ":") )
	{
		$path = substr($ID, 0, strpos($ID, ":"));
	}
	else
	{
		$path = $ID;
	}
	$path .= ":";

	if ( file_exists(wikiFN($path."menu2")) )
	{
		return true;
	}
	else
	{
		return false;
	}
}

?>
