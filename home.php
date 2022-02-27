<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>BOOTSTRAP HUM</title>
    <style> 
  
  h3,p{
    color:brown;
  }
  </style>
</head>

<body>
    <h1>Hello, BOOTSTRAP TUTORIALA!</h1>
    <?php
    include '_navbar.php';
    ?>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Django.jpg" class="d-block w-100" height = '500' width = '100%' alt="...">
      <div class="carousel-caption d-none d-md-block text-color-red">
        <h3>Welcome to BOOTSTRAP TUTORIAL</h3>
        <p>Technology news,blogs and informations.</p>
        <button type="button" class="btn btn-danger">Technology</button>
        <button type="button" class="btn btn-primary">Web developer</button>
        <button type="button" class="btn btn-success">Tech blog </button>
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/image8.jpg" class="d-block w-100" height = '500' width = '100%' alt="...">
      <div class="carousel-caption d-none d-md-block text-color-red">
        <h3>Welcome to BOOTSTRAP TUTORIAL</h3>
        <p>Technology news,blogs and informations.</p>
        <button type="button" class="btn btn-danger">Technology</button>
        <button type="button" class="btn btn-primary">Web developer</button>
        <button type="button" class="btn btn-success">Tech blog </button>
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/pro1.jpg" class="d-block w-100"  height = '500' width = '100%' alt="...">
      <div class="carousel-caption d-none d-md-block text-color-red">
        <h3>Welcome to BOOTSTRAP TUTORIAL</h3>
        <p>Technology news,blogs and informations.</p>
        <button type="button" class="btn btn-danger">Technology</button>
        <button type="button" class="btn btn-primary">Web developer</button>
        <button type="button" class="btn btn-success">Tech blog </button>
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/image1.jpg" class="d-block w-100" height = '500' width = '100%' alt="...">
      <div class="carousel-caption d-none d-md-block text-color-red">
        <h3>Welcome to BOOTSTRAP TUTORIAL</h3>
        <p>Technology news,blogs and informations.</p>
        <button type="button" class="btn btn-danger">Technology</button>
        <button type="button" class="btn btn-primary">Web developer</button>
        <button type="button" class="btn btn-success">Tech blog </button>
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/pro2.jpg" class="d-block w-100"  height = '500' width = '100%' alt="...">
      <div class="carousel-caption d-none d-md-block text-color-red">
        <h3>Welcome to BOOTSTRAP TUTORIAL</h3>
        <p>Technology news,blogs and informations.</p>
        <button type="button" class="btn btn-danger">Technology</button>
        <button type="button" class="btn btn-primary">Web developer</button>
        <button type="button" class="btn btn-success">Tech blog </button>
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/pro3.jpg" class="d-block w-100"  height = '500' width = '100%' alt="...">
      <div class="carousel-caption d-none d-md-block text-color-red">
        <h3>Welcome to BOOTSTRAP TUTORIAL</h3>
        <p>Technology news,blogs and informations.</p>
        <button type="button" class="btn btn-danger">Technology</button>
        <button type="button" class="btn btn-primary">Web developer</button>
        <button type="button" class="btn btn-success">Tech blog </button>
      
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- <div class="alert alert-warning" role="alert">
  //A simple success alert—check it out!
</div> -->

<div class = 'container my-4 py-4'>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger">Python programming</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Dec 12</div>
          <p class="card-text mb-auto">
   Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Its language constructs and object-oriented approach aim to help programmers write clear, logical code for small- and large-scale projects.</p>
          <a href="programming.php" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
          <img src="img/python3.jpg" class="d-block w-100"  height = '250px' width = '200px' alt="...">
        </div>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Web developer</h3>
          <div class="mb-1 text-muted">Dec 15</div>
          <p class="mb-auto">Web development is the work involved in developing a website for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services. A more comprehensive list of tasks to which Web development commonly refers, may include Web engineering, Web design, Web content development, client liaison, client-side/server-side scripting, Web server and network security configuration, and e-commerce development..</p>
          <a href="development.php" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
          <img src="img/pro1.jpg" class="d-block w-100"  height = '250px' width = '200px' alt="...">
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger">Python programming</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Dec 12</div>
          <p class="card-text mb-auto">
Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Its language constructs and object-oriented approach aim to help programmers write clear, logical code for small- and large-scale projects.</p>
          <a href="programming.php" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
          <img src="img/python3.jpg" class="d-block w-100"  height = '250px' width = '200px' alt="...">
        </div>
      </div>
    </div>
</div>

<?php
    include 'footer.php';
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>