<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('backend/vendors/core/core.css')}}">
	<!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('backend/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('backend/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->
  <!-- Layout styles -->
	<link rel="stylesheet" href="{{asset('backend/css/demo_1/style.css')}}">


    <!-- End layout styles -->
  <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @stack('css')
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		@include('layouts.partial.sidebar')
		<!-- partial -->

		<div class="page-wrapper">

			<!-- partial:partials/_navbar.html -->
			@include('layouts.partial.navbar')
			<!-- partial -->

			<div class="page-content">
				@yield('content')
			</div>

			<!-- partial:partials/_footer.html -->
			@include('layouts.partial.footer')
			<!-- partial -->

		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('backend/vendors/core/core.js')}}"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{asset('backend/vendors/chartjs/Chart.min.js')}}"></script>
  <script src="{{asset('backend/vendors/jquery.flot/jquery.flot.js')}}"></script>
  <script src="{{asset('backend/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('backend/vendors/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('backend/vendors/progressbar.js/progressbar.min.js')}}"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="{{asset('backend/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('backend/js/template.js')}}"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="{{asset('backend/js/dashboard.js')}}"></script>
  <script src="{{asset('backend/js/datepicker.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('js')
	<!-- end custom js for this page -->
{{--@yield('footer_script')--}}
</body>
</html>
