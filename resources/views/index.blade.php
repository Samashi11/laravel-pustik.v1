<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template') }}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('template') }}/assets/img/favicon.png">

  <title>
    PUSTIK
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="{{ asset('template') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{ asset('template') }}/assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('template') }}/assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />

  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<body class="index-page bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute   my-3 py-2 start-0 end-0 mx-4">
      <div class="container-fluid px-0">
        <a class="navbar-brand font-weight-bolder ms-sm-3" href="/" rel="tooltip" data-placement="bottom" target="_blank">
          PUSTIK
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon mt-2">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </span>
        </button>
        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
          <ul class="navbar-nav navbar-nav-hover ms-auto">
            <li class="nav-item dropdown dropdown-hover mx-2">
              <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                Books
                <img src="{{ asset('template') }}/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
              </a>
              <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                <div class="d-none d-lg-block">
      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
        Category
      </h6>
      <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
        <span>Fiction</span>
      </a>
      <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
        <span>Self Improvement</span>
      </a>
      <a href="./pages/author.html" class="dropdown-item border-radius-md">
        <span>Novel</span>
      </a>
    </div>
    
    <div class="d-lg-none">
      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
        Landing Pages
      </h6>
    
      <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
        <span>About Us</span>
      </a>
      <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
        <span>Contact Us</span>
      </a>
      <a href="./pages/author.html" class="dropdown-item border-radius-md">
        <span>Author</span>
      </a>
    
      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
        Account
      </h6>
      <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
        <span>Sign In</span>
      </a>
    
    </div>
    
              </div>
            </li>
    
            <li class="nav-item dropdown dropdown-hover mx-2">
              <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                Sections
                <img src="{{ asset('template') }}/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                <div class="d-none d-lg-block">
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
              <span class="text-sm">See all sections</span>
            </div>
            <img src="{{ asset('template') }}/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/hero-sections.html">
            Page Headers
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/features.html">
            Features
          </a>
        </div>
      </li>
    
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6>
              <span class="text-sm">See all navigations</span>
            </div>
            <img src="{{ asset('template') }}/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/navbars.html">
            Navbars
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/nav-tabs.html">
            Nav Tabs
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/pagination.html">
            Pagination
          </a>
        </div>
      </li>
    
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Areas</h6>
              <span class="text-sm">See all input areas</span>
            </div>
            <img src="{{ asset('template') }}/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu  py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/inputs.html">
            Inputs
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/forms.html">
            Forms
          </a>
        </div>
      </li>
    
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Attention Catchers</h6>
              <span class="text-sm">See all examples</span>
            </div>
            <img src="{{ asset('template') }}/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu  py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/alerts.html">
            Alerts
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/modals.html">
            Modals
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/tooltips-popovers.html">
            Tooltips &amp; Popovers
          </a>
        </div>
      </li>
    
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Elements</h6>
              <span class="text-sm">See all elements</span>
            </div>
            <img src="{{ asset('template') }}/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/avatars.html">
            Avatars
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/badges.html">
            Badges
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/breadcrumbs.html">
            Breadcrumbs
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/buttons.html">
            Buttons
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/dropdowns.html">
            Dropdowns
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/progress-bars.html">
            Progress Bars
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/toggles.html">
            Toggles
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/typography.html">
            Typography
          </a>
        </div>
      </li>
    </div>
    
    <div class="row d-lg-none">
      <div class="col-md-12">
        <div class="d-flex mb-2">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/hero-sections.html">
          Page Headers
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/features.html">
          Features
        </a>
    
        <div class="d-flex mb-2 mt-3">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-laptop text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/navbars.html">
          Navbars
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/nav-tabs.html">
          Nav Tabs
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/pagination.html">
          Pagination
        </a>
    
    
        <div class="d-flex mb-2 mt-3">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-badge text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Areas</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/inputs.html">
          Inputs
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/forms.html">
          Forms
        </a>
    
    
        <div class="d-flex mb-2 mt-3">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-notification-70 text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Attention Catchers</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/alerts.html">
          Alerts
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/modals.html">
          Modals
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/tooltips-popovers.html">
          Tooltips &amp; Popovers
        </a>
    
    
        <div class="d-flex mb-2 mt-3">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-app text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Elements</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/avatars.html">
          Avatars
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/badges.html">
          Badges
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/breadcrumbs.html">
          Breadcrumbs
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/buttons.html">
          Buttons
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/dropdowns.html">
          Dropdowns
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/progress-bars.html">
          Progress Bars
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/toggles.html">
          Toggles
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/typography.html">
          Typography
        </a>
      </div>
    </div>
    
              </ul>
            </li>
    
            <li class="nav-item dropdown dropdown-hover mx-2">
              <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons opacity-6 me-2 text-md">article</i>
                Docs
                <img src="{{ asset('template') }}/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                <div class="d-none d-lg-block">
      <ul class="list-group">
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit ">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
            <span class="text-sm">All about overview, quick start, license and contents</span>
          </a>
        </li>
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/colors/material-kit ">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
            <span class="text-sm">See our colors, icons and typography</span>
          </a>
        </li>
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-kit ">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
            <span class="text-sm">Explore our collection of fully designed components</span>
          </a>
        </li>
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit ">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
            <span class="text-sm">Check how you can integrate our plugins</span>
          </a>
        </li>
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit ">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
            <span class="text-sm">For those who want flexibility, use our utility classes</span>
          </a>
        </li>
      </ul>
    </div>
    
    <div class="row d-lg-none">
      <div class="col-md-12 g-0">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </a>
    
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
          <span class="text-sm">See our colors, icons and typography</span>
        </a>
    
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
          <span class="text-sm">Explore our collection of fully designed components</span>
        </a>
    
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
          <span class="text-sm">Check how you can integrate our plugins</span>
        </a>
    
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
          <span class="text-sm">For those who want flexibility, use our utility classes</span>
        </a>
      </div>
    </div>
    
              </ul>
            </li>
            <li class="nav-item ms-lg-auto">
              <a class="nav-link nav-link-icon me-2" href="https://github.com/nurilanwaralabsory/laravel-pustik" target="_blank">
                <i class="fa fa-github me-1" aria-hidden="true"></i>
                <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Star us on Github">Github</p>
              </a>
            </li>
            <li class="nav-item my-auto ms-3 ms-lg-0">
              @if (Route::has('login'))
                @auth
                  <a href="{{ url('/dashboard') }}" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Dashboard</a>
                  @else
                    <a href="{{ route('login') }}" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Log in</a>
                    @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Register</a>
                    @endif
                @endauth
              @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    </div>
  </div>
