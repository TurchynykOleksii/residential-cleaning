<?php
/*
Template Name: commercial tamplate
*/
 get_header(); ?>

<main class="main">

<section class="banner-c">
    <div class="container">
        <div class="banner-c__inner">
            <p class="banner-c__headline">Experience the Difference: </p>
            <h1 class="banner-c__title">Commercial Cleaning</h1>
            <button class="banner-c__btn"><span>Call now</span> <img src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg" alt="icon arrow"></button>
        </div>
    </div>
</section>
<section class="about-c">
    <div class="container">
        <div class="about-c__inner">
            <h2 class="about-c__title">About Residential Cleaning</h2>
            <div class="about-c__text">
                <p>Commercial cleaning services are meticulously tailored to suit the distinct requirements of
                    businesses and public spaces, guaranteeing a tidy and welcoming atmosphere for employees, customers,
                    and visitors alike. Spanning a diverse array of settings including office buildings, retail outlets,
                    restaurants, and healthcare facilities, commercial cleaning encompasses a broad spectrum of
                    environments.</p>
                <p>Utilizing specialized equipment and methodologies, professional cleaners adeptly tackle a myriad of
                    cleaning challenges, from high-traffic areas to shared spaces and stringent sanitary standards.</p>
                <p>Services rendered in commercial cleaning may encompass an array of tasks, ranging from dusting and
                    vacuuming to mopping, disinfecting surfaces, and maintaining restroom hygiene. With a steadfast
                    commitment to efficiency and excellence, these services play a pivotal role in upholding a positive
                    brand image, fostering employee productivity, and cultivating a secure and hospitable ambiance for
                    all stakeholders.</p>
            </div>
        </div>
    </div>
