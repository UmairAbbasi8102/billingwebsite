@include('home.includes.header')
{{-- menu --}}

@include('home.includes.menu')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>
                    Streamline Your Revenue Cycle with Our Medical Billing Services
                </h1>
                <h2>
                    Maximize your revenue and reduce administrative burdens with our comprehensive medical billing
                    services.
                    From coding to claims processing, we've got you covered.
                </h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('assets/img/hero.png ')}}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    {{--
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row" data-aos="zoom-in">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/clients/client-1.png ')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/clients/client-2.png ')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/clients/client-3.png ')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/clients/client-4.png ')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/clients/client-5.png ')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/clients/client-6.png ')}}" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section><!-- End Cliens Section --> --}}

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <ul>
                        <li><i class="ri-check-double-line"></i> Providing high-quality medical billing services with
                            attention to
                            detail and commitment to client satisfaction. </li>
                        <li><i class="ri-check-double-line"></i> Dedicated to making the medical billing process
                            efficient and
                            alleviating burden for healthcare providers.</li>
                        <li><i class="ri-check-double-line"></i> Building strong relationships through transparency,
                            open
                            communication, and customized solutions.</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        we're passionate about helping healthcare providers maximize their revenue and minimize their
                        administrative burdens. Our team of experienced medical billing experts and revenue cycle
                        management
                        specialists work tirelessly to ensure that our clients receive the highest level of service and
                        support.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3>Why Choose Us</h3>
                        <p>
                            We understand that you have many options when it comes to selecting a medical billing
                            services provider.
                            Here are a few reasons why [Company Name] stands out from the competition.
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse"
                                    data-bs-target="#accordion-list-1"><span>01</span> What
                                    sets you apart from other medical billing providers? <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        At [Company Name], we bring years of experience and a track record of success to
                                        every project we
                                        undertake. Our team of experts is committed to providing the highest quality
                                        services, and we work
                                        tirelessly to ensure your satisfaction.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                    class="collapsed"><span>02</span>
                                    How do you ensure accuracy and compliance with regulations? <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        We use the latest technologies and follow best practices to ensure accuracy and
                                        compliance with
                                        all relevant regulations. Our team stays up-to-date with the latest changes and
                                        developments in
                                        the industry to ensure that we're always providing the best possible service.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                    class="collapsed"><span>03</span>
                                    What kind of customer support can I expect? <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        We pride ourselves on our exceptional customer support. Our team is available to
                                        answer any
                                        questions you may have and to provide ongoing support as needed. We're dedicated
                                        to building
                                        long-lasting relationships with our clients, and we're committed to your
                                        success.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                    style='background-image: url("{{ asset(' assets/img/why-us.png')}}");' data-aos="zoom-in"
                    data-aos-delay="150">&nbsp;</div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('assets/img/skills.png ')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                    <h3>
                        Our Skills
                    </h3>
                    <p class="fst-italic">
                        I’ve been working for a company called (MTBC) that
                        specializes in medical billing solutions, coding and credentialing. In
                        thinking about your business and day to day enhancement in terms of RCM,
                        I thought there might be a good fit for your group.

                        Our billing services have garnered a lot of attention in the marketplace
                        and I think it’s something that your organization might see immediate
                        value in.

                        We are offering best services on low rate to meet RCM and closing month
                        on increasing trend in revenue, all of the services are listed as

                    </p>

                    <div class="skills-content">
                        <ul class="unordered-list">
                            <li> <i class="ri-check-double-line"></i> Medical Billing</li>
                            <li> <i class="ri-check-double-line"></i> Payment Posting</li>
                            <li> <i class="ri-check-double-line"></i> AR Follow-up in different slots</li>
                            <li> <i class="ri-check-double-line"></i> VOB (Verification of Benefits)</li>
                            <li> <i class="ri-check-double-line"></i> DM (Denial Management)</li>
                            <li> <i class="ri-check-double-line"></i> Prior Authorization (obtaining and linking)</li>
                            <li> <i class="ri-check-double-line"></i> RCM Reports (Weekly, bi-weekly or monthly</li>
                            <li> <i class="ri-check-double-line"></i> Practices health Analysis (Monthly or Quarterly)
                            </li>
                        </ul>
                        <p>
                            We know the majority of small businesses are always looking for a great
                            opportunity and we'd be able to generate leads for you if this is
                            something you're interested in.
                        </p>
                    </div>
                    <div class="skills-content">
                        <ul class="unordered-list">
                            <li> <i class="ri-check-double-line"></i> Provider credentialing</li>
                            <li> <i class="ri-check-double-line"></i> Hospital RCM</li>
                            <li> <i class="ri-check-double-line"></i> Electronic Health record</li>
                        </ul>
                        <p>
                            if you are available for a brief chat this week or Monday to Friday of
                            next week. Please update us with your contact information so we can
                            connect with you to discuss more about the services and business running
                            plan.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p>Automate your billing processes with our user-friendly billing software, designed to simplify the
                    complex task of managing invoices, payments, and expenses. Our solution provides accurate financial
                    reporting, real-time tracking of payments, and customizable invoice templates to streamline your
                    billing operations. Say goodbye to manual invoicing and focus on growing your business with our
                    intuitive billing software</p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a>Medical Coding</a></h4>
                        <p>We provide accurate and timely medical coding services to ensure that your claims are
                            properly coded
                            and reimbursed.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a>Claims Processing</a></h4>
                        <p>Our claims processing services help you get paid faster and more efficiently by streamlining
                            the entire
                            claims submission process.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a>Accounts Receivable Management</a></h4>
                        <p>We help you manage your accounts receivable to ensure that you get paid for the services you
                            provide in
                            a timely and accurate manner.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-layer"></i></div>
                        <h4><a>Revenue Cycle Analysis</a></h4>
                        <p>Our revenue cycle analysis services help you identify areas of improvement in your revenue
                            cycle to
                            increase revenue and profitability.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Ready to Streamline Your Revenue Cycle? </h3>
                    <p>
                        Our expert team is standing by to help you maximize your revenue and reduce administrative
                        burdens.
                        Schedule a consultation, request a quote, or sign up for our services today.
                    </p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="https://web.whatsapp.com/send?phone=+923478229274">Call To
                        Action</a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit
                    in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                @foreach ($teams as $team)

                <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{ asset($team->image)}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>{{ $team->name }}</h4>
                            <span>{{ $team->role }}</span>
                            <p>{{ $team->about }}</p>
                            <div class="social">
                                <a href="{{ $team->twitter_link }}"><i class="ri-twitter-fill"></i></a>
                                <a href="{{ $team->fb_link }}"><i class="ri-facebook-fill"></i></a>
                                <a href="{{ $team->instagram_link }}"><i class="ri-instagram-fill"></i></a>
                                <a href="{{ $team->linkdin_link }}"> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Latest Blog Posts</h2>
                <p>Stay up-to-date with the latest news and insights from our team.</p>
            </div>

            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">

                    @foreach ($posts as $post)
                    <div class="item">
                        <div class="blog-entry">
                            <a href="#" class="block-20 d-flex align-items-start"
                                style="background-image: url('{{ asset('assets/img/image_1.jpg')}}');">
                                <div class="meta-date text-center p-2">
                                    <span class="day">{{ $post->created_at->format('d') }}</span>
                                    <span class="mos">{{ $post->created_at->format('M') }}.</span>
                                    <span class="yr">{{ $post->created_at->format('Y') }}</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4">
                                <h3 class="heading"><a href="#">{{$post->title}}</a></h3>
                                <p>{{ Str::limit($post->desc, 100, '...') }}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="{{ route('blog_single', ['id'=>$post->id]) }}"
                                            class="btn btn-primary">Read More <span
                                                class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="meta2 mb-0">
                                        <a href="#" class="mr-2">Admin</a>

                                        {{-- <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                        --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <div class="text-center mt-3">
                <a class="" href="{{ route('blog') }}">View All Posts</a>
            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Have questions about medical billing or our services? Look no further than our FAQ section. We've
                    answered
                    some of the most common questions we receive to help you better understand our company and what we
                    can do
                    for you.</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                            data-bs-target="#faq-list-1">What services do you offer? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                We offer a range of medical billing services including medical coding, claims
                                processing, accounts
                                receivable management, and more. For a full list of our services, please visit our
                                Services page.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">What services do you offer? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                We offer a range of medical billing services including medical coding, claims
                                processing, accounts
                                receivable management, and more. For a full list of our services, please visit our
                                Services page.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-3" class="collapsed">What is your pricing structure? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Our pricing varies depending on the services you require and the volume of claims we
                                process on your
                                behalf. Please contact us to request a quote
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-4" class="collapsed">How long does it take to see results? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                The timeline for seeing results depends on various factors such as the complexity of
                                your billing, the
                                volume of claims, and the state of your accounts receivable. We work diligently to
                                ensure timely and
                                accurate processing of claims and payments.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-5" class="collapsed">How do I get started? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Getting started is easy! Simply fill out the contact form on our Contact page, and we
                                will get in
                                touch with you to schedule a consultation.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>We want to hear from you! Whether you have a question about our services or just want to say hello,
                    we're
                    here to help. Fill out our contact form or give us a call to get in touch with our team.</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="{{ route('submit-form') }}" method="post" id="myform" role="form"
                        class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name">
                                <div class="messages"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                                <div class="messages"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject">
                            <div class="messages"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message"></textarea>
                            <div class="messages"></div>
                        </div>
                        <div class="my-3">
                            <div id="success-message" style="display:none;" class="alert alert-success"></div>
                            <div id="error-message" style="display:none;" class="alert alert-danger"></div>
                        </div>
                        <div class="text-center"><button type="submit" id="submit-button">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main>
<!-- End #main -->

{{-- footer --}}

@include('home.includes.footer')
