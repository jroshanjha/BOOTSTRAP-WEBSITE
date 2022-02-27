<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" >
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupmodalLabel">Singup for I-Discuss</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action=" singup.php" method = "post">
      <div class="modal-body">
      <div class="container my-5" >
<h1 class = "text-center">  Singup form</h1>

    
     <!-- <div class="mb-3"> -->
     <div class="form-group">
     <label for="username" class="form-label">Username!</label>
  <input type="text" class="form-control" name = "username" id="username" maxlength= "13" placeholder="Enter your Username">
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email address!</label>
  <input type="email" class="form-control" name = "email" id="email" maxlength= "22"placeholder="Enter your Email Id">
</div>
<div class="mb-3">
<label for="password" class="form-label">Password!</label>
  <input type="password" class="form-control" name = "password" id="password"  minlength = "8" maxlength= "10" placeholder="Enter your Password">
</div>
<div class="mb-3">
<label for="cpassword" class="form-label">Conform Password!</label>
  <input type="password" class="form-control" name = "cpassword" id="cpassword" placeholder="Enter Conform Password">
</div>
<div class="mb-3">
<label for="phone" class="form-label">Phonenumber!</label>
  <input type="text" class="form-control" name = "phone" id="phone" placeholder="Enter your phone number"maxlength = "10">
</div>
<div class="mb-3">
  <label for="desc" class="form-label">Description</label>
  <textarea class="form-control" name ="desc" id="desc" rows="3"></textarea>
</div>
<button type = "submit" class = "btn btn-primary">Signup</button>
     
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
      </form>
    </div>
  </div>
</div>