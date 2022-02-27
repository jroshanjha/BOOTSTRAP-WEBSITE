<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginmodal" >
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginmodalLabel">Login to I-Discuss</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action=" login.php" method="post">
            <div class="modal-body">
                <div class="container my-5">
                    <h1 class="text-center"> Login_form</h1>

                    

                        <div class="mb-3">
                            <label for="username" class="form-label">Username!</label>
                            <input type="text" class="form-control" name="usergmail" id="username"
                                placeholder="Enter your Username" require>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password!</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Enter your Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    
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