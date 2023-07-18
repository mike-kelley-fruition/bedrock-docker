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
    echo "<img style='max-width: 100%;height: auto;width: 100%;' src=" . get_template_directory_uri() . "/images/blocks/mediadouble.png'>";
    return;
}



// Load values and assign defaults.
$background_color = get_field( 'background_color' );
$text_color       = get_field( 'text_color' );


?>
<div class="mediaDoubleFluid">
   <div class="container">
       <div class="grid">
           <div class="col-sm-6">
               <div class="grid grid-bleed">
                   <div class="col-6 col-sm-7 media1Column">
                       <div class="media1Wrap">
                           <div class="media1" style="background-image:url('https://den.ddev.site/app/uploads/2023/07/placeholder.jpeg');"></div>
                       </div>
                   </div>
                   <div class="col-6 col-sm-5 media2Column">
                       <div class="media2Wrap">
                           <div class="media2" style="background-image:url('https://den.ddev.site/app/uploads/2023/07/placeholder.jpeg');"></div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-sm-6 mediaDoubleRight">
               <div class="maincopy">
                    <h2>There’s Something for Everyone at DEN</h2>
               </div>

               <div class="iconList iconListFirst">
                   <span class="icon fa-solid fa-burger-soda"></span>
                   <h3>Dine with DEN<span class="fa-regular fa-arrow-right"></span></h3>
                   <p>From local favorites to popular national names, there are a variety of dining options to enjoy at DEN.</p>
               </div>
               <div class="iconList">
                   <span class="icon fa-solid fa-burger-soda"></span>
                   <h3>Dine with DEN<span class="fa-regular fa-arrow-right"></span></h3>
                   <p>From local favorites to popular national names, there are a variety of dining options to enjoy at DEN.</p>
               </div>
               <div class="iconList">
                   <span class="icon fa-solid fa-burger-soda"></span>
                   <h3>Dine with DEN<span class="fa-regular fa-arrow-right"></span></h3>
                   <p>From local favorites to popular national names, there are a variety of dining options to enjoy at DEN.</p>
               </div>
               <div class="iconList">
                   <span class="icon fa-solid fa-burger-soda"></span>
                   <h3>Dine with DEN<span class="fa-regular fa-arrow-right"></span></h3>
                   <p>From local favorites to popular national names, there are a variety of dining options to enjoy at DEN.</p>
               </div>

               <a class="mainCTA cta2" href="#">Explore Dine-Shop-Relax</a>
           </div>
       </div>
   </div>
</div>