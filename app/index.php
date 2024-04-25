<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Design</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .hoveranimate {
      transition: all .3s ease-in-out;
    }
    .hoveranimate:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body class="bg-light">
  <div class="bg-white shadow">
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm p-4">
      <div class="container-fluid">
        <a class="navbar-brand" href=""><img src="./image/logo.svg" alt="logo" width="40"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mx-1">
              <a class="nav-link text-black" href="#home">Home</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link" style="color: #FF3066" href="#courses">Courses</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link text-black" href="#people">People</a>
            </li>
            <li class="nav-item mx-1">
              <a class="nav-link text-black" href="#analytics">Analytics</a>
            </li>
          </ul>
          <div class="d-flex">
            <a class="nav-link" href="#profile">
              <img src="./image/profile.svg" alt="profile" width="30" class="me-4">
            </a>
            <a class="nav-link" href="#notification">
              <img src="./image/notification.svg" alt="notification" width="30">
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- title -->
    <h1 class="text-center mt-5 mb-4"><b>Courses</b></h1>
    <!-- menu -->
    <div class="row mx-4">
      <div class="col-6 col-md-5 col-lg-4 col-xl-3 pt-1 d-flex">
        <a class="nav-link" href="#search">
          <img src="./image/search.svg" alt="search" width="30" class="me-4">
        </a>
        <a class="nav-link" href="#filter">
          <img src="./image/filter.svg" alt="filter" width="30" class="opacity-50">
        </a>
      </div>
      <div class="col-6 col-md-2 col-lg-4 col-xl-6">
        <nav class="navbar navbar-expand-lg p-0 m-0">
          <div class="container-fluid">
            <button style="margin: auto" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
              <ul class="navbar-nav me-auto" style="margin: auto;">
                <li class="nav-item mx-1">
                  <a class="nav-link" style="color: #000" href="#all">All</a>
                </li>
                <li class="nav-item mx-1">
                  <a class="nav-link" style="color: #000" href="#published"><b>Published</b></a>
                  <hr style="border: 1px solid #FF3066" class="m-0 mt-2">
                </li>
                <li class="nav-item mx-1">
                  <a class="nav-link" style="color: #000" href="#draft">Draft</a>
                </li>
                <li class="nav-item mx-1">
                  <a class="nav-link" style="color: #000" href="#archived">Archived</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-12 mt-1 mt-md-0 col-md-5 col-lg-4 col-xl-3 d-flex">
        <div class="card bg-light me-2" style="min-width: 80%; line-height: 2em;">
          <div class="row g-0">
            <div class="col-5 p-2 text-center">
              <a style="color: #000; text-decoration: none;" href="#recently">Recently</a>
            </div>
            <div class="col-1">
              <div style="border-left: 1px solid rgba(0, 0, 0, 0.175); height: 100%;" class="ms-2"></div>
            </div>
            <div class="col-6 p-2">
              <a style="color: #000; text-decoration: none;" href="#alphabetically">Alphabetically</a>
            </div>
          </div>
        </div>
        <img src="./image/grid.svg" alt="grid" width="30" class="opacity-50">
      </div>
    </div>
  </div>
  <!-- cards -->
  <div class="row m-4">
    <div class="col-4">
      <a href="#course1" style="text-decoration: none; color: #000">
        <div class="hoveranimate card rounded-0" style="width: 100%">
          <img src="./image/Image1.svg" class="card-img-top rounded-0" alt="...">
          <div class="card-body">
            <p class="card-text">Adventure Sports</p>
            <h5 class="card-title mb-4"><b>Fear Of Driving And Automatic Negative Thoughts</b></h5>
            <div style="float: left">
              <img src="./image/stack.png" alt="lessons" width="30"> 12 Lessons
            </div>
            <div style="float: right">
              <img src="./image/time.png" alt="time" width="30"> 3 hr 30 min
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-4">
      <a href="#course2" style="text-decoration: none; color: #000">
        <div class="hoveranimate card rounded-0" style="width: 100%">
          <img src="./image/Image2.svg" class="card-img-top rounded-0" alt="...">
          <div class="card-body">
            <p class="card-text">Sales and Operations</p>
            <h5 class="card-title mb-4"><b>Work more, Earn more while sitting at your home</b></h5>
            <div style="float: left">
              <img src="./image/stack.png" alt="lessons" width="30"> 23 Lessons
            </div>
            <div style="float: right">
              <img src="./image/time.png" alt="time" width="30"> 1 hr 30 min
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-4">
      <a href="#course3" style="text-decoration: none; color: #000">
        <div class="hoveranimate card rounded-0" style="width: 100%">
          <img src="./image/Image3.svg" class="card-img-top rounded-0" alt="...">
          <div class="card-body">
            <p class="card-text">Marketing</p>
            <h5 class="card-title mb-4"><b>Foundation course to under stand about Software</b></h5>
            <div style="float: left">
              <img src="./image/stack.png" alt="lessons" width="30"> 23 Lessons
            </div>
            <div style="float: right">
              <img src="./image/time.png" alt="time" width="30"> 1 hr 30 min
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- plus -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
