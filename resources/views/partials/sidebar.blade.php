<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">TRVL <sup>test</sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item">
		<a class="nav-link" href="{{ route('home') }}">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>{{__('locales.sidebar.dashboard')}}</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		{{__('locales.sidebar.main')}}
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>{{__('locales.sidebar.company.title')}}</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">{{__('locales.sidebar.company.subheading')}}</h6>
				<a class="collapse-item" href="{{route('companies.index')}}">{{__('locales.sidebar.company.index')}}</a>
				<a class="collapse-item" href="{{route('companies.create')}}">{{__('locales.sidebar.company.create')}}</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-user"></i>
			<span>{{__('locales.sidebar.employee.title')}}</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">{{__('locales.sidebar.employee.subheading')}}</h6>
				<a class="collapse-item" href="{{route('employees.index')}}">{{__('locales.sidebar.employee.index')}}</a>
				<a class="collapse-item" href="{{route('employees.create')}}">{{__('locales.sidebar.employee.create')}}</a>
			</div>
		</div>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">
</ul>
<!-- End of Sidebar -->