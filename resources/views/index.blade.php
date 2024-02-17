<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="google-site-verification" content="gZmmt4kWvU4wjq76Np1DBDlZueNSjcYD6MC8tmoyfT4" />
	<meta name="robots" content="index, follow">
	<meta name="og:title" property="og:title" content="Cemerlang Key - Spesialis Ahli Kunci Immobilizer, Smartkey & Keyless Mobil dan Motor.">
	<meta name="description" content="Spesialis Ahli Kunci Immobilizer, Smartkey & Keyless Mobil dan Motor. Konsultasikan kebutuhan kunci mobil & motor Anda bersama kami disini. Siap membantu Anda dalam permasalahan kunci mobil & motor Anda yang sudah bersistem Immoblizer, Smartkey Dan Keyless.">
	<meta name="keywords" content="cemerlang key, ahli kunci sawangan depok, ahli kunci mobil dan motor, kunci, cemerlang, key, Immobilizer, Smartkey, Keyless, cemerlangkey.com, Cemerlang Key, Cemerlang, Key, duplikat kunci, duplikat kunci remote, kunci hilang, ganti kesing, service">
	
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Cemerlang Key - Spesialis Ahli Jasa Kunci Immoblizer, Smartkey & Keyless</title>

	<link href="https://www.cemerlangkey.com" rel="canonical">
	<link rel="alternate" hreflang="id" href="https://www.example.com" />

	{{-- Favicon --}}
	{{-- <link rel="icon" type="image/x-icon" href="{{ URL::asset('img/favicon-cemerlang-key-144.png') }}" /> --}}
	<link rel="icon" href="{{ URL::asset('img/favicon-cemerlang-key-144.png') }}">

	<!-- CSS bootstrap-5.3.2 -->
	<link rel="stylesheet" href="{{ URL::asset('bootstrap-5.3.2/css/bootstrap.min.css') }}" />

	<!-- Icon - Fontawesome 6.5.1 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ URL::asset('style.css') }}" />
</head>

