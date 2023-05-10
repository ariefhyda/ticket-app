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
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><span class="id-color">Scan</span> QR Code</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-single"></div>
        </div>
        <div class="row text-center">
            <p>Start scan for Checkin!</p>
            
            <div class="d-flex justify-content-center">
                <div id="success_message" class='success col-md-6'>
                </div>
                <div id="error_message" class='error col-md-6'>
                </div>
                <div class="col-md-6">
                   <div id="qr-reader" style="width:100%"></div>
                   <div id="qr-reader-results"></div>
                </div>
            </div>

         <div class="col-md-6">
            
         </div>
        </div>
    </div>
    
</section>

@endsection
    

@section('js')

<script src="{{asset('template')}}/js/html5-qrcode.min.js"></script>
<script>
    function verifikasi(code) {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/admin/scan",
        data: {
            code: code,
            _token: '<?php echo csrf_token() ?>'
        },
        success: function(msg){
            console.log(msg); 
            
            if (msg.status) {
                $('#error_message').hide();
                $('#success_message').html(msg.message);
                $('#success_message').show();
            }else{
                $('#success_message').hide();
                $('#error_message').html(msg.message);
                $('#error_message').show();
            }
        }
    });
}
</script>
<script>
    var resultContainer = document.getElementById('qr-reader-results');
    var lastResult, countResults = 0;

    
    function onScanSuccess(decodedText, decodedResult) {
      if (decodedText !== lastResult) {
        ++countResults;
        lastResult = decodedText;
        // Handle on success condition with the decoded message.
        // console.log(`Scan result ${decodedText}`, decodedResult);
        verifikasi(decodedText);

      }
    }
    
    var html5QrcodeScanner = new Html5QrcodeScanner(
      "qr-reader", { fps: 10, qrbox: 250 });
      html5QrcodeScanner.render(onScanSuccess);
      
</script>
@endsection