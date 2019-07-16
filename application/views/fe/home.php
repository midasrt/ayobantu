<!-- Nav Menu -->

<div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                    <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                <form class="form-inline">
                                <input id="homesearch" class="form-control mr-3 w-75 input-trans" type="text" placeholder="Search" aria-label="Search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                </form>
                                </li>
                            </ul>
                        </div>
                        <a class="navbar-brand logo-pos" href="<?=base_url().'En'?>"><img src="<?=base_url().'images/ablogonocap.png'?>" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a href="#" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Galang Bantuan</a></li>
                                <li class="nav-item"><a class="nav-link nav-color" href="#">|</a> </li>
                                <li class="nav-item"><a class="nav-link nav-color" href="#" data-toggle="modal" data-target="#loginModal">Login</a> </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Sign in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="<?=base_url().'En/login'?>" method="post">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="email" name="email" type="email" autofocus="">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                </div>
                <div class="form-group">
                    <a href="<?=base_url().'En/register'?>" class="sign-info">Register here</a>
                </div>
                <div class="text-right float-link">
                    <a href="#" class="sign-info" style="color:#ce5757;">Forgot password</a>
                </div>
                <div>
                    <label>
                        <p class="message"><?=$error_login?></p>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </fieldset>

           
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

    <header class="bg-pic" id="home">
        <div class="container mt-5">
            <h1>Galang Dana Untuk Hal Yang Anda Perjuangkan</h1>
            
        </div>
        <div class="img-holder mt-3"><a class="btn btn-primary btn-lg" href="#" role="button">Galang Bantuan</a></div>
    </header>


    <div class="no-pad">
            <div class="row text-center mid-text-w">
                <div class="col">
                    12345
                    <br />
                    Kampanye Bantuan
                </div>
                <div class="col">
                    12345
                    <br />
                    Kampanye Bantuan
                </div>
                <div class="col">
                    12345
                    <br />
                    Kampanye Bantuan
                </div>
            </div>
    </div>

    <div class="section sec-bg">
        <div class="container">
            <div class="section-title">
                <small>Cerita Ayobantu</small>
                <h3>Cerita Hati</h3>
            </div>

            <div class="testimonials owl-carousel">
                <div class="testimonials-single">
                    <img src="<?=base_url().'images/minilogo.png'?>" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Crystal Gordon</h5>
                    <p class="text-primary">United States</p>
                </div>
                <div class="testimonials-single">
                    <img src="<?=base_url().'images/minilogo.png'?>" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Crystal Gordon</h5>
                    <p class="text-primary">United States</p>
                </div>
                <div class="testimonials-single">
                    <img src="<?=base_url().'images/minilogo.png'?>" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Crystal Gordon</h5>
                    <p class="text-primary">United States</p>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->

    <div class="section light-bg" id="features">


        <div class="container">

            <div class="section-title">
                <img src="<?=base_url().'images/minilogo.png'?>" class="sec-img">
                <h3>Ayo bantu mereka</h3>
                <small>Kamu bisa pilih campaign yang mau kamu bantu</small>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                    <div class="card-image">
                        <img src="<?=base_url().'images/cmpg/1.jpg'?>" alt="Campaign Image">
                    </div>
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="card-title">Lorem Ipsum</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                    <p class="card-text">Terkumpul <br /> Rp.100.000.00 </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                    <div class="card-image">
                        <img src="<?=base_url().'images/cmpg/1.jpg'?>" alt="Campaign Image">
                    </div>
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="card-title">Lorem Ipsum</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                    <p class="card-text">Terkumpul <br /> Rp.100.000.00 </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                    <div class="card-image">
                        <img src="<?=base_url().'images/cmpg/1.jpg'?>" alt="Campaign Image">
                    </div>
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="card-title">Lorem Ipsum</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                    <p class="card-text">Terkumpul <br /> Rp.100.000.00 </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <br />
            <br />

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                    <div class="card-image">
                        <img src="<?=base_url().'images/cmpg/1.jpg'?>" alt="Campaign Image">
                    </div>
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="card-title">Lorem Ipsum</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                    <p class="card-text">Terkumpul <br /> Rp.100.000.00 </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                    <div class="card-image">
                        <img src="<?=base_url().'images/cmpg/1.jpg'?>" alt="Campaign Image">
                    </div>
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="card-title">Lorem Ipsum</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                    <p class="card-text">Terkumpul <br /> Rp.100.000.00 </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                    <div class="card-image">
                        <img src="<?=base_url().'images/cmpg/1.jpg'?>" alt="Campaign Image">
                    </div>
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="card-title">Lorem Ipsum</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                    <p class="card-text">Terkumpul <br /> Rp.100.000.00 </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="btn-center">
                <a href="#" class="btn btn-primary">Telusuri Lebih</a>
            </div>
        </div>

    </div>
    <!-- // end .section -->


    <div class="section sec-bg">

        <div class="container">
            <div class="align-center">
                <h2>Galang Dana di Ayobantu</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione </p>
                <a href="#" class="btn btn-primary">Galang Bantuan Sekarang</a>
            </div>
        </div>
        
    </div>
    <!-- // end .section -->

    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="align-center img-control">
                <img src="<?=base_url().'images/ablogonocap.png'?>" alt="Ayobantu Logo">
            </div>
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p>Ayobantu adalah Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione </p>
                    <p class="mb-2"> <span class="ti-location-pin mr-2"></span> Jl. Gatot Subroto No.123</p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:support@ayobantu.net">support@ayobantu.net</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                            <span class="ti-headphone-alt mr-2"></span> <a href="tel:021-70712345">021-70712345</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="social-icons">
                        <a href="#"><span class="ti-facebook"></span></a>
                        <a href="#"><span class="ti-twitter-alt"></span></a>
                        <a href="#"><span class="ti-instagram"></span></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->
    <footer class="my-5 text-center">
        <!-- Copyright removal is not prohibited! -->
        <p class="mb-2"><small>COPYRIGHT © <?php echo date("Y"); ?>. ALL RIGHTS RESERVED.</small></p>

        <small>
            <a href="#" class="m-2">PRESS</a>
            <a href="#" class="m-2">TERMS</a>
            <a href="#" class="m-2">PRIVACY</a>
        </small>
    </footer>