<style>
   body{
      background-image: url(images/logo/bg.png);     
      background-repeat: no-repeat;
      background-size: cover;
   }
</style>
<div class="container pt-5">
      <div class="row justify-content-center mt-5" >
         <div class="col-5" >
            <div class="card pt-3" style="background-color: rgba(0,0,0, 0.5);">
               <div class="card-body mb-4">
                  <div class="row justify-content-center">
                     <div class="col-10">
                        <form action="<?= base_url('login/login') ?>" method="post" class="form-signin text-center">
									<?php  $this->load->view('layouts/_alert') ?>
									
                           <h1 class="h3 mb-3 font-weight-normal text-white font-weight-bold py-5">LOGIN FORM</h1>
            
                           <div class="form-group mb-4">
                              <input type="email" class="form-control" placeholder="Email" name="email" required>
                           </div>

                           <div class="form-group">
                              <input type="password" class="form-control" placeholder="Password" name="password" required>
                           </div>
                           <div class="text-white my-3" style="float: left;">
                              <a class="text-white" href="#"><h6>Forgot your password?</h6></a>
                           </div>
            
                           <button class="btn btn-success btn-lg btn-block mb-5" type="submit" style="font-weight: bold; font-size: 20pt;">Login</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

