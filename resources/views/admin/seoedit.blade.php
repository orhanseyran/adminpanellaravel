<!doctype html>
<html class="modern fixed has-top-menu has-left-sidebar-half">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>{{ $title = "Seyran Ajans Admin Panel" }}</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700,800,900" rel="stylesheet" type="text/css">

        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css"
        rel="stylesheet"
      />
      <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />


		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset("admin/vendor/bootstrap/css/bootstrap.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/animate/animate.compat.css") }}">
		<link rel="stylesheet" href="{{ asset("admin/vendor/font-awesome/css/all.min.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/boxicons/css/boxicons.min.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/magnific-popup/magnific-popup.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/select2/css/select2.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/select2-bootstrap-theme/select2-bootstrap.min.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/dropzone/basic.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/dropzone/dropzone.css") }}" />
        <link rel="stylesheet" href="{{ asset("vendor/bootstrap-tagsinput/bootstrap-tagsinput.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/vendor/pnotify/pnotify.custom.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/theme.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/layouts/modern.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/skins/default.css") }}" />
		<link rel="stylesheet" href="{{ asset("admin/css/custom.css") }}">

		<script src="admin/vendor/modernizr/modernizr.js"></script>


	</head>
	<body>
		<section class="body">

			<!-- start: header -->
            @include('admin.header')
			<div class="inner-wrapper">
				<!-- start: sidebar -->
                @include('admin.sidebar')
				<!-- end: sidebar -->

				<section role="main" class="content-body content-body-modern mt-0">
					<header class="page-header page-header-left-inline-breadcrumb">
						<h2 class="font-weight-bold text-6">Seo Ekleme</h2>
						<div class="right-wrapper">


							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<form class="ecommerce-form action-buttons-fixed" action="{{ route("seoupdate",$seo->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
							<div class="row mt-2">
								<div class="col">
									<section class="card card-modern card-big-info">
										<div class="card-body">
											<div class="row">
												<div class="col-lg-2-5 col-xl-1-5">
													<i class="card-big-info-icon bx bx-box"></i>
													<h2 class="card-big-info-title">Genel Seo Bilgileri</h2>
													<p class="card-big-info-desc">Bu Kısımda İlgili Sayfanın Seo Bilgilerini Girmeniz Gerekiyor</p>
												</div>
												<div class="col-lg-3-5 col-xl-4-5">
													<div class="form-group row align-items-center pb-3">
														<h4>Sayfa Başlığı</h4>
														<div class="">
															<input type="text" class="form-control form-control-modern" name="sayfa" value="{{ $seo->sayfa }}" required />
														</div>
													</div>

                                                    <div class="form-group row pb-3">

                                                        <label for="tags-input" class="col-lg-3 control-label text-lg-end pt-2">Anahtar Kelimeler</label>
                                                        <div class="col-lg-7 col-xl-6">
                                                            <input id="tags" name='anahtar_kelime'  value='{{ $seo->anahtar_kelime }}' class="form-control" autofocus >


                                                          </div>



                                                    </div>
                                                    <div class="form-group row align-items-center mb-3">
                                                        <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Sayfa Adı </label>
                                                        <div class="col-lg-7 col-xl-6">
                                                            <select style="width: 180px; height:60px; text-align: center; font-size:14px;" id="boyut" name="BladeAdı">
                                                                <option value="{{ $seo->BladeAdı}}">{{ $seo->BladeAdı }}</option>
                                                                <option value="AnaSayfa">Ana Sayfa</option>
                                                                <option value="İletişim">İletişim</option>
                                                                <option value="Blog">Blog</option>
                                                                <option value="Sepet">Sepet</option>
                                                                <option value="Ödeme">Ödeme</option>
                                                                <option value="Hesabım">Hesabım</option>
                                                                <option value="Mağaza">Mağaza</option>
                                                                <option value="GirişYap">Giriş YAP</option>
                                                                <option value="ÜyeOl">Üye Ol</option>
                                                                <!-- Diğer boyutları ekleyebilirsiniz -->
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="form-group row pb-3">

                                                        <label for="tags-input" class="col-lg-3 control-label text-lg-end pt-2">Meta Açıklama</label>
                                                        <div class="col-lg-7 col-xl-6">

                                                            <textarea style="width: 100%" name="meta_açıklama" id="" cols="30" rows="10"  >{{ $seo->meta_açıklama }}</textarea>



                                                          </div>



                                                    </div>



									</section>
								</div>
							</div>
							<div class="row action-buttons">
								<div class="col-12 col-md-auto">
                                    <input type="submit" value="Yayınla" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
								</div>
                                <div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
									<a href="{{ route("seo") }}" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">İptal</a>
								</div>
                                <div class="col-12 col-md-auto ms-md-auto mt-3 mt-md-0 ms-auto">
                                   <a href="{{ route("seo") }}"><button type="button" class="btn btn-success btn-px-4 py-3  d-flex align-items-center font-weight-semibold line-height-1">Ürünlere Dön</button></a>

								</div>



							</div>

						</form>
					<!-- end: page -->
				</section>
			</div>
		</section>

		<!-- Vendor -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/@yaireo/tagify"></script>
        <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
		<script src="{{ asset("admin/vendor/jquery/jquery.js") }}"></script>
		<script src="{{ asset("admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js") }}"></script>
		<script src="{{ asset("admin/vendor/popper/umd/popper.min.js") }}"></script>
		<script src="{{ asset("admin/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
		<script src="{{ asset("admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js") }}"></script>
		<script src="{{ asset("admin/vendor/common/common.js") }}"></script>
		<script src="{{ asset("admin/vendor/nanoscroller/nanoscroller.js") }}"></script>
		<script src="{{ asset("admin/vendor/magnific-popup/jquery.magnific-popup.js") }}"></script>
		<script src="{{ asset("admin/vendor/jquery-placeholder/jquery.placeholder.js") }}"></script>
		<script src="{{ asset("admin/vendor/jquery-validation/jquery.validate.js") }}"></script>
		<script src="{{ asset("admin/vendor/select2/js/select2.js") }}"></script>
		<script src="{{ asset("admin/vendor/dropzone/dropzone.js") }}"></script>
		<script src="{{ asset("admin/vendor/pnotify/pnotify.custom.js") }}"></script>
		<script src="{{ asset("admin/js/theme.js") }}"></script>
		<script src="{{ asset("admin/js/custom.js") }}"></script>
		<script src="{{ asset("admin/js/theme.init.js") }}"></script>
		<script src="{{ asset("admin/js/examples/examples.header.menu.js") }}"></script>
        <script src="{{ asset("vendor/bootstrap-tagsinput/bootstrap-tagsinput.js") }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>
    // The DOM element you wish to replace with Tagify
var input = document.getElementById('tags');

// initialize Tagify on the above input node reference
new Tagify(input)
  </script>


	</body>
</html>