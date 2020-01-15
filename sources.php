<?php /*
    Template Name: Source
*/?>

<?php get_header()?>

<main id="sources">
    <section id="lower">
        <p><?php echo get_field('intro')?></p>
    </section>
    <div class="img" style="background-image:url(<?php echo get_field('seperator_1')?>)">
    </div>
    <section class="content" style="background:<?php echo get_field('content_1_colour')?>">
        <?php echo get_field('content_1')?>
    </section>
    <div class="img" style="background-image:url(<?php echo get_field('seperator_2')?>)">
    </div>
    <section class="content" style="background:<?php echo get_field('content_2_colour')?>">
        <?php echo get_field('content_2')?>
    </section>
    <section id="tip">
        <h2>Tip
            <img
                src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/875px-Noun_Project_lightbulb_icon_1263005_cc.svg_.png">
        </h2>
        <p>
            <?php echo get_field('tip')?>
        </p>
    </section>
</main>

<?php get_footer()?>