<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>

	<header>

		<h2>Blog MalasNgoding</h2>
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/tentang">TENTANG</a>
			|
			<a href="/blog/kontak">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>

@section('footer')
    <p><i class="fa fa-copyright" aria-hidden="true"></i>Copyright Naufal Maul 2025</p>

</body>
</html>
