<div class="contain-to-grid navi">
	 <nav class="top-bar" data-topbar role="navigation">
		<ul class="title-area">
		    <li class="name">
		      <h1><a href="/track"><img src="{!! asset('images/shapers9ja_logo.jpg') !!}" alt="Shapers9ja"></a></h1>
		    </li>
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    	<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	 	</ul>

	  <section class="top-bar-section">
	    <!-- Right Nav Section -->
	    <ul class="right">
	    	@if (Auth::check())
		      	<li class="active"><a href="#">{{ Auth::user()->name }}</a></li>
		      	<li><a href="/admin/signout">Signout</a></li>
	      	@endif
	    </ul>
	  </section>
	</nav>
</div>