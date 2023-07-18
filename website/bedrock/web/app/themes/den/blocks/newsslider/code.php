<?php
if (!empty($block['data']['__is_preview'])) {
    echo "<img style='max-width: 100%;height: auto;width: 100%;' src=" . get_template_directory_uri() . "/images/blocks/slider.png'>";
    return;
}

$copy_full = get_field('slider');
?>

<div class="newsSliderFluid">
    <div class="container">
    <div class="grid">
        <div class="col-sm-4">
            <div class="maincopy">
            <h2>Latest Updates from our Newsroom</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Interdum velit pharetra tristique sed. Sit viverra commodo maecenas nibh ridiculus posuere neque vitae turpis. Fusce ullamcorper eget nisl sed. Risus leo risus curabitur vitae in massa sodales.</p>
            </div>
            <a href="#" class="mainCTA cta2">View News, Press & CEO Messages</a>
        </div>
        <div class="col-sm-8">
            <div class="slider">
                <?php if( have_rows('slider') ): ?>
                    <?php while( have_rows('slider') ): the_row();
                        $image = get_sub_field('image');
                        ?>
                        <div>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="flex-img">
                            <div class="maincopy">
                            <p>Fruition’s expertise, attentiveness to new trends, commitment to partner relationships and finely tuned interactive creative and technical processes generate carefully crafted digital marketing and digital products that empower your team, educate your audience and engage your customers.</p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
</div>