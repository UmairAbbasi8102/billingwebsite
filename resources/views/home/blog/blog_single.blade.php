@include('home.includes.header')
{{-- menu --}}

@include('home.includes.menu')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Blog Details</li>
            </ol>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12">

                    <div class="portfolio-description">

                            {!! $post->det_desc !!}

                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->


{{-- footer --}}

@include('home.includes.footer')
