<?php
/**
 * Starter Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

if (!empty($block['data']['__is_preview'])) {
    echo "<img style='max-width: 100%;height: auto;width: 100%;' src=" . get_template_directory_uri() . "/images/blocks/resources.png'>";
    return;
}



// Load values and assign defaults.
$title = get_field( 'title' );
$copy = get_field( 'copy' );


?>
<div class="resourcesFluid">
   <div class="container">
       <div class="grid">
           <div class="col-sm-12">
               <div class="maincopy intro">
                   <h2><?php echo $title; ?></h2>
                   <?php if($copy){ ?>
                   <p><?php echo $copy; ?></p>
                   <?php } ?>
               </div>
           </div>
       </div>
       <div class="grid resourceGrid">

           <?php if( have_rows('resource_card') ): ?>
                   <?php while( have_rows('resource_card') ): the_row();
                       $title = get_sub_field('title');
                       ?>
                       <div class="col-sm-6 col-grid">
                           <div class="resourceCard">
                               <h3><?php echo $title; ?></h3>
                               <ul>
                                   <?php if( have_rows('resources') ): ?>
                                           <?php while( have_rows('resources') ): the_row();
                                               $link = get_sub_field('link');
                                               $select_icon = get_sub_field('select_icon');
                                               if( $link ):
                                                   $link_url = $link['url'];
                                                   $link_title = $link['title'];
                                                   $link_target = $link['target'] ? $link['target'] : '_self';
                                               ?>
                                                    <li><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="icon <?php echo $select_icon; ?>"></span><?php echo esc_html( $link_title ); ?><span class="arrow fa-regular fa-arrow-right"></span></a></li>
                                               <?php endif; ?>
                                           <?php endwhile; ?>
                                   <?php endif; ?>
                               </ul>
                           </div>
                       </div>
                   <?php endwhile; ?>
           <?php endif; ?>

       </div>
   </div>
</div>