<body>
	<div id="beranda" class="pb-3"></div>

	<!-- Navbar - Header -->
	<nav class="navbar navbar-expand-lg bg-dark fw-bold fixed-top" data-bs-theme="dark">
		<div class="container-fluid mx-3">
			<a class="navbar-brand" href="#">
				<img src="img/logo.png" alt="Bootstrap" width="184" height="64" />
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ms-auto d-flex align-items-center">
					<a class="nav-link" aria-current="page" href="#beranda">Beranda</a>
					<a class="nav-link" href="#tentang-kami">Tentang Kami</a>
					<a class="nav-link" href="#layanan">Layanan</a>
					<a class="nav-link" href="#galeri">Galeri</a>

					<div class="btn btn-warning fw-bold ms-3">
						<a class="nav-link text-dark" href="#lokasi"><i class="fa-solid fa-location-dot"></i> Lihat
							Lokasi</a>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<!-- End of Navbar - Header -->

	<!-- Jumbotron -->
	<div class="container-fluid banner">
		<div class="container">
			<h1>{{ $slogan->judul }}</h1>
			<p class="display-6">{{ $slogan->deskripsi }}</p>
			<a href="{{ $contact->link_whatsapp }}" target="blank" class="btn btn-success"><i class="fa-brands fa-whatsapp"></i> Hubungi
				Kami</a>
		</div>
	</div>
	<!-- End of Jumbotron -->

	<div class="container px-4">
		<div class="row mx-1 info-panel text-light justify-content-center">
			<div class="col-lg-2 bg-dark box">
				<img src="img/trust.png" alt="icon terpercaya lebih dari 100 klien" class="float-start" />
				<h4>Terpercaya</h4>
				<p>Lebih dari 100 klien</p>
			</div>
			<div class="col-lg-2 bg-dark box">
				<img src="img/badge.png" alt="profesional tim berpengalaman" class="float-start" />
				<h4>Profesional</h4>
				<p>Tim berpengalaman</p>
			</div>
			<div class="col-lg-2 bg-dark box">
				<img src="img/fast-time.png" alt="proses pengerjaan cepat" class="float-start" />
				<h4>Proses</h4>
				<p>Pengerjaan cepat</p>
			</div>
			<div class="col-lg-2 bg-dark box">
				<img src="img/save-money.png" alt="terjangkau harga ramah" class="float-start" />
				<h4>Terjangkau</h4>
				<p>Harga ramah</p>
			</div>
		</div>
	</div>
	<!-- End of Grid -->

	<!-- Tentang Kami -->
	<div id="tentang-kami" class="pb-3">-</div>

	<div class="container">
		<div class="row tentang-kami">

			<div class="col-lg-6 text-center">
				<img src="img/foto/tentang-kami/{{ $about->image }}" alt="tentang cemerlang key" class="img-fluid" />
			</div>
			<div class="col-lg-6 informasi">
				<h1 class="display-1 fw-bold">Tentang Kami</h1>
				<p>{{ $about->paragraf_1 }}</p>
				<p>{{ $about->paragraf_2 }}</p>
			</div>
		</div>
	</div>
	<!-- End of Tentang Kami -->

	<!-- Layanan Kami -->
	<div id="layanan" class="pb-3 text-light">-</div>

	<div class="container">
		<div class="row layanan-kami mt-5 mb-5">
			<div class="col-lg-4">
				<h1 class="display-4 fw-bold">Layanan Kami</h1>
				<p class="fs-5">Spesialis Ahli Kunci Immoblizer, Smartkey & Keyless</p>
			</div>
			@foreach ($ourServices as $service)
			<div class="col-lg-4">
				<h1 class="display-4 fw-bold text-warning">0{{ $loop->iteration }}.</h1>
				<h5 class="fs-3 fw-bold">{{ $service->jenis_layanan }}</h5>
				<p class="fs-5">{{ $service->deskripsi }}</p>
			</div>
			@endforeach
		</div>
	</div>
	<!-- End of Layanan Kami -->

	<!-- Layanan Lainnya -->
	<div id="layanan-lainnya" class="pb-3"></div>

	<div class="bg-dark">
		<div class="container">
			<h1 class="display-4 fw-bold text-warning text-center judul">Layanan Lainnya</h1>

			<div class="row layanan-lainnya text-center justify-content-center">
				@foreach ($otherServices as $service)
				<div class="col-lg-2 kotak">
					<img src="img/foto/layanan-lainnya/{{ $service->image }}" class="card-img-top" alt="{{ $service->jenis_layanan }}" />
					<div class="card-body">
						<p class="fw-bold">{{ $service->jenis_layanan }}</p>
						<a href="{{ $contact->link_whatsapp }}" target="blank" class="btn btn-warning fw-bold">Hubungi Kami</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- End of Layanan Lainnya -->

	<!-- Galeri -->
	<div id="galeri" class="pb-5 text-light">-</div>

	<div class="container">
		<h1 class="text-center display-4 fw-bold judul">Galeri Pengerjaan</h1>

		<div class="row galeri justify-content-center">
			@foreach ($galleryImages as $image)
			<div class="col-lg-3 col-md-3 col-sm-6 kotak-galeri">
				<img src="{{ 'img/foto/' . $image->filename }}" alt="{{ $image->image_name }}" />
			</div>
			@endforeach
		</div>

		<div class="row galeri justify-content-center text-center mt-5">
			@foreach ($videos as $video)
			<div class="col-lg-6 col-md-6 col-sm-12">
				<video controls>
					<source src="/video/{{ $video->video }}" type="video/mp4">
				</video>
			</div>
			@endforeach
		</div>
	</div>
	<!-- End of Galeri -->

	<!-- Lokasi -->
	<div id="lokasi" class="text-light">-</div>

	<div class="container lokasi">
		<div class="row">
			<h1 class="judul text-center display-4 fw-bold">Lokasi Kami</h1>
			<div class="col-lg-6 col-sm-12 text-center">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3964.9867387217!2d106.774782!3d-6.395709999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMjMnNDQuNiJTIDEwNsKwNDYnMjkuMiJF!5e0!3m2!1sid!2sid!4v1707364658351!5m2!1sid!2sid"
					width="650" height="450" style="border: 0" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="col-lg-6 col-sm-12 alamat">
				<h1 class="fs-4 fw-bold">Alamat Lokasi</h1>
				<p class="fs-5">{{ $contact->lokasi }}</p>
			</div>
		</div>
	</div>
	<!-- End of Lokasi -->

	<!-- Panel Konsultasi -->
	<div class="container panel-konsultasi" id="panel-konsultasi">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6 col-sm-12">
				<h1 class="fw-bold">Konsultasikan Sekarang!</h1>
				<p class="fs-5">Hubungi kami untuk informasi lebih lanjut atau pertanyaan tentang layanan</p>
			</div>
			<!-- <i class="fa fa-phone"></i> -->
			<div class="col-lg-5 mx-auto">
				<a href="tel:{{ $contact->telepon }}" class="btn btn-dark text-light fw-bold"><i class="fa fa-phone"></i> Hubungi
					Kami</a>
				<a href="{{ $contact->link_whatsapp }}" target="blank" class="btn btn-success text-light fw-bold"><i
						class="fa-brands fa-whatsapp"></i> Chat Via Whatsapp</a>
			</div>
		</div>
	</div>
	<!-- End of Panel Konsultasi -->


	<!-- Footer -->
	<footer class="bg-dark">
		<div class="container">
			<div class="row informasi">
				<div class="col-lg-3 pe-3">
					<h1 class="judul-informasi fs-3 fw-bold text-light">Informasi Kontak</h1>
					<a href="tel:{{ $contact->telepon }}">
						<div>
							<img src="img/icon/white-phone-call.png" width="35" alt="icon-white-phone-call" class="float-start" />
							<h1>Telepon</h1>
							<p>{{ $contact->telepon }}</p>
						</div>
					</a>

					<a href="mailto:{{ $contact->email }}">
						<div>
							<img src="img/icon/white-mail.png" width="35" alt="icon-white-mail" class="float-start" />
							<h1>Email</h1>
							<p>{{ $contact->email }}</p>
						</div>
					</a>
					<a href="{{ $contact->link_lokasi }}" target="blank">
						<div>
							<img src="img/icon/white-dot_location.png" width="35" alt="icon-white-dot-location" class="float-start" />
							<h1>Lokasi</h1>
							<p>{{ $contact->lokasi }}</p>
						</div>
					</a>
				</div>

				<div class="col-lg-3 pe-2">
					<h1 class="judul-informasi fs-3 fw-bold text-light">Media Sosial</h1>
					<a href="{{ $contact->link_facebook }}" target="blank">
						<img src="img/icon/white-facebook.png" width="35" alt="icon-white-facebook" class="float-start" />
						<h1>Facebook</h1>
						<p>{{ $contact->nama_facebook }}</p>
					</a>
					<a href="{{ $contact->link_instagram }}" target="blank">
						<div>
							<img src="img/icon/white-instagram.png" width="35" alt="icon-white-instagram" class="float-start" />
							<h1>Instagram</h1>
							<p>{{ $contact->nama_instagram }}</p>
						</div>
					</a>
					<a href="{{ $contact->link_whatsapp }}" target="blank">
						<div>
							<img src="img/icon/white-whatsapp.png" width="35" alt="icon-white-whatsapp" class="float-start" />
							<h1>Whatsapp</h1>
							<p>{{ $contact->no_whatsapp }}</p>
						</div>
					</a>
				</div>

				<div class="col-lg-3">
					<h1 class="judul-informasi fs-3 fw-bold text-light">Jam Operasional</h1>

					<table class="text-light">
						@foreach ($days as $day)
						<tr>
							<td>{{ $day->hari }}</td>
							<td>:</td>
							<td></td>
							<td></td>
							<td>{{ $day->jam_buka }} - {{ $day->jam_tutup }}</td>
						</tr>
						@endforeach
						{{-- <tr>
							<td>Selasa</td>
							<td>:</td>
							<td></td>
							<td></td>
							<td>09:00 - 20:00</td>
						</tr>
						<tr>
							<td>Rabu</td>
							<td>:</td>
							<td></td>
							<td></td>
							<td>09:00 - 20:00</td>
						</tr>
						<tr>
							<td>Kamis</td>
							<td>:</td>
							<td></td>
							<td></td>
							<td>09:00 - 20:00</td>
						</tr>
						<tr>
							<td>Jumat</td>
							<td>:</td>
							<td></td>
							<td></td>
							<td>09:00 - 20:00</td>
						</tr>
						<tr>
							<td>Sabtu</td>
							<td>:</td>
							<td></td>
							<td></td>
							<td>09:00 - 20:00</td>
						</tr>
						<tr>
							<td>Minggu</td>
							<td>:</td>
							<td></td>
							<td></td>
							<td>09:00 - 20:00</td>
						</tr> --}}
					</table>
				</div>

				<div class="col-lg-3">
					<h1 class="judul-informasi fs-3 fw-bold text-light">Menu Navigasi</h1>

					<a href="#beranda">
						<img src="img/icon/white-next.png" width="20" class="float-start" alt="icon-white-next" />
						<p>Beranda</p>
					</a>
					<a href="#tentang-kami">
						<img src="img/icon/white-next.png" width="20" class="float-start" alt="icon-white-next" />
						<p>Tentang Kami</p>
					</a>
					<a href="#layanan-kami">
						<img src="img/icon/white-next.png" width="20" class="float-start" alt="icon-white-next" />
						<p>Layanan</p>
					</a>
					<a href="#galeri">
						<img src="img/icon/white-next.png" width="20" class="float-start" alt="icon-white-next" />
						<p>Galeri</p>
					</a>

					<a href="#lokasi">
						<img src="img/icon/white-next.png" width="20" class="float-start" alt="icon-white-next" />
						<p>Lokasi</p>
					</a>
				</div>
			</div>

			<!-- Copyright -->
			<div class="fw-700 fs-6 text-light text-center pt-5 pb-3">Copyright <span id="year"></span> © Cemerlang Key
			</div>
			<!-- End of Copyright -->
		</div>
	</footer>
	<!-- Footer -->

	<!-- Button Chat -->
	<div class="fixed-bottom text-end button-chat">
		<a class="btn btn-sm btn-success" href="{{ $contact->link_whatsapp }}" target="blank">
			<div class="button-chat"><i class="fa-brands fa-whatsapp"></i> Hubungi Kami</div>
		</a>
	</div>
	<!-- End of Button Chat -->

	<!-- JS bootstrap-5.3.2 -->

	<!-- script JS untuk membuat tahun dinamis -->
	<script>
		document.getElementById("year").innerHTML = new Date().getFullYear();
	</script>

	<script src="{{ URL::asset('bootstrap-5.3.2/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>