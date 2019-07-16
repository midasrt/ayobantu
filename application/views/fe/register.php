<!-- Nav Menu -->

<div class="nav-menu fixed-top navpagemid">
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

<div class="pagemid">    
    <div class="container login-box effect7">
    <h5 class="modal-title">Sign Up</h5>
    <br />
        <form role="form" action="<?=base_url().'En/register'?>" method="post" class="needs-validation" novalidate>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="regemail">Email</label>
            <input type="email" class="form-control" id="regemail" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
            <label for="regpass">Password</label>
            <input type="password" class="form-control" id="regpass" placeholder="Password">
            </div>
        </div>
    <div class="form-row">
        <div class="col mb-3">
        <label for="regname">Full name</label>
        <input type="text" class="form-control" id="regname" placeholder="Full name" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
        <label for="regcity">City</label>
        <input type="text" class="form-control" id="regcity" placeholder="City" required>
        <div class="invalid-feedback">
            Please provide a valid city.
        </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="regstate">State</label>
        <input type="text" class="form-control" id="regstate" placeholder="State" required>
        <div class="invalid-feedback">
            Please provide a valid state.
        </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="regzip">Zip</label>
        <input type="text" class="form-control" id="regzip" placeholder="Zip" required>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
            You must agree before submitting.
        </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Sign Up</button>
        </form>
        
        <script>
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
        </script>
    </div><!-- /.row -->	

    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="align-center img-control2">
                <img src="<?=base_url().'images/minilogo.png'?>" alt="Ayobantu Logo">
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
</div>