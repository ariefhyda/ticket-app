@extends('layout.template')
@section('title','Login')
@section('css')

@endsection

@section('content')
<section id="section-artists">
    <div class="container">
        <div class="row g-custom-x align-items-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <div class="title-box-outer wow flipInX">
                        <div class="title-box-inner wow flipInX" data-wow-delay=".2s">
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Sign In</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-8 offset-md-2">
                <form id="form-signin" class="form-border" method="post">
                    <div class="row g-custom-x align-items-center">                        
                        <div class="col-md-6">
                            <h4>Email</h4>
                        </div>
                        <div class="col-md-6">
                            <input type='email' name='email' id='email' class="form-control" placeholder="enter your email" required>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="col-md-6">
                            <h4>Password</h4>
                        </div>
                        <div class="col-md-6">
                            <input type='password' name='password' id='password' class="form-control" placeholder="enter password" required>
                        </div>
                    
                        
                        <div class="col-md-12">
                            <!-- <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div> -->
                            <p id='submit' class="mt20">
                                <input type='submit' id='send_message' value='Submit Form' class="btn btn-main">
                            </p>
                        </div>

                        <div class="col-md-12">
                            <p> Don't have an account? <a href="/auth/signup">SIGN UP</a></p>
                        </div>
                    </div>
                </form>
                
                <div id="success_message" class='success'>
                </div>
                <div id="error_message" class='error'>
                </div>
                
            </div>
    </div>
</section>
@endsection
    

@section('js')
<script>
$("#form-signin").submit(function(e){
    e.preventDefault();        
    obj = formToObject($("#form-signin"));
    
    console.log(obj); 
    
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/auth/login",
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
                    window.location.href=msg.link;
                }, 2000);
            }else{
                $('#success_message').hide();
                $('#error_message').html(msg.message);
                $('#error_message').show();
            }
        }
    });
});

</script>
@endsection