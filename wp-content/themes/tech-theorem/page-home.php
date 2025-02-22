<?php
/**
 * Template Name: Home Page
 */
 get_header();
 ?>
 <section class="hero-section d-flex align-items-center">
 <div class="container">
   <div class="row">
     <div class="col-md-6">
       <div class="testimonial-card">
         <div class="mb-3">
         <?php 
$image = get_field('client_image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
           <h2><?php echo the_field('heading'); ?></h2>
         </div>
         <p><?php echo the_field('banner_content'); ?></p>
         <div class="author-info d-flex align-items-center mt-4">
            <?php 
            $image = get_field('client_avutar');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

           <div class="ms-3">
             <strong><?php echo the_field('client_name'); ?></strong><br>
             <small><?php echo the_field('client_designation'); ?></small>
           </div>
         </div>
       </div>
     </div>
     <!-- <div class="col-md-6 rider-image d-flex justify-content-center align-items-center">
       
     </div> -->
   </div>
 </div>
</section>

<section>
 <div class="container challenge-section">
     <div class="row challenge-row">
       <div class="col-md-4">
         <h2 class="challenge-title"><?php echo the_field('challenge_section_heading'); ?></h2>
         <p>
         <?php echo the_field('challenge_section_content'); ?>
         </p>
       </div>
       <div class="col-md-8">
         <div class="content-box">
         <?php 
            $image = get_field('challenge_section_image');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
         </div>
       </div>
     </div>
   </div>
</section>

<?php get_footer(); ?>