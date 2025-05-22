<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--
    - primary meta tag
  -->
  <title>Made for HMNS</title>
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


      <a href="/home" class="logo">H M N S</a>
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
          HMNS, Surabaya, Indonesia
        </address>
      </li>

      <li class="contact-item">
        <a href="mailto:support.center@woodex.co" class="contact-link">support.center@HMNS.co.id</a>
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

  <!--
    -#ITEM
  -->
  <section class="section product" id="product" aria-label="product">
    <div class="container">

    <div class="title-wrapper-product">
            <h2 class="h2 section-title">‎ ‎ ‎ </h2>
            <ul class="filter-btn-list">

                <li class="filter-btn-item">
                  <button class="filter-btn active" data-filter-btn="all">All Products</button>
                </li>

                <li class="filter-btn-item">
                  <button class="filter-btn" data-filter-btn="fragnance">Perfume</button>
                </li>
            </ul>
    </div>
        <div class="item-page">

    <!-- Product Images Section -->
    <div class="item-gallery">
        <div class="main-image">
            <img src="{{ asset('images/item-1.png') }}" alt="Main Product Image" id="mainImage">
        </div>
        <div class="thumbnail-images">
            <img src="{{ asset('images/product-4.jpg') }}" alt="Thumbnail 1" class="thumbnail">
            <img src="{{ asset('images/item-2.png') }}" alt="Thumbnail 2" class="thumbnail">
            <img src="{{ asset('images/item-1.png') }}" alt="Thumbnail 3" class="thumbnail">
        </div>
    </div>


    <!-- Product Details Section -->
    <div class="item-details">
        <h2>HMNS Perfume</h2>
        <h1>HMNS Perfume - Farhampton</h1>
        <h2 class="item-harga">Rp 369,000</h2>

        <!-- Product Information -->
        <div class="info">
            <h3>INFORMATION</h3>
            <p>
                In an exclusive collaboration between HMNS and Maliq & D'Essentials,
                we invite you to celebrate your uniqueness without labels. We understand
                that humans are complex beings, and this fragrance is a form of your freedom
                of self-expression, which is called... Untitled Humans.
            </p>

            <!-- Product Attributes -->
            <ul>
                <li><strong>Type:</strong> Unisex - Eau De Parfum</li>
                <li><strong>Size:</strong> 100 ml</li>
                <li><strong>Longevity:</strong> 4-5 hours</li>
                <li><strong>Sillage:</strong> Medium</li>
                <li><strong>Projection:</strong> 1.5 - 2 meters</li>
            </ul>

            <!-- Fragrance Notes -->
            <h4>Notes</h4>
            <ul>
                <li><strong>Top Notes:</strong> Coriander, Violet leaves, Ambrette</li>
                <li><strong>Heart Notes:</strong> Figolide™, Velvet, Rose Absolute</li>
                <li><strong>Base Notes:</strong> Sandalwood, Coumarin, Vanilla</li>
            </ul>
        </div>
    </div>
</div>
</div>
</section>

      <!--
        - #NEWSLETTER
      -->

      <section class="section newsletter" aria-label="newsletter">
        <div class="container">

          <div class="newsletter-card">

            <div class="card-content">
              <h2 class="h2 section-title">Get Your Membership Now</h2>

              <p class="section-text">
                Join our membership and get discount 20% off
              </p>
            </div>

            <form action="" class="card-form">
              <input type="email" name="email_address" placeholder="Your email address" required class="email-field">

              <button type="submit" class="newsletter-btn" aria-label="subscribe">
                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>
            </form>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!--
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <a href="#" class="logo">H M N S</a>

          <ul>

            <li class="footer-list-item">
              <ion-icon name="location-sharp" aria-hidden="true"></ion-icon>

              <address class="address">
                HMNS, Surabaya, Indonesia
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

          <p class="footer-list-title">Get HMNS exclusive offers</p>

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
  <script>
    // Select the main image element
    const mainImage = document.getElementById("mainImage");

    // Select all thumbnail images
    const thumbnails = document.querySelectorAll(".thumbnail");

    // Add click event listener to each thumbnail
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener("click", function() {
            // Update the main image's src to the clicked thumbnail's src
            mainImage.src = this.src;
        });
    });

    // Optional: Randomize main image from thumbnails on page load
    window.onload = function() {
        const randomThumbnail = thumbnails[Math.floor(Math.random() * thumbnails.length)];
        mainImage.src = randomThumbnail.src;
    };
</script>


  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
