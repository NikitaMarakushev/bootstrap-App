<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
     crossorigin="anonymous">
     <style>
         body{
             height: 2000px;
         }
         .p-0{
             padding: 0;
         }
     </style>
</head>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a href="#" class="navbar-brand">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-briefcase-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
            <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v1.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z"/>
        </svg>
    </a>
    <button class="navbar-toggler" type="button"
     data-toggle="collapse" data-target="#navbarSupportedContent" 
     aria-controls="navbarSupportedContent" 
     aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>    
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">Log in</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About Us</a>
            </li>
        </ul>

        <form action="" class="form-inline my-2 my-lg-0">
            <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
        </form>
    </div>
</nav>



<div class="container-fluid p-0">
    <div id="carouselExampleIndicators" class="carousel slide"
    data-ride="carousel">
        <ol class="carousel-indicators">

            <li class="active" data-target="#carouselExampleIndicators" 
            data-slide-to="0"></li>

            <li data-target="#carouselExampleIndicators" 
            data-slide-to="1"></li>

            <li data-target="#carouselExampleIndicators" 
            data-slide-to="2"></li>

        </ol> 
         
        <div class="carousel-inner">
             <div class="carousel-item active">
                <img src="/images/first.jpg" alt="first slide" class="d-block w-100"> 
             </div>

             <div class="carousel-item">
                <img src="/images/second.jpg" alt="first slide" class="d-block w-100"> 
             </div>

             <div class="carousel-item">
                <img src="/images/third.jpg" alt="first slide" class="d-block w-100"> 
             </div>
        </div>

        <a href="#carouselExampleIndicators" class="carousel-control-prev"
         role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a href="#carouselExampleIndicators" class="carousel-control-next"
         role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-xs-12 col-sm-4 col-lg-3">
            <img src="/images/ITEM.jpg" alt="" class="w-100">
            <h3>lorem</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Soluta, placeat!
             Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Soluta, placeat!</p>
        </div>
            <div class="col-xs-12 col-sm-4 col-lg-3">
            <img src="/images/ITEM.jpg" alt="" class="w-100">
            <h3>lorem</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Soluta, placeat!
             Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Soluta, placeat!</p>
        </div>
            
            <div class="col-xs-12 col-sm-4 col-lg-3">
            <img src="/images/ITEM.jpg" alt="" class="w-100">
            <h3>lorem</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Soluta, placeat!
             Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Soluta, placeat!</p>
        </div>
            <div class="col-xs-12 col-sm-4 col-lg-3">
            <img src="/images/ITEM.jpg" alt="" class="w-100">
            <h3>lorem</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Soluta, placeat!
             Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Soluta, placeat!</p>
        </div>
            
            <div class="col-xs-12 col-sm-4 col-lg-3">
            <img src="/images/ITEM.jpg" alt="" class="w-100">
            <h3>lorem</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Soluta, placeat!
             Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Soluta, placeat!</p>
        </div>
            <div class="col-xs-12 col-sm-4 col-lg-3">
            <img src="/images/ITEM.jpg" alt="" class="w-100">
            <h3>lorem</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Soluta, placeat!
             Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Soluta, placeat!</p>
        </div>
        </div>
    </div>
