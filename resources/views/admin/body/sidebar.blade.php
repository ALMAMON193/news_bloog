
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ !empty(Auth::guard('admin')->user()->profile) ? url('uploads/admin_images/' . Auth::guard('admin')->user()->profile) : url('uploads/no_image.jpg') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height: 150px;">
            </div>
            <div class="mt-3">
                @if(Auth::guard('admin')->check())
                    <h4 class="font-size-16 mb-1">{{ Auth::guard('admin')->user()->name }}</h4>
                @else
                    <h4 class="font-size-16 mb-1">Julia Hudda</h4>
                @endif
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
            
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                
                <li>
                    <a href="{{ route('view.category') }}" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Category</span>
                    </a>
                    
                </li>
                
                <li>
                  <a href="{{ route('view.bloog') }}" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Bloog</span>
                    </a> 
                     
                </li>
                

                

                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>