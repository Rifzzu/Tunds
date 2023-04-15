<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('/css/cssShop/nicepage.css') }}" media="screen">
<link rel="stylesheet" href="{{ asset('/css/cssShop/home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('/js/jsShop/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('/js/jsShop/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 5.7.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "login_page"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-sticky u-sticky-be02 u-white u-header" id="sec-05a8"><div class="u-clearfix u-sheet u-sheet-1">
    @auth
        <img class="u-image u-image-contain u-image-default u-image-1" src="{{ asset('/image/logo.png') }}" alt="" data-image-width="762" data-image-height="300">
        <nav class="u-menu u-menu-hamburger u-offcanvas u-menu-1" data-responsive-from="XL">
          <div class="menu-collapse">
            <a class="u-button-style u-nav-link" href="#" style="font-size: calc(1em + 8px);">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f93b"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-f93b" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/home" style="padding-right: 21px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/shop" style="padding-right: 21px;">Coffee Shop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/forum" style="padding-right: 21px;">Forum</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/wishlist" style="padding-right: 21px;">Wishlist</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/profile" style="padding-right: 21px;">Profile</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/logout" style="padding-right: 21px;">Logout</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-border-3 u-border-custom-color-2 u-container-style u-custom-color-2 u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-left u-nav u-popupmenu-items u-text-hover-custom-color-1 u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/home" style="padding-top: 48px; padding-bottom: 48px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/shop" style="padding-top: 48px; padding-bottom: 48px;">Coffee Shop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/forum" style="padding-top: 48px; padding-bottom: 48px;">Forum</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/wishlist" style="padding-top: 48px; padding-bottom: 48px;">Wishlist</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/profile" style="padding-top: 48px; padding-bottom: 48px;">Profile</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/logout" style="padding-top: 48px; padding-bottom: 48px;">Logout</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-white u-section-1" id="sec-4020">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-default u-text-1">Coffee Shop<br>
        </h3>

        @foreach($cafe as $dataCafe)
        <div class="u-container-style u-group u-hover-feature u-shape-rectangle u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-carousel u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-1" id="carousel-d2d5" data-interval="5000" data-u-ride="carousel">
              
              <div class="u-carousel-inner u-gallery-inner" role="listbox">
                <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
                  <div class="u-back-slide">
                    <img class="u-back-image u-expanded" src="{{ $dataCafe->gambar }}">
                  </div>
                  
                </div>
                
              </div>
              
            </div>
            <a href="https://nicepage.site" class="u-align-center u-border-hover-palette-3-base u-border-none u-btn u-button-style u-none u-text-palette-2-base u-btn-1"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 51.997 51.997" x="0px" y="0px" style="width: 1em; height: 1em;"><g><path d="M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905
		c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478
		c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014
		C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25
		c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826
		c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514
		c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z"></path>
