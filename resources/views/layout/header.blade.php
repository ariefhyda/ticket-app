<header class="transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="03_electrofest-index.html">
                                            <img alt="" src="{{asset('template')}}/img/logo.png" />
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                                <div class="de-flex-col">
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li><a href="{{url('/')}}#de-carousel">Home</a>                                        
                                    </li>                                   
                                    <li><a href="{{url('/')}}#section-artists">Artists</a></li>                  
                                    <li><a href="{{url('/')}}#section-schedule">Schedule</a></li>             
                                    <li><a href="{{url('/')}}#section-tickets">Tickets</a></li>
                                    <li><a href="{{url('/')}}#section-gallery">Gallery</a></li> 
                                    
                                    @if(Session::has('is_admin'))                                              
                                    <li><a href="{{url('/admin/scan')}}">Scan</a></li>                        
                                    <li><a href="{{url('/admin/users')}}">Users</a></li>            
                                    <li><a href="{{url('/admin/ticket')}}">Ticket</a></li>          
                                    <li><a href="{{url('/admin/payment_confirmation')}}">Payment Confirmation</a></li> 
                                    <li><a href="{{url('/auth/logout')}}">Logout</a></li> 
                                    @else
                                    <li><a href="{{url('/my_ticket')}}">My Ticket</a></li> 
                                    <li><a href="{{url('/payment_confirmation')}}">Payment Confirmation</a></li> 
                                    <li><a href="{{url('/auth/logout')}}">Logout</a></li> 
                                    @endif
                                    
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="#section-tickets" class="btn-main"><i class="fa fa-sign-in"></i><span>Buy Ticket</span></a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>