</div>

<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('{{ asset('template') }}/assets/img/bg2.jpg')">
    <span class="mask bg-gradient-primary opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">COBA INI MAH</h1>
          <p class="lead text-white mt-3">Website perpustakaan Pesantren PeTIK</p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
  <section class="pt-3 pb-4" id="count-stats">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto py-3">
          <div class="row">
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"><span id="state1" countto="{{ $count }}">{{ $count }}</span></h1>
                <h5 class="mt-3">Books</h5>
                <p class="text-sm font-weight-normal">From buttons, to inputs, navbars, alerts or cards, you are covered</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"> <span id="state2" countto="15">15</span>+</h1>
                <h5 class="mt-3">Design Blocks</h5>
                <p class="text-sm font-weight-normal">Mix the sections, change the colors and unleash your creativity</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary" id="state3" countto="4">4</h1>
                <h5 class="mt-3">Pages</h5>
                <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use our pre-made pages for your website</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="my-5 py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
          <div class="rotating-card-container">
            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5 rounded-circle">
              <div class="front front-background shadow-lg rounded-circle">
                <div class="card-body text-center p-0 rounded-circle">
                  <img src="{{ $books->cover }}" alt="book" class="img-fluid border-radius-lg" style="box-shadow: -12px 5px 5px rgb(58, 57, 57)">
                </div>
              </div>
              <div class="back back-background">
                <div class="card-body text-center p-0">
                  <a href=""> 
                    <img src="{{ $books->cover }}" alt="book" class="img-fluid border-radius-lg" style="box-shadow: -12px 5px 5px rgb(58, 57, 57)">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <button class="my-4 m-auto btn bg-gradient-primary w-100">View more</button>
        </div>
        <div class="col-lg-6 ms-auto">
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
                <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
                <p class="pe-5">Built by developers for developers. Check the foundation and you will find everything inside our documentation.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
                <h5 class="font-weight-bolder mt-3">Bootstrap 5 Ready</h5>
                <p class="pe-3">The world’s most popular front-end open source toolkit, featuring Sass variables and mixins.</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-start mt-5">
            <div class="col-md-6 mt-3">
              <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
              <h5 class="font-weight-bolder mt-3">Save Time &amp; Money</h5>
              <p class="pe-5">Creating your design from scratch with dedicated designers can be very expensive. Start with our Design System.</p>
            </div>
            <div class="col-md-6 mt-3">
              <div class="info">
                <i class="material-icons text-gradient text-primary text-3xl">devices</i>
                <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
                <p class="pe-3">Regardless of the screen size, the website content will naturally fit the given resolution.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>









  <!--   Core JS Files   -->
  <script src="{{ asset('template') }}/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="{{ asset('template') }}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="{{ asset('template') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>

  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="{{ asset('template') }}/assets/js/plugins/countup.min.js"></script>

  <script src="{{ asset('template') }}/assets/js/plugins/choices.min.js"></script>

  <script src="{{ asset('template') }}/assets/js/plugins/prism.min.js"></script>
  <script src="{{ asset('template') }}/assets/js/plugins/highlight.min.js"></script>

  <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
  <script src="{{ asset('template') }}/assets/js/plugins/rellax.min.js"></script>
  <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
  <script src="{{ asset('template') }}/assets/js/plugins/tilt.min.js"></script>
  <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
  <script src="{{ asset('template') }}/assets/js/plugins/choices.min.js"></script>

  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="{{ asset('template') }}/assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>


  <script type="text/javascript">

    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }
  </script>
</body>
</html>