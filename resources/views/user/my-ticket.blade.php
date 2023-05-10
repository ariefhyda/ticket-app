@extends('layout.template')
@section('title','Login')
@section('css')

@endsection

@section('content')
<section id="section-tickets">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <div class="title-box-outer wow flipInX">
                        <div class="title-box-inner wow flipInX" data-wow-delay=".2s">
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><span class="id-color">My</span> Tickets</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-single"></div>
        </div>
        <div class="row g-custom-x">
            @if(count($ticket)==0)
                <h5 class="top text-center">You dont have ticket.</h5>
            @endif
            @foreach($ticket as $t)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="pricing-s1 mb-sm-30 wow flipInY">
                    <div class="top text-center">
                        <h2>{{$t->name}}</h2>
                    </div>
                    <div class="mid text-center text-light bg-color" >
                    <div class="visible-print text-center">
                        {!! QrCode::size(200)->generate($t->code); !!}
                        <p>{{$t->code}}</p>
                    </div>
                    </div>
                    <div class="bottom">
                    <p>
                        @if($t->check_in)
                        <span class="id-color"><i class="fas fa-check"></i></span> 
                        @else                        
                        <span class="id-color"><i class="fas fa-close"></i></span> 
                        @endif

                        Checkin
                    </p>
                    </div>
                    <div class="action text-center">
                        @if(Session::has('login'))
                        <a href="{{url('/buy-ticket/')}}" class="btn-main">Buy Ticket</a>
                        @else
                        <a href="{{url('/auth')}}" class="btn-main">Buy Ticket</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</section>
@endsection
    

@section('js')

@endsection