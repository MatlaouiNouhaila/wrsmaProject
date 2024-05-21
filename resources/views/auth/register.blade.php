<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
        .user {
            margin: 30px;
            border: 1.5px solid #000;
            padding: 20px; 
        }
        body {
    padding-top:5%;
    background-position:center;
    background-position:top;
    background-color: #5da4c5;
}
   </style>
</head>
<body>
<h2 class="text-uppercase text-center mb-5"  style="margin: 30px">Create an account</h2>
<form  action= "{{route('register-user')}}"  method="POST" >
  @csrf
    <div  data-mdb-input-init class="form-outline mb-4">
      <input type="text"  class="form-control form-control-lg"  placeholder="Enter Full Name "style="border: 1px solid #000"  >
    <label class="form-label" for="nom">Full Name</label></div>

    <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" class="form-control form-control-lg" placeholder="Enter Email"  style="border: 1px solid #000" />
                  <label class="form-label" for="email"> Email</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" class="form-control form-control-lg" placeholder="Enter  password" style="border: 1px solid #000" />
                  <label class="form-label" for="motpass">Password</label>
                </div>
                
                <div class="d-flex justify-content-center"  style="padding: 5px">
                  <button  type="button" data-mdb-button-init
                    data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" >Se Connecter</button>
                </div>
              <a href="login"> Already Register!! Login Her</a>

</form>
</body>
</html>