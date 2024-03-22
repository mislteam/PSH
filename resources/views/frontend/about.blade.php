@extends('layouts.frontend')
@section('content')
<div role="main" class="main">
    <!-- START BANNER  -->
    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(/frontend/img/home-slide-01.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="{{route('home')}}" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">ABOUT US</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->
    <!-- START ABOUT SECTION -->
    <section class="border-0 m-0">
        <div class="container py-5 my-3">
            <div class="row py-2">
                <div class="col">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">PSH Global</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Company Policy</em></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <p class="font-weight-bold line-height-9 text-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">"Client Satisfaction is our Success"</p>
                    <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">OUR MISSION</h3>
                    <p class="mb-4">
                        To recognize World-Class company in Myanmar through strategic alliances with business partners for mutual benefits.
                    </p>
                    <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">OUR VISION</h3>
                    <p class="pb-2 mb-4">To be a leading organization on supply of quality products, standard operation and excellent services in Myanmar. </p>
                </div>
                <div class="col-lg-4">
                    <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">QUALITY POLICY</h3>
                    <p class="mb-0">
                        According to ISO 9001-2015 Quality Management System, building the capacity of staff systematically and dramatically having to manufacture the quality products and services, to achieve the confidence and satisfaction of our clients and developing the market share with fair competition, for sustainable development of company prosperity and happiness of employees.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">QUALITY OBJECTIVE</h3>
                    <p class="mb-4">
                        <ol>
                            <li>Proactively learn and master how to generate profit through making excellent quality of product and services, hoping for the prosperity of the company and happiness of the employees.</li>
                            <li>Continuous Improvement for quality, cost-effectiveness and delivery of product and services.</li>
                            <li>Building the capacity of staff and confidence for the clients by delivering quality products and services.</li>
                            <li>Learn cost reduction methods to generate profit.</li>
                            <li>Sustainable development for the “Brand” reputation.</li>
                            <li>Building mutual benefits between seller and buyer by delivering international standard quality and services.</li>
                        </ol>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section border-0 m-0 py-2">
        <div class="container py-5 my-3">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">PSH Global</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Welcome To Pyi Sone Hein Group Of Companies</em></h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">The Company was established in 1997 and is duly incorporated under the Myanmar Citizen’s Investment Law of the Union of Myanmar. Company changed to corporate identy by the merger of Pyei Sone Hein Company Limited and ZIN 9 Company Limited in 2009. New World Link Pte. Ltd., Singapore is a subsidiary company of Pyei Sone Hein Group of Companies.

                    The Company start with the initial investment of USD 3 million and since then it has been growing profitably. The business extended through five business units in the area of Trading, Manufacturing, Engineering, Services and Construction.

                    The company was opened 6 branches nationwide and the total of 250 staff members working at different management levels.</p>
                </div>
                <div class="col-md-9 col-lg-6 ps-lg-5">
                    <div class="position-relative">
                        <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">
                            <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"></div>
                        </div>
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{asset('frontend/img/psh-about.jpg')}}" class="img-fluid position-relative z-index-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT SECTION -->
    <!-- START COMPANY DETAILS -->
    <section class="section overlay overlay-show overlay-op-9 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="background-image: url(/frontend/img/home-slide-01.jpg); background-size: cover; background-position: center;">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col text-center">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">OUR DIFFERENCE</h2>
                    <h3 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 pb-3 mb-5">Company Details</h3>
                </div>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-11 text-center">
                    <p class="text-color-light text-4 mb-0">We duly incorporated under the Myanmar Citizen's Investment Law of the Uion of Myanmar. Company changed to corporate identy by the merger of Pyei Sone Hein Company Limited and ZIN 9 Company Limited in 2009</p>
                </div>
            </div>
            <div class="row counters counters-sm py-5">
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="50" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                        <label class="text-color-light font-weight-bold text-4 mb-0">Business Year</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="240" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                        <label class="text-color-light font-weight-bold text-4 mb-0">Satiesfied Clients</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="2000" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                        <label class="text-color-light font-weight-bold text-4 mb-0">Successfull Cases</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter">
                        <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="20" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                        <label class="text-color-light font-weight-bold text-4 mb-0">Professional Attorneys</label>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END COMPANY DETAILS -->
    <!-- START FOUNDER MESSAGE -->
    <section class="border-0 m-0 py-2">
        <div class="container py-5 my-3">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">PSH Global</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Founder Message</em></h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        We, PYEI SONE HEIN Group committed Socially Responsible Business in Myanmar. We brings many challenges to generate new growth for PSH Group by enhancing our management expertise, raising the value of our subsidiaries and business units, reviewing each of our businesses depending on its current lifecycle stage, and shifting our focus to business segments with the greatest potential.

                        We care about development of human resources for capacity building and society safety. We made other structural improvements to capture market momentum, evolution of technology and globally change is taking place nowadays.

                        We shall be maintaining our reputation, continuous improvement for delivering of excellence services and quality products with professionals to our customers and business partners for their success, prosperity and portfolios.

                        PSH Group’s guiding philosophy is its “Client Satisfaction is our Success” and to uphold those philosophy to our members it must meet the expectations of its stakeholders. We remain confident that the best way to do that is through business that simultaneously generates economic, society, and environmental value.

                        We look forward to the challenges ahead and ask for your continuous cooperation!
                    </p>
                    <p class="positive-ls-3 text-color-grey mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">JOHN DOE - CEO &amp; FOUNDER</p>
                </div>
                <div class="col-md-9 col-lg-6 ps-lg-5">
                    <div class="position-relative">
                        <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">
                            <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"></div>
                        </div>
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{asset('frontend/img/md.png')}}" class="img-fluid position-relative z-index-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOUNDER MESSAGE  -->
    <!-- START COMPANY TIMELINE -->
    <section class="section border-0 m-0 py-2">
        <div class="container py-5 my-3">
            <div class="row">
                <div class="col text-center">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">PSH Global</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Milestone of our company</em></h2>
                </div>
            </div>
            <div class="process process-vertical pt-4 pb-0">
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">1</strong>
                    </div>
                    <div class="process-step-content">
                        <strong class="d-block text-color-primary text-7 my-2">1997</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-2">COMPANY STARTED</p>
                        <p class="mb-0">
                            The company started out as a Trading company doing Import and Export of commodities.
                        </p>
                    </div>
                </div>
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">2</strong>
                    </div>
                    <div class="process-step-content">
                        <strong class="d-block text-color-primary text-7 my-2">2002</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-2">EXPANDED INTO MANUFACTURING AND DISTRIBUTION</p>
                        <p class="mb-0">
                            Expanded into Manufacturing and Distribution of Electronic Weighing Scale products Mettler Toledo and SETRA.
                        </p>
                    </div>
                </div>
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">3</strong>
                    </div>
                    <div class="process-step-content">
                        <strong class="d-block text-color-primary text-7 my-2">2005</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-2">
                            START REPRESENT DISTRIBUTORSHIP
                        </p>
                        <p class="mb-0">
                            Start represent distributorship ATIZ innovation Co., Ltd. (U.S.A) for digitalization instruments (BookDrive DIY).
                        </p>
                    </div>
                </div>
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">4</strong>
                    </div>
                    <div class="process-step-content">
                        <strong class="d-block text-color-primary text-7 my-2">2009</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-2">
                            START REPRESENT DISTRIBUTORSHIP
                        </p>
                        <p class="mb-0">
                            Start represent distributorship for CENSTAR Science & Technology Co., Ltd., Distribution of petroleum equipments and services in Myanmar.
                        </p>
                    </div>
                </div>
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">5</strong>
                    </div>
                    <div class="process-step-content">
                        <strong class="d-block text-color-primary text-7 my-2">2010</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-2">
                            AWARDED WITH ISO 9001-2008
                        </p>
                        <p class="mb-0">
                            Awarded with ISO 9001-2008, Quality Management System. Start represent distributorship of ADITYA BIRLA Chemical Group, products.
                        </p>
                    </div>
                </div>
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">6</strong>
                    </div>
                    <div class="process-step-content">
                        <strong class="d-block text-color-primary text-7 my-2">2011</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-2">
                            AWARDED BEST MARKETING
                        </p>
                        <p class="mb-0">
                            Awarded best marketing distributor from CENSTAR Science and Technology. Start represent distributorship for CAS (Korea) electronic weighing scale, products in Myanmar.
                        </p>
                    </div>
                </div>
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">7</strong>
                    </div>
                    <div class="process-step-content">
                        <strong class="d-block text-color-primary text-7 my-2">2012</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-2">
                            START REPRESENT DISTRIBUTORSHIP
                        </p>
                        <p class="mb-0">
                            Start represent distributorship for KPS Piping System, Sweden. Start represent distributorship of Zephyr Corporation, Japan for the Wind Energy.
                        </p>
                    </div>
                </div>
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">8</strong>
                    </div>
                    <div class="process-step-content">
                        <strong class="d-block text-color-primary text-7 my-2">2013</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-2">
                            START REPRESENT DISTRIBUTORSHIP
                        </p>
                        <p class="mb-0">
                            Start represent distributorship of Miura Boiler, Japan. Become strategic business partner of Kapsch TrafficCom for Myanmar market.
                        </p>
                    </div>
                </div>
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">9</strong>
                    </div>
                    <div class="process-step-content">
                        <strong class="d-block text-color-primary text-7 my-2">2014</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-2">
                            CENSTAR
                        </p>
                        <p class="mb-0">
                            CENSTAR products are replaced by Wayne proudcts since we start represent distributorship of Wayne Fueling Systems, USA.
                        </p>
                    </div>
                </div>
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">10</strong>
                    </div>
                    <div class="process-step-content">
                        <strong class="d-block text-color-primary text-7 my-2">2015</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-2">
                            START REPRESENT DISTRIBUTORSHIP
                        </p>
                        <p class="mb-0">
                            Start represent distributorship of KUBOTA Vending Machine from KUBOTA JAPAN.
                        </p>
                    </div>
                </div>
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2000">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">11</strong>
                    </div>
                    <div class="process-step-content">
                        <strong class="d-block text-color-primary text-7 my-2">2016</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-2">
                            START REPRESENT DISTRIBUTORSHIP
                        </p>
                        <p class="mb-0">
                            Start represent distributor ship of Franklin Fueling System, USA and distributorship of KUBOTA Weighing Scales System, Japan.
                        </p>
                    </div>
                </div>
                <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2200">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">12</strong>
                    </div>
                    <div class="process-step-content">
                        <strong class="d-block text-color-primary text-7 my-2">2017</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-2">
                            UPGRADE QUALITY MANAGEMENT SYSTEM
                        </p>
                        <p class="mb-0">
                            Upgrade Quality Management System ISO 9001-2015 and Enviromental Management System ISO 9001-14001.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END COMPANY TIMELINE -->
    <!-- START CLIENT TESTIMONIAL -->
    <section class="section overlay overlay-show overlay-op-9 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="background-image: url(/frontend/img/home-slide-01.jpg); background-size: cover; background-position: center;">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col text-center">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">TESTIMONIALS & REVIEWS</h2>
                    <h3 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 pb-3 mb-5">Satisfied Client Stories</h3>
                    <p class="custom-font-secondary text-color-light custom-font-size-1 font-weight-extra-bold">“</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center px-lg-0">
                    <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-light mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': true, 'autoplay': false, 'autoplayTimeout': 7000}">
                        <div>
                            <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">“ Cras a elit sit a met leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fils utlricies non. Integer aliquet ullamcorper. ”</p>
                            <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                                <hr class="my-4 mx-auto">
                            </div>
                            <strong class="d-block text-color-light text-4 mb-4">- John Doe, Los Angeles, CA</strong>
                        </div>
                        <div>
                            <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">“ Cras a elit sit a met leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fils utlricies non. Integer aliquet ullamcorper. ”</p>
                            <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                                <hr class="my-4 mx-auto">
                            </div>
                            <strong class="d-block text-color-light text-4 mb-4">- John Doe, Los Angeles, CA</strong>
                        </div>
                        <div>
                            <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">“ Cras a elit sit a met leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fils utlricies non. Integer aliquet ullamcorper. ”</p>
                            <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                                <hr class="my-4 mx-auto">
                            </div>
                            <strong class="d-block text-color-light text-4 mb-4">- John Doe, Los Angeles, CA</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CLIENT tESTIMONIAL -->
    <!-- START COMPANY LISTS -->
    <section class="border-0 m-0 py-2">
        <div class="container py-5 my-3">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">Companies</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Pyei Sone Hein Group of Companies</em></h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        The Company was established in 1997 and is duly incorporated under the Myanmar Citizen’s Investment Law of the Union of Myanmar. Company changed to corporate identity by the merger of Pyei Sone Hein Company Limited and ZIN 9 Company Limited in 2009. New World Link Pte. Ltd., Singapore is a subsidiary company of Pyei Sone Hein Group of Companies.

                        The Company start with the initial investment of USD 3 million and since then it has been growing profitably. The business extended through five business units in the area of Trading, Manufacturing, Engineering, Services and Construction.

                        The Company is certified by ISO 9001:2015 and ISO 14001:2015 for Quality Management system and Environmental Management System. We are member of United Nations Global Compact.

                        The company was opened 6 branches nationwide and the total of 250 staff members working at different management levels.
                    </p>
                </div>
                <div class="col-md-9 col-lg-6 ps-lg-5">
                    <div class="position-relative">
                        <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">
                            <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"></div>
                        </div>
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{asset('frontend/img/PSH-Group.jpg')}}" class="img-fluid position-relative z-index-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section border-0 m-0 py-2">
        <div class="container py-5 my-3">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-6 ps-lg-5">
                    <div class="position-relative">
                        <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">
                            <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"></div>
                        </div>
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{asset('frontend/img/PSH-CO.jpg')}}" class="img-fluid position-relative z-index-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">Companies</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Pyei Sone Hein Company Limited</em></h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        The Company was established in 2009 and is duly incorporated under the Myanmar Citizen’s Investment Law of the Union of Myanmar. Pyei Sone Hein Company Limited’s scopes of business are
                        <ul>
                            <li>Electronic Toll Management System</li>
                            <li>Software & System Engineering</li>
                            <li>Electronic & Electrical Engineering</li>
                            <li>Petroleum Equipment</li>
                            <li>Industrial Boiler System</li>
                            <li>Renewable Energy and Energy Solutions</li>
                            <li>Digitalization Equipment and</li>
                            <li>Road Safety Materials</li>
                        </ul>
                        Since 2010, Pyei Sone Hein Company Limited’s is leading in Electronic Toll Management industry with innovative technologies. Pyei Sone Hein Company Limited has been supplied Electronic Toll Management system to BOT Companies such as Shwe Than Lwin Co., Ltd , Kanbawza Pathfinder Industries Ltd, Myat Noe Thu Co., Ltd, Nay Min Yaung Co., Ltd, Soe Lwin Aung Co., Ltd and Ministry of Construction.

                        Pyei Sone Hein Company Limited cooperates with International Leading companies Kapsch TrafficCom System (Sweden) , Beninca (Italy), Miura Boiler (Japan), Zephyr (Japan) and ATIZ (USA).

                        Pyei Sone Hein Company Limited provides Integrate Software Solutions to various industries including Toll Management System, Retail Fuel Station Management System, and Truck Scale Management System for our clients.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="border-0 m-0 py-2">
        <div class="container py-5 my-3">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">Companies</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>ZIN 9 Company Limited</em></h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        The Company was established in 1997 and is duly incorporated under the Myanmar Citizen’s Investment Law of the Union of Myanmar. In the originally ZIN9 Company was started as trading company.

                        Since 2002, ZIN 9 Company Limited has been leading in industrial weighing system in Myanmar Market. ZIN 9 Company Limited is pioneer weighing scale manufacturer of Digital Weighing scale with Myanmar’s mass measurement units and recognized by UMFCCI (Union of Myanmar Federation of Chambers of Commerce and Industry).

                        ZIN 9 Company Limited cooperates with International Companies such as Kubota, Minebea Intec, CAS, Aczet and distribute latest technologies of Electronic Weighing Scales. The company’s manufacturing, sales and after sales service are conducting according ISO 9001:2015 Quality Management Principles.

                        ZIN 9 Company Limited is distribution weighing scale to various industries such as Industrial Ports, Distribution, Mining industry, Warehouse, Highway road operations, Factory, Government industry, Hotel, Hospital, Restaurants and retail markets.
                    </p>
                </div>
                <div class="col-md-9 col-lg-6 ps-lg-5">
                    <div class="position-relative">
                        <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">
                            <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"></div>
                        </div>
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{asset('frontend/img/ZIN.jpg')}}" class="img-fluid position-relative z-index-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section border-0 m-0 py-2">
        <div class="container py-5 my-3">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-6 ps-lg-5">
                    <div class="position-relative">
                        <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">
                            <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"></div>
                        </div>
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{asset('frontend/img/Petroleum-Equipment.jpg')}}" class="img-fluid position-relative z-index-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">Companies</h2>
                    <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>PSH Petroleum Equipment</em></h2>
                    <p class="font-weight-light text-color-dark mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        Since 2009, PSH Petroleum Equipment has been leading in Petroleum Equipment distribution for retail fuel stations, Terminal, Depot and fuel distributions sectors.

                        PSH Petroleum Equipment cooperate with global leading companies and global market leader brands such as Dover Fueling Solutions, Wayne Fueling System, OPW, Tokheim, Tokheim ProGauge, PSG, Franklin Fueling System, ContiTech and Beacon Business System for fuel management system.

                        PSH Petroleum Equipment is distribution a comprehensive array of innovative end to end solutions for retail fuel station including Dispensing System, Piping and Containment System, Pumping System, Automatic Tank Gauging System, 3D Laser Tank Calibration System, Hanging hardware, underground and above ground storage tank and Fuel Station Automation System. Products are from USA, Europe, Brazil, Thailand, China and India.

                        PSH Petroleum Equipment Engineering team is set up with well-trained experience Engineers and Technicians for site installation and after sales services. PSH Petroleum Equipment Engineering team is delivering responsive service for our clients all the times.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- END COMPANY LISTS -->
</div> 
@endsection