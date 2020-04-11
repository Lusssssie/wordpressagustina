<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php if(!have_posts()): ?>
    <div class="alert alert-warning">
      <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

    </div>
    <?php echo get_search_form(false); ?>

  <?php endif; ?>

  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endwhile; ?>

  <?php $__currentLoopData = $get_reas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="published">
        <a href="http://wordpressagustina.localhost/portfolio_items/<?php echo e($rea->post_title); ?>/">
        <?php echo e($rea->post_title); ?>

        <?php echo wp_get_attachment_image($rea->image , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image" ) ); ?>

        </a>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <?php $__currentLoopData = $get_jeux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jeu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a href="http://wordpressagustina.localhost/portfolio_items/<?php echo e($jeu->post_title); ?>/">
        <?php echo e($jeu->post_title); ?>

        <?php echo wp_get_attachment_image($jeu->image , array('400', '300'), "", array( "class" => "img-responsive", "alt" => "image" ) ); ?>

      </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>



<!--PROBLEME : N ARRIVE PAS A AFFICHER L IMAGE 
AURAIT BESOIN D AIDE POUR AFFICHER LES POSTS ET METTRE EN PLACE LES CHAMPS (j'ai deja commencé mais je suis pas sure d avoir fait ce qu'il fallait, ni de comment faire le reste)

ET G DES ERREURS DANS LA CONSOLE QUE JE NE COMPRENDS PAS ET NE SAIS PAS DEPUIS QUAND JE LES AI

-->
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>