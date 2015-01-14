<?php
/**
 * MyOwn DokuWiki Template
 *
 * @author: Tony Baldwin
 * @homepage: http://tonybaldwin.me
 */

 require_once(dirname(__FILE__).'/tpl_functions.php');
 @include(dirname(__FILE__).'/header.php');
?>
<body>
<?php @include(dirname(__FILE__).'/topheader.html')?>
<div class="page">
     <div class="container">
    <div class="header">
      <div class="topbar">
	<div class="navi">
				<?php tpl_menu1(); ?>
 	</div>
      </div>

    </div>
    <?php /*old includehook*/ @include(dirname(__FILE__).'/header.html')?>

  <?php flush()?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>
  <?php
    if ( !tpl_isMenu2() )
    { 
  ?>
      <div class="content">
  			<?php html_msgarea()?>
        <?php tpl_content()?>
      </div>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>
  <p><br /><br /></p>

  <?php 
    } 
    else 
    { 
  ?>
      <div class="content_with_sidebar">
        <?php tpl_content()?>
  		<?php html_msgarea()?>
      </div>
      <div class="sidebar">
      <b class="rtop"><b class="r1"></b><b class="r2"></b><b class="r3"></b><b class="r4"></b></b>
      <?php tpl_menu2() ?>
      <b class="rbottom"><b class="r4"></b><b class="r3"></b><b class="r2"></b><b class="r1"></b></b>
      </div>
  <?php } ?>

  <div class="clearer">&nbsp;</div>

  <?php flush()?>

  <?php if ($INFO['perm'] > AUTH_READ || true == $conf['tpl_MyOwn']['wikiBar']  ) { ?>
  <div class="stylefoot">
    <div class="meta">
      <div class="doc">
        <?php tpl_pageinfo()?>
      </div>
      <div class="user">
        <?php tpl_userinfo()?>
      </div>
    </div>
    <?php tpl_bottombar(); ?>
    <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>
  </div>
  <?php } ?>
  <p><br /><br /></p>
<?php /*old includehook*/ @include(dirname(__FILE__).'/footer.php')?>

</div>
</div>

<?php tpl_indexerWebBug();?>

</body>
</html>
