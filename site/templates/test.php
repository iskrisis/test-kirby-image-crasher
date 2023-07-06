<h1><?= $page->title() ?></h1>
<style>
	img {
		max-width: 100%;
		height: auto;
	}
</style>
<?php
$images = $page->images();
?>

<div style="display: grid; grid-template-columns: repeat(5, minmax(0, 1fr));">
<?php foreach($images as $image): ?>

    <picture>
        <source
            srcset="<?= $image->srcset('avif') ?>"
            type="image/avif"
        >
        <source
            srcset="<?= $image->srcset('webp') ?>"
            type="image/webp"
        >
        <img

            alt="<?= $image->alt() ?>"
            src="<?= $image->resize(300)->url() ?>"
            srcset="<?= $image->srcset() ?>"
            width="<?= $image->resize(1800)->width() ?>"
            height="<?= $image->resize(1800)->height() ?>"
        >
    </picture>

<?php endforeach; ?>
</div>