</section>
<section class="refresh">
    <div class="container">
        <div class="refresh__inner">
            <h3 class="refresh__title">Refresh your environment with our Commercial Cleaning service</h3>
            <p class="refresh__subtitle">In the fast-paced world of business, maintaining a pristine and professional
                environment is crucial, and our commercial cleaning services are designed to ensure your workspace
                remains spotless and inviting.</p>
            <div class="refresh__info">
                <div class="refresh__img">
                    <img src="<?=get_template_directory_uri() ?>/build/img/general/revitalize2.png" alt="rev img">
                </div>
                <div class="refresh__text">
                    <h4 class="main-revitalize__headline">What do we offer?</h4>
                    <ul class="refresh__list">
                        <li class="main-revitalize__item">Dusting and wiping down desks and work surfaces.</li>
                        <li class="main-revitalize__item">Cleaning and disinfecting common spaces like conference rooms and
                            break areas.</li>
                        <li class="main-revitalize__item">Wiping down tables, chairs, and other furniture.</li>
                        <li class="main-revitalize__item">Dusting and cleaning cubicle walls and partitions.</li>
                        <li class="main-revitalize__item">Sanitizing shared surfaces.</li>
                        <li class="main-revitalize__item">Thorough cleaning and sanitizing of toilets, sinks, and countertops.
                        </li>
                        <li class="main-revitalize__item">Refilling soap dispensers and restocking paper towels or toilet paper.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="prices">
    <div class="container">
        <div class="prices__inner">
            <h3 class="prices__title">Prices</h3>
            <p class="prices__text">
                The table provides estimated prices for cleaning services along with corresponding timeframes. Actual
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
                            <li class="prices__info-item"><img src="<?=get_template_directory_uri() ?>/build/img/icons/bigger.svg" alt="biggest icon">
                                < 45 m</li>
                            <li class="prices__info-item"><img src="<?=get_template_directory_uri() ?>/build/img/icons/clock.svg" alt="clock icon">~ 2,5
                                hour’s</li>
                            <li class="prices__info-item prices__coast">from CA$140</li>
                        </ul>
                    </li>
                    <li class="prices__item">
                        <div class="prices__num">2</div>
                        <ul class="prices__info">
                            <li class="prices__info-item">Bedroom</li>
                            <li class="prices__info-item"><img src="<?=get_template_directory_uri() ?>/build/img/icons/bigger.svg" alt="biggest icon">
                                < 45 m</li>
                            <li class="prices__info-item"><img src="<?=get_template_directory_uri() ?>/build/img/icons/clock.svg" alt="clock icon">~ 2,5
                                hour’s</li>
                            <li class="prices__info-item prices__coast">from CA$140</li>
                        </ul>
                    </li>
                    <li class="prices__item">
                        <div class="prices__num">3</div>
                        <ul class="prices__info">
                            <li class="prices__info-item">Bedroom</li>
                            <li class="prices__info-item"><img src="<?=get_template_directory_uri() ?>/build/img/icons/bigger.svg" alt="biggest icon">
                                < 45 m</li>
                            <li class="prices__info-item"><img src="<?=get_template_directory_uri() ?>/build/img/icons/clock.svg" alt="clock icon">~ 2,5
                                hour’s</li>
                            <li class="prices__info-item prices__coast">from CA$140</li>
                        </ul>
                    </li>
                    <li class="prices__item">
                        <div class="prices__num">4</div>
                        <ul class="prices__info">
                            <li class="prices__info-item">Bedroom</li>
                            <li class="prices__info-item"><img src="<?=get_template_directory_uri() ?>/build/img/icons/bigger.svg" alt="biggest icon">
                                < 45 m</li>
                            <li class="prices__info-item"><img src="<?=get_template_directory_uri() ?>/build/img/icons/clock.svg" alt="clock icon">~ 2,5
                                hour’s</li>
                            <li class="prices__info-item prices__coast">from CA$140</li>
                        </ul>
                    </li>
                </ul>
                <ul class="prices__list prices__commercial prices__hide">
                    <li class="prices__item">
                        <div class="prices__num"><img src="<?=get_template_directory_uri() ?>/build/img/icons/comercial-icon.svg" alt="commercial icon"></div>
                        <ul class="prices__info">
                            <li class="prices__info-item">Square</li>
                            <li class="prices__info-item">
                                < 1000 sq ft</li>

                            <li class="prices__info-item prices__coast">CA$200-400</li>
                        </ul>
                    </li>
                    <li class="prices__item">
                        <div class="prices__num"><img src="<?=get_template_directory_uri() ?>/build/img/icons/comercial-icon.svg" alt="commercial icon"></div>
                        <ul class="prices__info">
                            <li class="prices__info-item">Square</li>
                            <li class="prices__info-item">
                                < 5000 sq ft</li>

                            <li class="prices__info-item prices__coast">CA$200-400</li>
                        </ul>
                    </li>
                    <li class="prices__item">
                        <div class="prices__num"><img src="<?=get_template_directory_uri() ?>/build/img/icons/comercial-icon.svg" alt="commercial icon"></div>
                        <ul class="prices__info">
                            <li class="prices__info-item">Square</li>
                            <li class="prices__info-item">
                                < 10,000 sq ft</li>

                            <li class="prices__info-item prices__coast">CA$200-400</li>
                        </ul>
                    </li>
                    <li class="prices__item">
                        <div class="prices__num"><img src="<?=get_template_directory_uri() ?>/build/img/icons/comercial-icon.svg" alt="commercial icon"></div>
                        <ul class="prices__info">
                            <li class="prices__info-item">Square</li>
                            <li class="prices__info-item">
                                < 20,000 sq ft</li>

                            <li class="prices__info-item prices__coast">CA$200-400</li>
                        </ul>
                    </li>
                    <li class="prices__item">
                        <div class="prices__num"><img src="<?=get_template_directory_uri() ?>/build/img/icons/comercial-icon.svg" alt="commercial icon"></div>
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
                <button class="prices__btn hide__mobile">see more <img src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
                        alt="icon arrow"></button>
                <button class="prices__btn hide__mobile">GET A QUOATE <img src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
                        alt="icon arrow"></button>
                <button class="prices__btn hide__pc">See more Info <img src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
                        alt="icon arrow"></button>
            </div>
        </div>
    </div>
</section>

