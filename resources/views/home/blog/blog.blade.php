@include('home.includes.header')
{{-- menu --}}

@include('home.includes.menu')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Blog</li>
            </ol>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <div class="intro-blog text-center">
                <h2>Our Latest Blog Posts</h2>
                <p>Stay up-to-date with the latest news, trends, and insights in the medical billing and revenue
                    cycle management industry through our informative blog posts. Our team of experts shares their
                    knowledge and expertise to help you navigate the complexities of medical billing and maximize
                    your revenue.</p>
            </div>
            <div class="row mt-5">
                @forelse ($posts as $post)
                <div class="col-md-6 col-lg-4  mb-5">
                    <div class="item blog_post">
                        <div class="blog-entry">
                            <a href="#" class="block-20 d-flex align-items-start rounded"
                                style="background-image: url('{{ asset($post->image) }}');">
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

                                        {{-- <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a> --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="alert alert-danger" role="alert">
                    No Blog Yet
                </div>
                @endforelse
            </div>
        </div>
    </section>

</main><!-- End #main -->

{{-- footer --}}

@include('home.includes.footer')
