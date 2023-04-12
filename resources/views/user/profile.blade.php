<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('/css/cssProfile/nicepage.css') }}" media="screen">
<link rel="stylesheet" href="{{ asset('/css/cssProfile/home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('/js/jsProfile/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('/js/jsProfile/nicepage.js') }}" defer=""></script>
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
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-sticky u-sticky-be02 u-header" id="sec-05a8"><div class="u-clearfix u-sheet u-sheet-1">
    @auth
        <img class="u-image u-image-contain u-image-default u-image-1" src="{{ asset('/image/logo.png') }}" alt="" data-image-width="762" data-image-height="300">
        <nav class="u-menu u-menu-hamburger u-offcanvas u-menu-1" data-responsive-from="XL">
          <div class="menu-collapse">
            <a class="u-button-style u-nav-link" href="#" style="padding: 4px 2px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f93b"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-f93b" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding-right: 21px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding-right: 21px;">Coffee Shop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding-right: 21px;">Forum</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding-right: 21px;">Wishlist</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding-right: 21px;">Profile</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/home">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/shop">Coffee Shop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/forum">Forum</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/wishlist">Wishlist</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="profile">Profile</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-white u-section-1" id="sec-4020">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-default u-text-1">Profile</h3>
        <div class="u-align-left u-container-style u-custom-color-2 u-group u-radius-20 u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <img class="u-image u-image-circle u-preserve-proportions u-image-1" src="{{ asset('/image/profile.jpg') }}" alt="" data-image-width="528" data-image-height="528">
            <p class="u-text u-text-default u-text-2">Username:</p>
            <p class="u-text u-text-default u-text-3">{{ Auth::user()->username }}</p>
            <p class="u-text u-text-default u-text-4">Password:</p>
            <p class="u-text u-text-default u-text-5">**********</p>
            <a href="{{ route('password') }}" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-4 u-radius-20 u-btn-1">Change Password</a>
            <a href="https://nicepage.com/one-page-template" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-5 u-radius-20 u-btn-2">Delete Account</a>
          </div>
        </div>
      </div>
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