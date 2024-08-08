<?php
/*
Template Name: post tamplate
*/
 get_header(); ?>

<main class="main">

    <section class="banner">
        <div class="container">
            <div class="banner__inner banner__post">
                <p class="banner__headline">Experience the Difference: </p>
                <h1 class="banner__title">Post-Construction Cleaning</h1>
                <button class="banner__btn"><span>Call now</span> <img
                        src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
                        alt="icon arrow"></button>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="about__inner">
                <h2 class="about__title">Post-Construction Cleaning</h2>
                <div class="about__text">
                    <p>Allow us to introduce our After Construction or After Repair Works Cleaning Services, a
                        specialized solution crafted to transition your space from a construction zone to a pristine and
                        livable environment. We recognize the unique hurdles that arise following construction or
                        renovation projects, and our committed team is dedicated to facilitating a thorough cleaning
                        process. </p>
                    <p>Our comprehensive service commences by addressing construction debris and dust, meticulously
                        sweeping and vacuuming every surface to eradicate particles and residues. We prioritize
                        meticulous attention to detail, targeting hard-to-reach areas and crevices where dust tends to
                        accumulate during construction.</p>
                    <p>Windows, frames, and sills receive meticulous cleaning to restore transparency and maximize
                        natural light. We deploy potent cleaning agents to eliminate any adhesive residues, paint
                        splatters, or other construction-related stains, ensuring a flawless finish on surfaces
                        throughout your space.</p>
                    <p>In the kitchen, our team focuses on eliminating post-construction dust from cabinets,
                        countertops, and appliances. We pay special attention to areas surrounding electrical outlets
                        and switches to uphold safety and cleanliness standards.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="factors">

        <div class="factors__inner">
            <div class="container">
                <div class="factors__wrapper">
                    <h4 class="factors__title">On what factors does the price rely?</h4>
                    <ol class="factors__list">
                        <li class="factors__item">Size of the space: Larger areas typically require more time and
                            resources
                            to
                            clean.</li>
                        <li class="factors__item">Level of cleanliness: The extent of dirt, stains, and clutter can
                            impact
                            the
                            required effort and materials.</li>
                        <li class="factors__item">Frequency of service: Regular cleanings may be priced differently from
                            one-time or occasional cleanings.</li>
                        <li class="factors__item">Specific services requested: Additional tasks or specialized cleaning
                            requirements can influence the overall cost.</li>
                        <li class="factors__item">Location: Prices may vary based on geographical location and local
                            market
                            rates.</li>
                        <li class="factors__item">Special considerations: Unique factors such as pet hair, eco-friendly
                            cleaning
                            products, or specific cleaning challenges may affect pricing</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="discount">
        <div class="container">
            <div class="discount__inner">
                <h5 class="discount__title">How to get discount? <div class="discount__img-mob"><img
                            src="<?=get_template_directory_uri() ?>/build/img/general/procent.png" alt="discount image">
                    </div>
                </h5>
                <div class="discount__info">
                    <img src="<?=get_template_directory_uri() ?>/build/img/general/procent.png" alt="discount image">
                    <p>
                        <span>How can you avail of discounts? Explore these dependable methods:</span>
                        Receive a 5% cashback by providing transparent feedback on our cleaning or any other
                        services.Get a
                        10% discount when you
                        subscribe to our cleaning service along with additional services as a complimentary gift. Enjoy
                        a
                        10% discount by sharing a promo code with a friend, benefiting both of you with impeccable
                        cleaning
                        and discounted rates!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="feetback">
        <div class="feetback__inner">
            <div class="container">
                <div class="feetback__wrapper">
                    <div class="feetback__form-wrapper">
                        <h5>Quick callback order</h5>
                        <p>Please enter your details and we will call you</p>
                        <?php echo do_shortcode( '[contact-form-7 id="b59dd04" title="Call back" html_class="feetback__form"]')?>

                    </div>
                    <div class="feetback__info">
                        <h6>Get a qoute</h6>
                        <p>Say goodbye to dirt and grime and hello to a fresh, revitalized space! Whether you're
                            preparing
                            for a special event, moving into a new home, or simply craving a pristine environment, our
                            cleaning service is the solution you've been searching for.</p>
                        <a href="#" class="bttn feetback__btn">Request service <img
                                src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
                                alt="arrow icon"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="customers">
        <div class="container">
            <div class="customers__inner">
                <h6 class="customers__title">What are our customers saying?</h6>
                <ul class="customers__list">
                    <li class="customers__item">
                        <span class="customers__name">Alyssa Wilen</span>
                        <p class="customers__text">I was extremely satisfied with the cleaning service provided by the
                            professional cleaners. They were thorough, efficient, and paid close attention to detail.
                        </p>
                        <ul class="customers__stars">
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                        </ul>
                    </li>
                    <li class="customers__item">
                        <span class="customers__name">Konnie Sizemore</span>
                        <p class="customers__text">The move-in cleaning service was outstanding, and I was impressed by
                            how
                            clean and fresh everything looked. The team was friendly, professional.</p>
                        <ul class="customers__stars">
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                        </ul>
                    </li>
                    <li class="customers__item">
                        <span class="customers__name">Lindsay Croker</span>
                        <p class="customers__text">My home has never looked or smelled so clean, and I would highly
                            recommend this service to anyone looking for a top-notch cleaning experience.</p>
                        <ul class="customers__stars">
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                            <li class="customers__star">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg"
                                    alt="icon star">
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="subscribe">
        <div class="subscribe__inner">
            <div class="container">
                <div class="subscribe__wrap">
                    <div class="subscribe__info">
                        <h6 class="subscribe__title">Subscription for weekly cleaning</h6>
                        <p class="subscribe__text">Subscription for weekly cleaning, get 10% discount and enjoy the
                            cleanliness
                            of your home!</p>
                        <a href="#" class="subscribe__btn bttn">Request service <img
                                src="<?=get_template_directory_uri() ?>/build/img/icons/icon-arrow-orange.svg"
                                alt="icon arrow"></a>
                    </div>
                    <div class="subscribe__discount">-10%</div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>