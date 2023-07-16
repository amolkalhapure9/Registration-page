<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
      <div class="container-fluid " >
        <a class="navbar-brand " href="#">Libary</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#register">Register</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="login.html">Issue Books</a></li>
                <li><a class="dropdown-item" href="login.html">Buy Books</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="login.html">Books on rent</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About us</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Image/library1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block">
              <h5>Welcome to AK's library</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Image/library2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Image/library3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>

    <!-- About us section start -->

    <section class="main_heading my-5 ">
    <div class="text-center">
      <h1 class="display-1" id="aboutus">About us</h1>
      <hr class="w-25 mx-auto">
    </div>
    <div class="container my-5">
      <div class="row  ">
        <div class="col-lg-6 col-md-12 col-12 col-xxl-6 ">
          <figure>
            <img src="Image/aboutus.jpg" alt="" class="img-fluid about_img">
          </figure>

        </div>
        <div class="col-lg-6 col-md-12 col-12 col-xxl-6 d-flex justify-content-center align-items-start flex-column">
         
          <h1>Our Journy</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas explicabo distinctio placeat accusamus porro necessitatibus quidem pariatur, cumque magni suscipit voluptatibus inventore! Odio suscipit numquam similique assumenda autem mollitia corporis.  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam, temporibus minima harum eos quod ipsa? Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ipsum, reprehenderit hic officia veniam asperiores! 
          </p>
          <button type="button" class="btn btn-outline-info  " >Check More</button>
        
         
        </div>
      </div>
    </div>
    </section>
    <section>
      <div class="container my-5">
        <div class="text-center">
          <h1 class="display-1">Services</h1>
          <hr class="w-25 mx-auto">
        </div>
       

        <div class="row my-5">
          <div class="col-md-12 col-lg-6 col-12 col-xxl-4">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="Image/issuebooks.png" class="img-fluid rounded-start about_image"  style="height:100%" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Issue Books</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 col-12 col-xxl-4">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="Image/issuebooks.png" class="img-fluid rounded-start about_image"  style="height:100%" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Books on rent</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-lg-6 col-12 col-xxl-4">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="Image/issuebooks.png" class="img-fluid rounded-start about_image"  style="height:100%" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Buy Books</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-12 text-center my-5">
            <button type="button" class="btn btn-outline-info">More Services</button>
          </div>
        </div>
    </section>

    <section>
      <div class="container my-5">
        <div class="text-center ">
          <h1 class="display-5">Gallary</h1>
          <hr class="w-25 mx-auto">
        </div>

        <div class="row my-5">
          <div class="col-xxl-4 col-md-6 col-12 col-lg-4">
            <figure>
              <img src="image/l1.webp" alt="" class="img-fluid">
            </figure>

          </div>
          <div class="col-xxl-4 col-md-6 col-12 col-lg-4">
            <figure>
              <img src="image/l2.webp" alt="" class="img-fluid">
            </figure>

          </div>
          <div class="col-xxl-4 col-md-6 col-12 col-lg-4">
            <figure>
              <img src="image/l3.jpg" alt="" class="img-fluid">
            </figure>

          </div>
          <div class="col-xxl-4 col-md-6 col-12 col-lg-4">
            <figure>
              <img src="image/l3.jpg" alt="" class="img-fluid">
            </figure>

          </div>
          <div class="col-xxl-4 col-md-6 col-12 col-lg-4">
            <figure>
              <img src="image/l3.jpg" alt="" class="img-fluid">
            </figure>  
          </div>
          <div class="col-xxl-4 col-md-6 col-12 col-lg-4">
            <figure>
              <img src="image/l3.jpg" alt="" class="img-fluid">
            </figure>
          </div>
          <div class="col-xxl-4 col-md-6 col-12 col-lg-4">
            <figure>
              <img src="image/l1.webp" alt="" class="img-fluid">
            </figure>
          </div>
          <div class="col-xxl-4 col-md-6 col-12 col-lg-4">
            <figure>
              <img src="image/l2.webp" alt="" class="img-fluid">
            </figure>
          </div>
          <div class="col-xxl-4 col-md-6 col-12 col-lg-4">
            <figure>
              <img src="image/l3.jpg" alt="" class="img-fluid">
            </figure>
          </div>
          

        </div>
      </div>
    </section>

    <section class="py-2 my-2 " >
      <div class="container-fluid  ">
        <div class="row colordemo">
          <div class="col-xxl-12 col-md-12 pt-5 text-center">
            <h1>Check out our Websites</h1>
            <p>All images are available here for free</p>
            <div class="col-xxl-12 text-center my-5">
              <button type="button" class="btn btn-outline-info" style="color:black">Check More </button>
            </div>
             
          </div>
        </div>
      </div>

    </section>
    <!-- <section class="main_heading mt-5">
       <div class="cntainer">
        <div class="text-center">
        
<h1 class="display-5">signup</h1>
<hr class="w-25 mx-auto">
          
        </div>
       </div>
      <div class="container ">
        <div class="row   ">
          <div class="col-xxl-8 col-10 col-md-8 mx-auto">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <select class="form-select" aria-label="Default select example">
                <option selected>Select city</option>
                <option value="1">Pune</option>
                <option value="2">Mumbai</option>
                <option value="3">delhi</option>
              </select>
               
              <label for="" class="my-1 ">Gender</label>
              <div class="form-check form-check-inline mx-3">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
         
              </div>






              
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

          </div>
        </div>
      </div>

    </section>
    -->

<!-- 

 -->

<section class="main_heading">
 <br>
 <br>
 <br>
 <div class="container" >
     <div class="row">
     <div class="col-md-3">
                   
     </div>
               
     <div class="col-md-6 main">
                   
         <form action="form.php"post" method="post">
                   
         <h1> Register Yourself </h1>
                           
         <input class="box" type="text" name="name" id="name" 
         placeholder="Name"  required /><br>
                           
         <input class="box" type="email" name="email" id="email" 
         placeholder="E-Mail " required /><br>
                           
         <input class="box" type="password" name="password" 
         id="password" placeholder="Password "  maxlength="5" required/><br>
                           
         <input class="box" type="text" name="phone" id="phone"  
         placeholder="Phone Number "  maxlength="10" minlength="10" required/><br>
                     <br>
         <input type="submit" id="submitDetails"  
         name="submitDetails" value="Submit" /><br>
                   
         </form>
         <p>Already have an account</p>
         <p><a href="login.html">Login</a></p>
                   
     </div>
               
               
     <div class="col-md-3">
     </div>
               
 </div>
 </div>

</section>
 <!-- 

  -->









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>


  </body>
</html>