<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}" class="site_title" target="_blank"><i class="fa fa-paw"></i> <span>{{config('app.name')}}</span></a>
        </div>

        <div class="clearfix"></div>       

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">                
                <ul class="nav side-menu">
                    <li><a href="{{url('dashboard')}}"><i class="fa fa-home"></i>Home</a></li>   
                                     
                    @if(Auth::user()->role == 1)
                    <li><a><i class="fa fa-cogs"></i> Settings <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                            <li><a href="{{route('college.index')}}">College</a></li>

                            <!-- <li><a href="{{route('brands.index')}}">Brands</a></li>
                            <li><a href="{{route('images.index')}}">Images</a></li>
                            <li><a href="{{route('pages.index')}}">Pages</a></li>
                            <li><a href="{{route('products.index')}}">Products</a></li>                            
                            <li><a href="{{route('services.index')}}">Services</a></li>
                            <li><a href="{{route('project-types.index')}}">Successful Case</a></li>                            
                            <li><a href="{{route('users')}}">Users</a></li>  --> 
                                        
                        </ul>
                    </li> 

                    <!-- <li><a><i class="fa fa-angellist"></i> Students <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('students.index')}}">Students</a></li>                            
                            <li><a href="{{route('student-infos.index')}}">Student Infos</a></li>                  
                        </ul>
                    </li> -->

                    <li><a href="{{route('inquries.index')}}"><i class="fa fa-angellist"></i> Inquiries</a></li>
                    <!-- <li><a href="{{url('dashboard/product-inquiryes')}}"><i class="fa fa-angellist"></i> Product Inqueryes</a></li>  -->
                    <!-- <li><a href="{{route('manage-orders.index')}}"><i class="fa fa-angellist"></i> Orders</a></li>  -->
                    @endif   

                    <!-- <li><a href="{{route('categories.index')}}"><i class="fa fa-angellist"></i> Course Categories</a></li>
                    <li><a href="{{route('courses.index')}}"><i class="fa fa-angellist"></i> Courses</a></li> -->
                </ul>
            </div>            
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">         

            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>