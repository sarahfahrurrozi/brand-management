@php
$sliders = DB::table('sliders')->get();
@endphp

<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">
            @foreach($sliders as $key => $slider)
            <div class="carousel-item {{ $key == 0 ? 'active' : ''}}" style="background-image: url({{ asset($slider->image) }});">
                <div class="carousel-container">
                    {{-- <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>{{ $slider->title }}</h2>
                        <p>{{ $slider->description }}</p>
                        <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                    </div> --}}
                </div>
            </div>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators">
            @foreach($sliders as $key => $slider)
            <li data-target="#heroCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>

    </div>
</section><!-- End Hero -->

<style>
    #heroCarousel {
        /* Ensure the carousel takes the full width and height of its container */
        width: 100%;
        height: 100vh;
    }

    .carousel-item {
        /* Make sure the background image covers the entire carousel item */
        background-size: cover;
        background-position: center;
        height: 100vh; /* Make each slide fill the entire viewport */
    }

    .carousel-container {
        /* Align the content in the center of the carousel */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    /* Ensure text inside the carousel is responsive */
    .carousel-content {
        text-align: center;
        color: white;
        max-width: 800px;
        padding: 20px;
    }

    .carousel-content h2 {
        font-size: 2.5rem;
    }

    .carousel-content p {
        font-size: 1.2rem;
    }

    .btn-get-started {
        font-size: 1rem;
        padding: 10px 20px;
        margin-top: 20px;
    }

    @media (max-width: 768px) {
        /* Adjustments for tablets */
        .carousel-content h2 {
            font-size: 2rem;
        }

        .carousel-content p {
            font-size: 1rem;
        }

        .btn-get-started {
            font-size: 0.9rem;
            padding: 8px 16px;
        }
    }

    @media (max-width: 576px) {
        /* Adjustments for mobile devices */
        .carousel-content h2 {
            font-size: 1.5rem;
        }

        .carousel-content p {
            font-size: 0.9rem;
        }

        .btn-get-started {
            font-size: 0.8rem;
            padding: 6px 12px;
        }
    }
</style>
