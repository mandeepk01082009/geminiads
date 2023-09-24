<div data-simplebar class="h-100">
	<!--- Sidemenu -->
	<div id="sidebar-menu">
		<!-- Left Menu Start -->
		<ul class="metismenu list-unstyled" id="side-menu">
			<li class="menu-title">General</li>

			<li>
				<a href="{{url('admin/dashboard')}}" class="waves-effect">
					<i class="bx bx-home-circle"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{url('admin/clients')}}" class="waves-effect">
					<i class='bx bx-user'></i>
					<span>Clients</span>
				</a>
			</li>
			<li>
				<a href="{{url('admin/testimonials')}}" class="waves-effect">
					<i class='bx bx-chat'></i>
					<span>Testimonials</span>
				</a>
			</li>
            <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Portfolio</span>
				</a>
				<ul class="sub-menu" aria-expanded="false">
					<li><a href="{{url('admin/category')}}">Category</a></li>
					<li><a href="{{url('admin/portfolio')}}">Portfolio</a></li>
				</ul>
			</li>
			
			<li class="menu-title">Search Engine Optimization</li>
			<li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-line-chart'></i>
					<span>SEO Markups</span>
				</a>
				<ul class="sub-menu" aria-expanded="false">
					<li><a href="{{url('admin/metadetails')}}">Meta Details</a></li>
					<li><a href="{{url('admin/header-snippets')}}">Header Snippets</a></li>
					<li><a href="{{url('admin/footer-snippets')}}">Footer Snippets</a></li>
				</ul>
			</li>
			

		</ul>
	</div>
	<!-- Sidebar -->
</div>