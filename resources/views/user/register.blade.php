<!DOCTYPE html>
<html style="font-size: 16px" lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('/css/cssRegister/nicepage.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('/css/cssRegister/home.css') }}" media="screen" />
    <script
      class="u-script"
      type="text/javascript"
      src="jquery.js"
      defer=""
    ></script>
    <script
      class="u-script"
      type="text/javascript"
      src="nicepage.js"
      defer=""
    ></script>
    <meta name="generator" content="Nicepage 5.7.9, nicepage.com" />
    <meta name="referrer" content="origin" />
    <link
      id="u-theme-google-font"
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
    />
    <link
      id="u-page-google-font"
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
    />

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "login_page"
      }
    </script>
    <meta name="theme-color" content="#478ac9" />
    <meta property="og:title" content="Home" />
    <meta property="og:type" content="website" />
    <meta data-intl-tel-input-cdn-path="intlTelInput/" />
  </head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-white u-section-1" id="sec-4020">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <img
          class="u-expanded-height-xl u-image u-image-contain u-image-default u-image-1"
          src="{{ asset('/image/logo.png') }}"
          alt=""
          data-image-width="762"
          data-image-height="300"
        />
        <div
          class="u-container-style u-custom-color-1 u-group u-radius-20 u-shape-round u-group-1"
        >
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3
              class="u-custom-font u-font-roboto u-text u-text-default u-text-1"
            >
              Register
            </h3>
            <div class="u-form u-form-1">
              <form
                action="{{ route ('register.action')}}"
                class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                method="POST"
                style="padding: 10px"
              >
              @csrf
                <div class="u-form-group u-form-name">
                  <label for="name-3343" class="u-label">Username</label>
                  <input
                    type="text"
                    placeholder="Username"
                    
                    name="username"
                    class="u-input u-input-rectangle"
                    required=""
                  />
                </div>
                <div class="u-form-email u-form-group">
                  <label for="email-3343" class="u-label">Password</label>
                  <input
                    type="password"
                    placeholder="Password"
                    
                    name="password"
                    class="u-input u-input-rectangle"
                    required=""
                  />
                </div>
                <div class="u-form-group u-form-group-3">
                  <label for="text-ffd4" class="u-label"
                    >Confirm Password</label
                  >
                  <input
                    type="password"
                    placeholder="Confirm Password"
                  
                    name="password_confirmation"
                    class="u-input u-input-rectangle"
                  />
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <button class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-radius-20 u-text-custom-color-1 u-btn-1">Register</button>

                </div>
                
              </form>
            </div>
          </div>
        </div>
        <p class="u-custom-font u-font-roboto u-text u-text-custom-color-3 u-text-default u-text-2">
            <a href="/login"> Login </a>
        </p>
        <p class="u-custom-font u-font-roboto u-text u-text-default u-text-3">
          Do you have an account?&nbsp;
        </p>
      </div>
    </section>


  </body>
</html>
