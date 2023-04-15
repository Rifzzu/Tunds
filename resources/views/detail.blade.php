<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Nama Cafe">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('/css/cssDetail/nicepage.css') }}" media="screen">
<link rel="stylesheet" href="{{ asset('/css/cssDetail/home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('/js/jsDetail/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('/js/jsDetail/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 5.7.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Group6-3.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-eb50"><div class="u-clearfix u-sheet u-sheet-1">
    @auth
        <nav class="u-menu u-menu-hamburger u-offcanvas u-menu-1" data-responsive-from="XL">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" target="_blank" style="padding: 10px 20px;">Coffee Shop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" target="_blank" style="padding: 10px 20px;">Forum</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" target="_blank" style="padding: 10px 20px;">Wishlist</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" target="_blank" style="padding: 10px 20px;">Profile</a>
</li><li class="u-nav-item"><a class="u-button-style u-file-link u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ asset('/image/logo.png') }}" style="padding: 10px 20px;">Logout</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-container-style u-custom-color-1 u-inner-container-layout u-opacity u-opacity-95 u-sidenav u-sidenav-1" data-offcanvas-width="208.4568">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close u-menu-close-1"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-text-hover-custom-color-2 u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/home" style="padding-top: 38px; padding-bottom: 38px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" target="_blank" href="/shop" style="padding-top: 38px; padding-bottom: 38px;">Coffee Shop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" target="_blank" href="/forum" style="padding-top: 38px; padding-bottom: 38px;">Forum</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" target="_blank" href="/wishlist" style="padding-top: 38px; padding-bottom: 38px;">Wishlist</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" target="_blank" href="/profile" style="padding-top: 38px; padding-bottom: 38px;">Profile</a>
</li><li class="u-nav-item"><a class="u-button-style u-file-link u-nav-link" href="/home" style="padding-top: 38px; padding-bottom: 38px;">Logout</a>
</li></ul>
                <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="294" data-image-height="115">
                  <img src="{{ asset('/image/logo.png') }}" class="u-logo-image u-logo-image-1">
                </a>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <img class="u-image u-image-contain u-image-default u-image-2" src="{{ asset('/image/logo.png') }}" alt="" data-image-width="294" data-image-height="115">
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-04cd">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-text u-text-default u-text-1">{{ $cafe->namaCafe }}</h2>
                  <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-1" src="{{ $cafe->gambar }}" alt="" data-image-width="400" data-image-height="265">
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-white u-layout-cell-2" src="">
                <div class="u-container-layout u-container-layout-2">
                  <h4 class="u-align-center u-text u-text-default u-text-2">Deskripsi Cafe</h4>
                  <p class="u-align-justify u-text u-text-default u-text-3"> {{ $cafe->deskripsi }}</p>
                  <p class="u-align-center u-text u-text-default u-text-4"><span class="u-icon u-icon-1"><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" style="width: 1em; height: 1em;"><g><path d="M42.117,43.007c-0.55-0.067-1.046,0.327-1.11,0.876s0.328,1.046,0.876,1.11C52.399,46.231,58,49.567,58,51.5
		c0,2.714-10.652,6.5-28,6.5S2,54.214,2,51.5c0-1.933,5.601-5.269,16.117-6.507c0.548-0.064,0.94-0.562,0.876-1.11
		c-0.065-0.549-0.561-0.945-1.11-0.876C7.354,44.247,0,47.739,0,51.5C0,55.724,10.305,60,30,60s30-4.276,30-8.5
		C60,47.739,52.646,44.247,42.117,43.007z"></path><path d="M29.823,54.757L45.164,32.6c5.754-7.671,4.922-20.28-1.781-26.982C39.761,1.995,34.945,0,29.823,0
		s-9.938,1.995-13.56,5.617c-6.703,6.702-7.535,19.311-1.804,26.952L29.823,54.757z M30,12c3.86,0,7,3.141,7,7s-3.14,7-7,7
		s-7-3.141-7-7S26.14,12,30,12z"></path>
