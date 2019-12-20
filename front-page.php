<?php get_header()?>

<main id="front">
    <section id="intro">
        <h2>Our Purpose</h2>
        <p><?php echo get_field('purpose')?></p>
    </section>
    <section id="schools">
        <a href="<?php bloginfo('wpurl')?>/primary-school" class="school">
            <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/A114.jpg">
            <div class="overlay">
                <h3>Primary School</h3>
            </div>
        </a>
        <a href="<?php bloginfo('wpurl')?>/high-school" class="school">
            <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/A113.jpg">
            <div class="overlay">
                <h3>High School</h3>
            </div>
        </a>
    </section>
</main>

<?php get_footer()?>