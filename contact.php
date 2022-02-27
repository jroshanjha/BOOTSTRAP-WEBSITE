<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <!-- <script src="jquery.js"></script> -->
    <title>Contact us!</title>
    <style >
        .error{
            color:red;
        }
        span{
          color:blue;
        }



        </style>
        <!-- <style>  
body {  
  font-family: 'Lato';  
  font-weight: 300;  
  font-size: 1.25rem;  
  }  
body {  
  font-family: "Poiret One", cursive;  
  background: #3494e6; /* fallback for old browsers */  
  background: -webkit-linear-gradient (  
    to right,  
    #ec6ead,  
    #3494e6  
  ); /* Chrome 10-25, Safari 5.1-6 */  
  background: linear-gradient (  
    to right,  
    #ec6ead,  
    #3494e6  
  ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */  
}  
h4 {  
  font-weight: bold;  
  margin-bottom: 2.5rem;  
 font-family: 'Lato';  
  align: center;  
  font-size: 2rem;  
}  
form {  
margin-top: 20px;  
  margin-left: 100px;  
}  
p {  
  margin-top: 20px;  
  margin-left: 100px;  
}  
h1 {  
  margin-top: 20px;  
  margin-left: 100px;  
}  
p.note {  
  font-size: 1rem;  
  color: red;  
}  
input {  
  border-radius: 5px;  
  border: 1px solid #ccc;  
  padding: 4px;  
  font-family: 'Lato';  
  width: 300px;  
  margin-top: 10px;  
}  
label {  
  width: 300px;  
  font-weight: bold;  
  display: inline-block;  
  margin-top: 20px;  
}  
label span {  
  font-size: 1rem;  
}  
label.error {  
    color: red;  
    font-size: 1rem;  
    display: block;  
    margin-top: 5px;  
}  
input.error {  
    border: 1px dashed red;  
    font-weight: 300;  
    color: red;  
}  
[type="reset"], html [type="button"] {  
    margin-left: 0;  
    border-radius: 0;  
    background: black;  
    color: white;  
    border: none;  
    font-weight: 300;  
    padding: 10px 0;  
    line-height: 1;  
}  
button {   
margin-left: 0;  
    border-radius: 0;  
    background: black;  
    color: white;  
    border: none;  
    font-weight: 300;  
    padding: 10px 0;  
    line-height: 1;  
}  
[type="submit"] {  
    display: inline-block;  
    padding: 0.35em 1.2em;  
    border: 0.1em solid #3494e6;  
    margin: 0 0.3em 0.3em 0;  
    border-radius: 0.12em;  
    box-sizing: border-box;  
    text-decoration: none;  
    font-family: 'Roboto',sans-serif;  
    font-size: 1rem;  
    text-align: center;  
    transition: all 0.2s;  
    }  
[type="submit"]:hover {  
    color: #FFFFFF;  
    background-color: #3494e6;  
}  
</style>   -->
<script>
  $(document).ready (function () {  
  $(".query").validate ();  
});
</script>
  

  </head>
  <body>
    <center>
    <h1>Hello, world!</h1>
    <form action = 'contact.php' method = 'psot' class = 'query'>
    <div class="mb-3">
    <label for="username" class="form-label">Username <br><span> (required, at least 8 characters) </span></label>
    <input type="text" class="form-control" name ='username' id="exampleInputPassword1" minlength ='8' maxlength ='15' required/>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address <span><br> (required) </span></label>
    <input type="email" class="form-control" name = 'email' id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password <span> <br>Only a-zA-Z,1to9orunderscore ya whitespace</span></label>
    <input type="password" class="form-control" name = 'password' id="exampleInputpassword" aria-describedby="passwordHelp" minlength ='8' maxlength ='15' required/>
 <div id="passwordHelp" class="form-text">We'll never share your password with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">PhoneNumber <span> <br>Only 10 charactor</span></label>
    <input type="text" class="form-control" name = 'phone' id="exampleInputphone" aria-describedby="phoneHelp" minlength ='10' maxlength ='10' required/>
 
  </div>
  <!-- <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password"  class="form-control"  name = 'password' id="exampleInputPassword1">
  </div> -->
  <div class="mb-3">
    <label for="gender" class="form-label">Gender <span color = 'red'>(Click one options)</span></label>
<br>    <input type="radio"  name = 'gender' value = 'male' id="exampleInputgender"checked />Male:
        <input type="radio"  name = 'gender' value = 'female'  id="exampleInputgender" >Female:
            <input type="radio"  name = 'gender' value = 'other' id="exampleInputgender">Other:
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address:</label>
    <textarea  type="" name = 'address' class="form-control" id="exampleInputPassword1"> </textarea>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit"  name = 'submit' class="btn btn-primary">Submit</button>
</form>
</center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- <script src = 'jquery.js'></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src = 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js' ></script>  
</body>
</html>