<x-frontend-templete>
    <section>
        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($carousel as $carousel)
                    <div class="carousel-item active">
                        <img src="{{ asset($carousel->image) }}" class="d-block w-100" alt="...">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- About us -->
        <div class="container-fluid py-5"  style="background-color:#d9e8ed">
            <div class="container">
                <div class="row">
                    <div class="col-md-6  mb-2 text-center">
                        <h3 class="text-secondary text-center">{{ $about->title }}</h3>
                        <p class="text-center">{!! $about->description !!}</p>
                        <a href="" class="text-secondary">Learn More <i class="fa fa-long-arrow-right ms-1" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset($about->image) }}" alt="" class="img-fluid center" style="border: 2px solid #00aeef ">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-templete>
