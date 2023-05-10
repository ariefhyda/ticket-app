@extends('layout.template')
@section('title','Login')
@section('css')
<style>
    table.table-bordered{
    border:1px solid white;
    margin-top:20px;
  }
table.table-bordered > thead > tr > th{
    border:1px solid white;
}
table.table-bordered > tbody > tr > td{
    border:1px solid white;
}
</style>
@endsection

@section('content')
<section id="section-tickets">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <div class="title-box-outer wow flipInX">
                        <div class="title-box-inner wow flipInX" data-wow-delay=".2s">
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><span class="id-color">Data</span> Ticket</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-single"></div>
        </div>

        <div class="row g-custom-x">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="pricing-s1 mb-sm-30 wow flipInY">
                    <div class="top text-center">
                        <h2>CHECKED</h2>
                    </div>
                    <div class="mid text-center text-light bg-color" >
                    <div class="visible-print text-center">
                        <h2>{{$checked}}</h2>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="pricing-s1 mb-sm-30 wow flipInY">
                    <div class="top text-center">
                        <h2>NOT CHECKED</h2>
                    </div>
                    <div class="mid text-center text-light" data-bgcolor="#5124ee">
                    <div class="visible-print text-center">
                        <h2>{{$not_checked}}</h2>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div id="success_message" class='success'></div>
            <div id="error_message" class='error'></div>
            <table class="table table-bordered text-white"  id="myTable">
                <thead>
                    <tr >
                        <th>NO</th>
                        <th>QRCODE</th>
                        <th>CHECK IN </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no=1;
                    @endphp
                    @foreach($ticket as $t)
                    <tr >
                        <td>{{$no++}}</td>
                        <td>
                        <div class="visible-print text-center">
                            {!! QrCode::size(200)->generate($t->code); !!}
                            <p>{{$t->code}}</p>
                        </div>
                        </td>
                        <td>
                            @if($t->check_in)
                            <i class="fa fa-2x fa-check"></i>
                            @else
                            <button class="btn btn-sm btn-primary" onclick="verifikasi({{$t->id}})"> Checkin</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    
</section>

@endsection
    

@section('js')
<script>
function verifikasi(id) {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/admin/ticket",
        data: {
            id: id,
            _token: '<?php echo csrf_token() ?>'
        },
        success: function(msg){
            console.log(msg); 
            
            if (msg.status) {
                $('#error_message').hide();
                $('#success_message').html(msg.message);
                $('#success_message').show();
                setTimeout(() => {
                    window.location.href="{{url('/admin/ticket')}}";
                }, 2000);
            }else{
                $('#success_message').hide();
                $('#error_message').html(msg.message);
                $('#error_message').show();
            }
        }
    });
}


</script>
@endsection