<?php get_header()?>

<main id="high-school">
    <h2>The atmosphere is a layer of gases held in place by gravity directly above the earths surface.</h2>
    <section id="why">
        <h2>Why is the atmosphere important?</h2>
        <p>The atmosphere perform several essential functions, all of which are needed to sustain life on earth. There
            are 4 major gases which make up air in Earth's atmosphere, they are Nitrogen (78%), Oxygen (21%), Argon
            (0.93%) and Carbon dioxide (0.04%). These gases all play a role in the absorption and retention of heat from
            the suns rays, which inevitably keeps Earth at the perfect temperature to support life forms. Oxygen is also
            an essential gas which is used in the process of respiration by nearly every living organism on the planet.
        </p>
    </section>
    <?php $page = get_queried_object();
                print_r($page->post_content)?>
</main>

<?php get_footer()?>