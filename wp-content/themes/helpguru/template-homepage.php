<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

<style>
	html, body {
		background: linear-gradient(to right, #19308A , #0D74BD);
	}

	#site-header #logo img {
		max-width: 80%;
	}

	#site-header,
	#ht-site-container,
	#page-header,
	#homepage-features,
	#site-footer {
		background: none !important;
	}
	
	#site-footer #copyright {
		color: #fff !important;	
	}
    #site-footer #copyright a, #site-footer #copyright a:visited {
      color: #c2c2c3;
      }	
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- homepage-features for logged users only -->
	<?php if (is_user_logged_in()){ ?>	
		<section id="page-header" class="clearfix ph-align-center ph-large">
		  <div class="ht-container">
			<?php if (class_exists( 'HT_Knowledge_Base' )): ?>
				<?php hkb_get_template_part( 'hkb-searchbox', 'search' ); ?>
			<?php endif;  ?>
		  </div>
		</section>

		<section id="homepage-features" class="clearfix">
		<div class="ht-container">

		<?php
		// Get index ID
		$ht_index_id = get_option('page_for_posts');

		// Get post counts
		$ht_count_posts = wp_count_posts();
		$ht_count_posts = $ht_count_posts->publish;

		// Get category number
		$ht_count_category = get_terms( 'category');
		if ( !is_wp_error( $ht_count_category ) ) {
			$ht_count_category = count($ht_count_category);
		} else {
			$ht_count_category = 0;
		}

		if (class_exists( 'HT_Knowledge_Base' )):
		// Get kb post counts
		$ht_count_kbposts = wp_count_posts('ht_kb');
		$ht_count_kbposts = $ht_count_kbposts->publish;
		// Get kb category number
		$ht_count_kbcategory = get_terms( 'ht_kb_category');
		if ( !is_wp_error( $ht_count_kbcategory ) ) {
			$ht_count_kbcategory = count($ht_count_kbcategory);
		} else {
			$ht_count_kbcategory = 0;
		}
		endif; 

		if (class_exists( 'bbPress' )):
		// Get forum topcs counts
		$ht_count_bbp_topics = wp_count_posts('topic');
		$ht_count_bbp_topics = $ht_count_bbp_topics->publish;

		// Get forum post counts
		$ht_count_bbp_reply = wp_count_posts('reply');
		$ht_count_bbp_reply = $ht_count_bbp_reply->publish;
		endif; 

		// Get number of blocks
		$ht_hpf_count = 1;
		if (class_exists( 'HT_Knowledge_Base' )):
		$ht_hpf_count++;
		endif; 
		if (class_exists( 'bbPress' )):
		$ht_hpf_count++;
		endif; 

		// Set column variable
		if ( $ht_hpf_count == 1) {
			$ht_hpf_col = 'ht-grid-12';
		} elseif ( $ht_hpf_count == 2) {
			$ht_hpf_col = 'ht-grid-6';
		} else {
			$ht_hpf_col = 'ht-grid-4';
		}
		?>

		  <div class="ht-grid ht-grid-gutter-20 navbar navbar-default">

				<div class="ht-grid-col ht-grid-3">
				  <a href="wp-login.php">
					<div class="hf-block hf-posts-block" style="background: none; cursor: default;">
					</div>
				  </a>
				</div>
				
				<?php if (class_exists( 'HT_Knowledge_Base' )): ?>
				<div class="ht-grid-col <?php echo $ht_hpf_col; ?>">
				<a href="<?php echo get_post_type_archive_link( 'ht_kb' ) ?>">
					<div class="hf-block hf-kb-block">
					<i class="fa fa-lightbulb-o"></i>
					<h4><?php _e( 'Toda Base de Conhecimento', 'helpguru' ); ?></h4>
					<h5><?php echo $ht_count_kbposts; ?> <?php _e( 'Artigos', 'helpguru' ); ?>  /  <?php echo $ht_count_kbcategory; ?> <?php _e( 'Categorias', 'helpguru' ); ?></h5>
					</div>
				</a>
				</div>
				<?php endif; ?>	
				
				<div class="ht-grid-col ht-grid-3">
				  <a href="wp-login.php">
					<div class="hf-block hf-posts-block" style="background: none; cursor: default;">
					</div>
				  </a>
				</div>	
				
		  </div>
		</div>
		</section>
	<?php }else{ ?>
		<style>body {display: flex;}</style>
	<?php } ?>
	<!-- end of homepage-features -->

<?php get_footer(); ?>