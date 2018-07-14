<nav class="navigation p-s">
	<div class="navigation-left">
		<h1 class="logo"><a class="color-primary" href="{{ url('home') }}"><img src="../graphics/c3i-logo-text.png" alt="Corbett Construction"></a></h1>
		<ul class="navigation-links">
			<li class="nav-item mr-s {{ $page_class == 'home' ? 'active' : '' }}">
				<a class="nav-link" href="{{ url('home') }}">{{ strtoupper("Home") }}</a>
			</li>
			<li class="nav-item mr-s {{ $page_class == 'services' ? 'active' : '' }}">
				<a class="nav-link" href="{{ url('services') }}">{{ strtoupper("Services") }}</a>
			</li>
			<li class="nav-item mr-s {{ $page_class == 'gallery' ? 'active' : '' }}">
				<a class="nav-link" href="{{ url('gallery') }}">{{ strtoupper("Gallery") }}</a>
			</li>
			<li class="nav-item mr-s {{ $page_class == 'about' ? 'active' : '' }} ">
				<a class="nav-link" href="{{ url('about') }}">{{ strtoupper("About") }}</a>
			</li>
			<li class="nav-item mr-s {{ $page_class == 'contact' ? 'active' : '' }}">
				<a class="nav-link" href="{{ url('contact') }}">{{ strtoupper("Contact") }}</a>
			</li>
		</ul>
	</div>
	<div class="navigation-right">
		<div class="mobile-toggle">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
		<div class="navigation-right-cont">
			<p class="color-primary font-oc">For Free Quote:</p>
			<p><a href="mailto:corbett.construction@outlook.com"><i class="material-icons">email</i> corbett.construction@outlook.com</a></p>
			<p><a href="tel:5178969630"><i class="material-icons">phone</i> 517.896.9630</a></p>
		</div>
	</div>
	
	@yield('pagenav')
	
</nav>
<nav id="mobile-navigation" class="mobile-navigation">
	<ul class="navigation-links pr-s pt-s">
		<a class="nav-link" href="{{ url('home') }}">
			<li class="nav-item {{ $page_class == 'home' ? 'active' : '' }}">
				{{ strtoupper("Home") }}
			</li>
		</a>
		<a class="nav-link" href="{{ url('services') }}">
			<li class="nav-item {{ $page_class == 'services' ? 'active' : '' }}">
				{{ strtoupper("Services") }}
			</li>
		</a>
		<a class="nav-link" href="{{ url('gallery') }}">
			<li class="nav-item {{ $page_class == 'gallery' ? 'active' : '' }}">
				{{ strtoupper("Gallery") }}
			</li>
		</a>
		<a class="nav-link" href="{{ url('about') }}">
			<li class="nav-item {{ $page_class == 'about' ? 'active' : '' }} ">
				{{ strtoupper("About") }}
			</li>
		</a>
		<a class="nav-link" href="{{ url('contact') }}">
			<li class="nav-item {{ $page_class == 'contact' ? 'active' : '' }}">
				{{ strtoupper("Contact") }}
			</li>
		</a>
	</ul>
	<p class="pr-s"><a href="mailto:corbett.construction@outlook.com">corbett.construction@outlook.com</a></p>
	<p class="pr-s"><a href="tel:5178969630">517.896.9630</a></p>
</nav>