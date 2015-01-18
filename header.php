<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
/**
 * MyOwn DokuWiki Template
 *
 * @author: Tony Baldwin
 * @homepage: http://myownsite.me
 */
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>" lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
	<title><?php tpl_pagetitle()?> [<?php echo hsc($conf['title'])?>]</title>
	<meta name="Author" content="Marcin Mierzejewski @ Zenzire"/>

<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,500,500italic' rel='stylesheet' type='text/css'>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Keywords" content="<?php if ( $conf['tpl_MyOwn']['keywords'] ) echo $conf['tpl_MyOwn']['keywords'].","; ?><?php tpl_pagetitle()?>"/>
  <meta name="Description" content="<?php if ( $conf['tpl_MyOwn']['description'] ) echo $conf['tpl_MyOwn']['description']; ?><?php tpl_pagetitle()?>"/>
  <?php tpl_metaheaders()?>
  <link rel="stylesheet" media="screen" type="text/css" href="<?php echo DOKU_TPL?>css/layout.css" />
  <link rel="stylesheet" media="screen" type="text/css" href="<?php echo DOKU_TPL?>css/design.css" />
  <link rel="stylesheet" media="screen" type="text/css" href="<?php echo DOKU_TPL?>css/topbar.css" />
  <link rel="stylesheet" media="screen" type="text/css" href="<?php echo DOKU_TPL?>css/sidebar.css" />

  <?php if($lang['direction'] == 'rtl') {?>
  <link rel="stylesheet" media="screen" type="text/css" href="<?php echo DOKU_TPL?>css/rtl.css" />
  <?php } ?>

  <?php @include(dirname(__FILE__).'/meta.html')?>
</head>
