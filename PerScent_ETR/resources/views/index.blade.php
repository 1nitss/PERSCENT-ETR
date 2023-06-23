<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PerScent</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c02acb97e0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/index.js')}}"></script>
    </head>
    <body class="u-body u-xl-mode" data-lang="en">
        @include('layouts.header')
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <img src = "{{asset('images/perfume.png')}}" width = "50%" >
                    <h1 class="display-4 fw-bolder">PerScent Perfume Store</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Unveiling the Essence of Elegance and Captivating Aromas, Delighting Your Senses with Exquisite Fragrances</p>
                </div>
            </div>
        </header>
        <section class="u-align-center u-clearfix u-section-1" id="sec-36a8">
            <div class="u-clearfix u-sheet u-sheet-1">
              <h2 class="u-text u-text-default u-text-1">PerScent Gallery</h2>
              <div class="u-border-7 u-border-palette-1-light-1 u-line u-line-horizontal u-line-1"></div>
              <div class="u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
                <div class="u-gallery-inner u-gallery-inner-1">
                  <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="2705" data-image-height="3821">
                      <img class="u-back-image u-expanded u-back-image-1" src="{{asset('images/chanel.jpg')}}">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-1"></div>
                  </div>
                  <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="3456" data-image-height="4608">
                      <img class="u-back-image u-expanded" src="{{asset('images/black-opium.jpg')}}">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-2"></div>
                  </div>
                  <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="4912" data-image-height="7360">
                      <img class="u-back-image u-expanded" src="{{asset('images/ck.jpg')}}">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-3"></div>
                  </div>
                  <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="3624" data-image-height="5293">
                      <img class="u-back-image u-expanded" src="{{asset('images/miss-dior.jpg')}}">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-4"></div>
                  </div>
                  <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="4000" data-image-height="6000">
                      <img class="u-back-image u-expanded" src="{{asset('images/euphoria.jpg')}}">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-5"></div>
                  </div>
                  <div class="u-effect-fade u-gallery-item">
                    <div class="u-back-slide" data-image-width="4000" data-image-height="6000">
                      <img class="u-back-image u-expanded u-back-image-6" src="{{asset('images/red-diamond.jpg')}}">
                    </div>
                    <div class="u-over-slide u-shading u-over-slide-6"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          
        @include('layouts.footer')
    </body>
</html>
