<?php
/* @var $section array */
?>
<section class="hero">
    <?= $section['hero_headline'] ?>
	<?= $section['hero_subline'] ?>
	<?= $section['hero_cta_text'] ?>
	<?= get_image_info($section['hero_image'])['src'] ?>
</section>
