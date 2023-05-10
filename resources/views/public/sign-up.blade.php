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
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Sign Up</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-8 offset-md-2">
                <form id="form-signup" class="form-border" method="post">
                    <div class="row g-custom-x align-items-center">
                        
                        <div class="col-md-6">
                            <h4>Your Name</h4>
                        </div>
                        <div class="col-md-6">
                            <input type='text' name='name' id='name' class="form-control" placeholder="enter your name" required>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="col-md-6">
                            <h4>Your Phone</h4>
                        </div>
                        <div class="col-md-6">
                            <input type='text' name='phone' id='phone' class="form-control" placeholder="enter your email" required>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="col-md-6">
                            <h4>Your Email</h4>
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
</section>
@endsection
    

@section('js')
<script>

</script>
@endsection