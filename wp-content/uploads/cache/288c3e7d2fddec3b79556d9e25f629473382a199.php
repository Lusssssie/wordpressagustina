<article <?php post_class() ?>>
  <header>
    <h1 class="entry-title"><?php echo get_the_title(); ?></h1>
    <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </header>
  <div class="entry-content">

    <?php echo e($introduction); ?>

  
    <?php echo wp_get_attachment_image($image->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image" ) ); ?>


    <?php echo wp_get_attachment_image($image2->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image2" ) ); ?>


    <?php echo wp_get_attachment_image($image3->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image3" ) ); ?>


    <?php echo wp_get_attachment_image($image4->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image4" ) ); ?>


    <?php echo wp_get_attachment_image($image5->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image5" ) ); ?>


    <?php echo wp_get_attachment_image($image6->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image7->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image8->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image9->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image10->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image11->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image12->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image13->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image14->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image15->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image16->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image17->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image18->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image19->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo wp_get_attachment_image($image20->ID , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image6" ) ); ?>


    <?php echo e($description); ?>


    <?php echo e($description2); ?>


    <?php echo e($description3); ?>

    
    <?php the_content() ?>
  </div>
</article>
