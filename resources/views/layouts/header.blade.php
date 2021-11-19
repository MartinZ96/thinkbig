    <div class="container-scroller">
      <div class="main-panel">
        <header id="header">
          <div class="container">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="d-flex justify-content-between align-items-center navbar-top">
                <div>
                  <a class="navbar-brand" href="#"
                    ><img src="assets/images/logo.svg" alt=""
                  /></a>
                </div>
                <div class="d-flex">
                  <ul class="navbar-right">
                    <li>
                      <a href="#">ENGLISH</a>
                    </li>
                  </ul>
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom-menu">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div
                  class="navbar-collapse justify-content-center collapse"
                  id="navbarSupportedContent">
                  <ul
                    class="navbar-nav d-lg-flex justify-content-between align-items-center">
                    <li>
                      <button class="navbar-close">
                        <i class="mdi mdi-close"></i>
                      </button>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link active" href="{{ route('source.index') }}">Source screen</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('article.index') }}">Articles screen</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('detail.index') }}">Article details screen</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('favorite.index') }}">Favorite screen</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>