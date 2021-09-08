@include('Admin.body.header')
  
  <!-- Left side column. contains the logo and sidebar -->
@include('Admin.body.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				
				@yield('content')
				
				
				
				
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
 @include('Admin.body.footer')
