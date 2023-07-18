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
    echo "<img style='max-width: 100%;height: auto;width: 100%;' src=" . get_template_directory_uri() . "/images/blocks/tsa.png'>";
    return;
}



// Load values and assign defaults.
$background_color = get_field( 'background_color' );
$text_color       = get_field( 'text_color' );


?>
<div class="parkingFluid">
   <div class="container">
       <div class="grid">
           <div class="col-md-6">
               <h2>Parking Lots and Availability</h2>
           </div>
           <div class="col-md-6">
               <div class="btn-group-custom" role="group">
                   <div id="open" type="button" class="customBtn active">Parking Lots & Availability</div>
                   <div id="directions" type="button" class="customBtn">Getting To/From DEN</div>
               </div>
           </div>
       </div>
       <div class="grid">
           <div class="col-sm-12">
               <p class="parkingKey"><span class="fa-solid fa-person-walking"></span>Walk to Terminal</p>
               <p class="parkingKey"><span class="fa-solid fa-bus"></span>Free Shuttle to Terminal</p>
           </div>
       </div>
       <div class="grid">

           <div class="col-custom20 col-grid">
               <div class="parkingCard">
                   <p>Shuttle Longs Peak</p>
                   <div class="statusWrap">
                       <div class="statusButton open">
                           <span class="fa-regular fa-check"></span> Open
                       </div>
                       <span class="icon fa-solid fa-person-walking"></span>
                       <span class="icon fa-solid fa-bus"></span>
                   </div>
               </div>
           </div>

           <div class="col-custom20 col-grid">
               <div class="parkingCard">
                   <p>Economy East</p>
                   <div class="statusWrap">
                       <div class="statusButton closed">
                           <span class="fa-regular fa-xmark"></span> Currently Closed
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-custom20 col-grid">
               <div class="parkingCard">
                   <p>Shuttle Longs Peak</p>
                   <div class="statusWrap">
                       <div class="statusButton almost">
                           <span class="fa-regular fa-circle-three-quarters-stroke"></span> Almost Full
                       </div>
                       <span class="icon fa-solid fa-bus"></span>
                   </div>
               </div>
           </div>


           <div class="col-custom20 col-grid">
               <div class="parkingCard">
                   <p>Shuttle Longs Peak</p>
                   <div class="statusWrap">
                       <div class="statusButton full">
                           <span class="fa-solid fa-battery-full"></span> Full
                       </div>
                       <span class="icon fa-solid fa-bus"></span>
                   </div>
               </div>
           </div>

           <div class="col-custom20 col-grid">
               <div class="parkingCard">
                   <p>Shuttle Longs Peak</p>
                   <div class="statusWrap">
                       <div class="statusButton almost">
                           <span class="fa-regular fa-circle-three-quarters-stroke"></span> Almost Full
                       </div>
                       <span class="icon fa-solid fa-bus"></span>
                   </div>
               </div>
           </div>

           <div class="col-custom20 col-grid">
               <div class="parkingCard">
                   <p>Shuttle Longs Peak</p>
                   <div class="statusWrap">
                       <div class="statusButton almost">
                           <span class="fa-regular fa-circle-three-quarters-stroke"></span> Almost Full
                       </div>
                       <span class="icon fa-solid fa-bus"></span>
                   </div>
               </div>
           </div>


       </div>
   </div>
</div>