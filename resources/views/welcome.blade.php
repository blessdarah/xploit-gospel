@extends('layouts.app')

@section('content')
    @include('includes.carousel')

    {{-- why us --}}
    <section class="why-us my-3 my-lg-5">
        <div class="container pb-5">
            <header class="text-center pt-md-5 mb-4">
                <span class="badge badge-primary">Why we rock!</span>
                <h2 class="display-2">Gospel Music Rocks!</h2>
            </header>

            {{-- cards --}}
            <div class="row">
                <div class="col-md-4 mb-3 mb-lg-0">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <h5 class="card-title mb-0 font-weight-800">Easy to get started</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, sequi!</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3 mb-lg-0">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <h5 class="card-title mb-0 font-weight-800 text-danger">Make it yours</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, sequi!</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3 mb-lg-0">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <h5 class="card-title mb-0 font-weight-800 text-warning">Lots of variety</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, sequi!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- latest releases --}}
    <div class="container">
        <header class="text-center py-md-3 mb-4">
            <span class="badge badge-success">Latest gospel releases</span>
            <h2 class="display-2">Just the beginning</h2>
            <p class="px-lg-5 mx-lg-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eligendi aspernatur non recusandae suscipit nihil laudantium officia sit amet corrupti sint ipsa accusamus qui esse eaque a temporibus, unde voluptates ab dicta. Dicta voluptate eligendi neque nisi omnis. Doloribus quis minima error nam eaque repellat, eveniet unde tempora officiis beatae.</p>
        </header>
    </div>

    {{-- trending video --}}
    <section class="trending container">
            <div class="row">
                <div class="col-md-7">
                    <video src="{{ asset('videos/test.mp4') }}" controls class="shadow" width="100%" height="auto"></video>
                </div>
                <div class="col-md-5 mb-md-5">
                    <ul class="list-group playlist rounded-0">
                        {{-- playlist item component --}}
                        @for ($i = 0; $i < 3; $i++)
                            <li class="list-group-item playlist__item p-1 mb-2">
                                <img src="{{ asset('images/flyer.jpg') }}" alt="" class="img-fluid playlist__item__image">
                                <div class="playlist__item__content">
                                    <p class="small mb-0">For King and Country: <span class="text-primary">Amen</span></p>
                                    <p class="small">Album: Amen</p>
                                    <span class="badge badge-danger">play</span>
                                </div>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
    </section>

    <section class="categories bg-success py-5">
        <div class="container-fluid py-5 my-5">
            <div class="row">
                <div class="col-md-6">
                @for ($i = 0; $i < 3; $i++)
                    <div class="row text-center mb-3">
                        <div class="col-6 col-md-3 mb-3 mb-lg-0">
                            <a href="#" class="card card-body shadow--hover">Jazz</a>
                        </div>
                        <div class="col-6 col-md-3 mb-3 mb-lg-0">
                            <a href="#" class="card card-body shadow--hover">Hip Hop</a>
                        </div>
                        <div class="col-6 col-md-3 mb-3 mb-lg-0">
                            <a href="#" class="card card-body shadow--hover">Worship</a>
                        </div>
                        <div class="col-6 col-md-3 mb-3 mb-lg-0">
                            <a href="#" class="card card-body shadow--hover">Makossa</a>
                        </div>
                    </div>
                    @endfor
                </div>
                <div class="col-md-6 px-md-5">
                    <span class="badge badge-primary">categories</span>
                    <h2 class="font-weight-bold display-2">Bring you the vibes</h2>
                    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet eius, eum, assumenda ullam unde neque earum rem quidem, quo aliquam numquam quae. Et ratione consequatur iste nemo est molestiae voluptatibus accusantium vero beatae quas labore maxime error, fuga, sequi aut.</p>
                    <a href="#" class="btn btn-danger btn-lg">Join the community</a>
                </div>
                
            </div>
        </div>
    </section>

    {{-- events --}}
    <section class="testimonial my-5">
        <div class="container">
            <div class="text-center mb-4">
                <span class="badge badge-warning">Coming events</span>
                <h3 class="font-weight-800 display-2">Join the fellowship</h3>
                <p class="w-75 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt molestias adipisci ipsum totam libero ratione eaque rem consequuntur fugit eos!</p>
            </div>
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-md-6 col-lg-3">
                        <div class="card mb-3 mb-lg-0">
                            <img src="{{ asset('images/sax.jpg') }}" alt="sax" class="card-img-top">
                            <div class="card-body">
                                <a href="#" class="card-title mb-0">Event title</a>
                                <p class="card-text small">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab eveniet similique.</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    {{-- subscribe to news letter --}}
    <section class="newletter py-3 py-lg-5">
        {{-- <div class="row"> --}}
            <div class="text-center mb-4">
                <span class="badge badge-info">Get updates</span>
                <h3 class="font-weight-800 display-2">Weekly newsletter</h3>
                <p class="w-75 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt molestias adipisci ipsum totam libero ratione eaque rem consequuntur fugit eos!</p>
            </div>
            <form method="POST" action="#" class="col-md-6 mx-md-auto">
                <div class="form-row">
                    <input class="form-control col-8" type="email" name="email" placeholder="Enter email address">
                    <button type="submit" class="btn btn-sm btn-default col-4">Subscribe</button>
                </div>
            </form>
        {{-- </div> --}}
    </section>

    <footer class="bg-default">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </footer>
@endsection