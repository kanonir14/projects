<!-- Gallery -->
<?php if(!empty(get_gallery()) || is_array(get_gallery()) || is_object(get_gallery())): ?>
<section class="gallery">
	<div class="container">
		<h4>Галерея наших работ</h4>
		<div class="flex  flex-wrap">
			
			<?php foreach ( get_gallery() as $attachment ) : ?>
			<a data-fancybox="gallery" href="<?php echo $attachment->url ?>"><img src="<?php echo $attachment->url ?>" alt=""></a>
		<?php endforeach ?>
		
		</div>
	</div>
</section>
<?php endif; ?>