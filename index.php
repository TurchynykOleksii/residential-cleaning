<?php get_header(); ?>



<main class="main">

    <section class="main-banner">
        <div class="container">
            <div class="main-banner__inner">
                <p class="main-banner__headline">Experience the Difference: </p>
                <h1 class="main-banner__title">Clean, Fresh, and Stress-Free</h1>
                <button class="main-banner__btn"><span>Get A Quote</span> <img
                        src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
                        alt="icon arrow"></button>
            </div>
        </div>
    </section>
    <section class="main-how">
        <div class="container">
            <div class="main-how__inner">
                <h2>How does it work?</h2>
                <ul class="main-how__list">
                    <li class="main-how__item">
                        <img src="<?=get_template_directory_uri() ?>/build/img/icons/how1.svg" alt="icon">
                        <p>Schedule services for a date and time that suits you best</p>
                    </li>
                    <li class="main-how__item">
                        <img src="<?=get_template_directory_uri() ?>/build/img/icons/how2.svg" alt="icon">
                        <p>We carry out the service.</p>
                    </li>
                    <li class="main-how__item">
                        <img src="<?=get_template_directory_uri() ?>/build/img/icons/how3.svg" alt="icon">
                        <p>You assess the service quality.</p>
                    </li>
                    <li class="main-how__item">
                        <img src="<?=get_template_directory_uri() ?>/build/img/icons/how4.svg" alt="icon">
                        <p>You settle the payment for the service.</p>
                    </li>
                </ul>
                <div class="swiper main-how__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide main-how__card main-how__card-first">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/how1.svg" alt="icon">
                            <p>Schedule services for a date and time that suits you best</p>
                        </div>
                        <div class="swiper-slide main-how__card">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/how2.svg" alt="icon">
                            <p>Schedule services for a date and time that suits you best</p>
                        </div>
                        <div class="swiper-slide main-how__card">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/how3.svg" alt="icon">
                            <p>Schedule services for a date and time that suits you best</p>
                        </div>
                        <div class="swiper-slide main-how__card main-how__card-last">
                            <img src="<?=get_template_directory_uri() ?>/build/img/icons/how4.svg" alt="icon">
                            <p>Schedule services for a date and time that suits you best</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-why">
        <div class="container">
            <div class="main-why__inner">
                <h3 class="main-why__title">Why choose us?</h3>
                <p class="main-why__text">
                    At ///// we pride ourselves in providing you with a high-quality clean & professional service.
                    Servicing
                    all of Toronto////, we offer Home, Business or Post -Construction Cleaning to give you a hand with
                    your
                    cleaning needs. Our friendly crew is ready to impress.
                </p>
                <ul class="main-why__list">
                    <li class="main-why__item">
                        <img src="<?=get_template_directory_uri() ?>/build/img/icons/why1.svg" alt="icon">
                        <div class="main-why__info">
                            <strong>5 years of cleaning</strong>
                            <p>Over 12,000 satisfied customers</p>
                        </div>
                    </li>
                    <li class="main-why__item">
                        <img src="<?=get_template_directory_uri() ?>/build/img/icons/why2.svg" alt="icon">
                        <div class="main-why__info">
                            <strong>Perfect result</strong>
                            <p>Your satisfaction is our top priority</p>
                        </div>
                    </li>
                    <li class="main-why__item">
                        <img src="<?=get_template_directory_uri() ?>/build/img/icons/why3.svg" alt="icon">
                        <div class="main-why__info">
                            <strong>Safety and reliability</strong>
                            <p>Compensation if you are not satisfied</p>
                        </div>
                    </li>
                    <li class="main-why__item">
                        <img src="<?=get_template_directory_uri() ?>/build/img/icons/why4.svg" alt="icon">
                        <div class="main-why__info">
                            <strong>Professional cleaners</strong>
                            <p>Careful selection and training of cleaners</p>
                        </div>
                    </li>
                    <li class="main-why__item">
                        <img src="<?=get_template_directory_uri() ?>/build/img/icons/why5.svg" alt="icon">
                        <div class="main-why__info">
                            <strong>Transparent pricing</strong>
                            <p>Fixed prices for services</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="main-our" id="main-our">
        <div class="container">
            <div class="main-our__inner">
                <h3 class="main-our__title">Our Services</h3>
                <ul class="main-our__list">
                    <li class="main-our__item">
                        <img src="<?=get_template_directory_uri() ?>/build/img/general/our1.jpg" alt="our image">
                        <div class="main-our__info">
                            <h4 class="main-our__headline">Commercial Cleaning</h4>
                            <p>
                                Commercial cleaning entails the upkeep and sanitation of commercial establishments and
                                public areas. Effective commercial cleaning enhances the professional image of your
                                business.
                            </p>
                            <strong class="main-our__price">from CA$200</strong>
                        </div>
                    </li>
                    <li class="main-our__item">
                        <img src="<?=get_template_directory_uri() ?>/build/img/general/our2.jpg" alt="our image">
                        <div class="main-our__info">
                            <h4 class="main-our__headline">Residental Cleaning</h4>
                            <p>
                                Residential cleaning is vital for upholding a healthy and hygienic atmosphere in the
                                home.
                                Regular residential cleaning promotes a sense of comfort and well-being for you and your
                                family
                            </p>
                            <strong class="main-our__price">from CA$140</strong>
                        </div>
                    </li>
                    <li class="main-our__item">
                        <img src="<?=get_template_directory_uri() ?>/build/img/general/our3.jpg" alt="our image">
                        <div class="main-our__info">
                            <h4 class="main-our__headline">Deep Cleaning</h4>
                            <p>
                                Experience the ultimate in cleanliness with our deep cleaning services, harnessing the
                                power
                                of steam cleaners, electric scrubbers, and pressure washers for a heavy duty tasks.
                            </p>
                            <strong class="main-our__price">from CA$220</strong>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="main-clean">
        <div class="container">
            <div class="main-clean__inner">
                <h3 class="main-clean__title">How We Clean</h3>
                <div class="swiper clean">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <h4>Kitchen</h4>
                            <div class="swiper__image">
                                <img src="<?=get_template_directory_uri() ?>/build/img/general/clean1.jpg"
                                    alt="clean image">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <h4>Bathroom</h4>
                            <div class="swiper__image">
                                <img src="<?=get_template_directory_uri() ?>/build/img/general/clean2.jpg"
                                    alt="clean image">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <h4>Living Room</h4>
                            <div class="swiper__image">
                                <img src="<?=get_template_directory_uri() ?>/build/img/general/clean3.jpg"
                                    alt="clean image">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <h4>Bedroom</h4>
                            <div class="swiper__image">
                                <img src="<?=get_template_directory_uri() ?>/build/img/general/clean4.jpg"
                                    alt="clean image">
                            </div>
                        </div>
                        ...
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <div class="swiper__pagination-wrap">
                        <div class="swiper-button-prev">
                            <svg width="43" height="9" viewBox="0 0 43 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.646446 4.14645C0.451183 4.34171 0.451183 4.65829 0.646446 4.85356L3.82843 8.03554C4.02369 8.2308 4.34027 8.2308 4.53553 8.03554C4.7308 7.84028 4.7308 7.52369 4.53553 7.32843L1.70711 4.5L4.53553 1.67158C4.7308 1.47631 4.7308 1.15973 4.53553 0.964469C4.34027 0.769207 4.02369 0.769207 3.82843 0.96447L0.646446 4.14645ZM43 4L1 4L1 5L43 5L43 4Z"
                                    fill="#72778F" />
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg width="43" height="25" viewBox="0 0 43 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M42.3536 12.8535C42.5488 12.6583 42.5488 12.3417 42.3536 12.1464L39.1716 8.96446C38.9763 8.7692 38.6597 8.7692 38.4645 8.96446C38.2692 9.15972 38.2692 9.47631 38.4645 9.67157L41.2929 12.5L38.4645 15.3284C38.2692 15.5237 38.2692 15.8403 38.4645 16.0355C38.6597 16.2308 38.9763 16.2308 39.1716 16.0355L42.3536 12.8535ZM4.37114e-08 13L42 13L42 12L-4.37114e-08 12L4.37114e-08 13Z"
                                    fill="#72778F" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-revitalize">
        <div class="container">
            <div class="main-revitalize__inner">
                <h3 class="main-revitalize__title">Revitalize your space with our Advance Cleaning Services </h3>
                <p class="main-revitalize__subtitle">Are you craving a fresh start for your home or office space? Look
                    no
                    further! Our deep cleaning service is here to breathe new life into your environment, leaving it
                    sparkling clean and rejuvenated.</p>
                <div class="swiper revitalize__swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">

                            <div class="swiper__image">
                                <img src="<?=get_template_directory_uri() ?>/build/img/general/revitalize1.png"
                                    alt="clean image">
                            </div>
                            <div class="main-revitalize__text">
                                <h4 class="main-revitalize__headline">What do we offer?</h4>
                                <ul class="main-revitalize__list">
                                    <li class="main-revitalize__item">Pressure washing driveways</li>
                                    <li class="main-revitalize__item">Steam cleaning kitchen appliances</li>
                                    <li class="main-revitalize__item">Upholstery sanitation</li>
                                    <li class="main-revitalize__item">Professional steam cleansing</li>
                                    <li class="main-revitalize__item">Post-construction cleanup</li>
                                    <li class="main-revitalize__item">Brick and stonework restoration</li>
                                    <li class="main-revitalize__item">Bathroom steam cleaning and disinfection</li>
                                    <li class="main-revitalize__item">DOFF and TORC Cleaning</li>
                                </ul>
                                <a href="#" class="bttn main-revitalize__bttn">read more <img
                                        src="<?=get_template_directory_uri() ?>/build/img/icons/arrow-right-white.svg"
                                        alt="arrow icons"></a>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="swiper__image">
                                <img src="<?=get_template_directory_uri() ?>/build/img/general/revitalize2.png"
                                    alt="clean image">
                            </div>
                            <div class="main-revitalize__text">
                                <h4 class="main-revitalize__headline">What do we offer?</h4>
                                <ul class="main-revitalize__list">
                                    <li class="main-revitalize__item">Pressure washing driveways</li>
                                    <li class="main-revitalize__item">Steam cleaning kitchen appliances</li>
                                    <li class="main-revitalize__item">Upholstery sanitation</li>
                                    <li class="main-revitalize__item">Professional steam cleansing</li>
                                    <li class="main-revitalize__item">Post-construction cleanup</li>
                                    <li class="main-revitalize__item">Brick and stonework restoration</li>
                                    <li class="main-revitalize__item">Bathroom steam cleaning and disinfection</li>
                                    <li class="main-revitalize__item">DOFF and TORC Cleaning</li>
                                </ul>
                                <a href="#" class="bttn main-revitalize__bttn">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <div class="swiper__pagination-wrap">
                        <div class="swiper-button-prev">
                            <svg width="43" height="25" viewBox="0 0 43 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.646446 4.14645C0.451183 4.34171 0.451183 4.65829 0.646446 4.85356L3.82843 8.03554C4.02369 8.2308 4.34027 8.2308 4.53553 8.03554C4.7308 7.84028 4.7308 7.52369 4.53553 7.32843L1.70711 4.5L4.53553 1.67158C4.7308 1.47631 4.7308 1.15973 4.53553 0.964469C4.34027 0.769207 4.02369 0.769207 3.82843 0.96447L0.646446 4.14645ZM43 4L1 4L1 5L43 5L43 4Z"
                                    fill="#72778F" />
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg width="43" height="25" viewBox="0 0 43 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M42.3536 12.8535C42.5488 12.6583 42.5488 12.3417 42.3536 12.1464L39.1716 8.96446C38.9763 8.7692 38.6597 8.7692 38.4645 8.96446C38.2692 9.15972 38.2692 9.47631 38.4645 9.67157L41.2929 12.5L38.4645 15.3284C38.2692 15.5237 38.2692 15.8403 38.4645 16.0355C38.6597 16.2308 38.9763 16.2308 39.1716 16.0355L42.3536 12.8535ZM4.37114e-08 13L42 13L42 12L-4.37114e-08 12L4.37114e-08 13Z"
                                    fill="#72778F" />
                            </svg>
                        </div>
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
    <section class="deep-mob">
        <div class="container">
            <div class="deep-mob__inner">
                <h5 class="deep-mob__title">Deep Cleaning Service</h5>
            </div>
            <div class="deep-mob__text">
                <p>Experience the transformative impact of our Deep Cleaning service, where we transcend surface
                    cleaning to
                    revitalize and renew your living spaces. Whether you're preparing for a special event or simply
                    aiming
                    to give your home a thorough refresh, our comprehensive approach ensures an unmatched level of
                    cleanliness.</p>
                <p>Our heavy-duty cleaning service encompasses meticulous window washing, bringing clarity and
                    brightness to
                    your living spaces. We utilize professional-grade degreasers to effectively tackle stubborn stains
                    and
                    greasy surfaces in the kitchen, leaving behind a spotless and sanitized environment. Appliances,
                    including ovens and stovetops, receive special attention to ensure they gleam and function
                    optimally.
                </p>
                <p>In bathrooms, our deep cleaning targets grime and buildup, leaving fixtures, tiles, and surfaces
                    pristine. We employ powerful degreasing agents to eliminate accumulated dirt in hard-to-reach areas,
                    promoting a hygienic and visually appealing space. From light fixtures to baseboards, every nook and
                    cranny receives thorough attention, providing a comprehensive refresh for your home.</p>
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
                        Contact us today to schedule your cleaning appointment and experience the difference firsthand.
                    </p>
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