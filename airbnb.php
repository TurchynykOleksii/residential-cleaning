<?php
/*
Template Name: airbnb tamplate
*/
 get_header(); ?>

<main class="main">



    <section class="banner-arb">
        <div class="container">
            <div class="banner-arb__inner">
                <p class="banner-arb__headline">Experience the Difference: </p>
                <h1 class="banner-arb__title">Airbnb Cleaning</h1>
                <button class="banner-arb__btn"><span>Call now</span> <img
                        src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
                        alt="icon arrow"></button>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="about__inner">
                <h2 class="about__title">About Airbnb Cleaning</h2>
                <div class="about__text">
                    <p>Presenting our Airbnb cleaning service, meticulously crafted to accommodate the dynamic demands
                        of hosting guests. We recognize the urgency in preparing your apartment for incoming visitors,
                        and our dedicated team is committed to ensuring a seamless transition between guests, leaving
                        your space pristine and welcoming.</p>
                    <p>Our expedited service targets key areas to ensure a swift turnaround without compromising on
                        quality. This includes vacuuming and floor cleaning to create a fresh and inviting environment.
                        We meticulously sanitize the bathroom, focusing on the toilet, shower, and sink to uphold
                        impeccable cleanliness and hygienic conditions.</p>
                    <p>In the kitchen, we streamline the cleaning process by prioritizing high-traffic areas, swiftly
                        wiping countertops, cleaning appliances, and sanitizing the sink. Our fast and efficient glass
                        surface and mirror cleaning elevate the overall aesthetic appeal of your space. </p>
                    <p>Beyond the basics, we recognize the significance of presenting a well-organized and inviting
                        ambiance. Our team efficiently manages and arranges items on surfaces, contributing to an
                        inviting atmosphere for your incoming guests.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="prices">
        <div class="container">
            <div class="prices__inner">
                <h3 class="prices__title">Prices</h3>
                <p class="prices__text">
                    The table provides estimated prices for cleaning services along with corresponding timeframes.
                    Actual
                    costs may vary based on specific tasks to be completed and any additional services requested.
                </p>
                <div class="prices__offer">
                    <div class="prices__btns">
                        <label class="prices__radio-btn">
                            <input type="radio" class="prices__radio-offer" name="radio" value="prices__residential"
                                checked>
                            <span>Residential</span>
                        </label>
                        <label class="prices__radio-btn">
                            <input type="radio" class="prices__radio-offer" name="radio" value="prices__commercial">
                            <span>Commercial </span>
                        </label>
                    </div>
                    <ul class="prices__list prices__residential">
                        <li class="prices__item">
                            <div class="prices__num">1</div>
                            <ul class="prices__info">
                                <li class="prices__info-item">Bedroom</li>
                                <li class="prices__info-item"><img
                                        src="<?=get_template_directory_uri() ?>/build/img/icons/bigger.svg"
                                        alt="biggest icon">
                                    < 45 m</li>
                                <li class="prices__info-item"><img
                                        src="<?=get_template_directory_uri() ?>/build/img/icons/clock.svg"
                                        alt="clock icon">~ 2,5
                                    hour’s</li>
                                <li class="prices__info-item prices__coast">from CA$140</li>
                            </ul>
                        </li>
                        <li class="prices__item">
                            <div class="prices__num">2</div>
                            <ul class="prices__info">
                                <li class="prices__info-item">Bedroom</li>
                                <li class="prices__info-item"><img
                                        src="<?=get_template_directory_uri() ?>/build/img/icons/bigger.svg"
                                        alt="biggest icon">
                                    < 45 m</li>
                                <li class="prices__info-item"><img
                                        src="<?=get_template_directory_uri() ?>/build/img/icons/clock.svg"
                                        alt="clock icon">~ 2,5
                                    hour’s</li>
                                <li class="prices__info-item prices__coast">from CA$140</li>
                            </ul>
                        </li>
                        <li class="prices__item">
                            <div class="prices__num">3</div>
                            <ul class="prices__info">
                                <li class="prices__info-item">Bedroom</li>
                                <li class="prices__info-item"><img
                                        src="<?=get_template_directory_uri() ?>/build/img/icons/bigger.svg"
                                        alt="biggest icon">
                                    < 45 m</li>
                                <li class="prices__info-item"><img
                                        src="<?=get_template_directory_uri() ?>/build/img/icons/clock.svg"
                                        alt="clock icon">~ 2,5
                                    hour’s</li>
                                <li class="prices__info-item prices__coast">from CA$140</li>
                            </ul>
                        </li>
                        <li class="prices__item">
                            <div class="prices__num">4</div>
                            <ul class="prices__info">
                                <li class="prices__info-item">Bedroom</li>
                                <li class="prices__info-item"><img
                                        src="<?=get_template_directory_uri() ?>/build/img/icons/bigger.svg"
                                        alt="biggest icon">
                                    < 45 m</li>
                                <li class="prices__info-item"><img
                                        src="<?=get_template_directory_uri() ?>/build/img/icons/clock.svg"
                                        alt="clock icon">~ 2,5
                                    hour’s</li>
                                <li class="prices__info-item prices__coast">from CA$140</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="prices__list prices__commercial prices__hide">
                        <li class="prices__item">
                            <div class="prices__num"><img
                                    src="<?=get_template_directory_uri() ?>/build/img/icons/comercial-icon.svg"
                                    alt="commercial icon"></div>
                            <ul class="prices__info">
                                <li class="prices__info-item">Square</li>
                                <li class="prices__info-item">
                                    < 1000 sq ft</li>

                                <li class="prices__info-item prices__coast">CA$200-400</li>
                            </ul>
                        </li>
                        <li class="prices__item">
                            <div class="prices__num"><img
                                    src="<?=get_template_directory_uri() ?>/build/img/icons/comercial-icon.svg"
                                    alt="commercial icon"></div>
                            <ul class="prices__info">
                                <li class="prices__info-item">Square</li>
                                <li class="prices__info-item">
                                    < 5000 sq ft</li>

                                <li class="prices__info-item prices__coast">CA$200-400</li>
                            </ul>
                        </li>
                        <li class="prices__item">
                            <div class="prices__num"><img
                                    src="<?=get_template_directory_uri() ?>/build/img/icons/comercial-icon.svg"
                                    alt="commercial icon"></div>
                            <ul class="prices__info">
                                <li class="prices__info-item">Square</li>
                                <li class="prices__info-item">
                                    < 10,000 sq ft</li>

                                <li class="prices__info-item prices__coast">CA$200-400</li>
                            </ul>
                        </li>
                        <li class="prices__item">
                            <div class="prices__num"><img
                                    src="<?=get_template_directory_uri() ?>/build/img/icons/comercial-icon.svg"
                                    alt="commercial icon"></div>
                            <ul class="prices__info">
                                <li class="prices__info-item">Square</li>
                                <li class="prices__info-item">
                                    < 20,000 sq ft</li>

                                <li class="prices__info-item prices__coast">CA$200-400</li>
                            </ul>
                        </li>
                        <li class="prices__item">
                            <div class="prices__num"><img
                                    src="<?=get_template_directory_uri() ?>/build/img/icons/comercial-icon.svg"
                                    alt="commercial icon"></div>
                            <ul class="prices__info">
                                <li class="prices__info-item">Square</li>
                                <li class="prices__info-item">
                                    < 40,000 sq ft</li>

                                <li class="prices__info-item prices__coast">CA$200-400</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="prices__bttns">
                    <button class="prices__btn hide__mobile">see more <img
                            src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
                            alt="icon arrow"></button>
                    <button class="prices__btn hide__mobile">GET A QUOATE <img
                            src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
                            alt="icon arrow"></button>
                    <button class="prices__btn hide__pc">See more Info <img
                            src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
                            alt="icon arrow"></button>
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
    <section class="additional">
        <div class="container">
            <div class="additional__inner">
                <h4 class="additional__title">Additional cleaning services</h4>
                <p class="additional__text">We prioritize flexibility and transparency in our collaboration with you!
                    That's
                    why we've optimized our basic cleaning services to be as economical as possible. This package
                    includes
                    essential cleaning tasks, allowing you to tailor additional services based on your requirements.
                    With
                    this approach, you pay only for the services you truly need. For those seeking the full benefits of
                    professional cleaning, we recommend our comprehensive general cleaning package. This option not only
                    frees you from the hassle but also helps you save. In fact, the cost of general cleaning is lower
                    than
                    that of basic cleaning with four or more additional services.</p>
            </div>
        </div>
    </section>
    <section class="hardware">
        <div class="container">
            <div class="hardware__inner">
                <h4 class="hardware__title content__hide">Hardware</h4>

                <ul class="hardware__titles">
                    <li class="hardware__t hardware__headline hide__pc">Kitchen</li>
                    <li class="hardware__t hardware__headline hide__pc">Bathroom</li>
                    <li class="hardware__t hardware__headline hide__pc">Bedroom</li>
                    <li class="hardware__t hardware__headline hide__pc">Other</li>
                </ul>

                <ul class="hardware__list">
                    <li class="hardware__item">
                        <span class="hardware__headline">Kitchen</span>
                        <div class="hardware__info">
                            <div class="hardware__img">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-oven.svg"
                                    alt="icon oven">
                            </div>
                            <div class="hardware__text">
                                <span class="hardware__name">Oven</span>
                                <span class="hardware__coasts">CA$ 30</span>
                            </div>
                        </div>
                        <div class="hardware__info">
                            <div class="hardware__img">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-refrig.svg"
                                    alt="icon Refrigerator">
                            </div>
                            <div class="hardware__text">
                                <span class="hardware__name">Refrigerator</span>
                                <span class="hardware__coasts">CA$ 30</span>
                            </div>
                        </div>
                    </li>
                    <li class="hardware__item">
                        <span class="hardware__headline">Bathroom</span>
                        <div class="hardware__info">
                            <div class="hardware__img">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-hood.svg"
                                    alt="icon hood">
                            </div>
                            <div class="hardware__text">
                                <span class="hardware__name">Hood</span>
                                <span class="hardware__coasts">CA$ 30</span>
                            </div>
                        </div>
                        <div class="hardware__info">
                            <div class="hardware__img">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-dish.svg"
                                    alt="icon oven">
                            </div>
                            <div class="hardware__text">
                                <span class="hardware__name">Load Dish Washer</span>
                                <span class="hardware__coasts">CA$ 30</span>
                            </div>
                        </div>
                    </li>
                    <li class="hardware__item">
                        <span class="hardware__headline">Bedroom</span>
                        <div class="hardware__info">
                            <div class="hardware__img">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-microwave.svg"
                                    alt="icon Microwave">
                            </div>
                            <div class="hardware__text">
                                <span class="hardware__name">Microwave</span>
                                <span class="hardware__coasts">CA$ 30</span>
                            </div>
                        </div>
                        <div class="hardware__info">
                            <div class="hardware__img">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-cabinets.svg"
                                    alt="icon Cabinets">
                            </div>
                            <div class="hardware__text">
                                <span class="hardware__name">Cabinets</span>
                                <span class="hardware__coasts">CA$ 30</span>
                            </div>
                        </div>
                    </li>
                    <li class="hardware__item">
                        <span class="hardware__headline">Other</span>
                        <div class="hardware__info">
                            <div class="hardware__img">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-grille.svg"
                                    alt="icon Grill">
                            </div>
                            <div class="hardware__text">
                                <span class="hardware__name">Grill</span>
                                <span class="hardware__coasts">CA$ 30</span>
                            </div>
                        </div>
                        <div class="hardware__info">
                            <div class="hardware__img">
                                <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-other.svg"
                                    alt="icon other">
                            </div>
                            <div class="hardware__text">
                                <span class="hardware__name">Other</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#" class="hardware__link bttn">to Calculator <img
                        src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
                        alt="icon arrow"></a>
            </div>
    </section>
    <section class="deep">
        <div class="container">
            <div class="deep__inner">
                <h5 class="deep__title">Deep Cleaning Service</h5>
            </div>
            <div class="deep__text">
                <p>Experience the transformative impact of our Deep Cleaning service, where we transcend surface
                    cleaning to
                    revitalize and renew your living spaces. Whether you're preparing for a special event or simply
                    aiming
                    to give your home a thorough refresh, our comprehensive approach ensures an unmatched level of
                    cleanliness.</p>
            </div>

            <div class="deep__services">
                <div class="deep__bedrooms">
                    <h6>Bedrooms & Living Areas:</h6>
                    <ul class="deep__list">
                        <li class="deep__item">
                            <span>- Clean baseboards:</span> Remove dust and grime from baseboards for a fresher look.
                        </li>
                        <li class="deep__item">
                            <span>- Clean under furniture:</span> Reach those hidden spots under your furniture.
                        </li>
                        <li class="deep__item">
                            <span>- Wipe window sills:</span> Clean and shine all window sills.
                        </li>
                        <li class="deep__item">
                            <span>- Clean window frames:</span> Ensure window frames are spotless.
                        </li>
                        <li class="deep__item">
                            <span>- Wipe door frames:</span> Remove dirt and fingerprints from door frames.
                        </li>
                        <li class="deep__item">
                            <span>- Spot clean walls:</span> Eliminate smudges and marks from your walls.
                        </li>
                        <li class="deep__item">
                            <span>- Clean and wipe vents:</span> Ensure your air quality is optimal by cleaning vents.
                        </li>
                        <li class="deep__item">
                            <span>-Dusting ceiling:</span> Remove cobwebs and dust from ceiling areas.
                        </li>
                        <li class="deep__item">
                            <span>- Wiping fans:</span> Clean your ceiling fans for better air circulation.
                        </li>
                    </ul>
                </div>
                <div class="deep__kitchen">
                    <h6>Kitchen Cleaning</h6>
                    <ul class="deep__list">
                        <li class="deep__item">
                            <span>- Clean baseboards:</span> Remove dust and grime from baseboards for a fresher look.
                        </li>
                        <li class="deep__item">
                            <span>- Clean under furniture:</span> Reach those hidden spots under your furniture.
                        </li>
                        <li class="deep__item">
                            <span>- Wipe window sills:</span> Clean and shine all window sills.
                        </li>
                        <li class="deep__item">
                            <span>- Clean window frames:</span> Ensure window frames are spotless.
                        </li>
                        <li class="deep__item">
                            <span>- Wipe door frames:</span> Remove dirt and fingerprints from door frames.
                        </li>
                        <li class="deep__item">
                            <span>- Spot clean walls:</span> Eliminate smudges and marks from your walls.
                        </li>
                        <li class="deep__item">
                            <span>- Clean and wipe vents:</span> Ensure your air quality is optimal by cleaning vents.
                        </li>
                        <li class="deep__item">
                            <span>-Dusting ceiling:</span> Remove cobwebs and dust from ceiling areas.
                        </li>
                        <li class="deep__item">
                            <span>- Wiping fans:</span> Clean your ceiling fans for better air circulation.
                        </li>
                    </ul>
                </div>
                <div class="deep__bethroom">
                    <h6>Bathroom Cleaning</h6>
                    <ul class="deep__list">
                        <li class="deep__item">
                            <span>- Clean baseboards:</span> Remove dust and grime from baseboards for a fresher look.
                        </li>
                        <li class="deep__item">
                            <span>- Clean under furniture:</span> Reach those hidden spots under your furniture.
                        </li>


                    </ul>
                </div>
            </div>
            <p class="deep__text-down">
                Our heavy-duty cleaning service encompasses meticulous window washing, bringing clarity and brightness
                to
                your living spaces. We utilize professional-grade degreasers to effectively tackle stubborn stains and
                greasy surfaces in the kitchen, leaving behind a spotless and sanitized environment. Appliances,
                including
                ovens and stovetops, receive special attention to ensure they gleam and function optimally.
            </p>
        </div>
    </section>
    <section class="all-in">
        <div class="container">
            <div class="all-in__inner">
                <h5 class="all-in__title">5 = ALL IN</h5>
                <p class="all-in__text">Choose our deep cleaning package and receive all additional services at the
                    price of
                    only five</p>
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