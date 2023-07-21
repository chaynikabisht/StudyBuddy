<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign up to join the Community!</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/newdf/partials/_handlesignup.php" method="post">
      <div class="modal-body">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="signupPassword" name="signupPassword">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="signupCpassword" name="signupCpassword">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">I have read and acceped the <a href="">terms and conditions</a></label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         

      </div>
      <div class="modal-footer">
    <!---    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --->
      </div>
    </div>
  </div>
</div>