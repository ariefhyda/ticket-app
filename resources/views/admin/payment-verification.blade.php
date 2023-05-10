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
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><span class="id-color">Payment</span> Verification</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-single"></div>
        </div>
        <div class="row">
            <div id="success_message" class='success'></div>
            <div id="error_message" class='error'></div>
            <table class="table table-bordered text-white"  id="myTable">
                <thead>
                    <tr >
                        <th>NO</th>
                        <th>CODE</th>
                        <th>TOTAL</th>
                        <th>PROOF OF PAYMENT </th>
                        <th> PAYMENT VERIFICATION </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no=1;
                    @endphp
                    @foreach($transaction as $t)
                    <tr >
                        <td>{{$no++}}</td>
                        <td>{{$t->transaction_code}}</td>
                        <td>{{number_format($t->total,0,"",".")}}</td>
                        <td>
                            @if($t->proof_of_payment)
                            <img src="{{asset('/uploads/'.$t->proof_of_payment)}}" width="200px">                            
                            @endif
                        </td>
                        <td>
                            @if($t->payment_status)
                            VERIFIED
                            @else
                            <button class="btn btn-sm btn-primary" onclick="verifikasi({{$t->id}})"> Verif</button>
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
        url: "/admin/payment-verification",
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
                    window.location.href="{{url('/admin/payment-verification')}}";
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