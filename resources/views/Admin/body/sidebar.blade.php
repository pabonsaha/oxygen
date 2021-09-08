<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/logo-dark.png" alt="">
						  <h3>Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
        <li>
              <a href="{{route('admin.home')}}">
                <i data-feather="pie-chart"></i>
              <span>Dashboard</span>
              </a>
        </li>  
        <li>
              <a href="{{route('admin.allUser')}}">
                <i data-feather="pie-chart"></i>
              <span>All User</span>
              </a>
        </li>  
        <li>
              <a href="{{route('admin.pendingOrder')}}">
                <i data-feather="pie-chart"></i>
              <span>All Pending Order</span>
              </a>
        </li>  
        <li>
              <a href="{{route('admin.confirmOrder')}}">
                <i data-feather="pie-chart"></i>
              <span>All Confirm Order</span>
              </a>
        </li>  
        <li>
              <a href="{{route('admin.pendingPayment')}}">
                <i data-feather="pie-chart"></i>
              <span>All Pending Payment</span>
              </a>
        </li> 

        <li>
              <a href="{{route('admin.confirmPayment')}}">
                <i data-feather="pie-chart"></i>
              <span>All Confirm Payment</span>
              </a>
        </li>  
		     
		  
          <li>
                  <form action="{{route('logout')}}" method="POST" >
                      @csrf
                      <button type="submit" class="btn btn-success" >
                      <span>Log Out</span></button>
                    
                          
                      
                  </form>
            </li> 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>