</g></svg></span>
            </a><span class="u-icon u-icon-circle u-palette-3-base u-text-black u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55.867 55.867" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6b5d"></use></svg><svg class="u-svg-content" viewBox="0 0 55.867 55.867" x="0px" y="0px" id="svg-6b5d" style="enable-background:new 0 0 55.867 55.867;"><path d="M11.287,54.548c-0.207,0-0.414-0.064-0.588-0.191c-0.308-0.224-0.462-0.603-0.397-0.978l3.091-18.018L0.302,22.602
	c-0.272-0.266-0.37-0.663-0.253-1.024c0.118-0.362,0.431-0.626,0.808-0.681l18.09-2.629l8.091-16.393
	c0.168-0.342,0.516-0.558,0.896-0.558l0,0c0.381,0,0.729,0.216,0.896,0.558l8.09,16.393l18.091,2.629
	c0.377,0.055,0.689,0.318,0.808,0.681c0.117,0.361,0.02,0.759-0.253,1.024L42.475,35.363l3.09,18.017
	c0.064,0.375-0.09,0.754-0.397,0.978c-0.308,0.226-0.717,0.255-1.054,0.076l-16.18-8.506l-16.182,8.506
	C11.606,54.51,11.446,54.548,11.287,54.548z M3.149,22.584l12.016,11.713c0.235,0.229,0.343,0.561,0.287,0.885L12.615,51.72
	l14.854-7.808c0.291-0.154,0.638-0.154,0.931,0l14.852,7.808l-2.836-16.538c-0.056-0.324,0.052-0.655,0.287-0.885l12.016-11.713
	l-16.605-2.413c-0.326-0.047-0.607-0.252-0.753-0.547L27.934,4.578l-7.427,15.047c-0.146,0.295-0.427,0.5-0.753,0.547L3.149,22.584z
	"></path></svg></span><span class="u-icon u-icon-circle u-palette-3-base u-text-black u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55.867 55.867" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c405"></use></svg><svg class="u-svg-content" viewBox="0 0 55.867 55.867" x="0px" y="0px" id="svg-c405" style="enable-background:new 0 0 55.867 55.867;"><path d="M11.287,54.548c-0.207,0-0.414-0.064-0.588-0.191c-0.308-0.224-0.462-0.603-0.397-0.978l3.091-18.018L0.302,22.602
	c-0.272-0.266-0.37-0.663-0.253-1.024c0.118-0.362,0.431-0.626,0.808-0.681l18.09-2.629l8.091-16.393
	c0.168-0.342,0.516-0.558,0.896-0.558l0,0c0.381,0,0.729,0.216,0.896,0.558l8.09,16.393l18.091,2.629
	c0.377,0.055,0.689,0.318,0.808,0.681c0.117,0.361,0.02,0.759-0.253,1.024L42.475,35.363l3.09,18.017
	c0.064,0.375-0.09,0.754-0.397,0.978c-0.308,0.226-0.717,0.255-1.054,0.076l-16.18-8.506l-16.182,8.506
	C11.606,54.51,11.446,54.548,11.287,54.548z M3.149,22.584l12.016,11.713c0.235,0.229,0.343,0.561,0.287,0.885L12.615,51.72
	l14.854-7.808c0.291-0.154,0.638-0.154,0.931,0l14.852,7.808l-2.836-16.538c-0.056-0.324,0.052-0.655,0.287-0.885l12.016-11.713
	l-16.605-2.413c-0.326-0.047-0.607-0.252-0.753-0.547L27.934,4.578l-7.427,15.047c-0.146,0.295-0.427,0.5-0.753,0.547L3.149,22.584z
	"></path></svg></span><span class="u-icon u-icon-circle u-palette-3-base u-text-black u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55.867 55.867" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-57fb"></use></svg><svg class="u-svg-content" viewBox="0 0 55.867 55.867" x="0px" y="0px" id="svg-57fb" style="enable-background:new 0 0 55.867 55.867;"><path d="M11.287,54.548c-0.207,0-0.414-0.064-0.588-0.191c-0.308-0.224-0.462-0.603-0.397-0.978l3.091-18.018L0.302,22.602
	c-0.272-0.266-0.37-0.663-0.253-1.024c0.118-0.362,0.431-0.626,0.808-0.681l18.09-2.629l8.091-16.393
	c0.168-0.342,0.516-0.558,0.896-0.558l0,0c0.381,0,0.729,0.216,0.896,0.558l8.09,16.393l18.091,2.629
	c0.377,0.055,0.689,0.318,0.808,0.681c0.117,0.361,0.02,0.759-0.253,1.024L42.475,35.363l3.09,18.017
	c0.064,0.375-0.09,0.754-0.397,0.978c-0.308,0.226-0.717,0.255-1.054,0.076l-16.18-8.506l-16.182,8.506
	C11.606,54.51,11.446,54.548,11.287,54.548z M3.149,22.584l12.016,11.713c0.235,0.229,0.343,0.561,0.287,0.885L12.615,51.72
	l14.854-7.808c0.291-0.154,0.638-0.154,0.931,0l14.852,7.808l-2.836-16.538c-0.056-0.324,0.052-0.655,0.287-0.885l12.016-11.713
	l-16.605-2.413c-0.326-0.047-0.607-0.252-0.753-0.547L27.934,4.578l-7.427,15.047c-0.146,0.295-0.427,0.5-0.753,0.547L3.149,22.584z
	"></path></svg></span><span class="u-icon u-icon-circle u-palette-3-base u-text-black u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55.867 55.867" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3b68"></use></svg><svg class="u-svg-content" viewBox="0 0 55.867 55.867" x="0px" y="0px" id="svg-3b68" style="enable-background:new 0 0 55.867 55.867;"><path d="M11.287,54.548c-0.207,0-0.414-0.064-0.588-0.191c-0.308-0.224-0.462-0.603-0.397-0.978l3.091-18.018L0.302,22.602
	c-0.272-0.266-0.37-0.663-0.253-1.024c0.118-0.362,0.431-0.626,0.808-0.681l18.09-2.629l8.091-16.393
	c0.168-0.342,0.516-0.558,0.896-0.558l0,0c0.381,0,0.729,0.216,0.896,0.558l8.09,16.393l18.091,2.629
	c0.377,0.055,0.689,0.318,0.808,0.681c0.117,0.361,0.02,0.759-0.253,1.024L42.475,35.363l3.09,18.017
	c0.064,0.375-0.09,0.754-0.397,0.978c-0.308,0.226-0.717,0.255-1.054,0.076l-16.18-8.506l-16.182,8.506
	C11.606,54.51,11.446,54.548,11.287,54.548z M3.149,22.584l12.016,11.713c0.235,0.229,0.343,0.561,0.287,0.885L12.615,51.72
	l14.854-7.808c0.291-0.154,0.638-0.154,0.931,0l14.852,7.808l-2.836-16.538c-0.056-0.324,0.052-0.655,0.287-0.885l12.016-11.713
	l-16.605-2.413c-0.326-0.047-0.607-0.252-0.753-0.547L27.934,4.578l-7.427,15.047c-0.146,0.295-0.427,0.5-0.753,0.547L3.149,22.584z
	"></path></svg></span><span class="u-icon u-icon-circle u-palette-3-base u-text-black u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55.867 55.867" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5f41"></use></svg><svg class="u-svg-content" viewBox="0 0 55.867 55.867" x="0px" y="0px" id="svg-5f41" style="enable-background:new 0 0 55.867 55.867;"><path d="M11.287,54.548c-0.207,0-0.414-0.064-0.588-0.191c-0.308-0.224-0.462-0.603-0.397-0.978l3.091-18.018L0.302,22.602
	c-0.272-0.266-0.37-0.663-0.253-1.024c0.118-0.362,0.431-0.626,0.808-0.681l18.09-2.629l8.091-16.393
	c0.168-0.342,0.516-0.558,0.896-0.558l0,0c0.381,0,0.729,0.216,0.896,0.558l8.09,16.393l18.091,2.629
	c0.377,0.055,0.689,0.318,0.808,0.681c0.117,0.361,0.02,0.759-0.253,1.024L42.475,35.363l3.09,18.017
	c0.064,0.375-0.09,0.754-0.397,0.978c-0.308,0.226-0.717,0.255-1.054,0.076l-16.18-8.506l-16.182,8.506
	C11.606,54.51,11.446,54.548,11.287,54.548z M3.149,22.584l12.016,11.713c0.235,0.229,0.343,0.561,0.287,0.885L12.615,51.72
	l14.854-7.808c0.291-0.154,0.638-0.154,0.931,0l14.852,7.808l-2.836-16.538c-0.056-0.324,0.052-0.655,0.287-0.885l12.016-11.713
	l-16.605-2.413c-0.326-0.047-0.607-0.252-0.753-0.547L27.934,4.578l-7.427,15.047c-0.146,0.295-0.427,0.5-0.753,0.547L3.149,22.584z
	"></path></svg></span>
  <p class="u-align-right u-custom-font u-heading-font u-text u-text-default u-text-2">{{$dataCafe->jamBuka}}<br>
  </p>
  <p class="u-custom-font u-heading-font u-text u-text-default u-text-3">
    <a href="/detail/{{ $dataCafe->idCafe }}">{{$dataCafe->namaCafe}}</a>
  </p>
  <p class="u-custom-font u-heading-font u-text u-text-default u-text-4">{{$dataCafe->alamat}}</p>
          </div>
        </div>
      </div>
      @endforeach   
    </section>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-design" target="_blank">
        <span>Best Website Design</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/website-builder" target="_blank">
        <span>Website Builder</span>
      </a>. 
    </section>
    @endauth
    @guest
    <script>window.location = "/login";</script>
    @endguest
  
</body></html>