</g></svg></span>&nbsp;{{ $cafe->alamat }}
                  </p>
                  <p class="u-align-center u-text u-text-default u-text-5"><span class="u-icon u-icon-2"><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" style="width: 1em; height: 1em;"><g><circle cx="30" cy="29.879" r="2"></circle><path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M29,7.879c0-0.553,0.448-1,1-1s1,0.447,1,1
		v1c0,0.553-0.448,1-1,1s-1-0.447-1-1V7.879z M9,30.879H8c-0.552,0-1-0.447-1-1s0.448-1,1-1h1c0.552,0,1,0.447,1,1
		S9.552,30.879,9,30.879z M15.858,45.436l-0.707,0.707c-0.195,0.195-0.451,0.293-0.707,0.293s-0.512-0.098-0.707-0.293
		c-0.391-0.391-0.391-1.023,0-1.414l0.707-0.707c0.391-0.391,1.023-0.391,1.414,0S16.249,45.045,15.858,45.436z M15.858,15.736
		c-0.195,0.195-0.451,0.293-0.707,0.293s-0.512-0.098-0.707-0.293l-0.707-0.707c-0.391-0.391-0.391-1.023,0-1.414
		s1.023-0.391,1.414,0l0.707,0.707C16.249,14.713,16.249,15.346,15.858,15.736z M31,51.879c0,0.553-0.448,1-1,1s-1-0.447-1-1v-1
		c0-0.553,0.448-1,1-1s1,0.447,1,1V51.879z M30,33.879c-1.858,0-3.411-1.28-3.858-3H19c-0.552,0-1-0.447-1-1s0.448-1,1-1h7.142
		c0.364-1.399,1.459-2.494,2.858-2.858V15.879c0-0.553,0.448-1,1-1s1,0.447,1,1v10.142c1.72,0.447,3,1.999,3,3.858
		C34,32.085,32.206,33.879,30,33.879z M46.263,46.143c-0.195,0.195-0.451,0.293-0.707,0.293s-0.512-0.098-0.707-0.293l-0.707-0.707
		c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0l0.707,0.707C46.654,45.119,46.654,45.752,46.263,46.143z M46.263,15.029
		l-0.707,0.707c-0.195,0.195-0.451,0.293-0.707,0.293s-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414l0.707-0.707
		c0.391-0.391,1.023-0.391,1.414,0S46.654,14.639,46.263,15.029z M52,30.879h-1c-0.552,0-1-0.447-1-1s0.448-1,1-1h1
		c0.552,0,1,0.447,1,1S52.552,30.879,52,30.879z"></path>
</g></svg></span>&nbsp;{{ $cafe->jamBuka }}
                  </p>
                  <p class="u-align-center u-text u-text-default u-text-6"><span class="u-file-icon u-icon u-icon-3"><img src="{{ asset('/image/10308697.png') }}" alt=""></span>&nbsp;{{ $cafe->rangeHarga }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-2">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-3">
                <div class="u-container-layout u-valign-top u-container-layout-3">
                  <p class="u-text u-text-default u-text-7"><span class="u-file-icon u-icon u-icon-4"><img src="{{ asset('/image/637141.png') }}" alt=""></span>&nbsp;List Menu
                  </p>
                  <p class="u-align-justify u-text u-text-default u-text-8"> 
                    
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Jenis Menu</th>
                          <th>Nama Menu</th>
                          <th>Harga Menu</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($cafeMenu as $p)
                        <tr>
                          <td>{{ $p->jenisMenu }}</td>
                          <td>{{ $p->namaMenu }}</td>
                          <td>{{ $p->hargaMenu }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-4">
                <div class="u-container-layout u-container-layout-4">
                  <p class="u-text u-text-default u-text-9"><span class="u-file-icon u-icon u-icon-5"><img src="{{ asset('/image/9228191.png') }}" alt=""></span>&nbsp;Review Cafe
                  </p>
                  <p class="u-align-justify u-text u-text-default u-text-10"> Maecenas sed tellus est. Curabitur pharetra quam nec est rhoncus rutrum.
 Suspendisse sed mi ultricies, semper nisi id, dignissim ante. 
Vestibulum consequat dolor quis est pulvinar, eget tempus libero 
finibus. Ut nisl massa, condimentum condimentum purus eget, tempor 
iaculis erat. Sed eu velit leo. Nulla feugiat, enim id accumsan 
vulputate, diam augue facilisis nisl, sed volutpat odio turpis ut ex. 
Vestibulum ullamcorper felis nec ultricies lobortis. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <div id="disqus_thread" class="mt-4"></div>
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://blog-wwe7ssfgas.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-e1d3"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the Text Element.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-mockup" target="_blank">
        <span>Website Mockup</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
    @endauth
    @guest
    <script>window.location = "/login";</script>
    @endguest
  
</body></html>