</div>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button class="close" type="data" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail">Email adress</label>
                            <input type="email" class="form-control form-control-lg" id="exampleInputEmail"
                             aria-describedby="emailHelp" placeholder="email" required>
                            <small id="emailHelp" class="form-text text-muted">Enter your email</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPass">Password</label>
                            <input type="password" class="form-control form-control-lg" id="exampleInputPass"
                             placeholder="password" required >
                            <small id="passHelp" class="form-text text-muted">Your password should be more than 10 symbols </small>
                        </div>
                        <div class="form-check">
                            <label for="" class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Запомнить меня
                            </label>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5" style="background-color: #eee;">
    <div class="container p-5">
        <div class="row">
        <div class="col">
        <div class="card" >
            <img src="/images/1.jpg" alt="img" class="card-img-top">
            <div class="card-body">
                <h4 class="card-title text-center">title</h4>
                <p class="card-text text-center">Lorem ipsum dolor, sit 
                    amet consectetur adipisicing elit. Necessitatibus, 
                    aspernatur omnis consequuntur provident voluptate, quos,
                     eligendi at esse animi pariatur nisi nesciunt! 
                     Sint laborum totam harum. Modi at maiores assumenda!
                </p>
                <a href="#" class="btn btn-primary">Submit</a>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="card" >
            <img src="/images/1.jpg" alt="img" class="card-img-top">
            <div class="card-body">
                <h4 class="card-title text-center">title</h4>
                <p class="card-text text-center">Lorem ipsum dolor, sit 
                    amet consectetur adipisicing elit. Necessitatibus, 
                    aspernatur omnis consequuntur provident voluptate, quos,
                     eligendi at esse animi pariatur nisi nesciunt! 
                     Sint laborum totam harum. Modi at maiores assumenda!
                </p>
                <a href="#" class="btn btn-primary">Submit</a>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="card" >
            <img src="/images/1.jpg" alt="img" class="card-img-top">
            <div class="card-body">
                <h4 class="card-title text-center">title</h4>
                <p class="card-text text-center">Lorem ipsum dolor, sit 
                    amet consectetur adipisicing elit. Necessitatibus, 
                    aspernatur omnis consequuntur provident voluptate, quos,
                     eligendi at esse animi pariatur nisi nesciunt! 
                     Sint laborum totam harum. Modi at maiores assumenda!
                </p>
                <a href="#" class="btn btn-primary">Submit</a>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5" style="background-color: #cba;">
    <div class="container p-5">
        <div class="row">
        <div class="col">
        <div class="card" >
            <img src="/images/1.jpg" alt="img" class="card-img-top">
            <div class="card-img-overlay">
            <div class="card-body">
                <h4 class="card-title text-center text-light">title</h4>
                <p class="card-text text-center text-light">Lorem ipsum dolor, sit 
                    amet consectetur adipisicing elit. Necessitatibus, 
                    aspernatur omnis consequuntur provident voluptate, quos,
                     eligendi at esse animi pariatur nisi nesciunt! 
                     Sint laborum totam harum. Modi at maiores assumenda!
                </p>
                <a href="#" class="btn btn-primary">Submit</a>
            </div>
        </div>
        </div>
        </div>
        <div class="col">
        <div class="card" >
            <img src="/images/1.jpg" alt="img" class="card-img-top">
            <div class="card-img-overlay">
            <div class="card-body">
                <h4 class="card-title text-center text-light">title</h4>
                <p class="card-text text-center text-light">Lorem ipsum dolor, sit 
                    amet consectetur adipisicing elit. Necessitatibus, 
                    aspernatur omnis consequuntur provident voluptate, quos,
                     eligendi at esse animi pariatur nisi nesciunt! 
                     Sint laborum totam harum. Modi at maiores assumenda!
                </p>
                <a href="#" class="btn btn-primary">Submit</a>
            </div>
        </div>
        </div>
        </div>
        <div class="col">
        <div class="card" >
            <img src="/images/1.jpg" alt="img" class="card-img-top">
            <div class="card-img-overlay">
            <div class="card-body">
                <h4 class="card-title text-center text-light">title</h4>
                <p class="card-text text-center text-light">Lorem ipsum dolor, sit 
                    amet consectetur adipisicing elit. Necessitatibus, 
                    aspernatur omnis consequuntur provident voluptate, quos,
                     eligendi at esse animi pariatur nisi nesciunt! 
                     Sint laborum totam harum. Modi at maiores assumenda!
                </p>
                <a href="#" class="btn btn-primary">Submit</a>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
</div>





    <div class="container">
        <div class="container p-5 col">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/YGLypsh1e28&list=PLVfMKQXDAhGUxJ4prQSC2K13-YlYj8LgB&index=2" class="embed-responsive-item" allowfullscreen></iframe>
            </div>
        </div>

        <div class="container p-5 col">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/YGLypsh1e28&list=PLVfMKQXDAhGUxJ4prQSC2K13-YlYj8LgB&index=2" class="embed-responsive-item" allowfullscreen></iframe>
            </div>
        </div>

        <div class="container p-5 col">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/YGLypsh1e28&list=PLVfMKQXDAhGUxJ4prQSC2K13-YlYj8LgB&index=2" class="embed-responsive-item" allowfullscreen></iframe>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="/script.js"></script>
</body>
</html>
