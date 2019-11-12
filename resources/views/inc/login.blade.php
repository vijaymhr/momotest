<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">



          <div class="login-form">
              <form action="/examples/actions/confirmation.php" method="post">
                  <h2 class="text-center">Sign in</h2>		
                  <div class="text-center social-btn">
                      <a href="#" class="btn btn-info btn-block text-center"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b></a>
                      <a href="#" class="btn btn-danger btn-block text-center"><i class="fa fa-google"></i> Sign in with <b>Google  	&nbsp;	&nbsp;		</b></a>
                  </div>
              <div class="or-seperator"><i>or</i></div>
                  <div class="form-group">
                    <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="email" class="form-control" name="Email Id" placeholder="Email" required="required">
                      </div>
                  </div>
              <div class="form-group">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                      </div>
                  </div>        
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                  </div>
                  <div class="clearfix">
                      <a href="#" class="pull-right text-center">Forgot Password?</a>
                  </div>  
                  
              </form>
<hr>              
<div class="hint-text small">Still New ? <a href="#signupmodal" class="text-center" data-dismiss="modal" data-toggle="modal">Sign up Here !</a></div>
          </div>
             
          
      
      
      </div>
      
    </div>
  </div>
</div>