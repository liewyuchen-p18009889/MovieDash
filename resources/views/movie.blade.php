@extends('global.app')
@extends('global.import')
@section('title', 'Movie | Movie Dash')
@section('content')

<div class="row m-4">
    <div class="col-md-6">
        <h2 class="m-0" style="color: #8860D0">Movie Details</h2>
    </div>
    {{-- @if (empty($noExists))
        @if (Session::get('loggedUser')['isAdmin'] == 1)
            @foreach ($restaurants as $res)
            <div class="col-md-6 d-flex justify-content-end">
                <a type="button" class="btn btn-secondary mr-1" style="background: #57ba98;" href="{{ url('editRestaurant/'.$res['id']) }}"><i class="fas fa-edit"></i>&nbsp;Edit Restaurant</a>
                <a href="{{url('/deleteRes')}}/{{ $res['id'] }}" class="btn btn-danger ml-1 btnDelRes"><i class="fas fa-trash"></i>&nbsp;Delete Restaurant</a>
            </div>
            @endforeach
        @endif
    @endif --}}
</div>
<div class="shadow p-4 mb-5 bg-white rounded" style="margin: 0 30px; min-height: 457px;">
    @foreach ($movies as $mov)
    <div class="row">
        <div class="col-md-5 col-sm-12">
            {{-- @if (empty($mov['image'])) --}}
                <img class="img-fluid rounded" src="https://via.placeholder.com/600x350" alt="image">
            {{-- @else --}}
                {{-- <img class="img-fluid rounded shadow" src="../images/{{ $mov['image'] }}" alt="image"> --}}
            {{-- @endif --}}
        </div>
        <div class="col-md-7 col-sm-12">
            <div class="row mt-2">
                <div class="col-md-12">
                    <h2 style="color: #8860D0">{{ $mov['title'] }}</h2>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3 col-xs-6">
                    <h5 style="color: #5c2cb4;">
                        <i class="fas fa-hashtag"></i>&nbsp;{{ $mov['genre'] }}
                    </h5>
                </div>
                <div class="col-md-3 col-xs-6">
                    <h5 style="color: #5c2cb4;">
                        <i class="fas fa-hashtag"></i>&nbsp;{{ $mov['language'] }}
                    </h5>
                </div>
            </div>
            {{-- @if ($serviceRate && $valueRate && $foodRate != 0)
            <div class="row mt-2">
                <div class="col-md-3 col-xs-6">
                    <h6 style="color: #57ba98;">Service&nbsp;
                        @for ($i = 0; $i < round($serviceRate); $i++)
                        <span class="fa fa-star checked" style="font-size: 15px;"></span>
                        @endfor
                        @for ($i = 0; $i < 5-round($serviceRate); $i++)
                            <span class="fa fa-star" style="font-size: 15px; color: grey;"></span>
                        @endfor
                    </h6>
                </div>
                <div class="col-md-3 col-xs-6">
                    <h6 style="color: #57ba98;">Value&nbsp;
                        @for ($i = 0; $i < round($valueRate); $i++)
                        <span class="fa fa-star checked" style="font-size: 15px;"></span>
                        @endfor
                        @for ($i = 0; $i < 5-round($valueRate); $i++)
                            <span class="fa fa-star" style="font-size: 15px; color: grey;"></span>
                        @endfor
                    </h6>
                </div>
                <div class="col-md-3 col-xs-6">
                    <h6 style="color: #57ba98;">Food&nbsp;
                        @for ($i = 0; $i < round($foodRate); $i++)
                        <span class="fa fa-star checked" style="font-size: 15px;"></span>
                        @endfor
                        @for ($i = 0; $i < 5-round($foodRate); $i++)
                            <span class="fa fa-star" style="font-size: 15px; color: grey;"></span>
                        @endfor
                    </h6>
                </div>
            </div> 
            @endif --}}
            <h5 class="mt-3 text-justify" style="color: #8860D0">{!! $mov['synopsis'] !!}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @if (empty($hideReviewBtn))
                {{-- <div style="padding-top:40px;"> --}}
                    <a class="btn btn-lg mt-4" href="{{ url('addReviews/'.$mov['id']) }}" style="background: #8860D0; color: #F8F9FA;">
                    <i class="fas fa-comment-dots fa-flip-horizontal"></i>&nbsp;Leave review</a>
                {{-- </div> --}}
            @endif
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <h5 class="mt-5" style="color: #8860D0;">{!! date('d/m/Y', strtotime($mov['created_at'])) !!}</h5>
        </div>
    </div>
    @endforeach
</div>

@endsection