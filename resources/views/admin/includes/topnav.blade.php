    
    <nav class="navbar navbar-linear" style="background-color: red">
        <div class="container-fluid">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-menu-alt" ></i></button>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="#">{{$page_data['page_name']}}</a>
            </div>
            <div class="collapse navbar-collapse">
                {{-- <form class="navbar-form navbar-left navbar-search-form" role="search">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" value="" class="form-control" placeholder="Search...">
                    </div>
                </form> --}}
                <ul class="nav navbar-nav navbar-right">                    
                    <li>
                        <h4 class="title" style="margin-right: 25px;"> {{get_company_name()}}</h4>
                    </li>
                    <li class="dropdown">
                                <a href="#notifications" class="dropdown-toggle btn-rotate " data-toggle="dropdown">
                                    <i class="fa fa-bell" style="color: red"></i>
                                    <span class="notification" style="color: red">5</span>
                                    <p class="hidden-md hidden-lg">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#not1">Notification 1</a></li>
                                    <li><a href="#not2">Notification 2</a></li>
                                    <li><a href="#not3">Notification 3</a></li>
                                    <li><a href="#not4">Notification 4</a></li>
                                    <li><a href="#another">Another notification</a></li>
                                </ul>
                            </li>
             
                    <li class="dropdown">
                        <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
                            <i class="ti-settings"></i>
                            <p class="hidden-md hidden-lg">
                                Settings
                                <b class="caret"></b>
                            </p>
                        </a>
                        <ul class="dropdown-menu"> 
                            <li>  <a href="{{url('/admin/profile')}}">User Profile</a></li>
                            <li> <a href="#changePassword"  data-toggle="modal"> Change Password</a><hr></li>
                            <li> <a href="{{URL::to('/logout')}}"> Logout</a><hr></li>
                        </ul>
                    </li>
                
                </ul>
            </div>
        </div>
    </nav>      
    @include('admin.contents.maintenance.modals.changepassword')