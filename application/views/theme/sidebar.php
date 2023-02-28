<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url('dashboard') ;?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url('product') ;?>">
			<i class="fas fa-folder"></i>
			<span>Product</span></a>
	</li>

    <li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url('store') ;?>">
			<i class="fas fa-store"></i>
			<span>Store</span></a>
	</li>

    <li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url('checkout') ;?>">
			<i class="fas fa-building"></i>
			<span>Checkout</span></a>
	</li>


	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
