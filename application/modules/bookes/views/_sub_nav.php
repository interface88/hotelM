<?php

$checkSegment = $this->uri->segment(4);
$areaUrl = SITE_AREA . '/content/bookes';

?>
<ul class='nav nav-pills'>
	<li<?php echo $checkSegment == '' ? ' class="active"' : ''; ?>>
		<a href="<?php echo site_url($areaUrl); ?>" id='list'>
            <?php echo lang('bookes_list'); ?>
        </a>
	</li>
	<li<?php echo $checkSegment == 'create' ? ' class="active"' : ''; ?>>
		<a href="<?php echo site_url($areaUrl . '/create'); ?>" id='create_new'>
            <?php echo lang('bookes_new'); ?>
        </a>
	</li>
</ul>