@extends('global.app')
@extends('global.import')
@section('title', 'Home | Movie Dash')
@section('content')
<style>
    @media only screen and (min-width: 893px) {
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }
    }

    .card-img-top {
        display: block;
    }

    #hoverImage {
        position: relative;
    }

    #hoverImage:hover .overlay {
        opacity: 0.3;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-color: #292b2c;
    }

    .readMore {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 40%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }

</style>
<!-- search movies START -->
<div class="container-fluid" style="background: #8860D0; height: 280px;">
    <div class="row" style="margin: 0 35px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h1 class="text-light font-weight-bold m-3 mt-5">Welcome!</h1>
            <h3 class="text-light font-weight-bold m-3">Let's discover movies here!</h3>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row" style="margin: 20px 35px 0;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form action="home" method="get" id="searchForm">
                {{-- <div class="input-group input-group-lg">
                    <input type="text" name="search" class="form-control" placeholder="Search for movies..."
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-warning btn-lg" type="submit"><i class="fas fa-search"></i>&nbsp;Search</button>
                    </div>
                </div> --}}
                <div class="input-group input-group-lg mb-3">
                    <input type="text" class="form-control" placeholder="Search for movies..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-light btn-lg" type="submit"><i class="fas fa-search"></i>&nbsp;Search</button>
                  </div>
            </form>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<!-- search movies END -->
<!-- movies list START -->
<div class="container-fluid bg-light" style="padding: 40px 0 0;">
    <div class="row" style="margin: 0 50px;">
        <div class="col-6">
            <h4 class="font-weight-bold" style="color: #8860D0;">Movies</h4>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <!-- <a href="#" class="btn btn-link font-weight-bold" style="color: #2b7a78;">Add -->
            </a>
        </div>
    </div>
    <hr>
    <!-- <div class="row d-flex justify-content-start shadow p-4 mb-5 bg-white rounded" style="margin: 35px 30px 0;"> -->
    <div class="row" style="margin: 30px 30px 10px;">
        {{-- @if (count($movies) == 0) --}}
        {{-- <div class="col-12 text-center pt-5 pb-5">
            <h1 style="color: #2b7a78;">No results found :(</h1>
            <p style="color: #2b7a78;">Sorry, we couldn't find what you're looking for...</p>
        </div> --}}
        {{-- @else --}}
        @foreach ($movies as $mov)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow bg-white rounded" id="hoverImage">
                <a href="{{ url('movie/'.$mov['id']) }}" target="_blank">
                {{-- <a href="#" target="_blank"> --}}
                    {{-- @if (empty($mov['image'])) --}}
                    <img class="card-img-top" src="https://via.placeholder.com/350x250" alt="Card image cap1">
                    {{-- @else
                    <img class="card-img-top" src="images/{{$mov['image']}}" alt="Card image cap2">
                    @endif --}}
                    <div class="overlay">
                        <div class="readMore">MORE DETAILS</div>
                    </div>
                </a>
                <div class="card-body pb-0" style="background: #8860D0;">
                    {{-- <a href="#" target="_blank" class="text-decoration-none"> --}}
                    <a href="{{ url('movie/'.$mov['id']) }}" target="_blank" class="text-decoration-none">
                        <h5 class="card-title text-uppercase text-light">{{ $mov['title'] }}
                        </h5>
                        {{-- @if ($mov['reviewCount'] > 0) --}}
                            <h5 class="card-title mb-0" style="color: orange;">
                                {{-- @for ($i = 0; $i < round(($mov['totalScore']/$mov['reviewCount'])/3); $i++)
                                    <span class="fa fa-star checked" style="font-size: 15px;"></span>
                                @endfor
                                @for ($i = 0; $i < 5-round(($mov['totalScore']/$mov['reviewCount'])/3); $i++)
                                    <span class="fa fa-star" style="font-size: 15px; color: grey;"></span>
                                @endfor --}}
                                <span class="fa fa-star checked" style="font-size: 15px;"></span>
                                <span class="fa fa-star checked" style="font-size: 15px;"></span>
                                <span class="fa fa-star checked" style="font-size: 15px;"></span>
                                <span class="fa fa-star checked" style="font-size: 15px;"></span>
                                <span class="fa fa-star" style="font-size: 15px; color: #F8F9FA;"></span>
                            </h5>
                        {{-- @else
                        <h5 class="card-title mb-0 text-light">&nbsp;</h5>
                        @endif --}}
                    </a>
                </div>
                <div class="card-footer border-0" style="background: #8860D0;">
                    <div class="row">
                        <div class="col-6 card-text text-light text-uppercase">{{ $mov['genre']}}
                        </div>
                        <div class="col-6 card-text text-light text-right text-uppercase">{{ $mov['year']}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{-- @endif --}}
        <!-- <div class="container mt-4 mb-4">
            <button type="button" class="btn btn-warning btn-lg btn-block">More movies</button>
        </div> -->
    </div>
</div>
<!-- movies list END -->
@endsection