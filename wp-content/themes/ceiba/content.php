<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<div class="col-md-4  pt-1 pl-1 pb-1 pr-1">
	<a class="content-img-blog" href="<?php the_permalink()?>">
		<?php
		
			/* Se guarda la url de la imagen en tamaño full */
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'blog'); 
			/*Se imprime la imagen en el bloque correspondiente*/
			echo ' <img class="img-fluid img-blog" src="'.esc_url($featured_img_url).'" alt="Imagen Blog"> '
		?>
	</a>
	<h3 class="text-uppercase  border-evento " style="margin: 0px;">
		<a class="title-blog" href="<?php the_permalink()?>">
			<?php the_title();  ?>
		</a>
	</h3> 
	<p class="blog-date"><i class="fa fa-calendar pd-left"></i><?php the_time(' l j, F  Y');  ?></p>
	
</div>
