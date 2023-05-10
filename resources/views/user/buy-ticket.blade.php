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
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><span class="id-color">Buy</span> Tickets</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-single"></div>
        </div>
        <div class="row">

            <div class="col-md-8 offset-md-2">
                <form id="form-ticket" class="form-border" method="post">
                    <div class="row g-custom-x align-items-center">
                        
                        <div class="col-md-6">
                            <h4>Tiket</h4>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{$ticket->name}} ( {{$ticket->price}} )">
                            <input type="hidden" id="ticket" name="ticket" value="{{$ticket->id}}">
                            <input type="hidden" id="price" name="price" value="{{$ticket->price}}">
                            <input type="hidden" name='total' id='total'>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="col-md-6">
                            <h4>Quantity</h4>
                        </div>
                        <div class="col-md-6">
                            <input type='text' name='qty' id='qty' class="form-control" placeholder="enter quantity" required onkeyup="hitung()">
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="col-md-6">
                            <h4>Total</h4>
                        </div>
                        <div class="col-md-6">
                            <input type='text' name='total1' id='total1' class="form-control" required>
                        </div>
                                            
                        <div class="clearfix"></div>
                        
                        <div class="col-md-6">
                            <h4>Transfer Bank</h4>
                        </div>
                        <div class="col-md-6">
                            <select name="bank" id="bank" class="form-control">
                                @foreach($bank as $b)
                                <option value="{{$b->id}}">{{$b->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        
                        <div class="col-md-12">
                            <p id='submit' class="mt20">
                                <input type='submit' id='send_message' value='Submit Form' class="btn btn-main">
                            </p>
                        </div>
                    </div>
                </form>
                
                <div id="success_message" class='success'>
                    Your order has been sent, please wait for confirmation. Refresh this page if you want to order more tickets.
                </div>
                <div id="error_message" class='error'>
                    Sorry there was an error sending your form.
                </div>
                
            </div>
        </div>
    </div>
    
</section>
@endsection
    

@section('js')
<script>
$("#form-ticket").submit(function(e){
    e.preventDefault();        
    obj = formToObject($("#form-ticket"));
    
    console.log(obj); 
    
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/buy-ticket",
        data: {
            data: JSON.stringify(obj),
            _token: '<?php echo csrf_token() ?>'
        },
        success: function(msg){
            console.log(msg); 
            
            if (msg.status) {
                $('#error_message').hide();
                $('#success_message').html(msg.message);
                $('#success_message').show();
                setTimeout(() => {
                    window.location.href="{{url('/home')}}";
                }, 2000);
            }else{
                $('#success_message').hide();
                $('#error_message').html(msg.message);
                $('#error_message').show();
            }
        }
    });
});


function hitung() {
    var qty = $("#qty").val();
    var price = $("#price").val();
    var total = qty*price;
    $("#total").val(total);
    $("#total1").val(total);
}

</script>
@endsection