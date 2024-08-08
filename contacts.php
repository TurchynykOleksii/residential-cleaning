<?php
/*
Template Name: contacts tamplate
*/
 get_header(); ?>

<main class="main">


<section class="service-map">
    <div class="container">
        <div class="service-map__inner">
            <div class="service-map__info">
                <h3 class="service-map__title">Service map</h3>
                <div class="service-map__img-mob">
                    <img src="<?=get_template_directory_uri() ?>/build/img/general/map.png" alt="map image">
                </div>
                <p class="service-map__text">Discover the neighborhoods we serve. Let us transform your space into a
                    sanctuary of cleanliness and comfort!
                    Contact us today to schedule your cleaning appointment and experience the difference firsthand.</p>
                    <ul class="service-map__list">
                        <li class="service-map__item">
                            <span>Contact us:</span>
                            <a href="tel:14378684158">1(437)868-4158</a>
                        </li>
                        <li class="service-map__item">
                            <span>Cleaning hours: </span>
                            <p>Monday - Saturday 8 am to 8 pm</p>
                        </li>
                        <li class="service-map__item">
                            <span>Office hours:</span>
                            <p>Monday - Saturday 8 am to 8 pm</p>
                        </li>
                        <li class="service-map__item">
                            <span>Online booking:</span>
                            <p>24/7</p>
                        </li>
                    </ul>
            </div>
            <div class="service-map__img">
                <img src="<?=get_template_directory_uri() ?>/build/img/general/map.png" alt="map image">
            </div>

        </div>
    </div>
</section>

<section class="feetback">
    <div class="feetback__inner feetback__inner-contact">
        <div class="container">
            <div class="feetback__wrapper">
                <div class="feetback__form-wrapper">
                    <h5 class="feetback__black">Quick callback order</h5>
                    <p class="feetback__black">Please enter your details and we will call you</p>
                    <?php echo do_shortcode( '[contact-form-7 id="b59dd04" title="Call back" html_class="feetback__form"]')?>

                </div>
                <div class="feetback__info">
                    <h6 class="feetback__black">Get a qoute</h6>
                    <p class="feetback__black">Say goodbye to dirt and grime and hello to a fresh, revitalized space! Whether you're preparing
                        for a special event, moving into a new home, or simply craving a pristine environment, our
                        cleaning service is the solution you've been searching for.</p>
                    <a href="#" class="bttn feetback__btn">Request service <img src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
                            alt="arrow icon"></a>
                </div>
            </div>
        </div>
    </div>
</section>


</main>

<?php get_footer(); ?>