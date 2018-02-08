    
    <div class="sidebar" data-background-color="brown" data-active-color="warning" style="background-color: green !important">
        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->


        <div class="logo" style="padding: 15px 0;">
            <a href="{{ url('/') }}" class="simple-text logo-mini" >
              <img src="{{asset('includes/admin/images/'.get_company_logo())}}" height="30" width="30" >
            </a>

            <a href="{{ url('admin/dashboard') }}" class="simple-text logo-normal" style="line-height: 18px; white-space: initial !important;  padding: 8px 15px;">
              {{get_company_name()}}
            </a>
        </div>

        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="{{asset('includes/admin/paper-pro/assets/img/faces/face-1.jpg')}}" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        <span>
                            Daniel Tinao
                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                   <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                  <li class="@if($page_data['active'] == 'profile') active @endif">
                                  <a href="{{url('admin/profile')}}">
                                        <span class="sidebar-mini">Mp</span>
                                        <span class="sidebar-normal">My Profile</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="{{URL::to('/logout')}}">
                                        <span class="sidebar-mini">LG</span>
                                        <span class="sidebar-normal">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
            <ul class="nav">
                        <li class="@if($page_data['active'] == 'dashboard') active @endif">
                            <a href="{{url('/admin/dashboard')}}">
                                <i class="ti-panel"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="@if($page_data['active'] == 'products') active @endif">
                            <a href="{{url('/admin/products')}}">
                                <i class="ti-shopping-cart"></i>
                                <p>Products</p>
                            </a>
                        </li>
                          <li class="@if($page_data['active'] == 'package') active @endif">
                            <a href="{{url('/admin/package')}}">
                                <i class="ti-package"></i>
                                <p>Package</p>
                            </a>
                        </li>
                       <li class="@if($page_data['active'] == 'contact' || $page_data['active'] == 'about'|| $page_data['active'] == 'company') active @endif">
                        <a data-toggle="collapse" href="#maintenance">
                            <i class="ti-clipboard"></i>
                            <p>Maintenance
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="maintenance">
                            <ul class="nav">
                                 <li class="@if($page_data['active'] == 'company') active @endif">
                                     <a href="{{url('/admin/company')}}">
                                        <span class="sidebar-mini">CP</span>
                                        <span class="sidebar-normal">Company Profile</span>
                                    </a>
                                </li>
                                <li class="@if($page_data['active'] == 'contact') active @endif">
                                    <a href="{{url('/admin/contactus')}}">
                                        <span class="sidebar-mini">CU</span>
                                        <span class="sidebar-normal">Contact Us</span>
                                    </a>
                                </li>
                                 <li class="@if($page_data['active'] == 'about') active @endif">
                                    <a href="{{url('/admin/aboutus')}}">
                                        <span class="sidebar-mini">AU</span>
                                        <span class="sidebar-normal">About Us</span>
                                    </a>
                                </li>
                                <li class="@if($page_data['active'] == 'slider') active @endif">
                                    <a href="{{url('/admin/slider')}}">
                                        <span class="sidebar-mini">S</span>
                                        <span class="sidebar-normal">Slider</span>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </li>
                         

            </ul>
        </div>
    </div>

   





   