<!-- new blocks -->
<section class="tables">
    <div class="container">
        <div class="tables__inner">
            <h3 class="hidden">Prices</h3>
            <ul class="tables__list tables__list-first">
                <li class="tables__item tables__item-headline">
                    <span>Commercial cleaning</span>
                    <span>Price, CAD</span>
                </li>
                <li class="tables__item tables__item-headline">
                    <p>Cleaning the kitchen </p>
                    <p>$40 CAD</p>
                </li>
                <li class="tables__item tables__item-headline">
                    <p>Restore bathroom</p>
                    <p>$20 CAD</p>
                </li>
                <li class="tables__item tables__item-headline">
                    <p>Disinfect electronic </p>
                    <p>$50 CAD</p>
                </li>
                <li class="tables__item tables__item-headline">
                    <p>Cleaning the bathroom </p>
                    <p>$40 CAD</p>
                </li>
                <li class="tables__item tables__item-headline">
                    <p>Window cleaning (per window) </p>
                    <p>$5 CAD</p>
                </li>
            </ul>
            <ul class="tables__list">
                <li class="tables__item tables__item-headline">
                    <span>Commercial cleaning</span>
                    <span>Price, CAD/Sq Ft</span>
                </li>
                <li class="tables__item tables__item-headline">
                    <p>Stripping and waxing </p>
                    <p>$0.50 CAD</p>
                </li>
                <li class="tables__item tables__item-headline">
                    <p>Buffing and burnishing</p>
                    <p>$0.10 CAD</p>
                </li>
                <li class="tables__item tables__item-headline">
                    <p>Ceramic title cleaning </p>
                    <p>$0.20 CAD</p>
                </li>
                <li class="tables__item tables__item-headline">
                    <p>Carpet cleaning </p>
                    <p>$0.22 CAD</p>
                </li>
                <li class="tables__item tables__item-headline">
                    <p>Title/Concretely scrubbing  </p>
                    <p>$0.25 CAD</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="need">
    <div class="container">
        <div class="need__inner">
            <h3 class="need__title">Why do you need to order a manager's visit?</h3>
            <div class="need__info">
                <div class="need__text">
                    <p>Each premises is unique and necessitates a thorough assessment. While sending photos and videos
                        of the office aids in evaluation, it's challenging to capture every detail. During the meeting,
                        the manager can objectively assess and calculate the cleaning cost, establishing a minimum price
                        based on the information available.</p>
                        <a href="#" class="bttn need__bttn">Call manager now <img src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg" alt="arrow icon"></a>
                </div>
                <div class="need__img">
                    <img src="<?=get_template_directory_uri() ?>/build/img/general/need.jpg" alt="need img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end new blocks -->
<section class="discount">
    <div class="container">
        <div class="discount__inner">
            <h5 class="discount__title">How to get discount? <div class="discount__img-mob"><img
                        src="<?=get_template_directory_uri() ?>/build/img/general/procent.png" alt="discount image"></div>
            </h5>
            <div class="discount__info">
                <img src="<?=get_template_directory_uri() ?>/build/img/general/procent.png" alt="discount image">
                <p>
                    <span>How can you avail of discounts? Explore these dependable methods:</span>
                    Receive a 5% cashback by providing transparent feedback on our cleaning or any other services.Get a
                    10% discount when you
                    subscribe to our cleaning service along with additional services as a complimentary gift. Enjoy a
                    10% discount by sharing a promo code with a friend, benefiting both of you with impeccable cleaning
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
                    <p>Say goodbye to dirt and grime and hello to a fresh, revitalized space! Whether you're preparing
                        for a special event, moving into a new home, or simply craving a pristine environment, our
                        cleaning service is the solution you've been searching for.</p>
                    <a href="#" class="bttn feetback__btn">Request service <img src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
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
                        professional cleaners. They were thorough, efficient, and paid close attention to detail.</p>
                    <ul class="customers__stars">
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                    </ul>
                </li>
                <li class="customers__item">
                    <span class="customers__name">Konnie Sizemore</span>
                    <p class="customers__text">The move-in cleaning service was outstanding, and I was impressed by how
                        clean and fresh everything looked. The team was friendly, professional.</p>
                    <ul class="customers__stars">
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                    </ul>
                </li>
                <li class="customers__item">
                    <span class="customers__name">Lindsay Croker</span>
                    <p class="customers__text">My home has never looked or smelled so clean, and I would highly
                        recommend this service to anyone looking for a top-notch cleaning experience.</p>
                    <ul class="customers__stars">
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
                        </li>
                        <li class="customers__star">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/icon-star.svg" alt="icon star">
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
                            src="<?=get_template_directory_uri() ?>/build/img/icons/icon-arrow-orange.svg" alt="icon arrow"></a>
                </div>
                <div class="subscribe__discount">-10%</div>
            </div>
        </div>
    </div>
</section>


</main>

<?php get_footer(); ?>