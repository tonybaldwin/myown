<?php
/**
 * Example footer include
 *
 * This file shows you how to use the include hooks. However I recommend to
 * create your own complete new template instead. 
 */
 ?>
<div class="footer">
    <div class="footnotes">
	<?php if ( true == $conf['tpl_MyOwn']['searchForm'] ) { ?>
	<div class="searchform"> <?php tpl_searchform() ?> </div>
	<?php } ?>
          <?echo $conf['tpl_MyOwn']['footer']; ?>
    </div>
</div>

