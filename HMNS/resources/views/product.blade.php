<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--
    - primary meta tag
  -->
  <title>Made for WANGI</title>
  <meta name="title" content="Woodex - Get Quality Furniture">
  <meta name="description" content="This is an eCommerce html template made by codewithsadee">

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mr+De+Haviland&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!--
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-product-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-product-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-product-3.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-product-4.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-product-5.jpg">

</head>

<body id="top">

  <!--
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

        <div class="input-wrapper">
            <input type="search" name="search" id="searchInput" placeholder="Search Anything..." class="input-field">
            <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
          </div>


      <a href="/home" class="logo">W A N G I</a>
      <div class="header-action">

        <a href="{{ url('/register') }}">
            <button class="header-action-btn" aria-label="user">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
            </button>
          </a>

        <button class="header-action-btn" aria-label="favorite list">
          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>

        <button class="header-action-btn" aria-label="cart">
          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>

        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

    </div>
  </header>





  <!--
    - #SIDEBAR
  -->

  <div class="sidebar" data-navbar>

    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
      <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
    </button>

    <div class="wrapper">

      <ul class="sidebar-list">

        <li>
          <p class="sidebar-list-title">Language</p>
        </li>

        <li>
          <a href="#" class="sidebar-link">English</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">Indonesia</a>
        </li>

      </ul>

      <ul class="sidebar-list">

        <li>
          <p class="sidebar-list-title">Currency</p>
        </li>

        <li>
          <a href="#" class="sidebar-link">USD</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">IDR</a>
        </li>

        <li>
          <a href="#" class="sidebar-link"></a>
        </li>

      </ul>

    </div>

    <nav class="navbar">
      <ul class="navbar-list">

        <li class="navbar-item">
          <a href="/home" class="navbar-link" data-nav-link>Home</a>
        </li>

        <li class="navbar-item">
          <a href="#about" class="navbar-link" data-nav-link>About</a>
        </li>

        <li class="navbar-item">
            <a href="/product" class="navbar-link" data-nav-link>Product</a>
          </li>

        <li class="navbar-item">
          <a href="#blog" class="navbar-link" data-nav-link>Blogs</a>
        </li>

      </ul>
    </nav>

    <ul class="contact-list">

      <li>
        <p class="contact-list-title">Contact Us</p>
      </li>

      <li class="contact-item">
        <address class="address">
          WANGI, Surabaya, Indonesia
        </address>
      </li>

      <li class="contact-item">
        <a href="mailto:support.center@woodex.co" class="contact-link">support.center@WANGI.co.id</a>
      </li>

      <li class="contact-item">
        <a href="tel:00001235567890" class="contact-link">(5025)5221034</a>
      </li>

    </ul>

    <div class="social-wrapper">

      <p class="social-list-title">Follow US On Socials</p>

      <ul class="social-list">

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-tumblr"></ion-icon>
          </a>
        </li>

      </ul>

    </div>

  </div>

  <div class="overlay" data-overlay data-nav-toggler></div>

  <main>
    <section class="section display" id="product" aria-label="product">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Our Products</h2>

            <ul class="filter-btn-list">

              <li class="filter-btn-item">
                <button class="filter-btn active" data-filter-btn="all">All Products</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="Fresh">Fresh</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="Sweet">Sweet</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="Spicy">Spicy</button>
              </li>

            </ul>
          </div>

          <ul class="grid-list product-list" data-filter="all">

            <li class="fragnance">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="{{ asset('images/product-1.jpeg') }}" width="300" height="300" loading="lazy"
                    alt="X" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                        <button id="addToCartBtn" class="card-action-btn" aria-label="add to cart" title="add to cart">
                            <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>

                  <ul class="badge-list">

                    <li>
                      <div class="badge orange">Sale</div>
                    </li>

                    <li>
                      <div class="badge cyan">-10%</div>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">HMNS Perfume - X</a>
                  </h3>

                  <div class="card-price">
                    <del class="del">Rp205.000</del>

                    <data class="price" value="150.000">Rp150.000</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="fragnance">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="{{ asset('images/product-2.jpg') }}" width="300" height="300" loading="lazy" alt="Alpha"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>

                  <div class="card-badge">Out of Stock</div>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">HMNS Perfume - Alpha</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="30">Rp320.000</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="fragnance">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="{{ asset('images/product-3.jpeg') }}" width="300" height="300" loading="lazy"
                    alt="Y" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">HMNS Perfume - Y</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="205.000">Rp205.000</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="fragnance">
              <div class="product-card">
                <a href="/item" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="{{ asset('images/product-4.jpg') }}" width="300" height="300" loading="lazy" alt="Farhampton"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">HMNS Perfume - Farhampton</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="369.000">Rp369.000</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="diffuser">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="{{ asset('images/al-1.jpg') }}" width="300" height="300" loading="lazy"
                    alt="Living-Room" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Alchemist - Onirique</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="345.000">Rp345.000</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="fragnance">
                <div class="product-card">
                  <a href="/item" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                    <img src="{{ asset('images/al-2.jpg') }}" width="300" height="300" loading="lazy" alt="Farhampton"
                      class="img-cover">

                    <ul class="card-action-list">

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                    </ul>
                  </a>

                  <div class="card-content">
                    <h3 class="h3">
                      <a href="#" class="card-title">Alchemist - Got My Mojo Back</a>
                    </h3>

                    <div class="card-price">
                      <data class="price" value="325.000">Rp325.000</data>
                    </div>
                  </div>

                </div>
              </li>

              <li class="diffuser">
                <div class="product-card">

                  <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                    <img src="{{ asset('images/al-3.jpg') }}" width="300" height="300" loading="lazy"
                      alt="Living-Room" class="img-cover">

                    <ul class="card-action-list">

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                    </ul>
                  </a>

                  <div class="card-content">
                    <h3 class="h3">
                      <a href="#" class="card-title">Alchemist - Home Garden</a>
                    </h3>

                    <div class="card-price">
                      <data class="price" value="310.000">Rp310.000</data>
                    </div>
                  </div>

                </div>
              </li>

              <li class="fragnance">
                <div class="product-card">
                  <a href="/item" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                    <img src="{{ asset('images/al-4.jpg') }}" width="300" height="300" loading="lazy" alt="Farhampton"
                      class="img-cover">

                    <ul class="card-action-list">

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                    </ul>
                  </a>

                  <div class="card-content">
                    <h3 class="h3">
                      <a href="#" class="card-title">Alchemist - Pink Laundry</a>
                    </h3>

                    <div class="card-price">
                      <data class="price" value="369.000">Rp369.000</data>
                    </div>
                  </div>

                </div>
              </li>

              <li class="diffuser">
                <div class="product-card">

                  <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                    <img src="{{ asset('images/SAFF-1.jpeg') }}" width="300" height="300" loading="lazy"
                      alt="Living-Room" class="img-cover">

                    <ul class="card-action-list">

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                    </ul>
                  </a>

                  <div class="card-content">
                    <h3 class="h3">
                      <a href="#" class="card-title">SAFF & Co. - Laz Pozaz</a>
                    </h3>

                    <div class="card-price">
                      <data class="price" value="169.000">Rp169.000</data>
                    </div>
                  </div>

                </div>
              </li>

              <li class="fragnance">
                <div class="product-card">
                  <a href="/item" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                    <img src="{{ asset('images/SAFF-2.jpeg') }}" width="300" height="300" loading="lazy" alt="Farhampton"
                      class="img-cover">

                    <ul class="card-action-list">

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                    </ul>
                  </a>

                  <div class="card-content">
                    <h3 class="h3">
                      <a href="#" class="card-title">SAFF & Co. - S.O.T.B</a>
                    </h3>

                    <div class="card-price">
                      <data class="price" value="211.000">Rp211.000</data>
                    </div>
                  </div>

                </div>
              </li>

              <li class="diffuser">
                <div class="product-card">

                  <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                    <img src="{{ asset('images/SAFF-3.jpeg') }}" width="300" height="300" loading="lazy"
                      alt="Living-Room" class="img-cover">

                    <ul class="card-action-list">

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                    </ul>
                  </a>

                  <div class="card-content">
                    <h3 class="h3">
                      <a href="#" class="card-title">SAFF & Co. - Ostara</a>
                    </h3>

                    <div class="card-price">
                      <data class="price" value="186.000">Rp186.000</data>
                    </div>
                  </div>

                </div>
              </li>

              <li class="fragnance">
                <div class="product-card">
                  <a href="/item" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                    <img src="{{ asset('images/SAFF-4.jpeg') }}" width="300" height="300" loading="lazy" alt="Farhampton"
                      class="img-cover">

                    <ul class="card-action-list">

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                    </ul>
                  </a>

                  <div class="card-content">
                    <h3 class="h3">
                      <a href="#" class="card-title">SAFF & Co. - Solaris</a>
                    </h3>

                    <div class="card-price">
                      <data class="price" value="186.000">Rp186.000</data>
                    </div>
                  </div>

                </div>
              </li>

              <li class="diffuser">
                <div class="product-card">

                  <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                    <img src="{{ asset('images/product-5.jpg') }}" width="300" height="300" loading="lazy"
                      alt="Living-Room" class="img-cover">

                    <ul class="card-action-list">

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                      <li>
                        <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                        </button>
                      </li>

                    </ul>
                  </a>

                  <div class="card-content">
                    <h3 class="h3">
                      <a href="#" class="card-title">HMNS Diffuser - Living Room</a>
                    </h3>

                    <div class="card-price">
                      <data class="price" value="269.000">Rp269.000</data>
                    </div>
                  </div>

                </div>
              </li>


            <li class="diffuser">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="{{ asset('images/product-6.jpg') }}" width="300" height="300" loading="lazy" alt="Bedroom"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">HMNS Difusser - Bedroom</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="269.000">Rp269.000</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="diffuser">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="{{ asset('images/product-7.jpg') }}" width="300" height="300" loading="lazy"
                    alt="Room-of-Ideas" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">HMNS Difusser - Room of Ideas</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="300.000">Rp300.000</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="diffuser">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="{{ asset('images/product-8.jpeg') }}" width="300" height="300" loading="lazy"
                    alt="Room-of-Ideas" class="img-cover">

                  <ul class="card-action-listß">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to whishlist" title="add to whishlist">
                        <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">HMNS Diffuser - Room of Love</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="300.000">Rp300.000</data>
                  </div>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>
  </main>





  <!--
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <a href="#" class="logo">W A N G I</a>

          <ul>

            <li class="footer-list-item">
              <ion-icon name="location-sharp" aria-hidden="true"></ion-icon>

              <address class="address">
                WANGI, Surabaya, Indonesia
              </address>
            </li>

            <li class="footer-list-item">
              <ion-icon name="call-sharp" aria-hidden="true"></ion-icon>

              <a href="tel:+625025221034" class="footer-link">+625025221034</a>
            </li>

            <li>
              <ul class="social-list">

                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-tumblr"></ion-icon>
                  </a>
                </li>

              </ul>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Help & Information</p>
          </li>

          <li>
            <a href="#" class="footer-link">Help & Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Returns & Refunds</a>
          </li>

          <li>
            <a href="#" class="footer-link">Online Stores</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">About Us</p>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">What We Do</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ Page</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Get WANGI exclusive offers</p>

          <form action="" class="footer-form">
            <input type="email" name="email_address" placeholder="Your email address" required class="email-field">

            <button type="submit" class="footer-form-btn">
              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <div class="wrapper">

            <a href="#" class="footer-link">Term & Condition</a>
            <a href="#" class="footer-link">Policy</a>
            <a href="#" class="footer-link">Map</a>

          </div>

        </div>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy;All Rights Reserved by <a href="#" class="copyright-link">Bintang Wibi</a>.
        </p>

      </div>

    </div>
  </footer>





  <!--
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>





  <!--
    - custom js link
  -->
  <script src="{{ asset('js/app.js') }}"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
