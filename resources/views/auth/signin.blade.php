
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Library Universitas Ternak Lele </title>

<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/custom.min.css') }}">
</head>

<body class="login">
<div>
  <a class="hiddenanchor" id="signup"></a>
  <a class="hiddenanchor" id="signin"></a>
  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <h1>Login Form</h1>
          <div>
            <input type="email" name="email" class="form-control" placeholder="Email" required="" />
          </div>
          <div>
            <input type="password" name="password" class="form-control" placeholder="Password" required="" />
          </div>
          <div>
            <button class="btn btn-default submit" >Log in</button>
            <a class="reset_pass" href="#">Lost your password?</a>
          </div>
          <div class="clearfix"></div>
            <div class="separator">
              <p class="change_link">New to site?
              <a href="#signup" class="to_register"> Create Account </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-book"></i> Library Universitas Ternak Lele</h1>
                <p>©2016 All Rights Reserved. Fizi Kurniawan</p>
              </div>
          </div>
        </form>
      </section>
    </div>
    <div id="register" class="animate form registration_form">
      <section class="login_content">
        <form method="POST" action="{{ route('register') }}">
          {% csrf_token %}
          <h1>Create Account</h1>
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name" required="" />
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="" />
          </div>
          <div class="form-group">
            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" required="" />
          </div>
          <div class="form-group">
            <select name="status" id="status" class="form-control">
              <option value="0">Mahasiswa</option>
              <option value="1">Dosen / Karyawan</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" id="personal_id" name="personal_id" class="form-control" placeholder="Masukkan NIM: 16013838" required="" />
          </div>
          <div class="form-group">
            <input type="password"  name="password" class="form-control" placeholder="Password" required="" />
          </div>
          <div>
            <button class="btn btn-default submit" type="submit">Submit</button>
          </div>
          <div class="clearfix"></div>
          <div class="separator">
            <p class="change_link">Already a member ?
            <a href="#signin" class="to_register"> Log in </a>
            </p>
          <div class="clearfix"></div>
          <br />
          <div>
            <h1><i class="fa fa-book"></i> Library Universitas Ternak Lele</h1>
            <p>©2016 All Rights Reserved. Fizi Kurniawan</p>
          </div>
        </div>
      </form>
    </section>
  </div>
</div>
</div>
</body>

<script src="{{ URL::asset('js/jquery.min.js') }}" ></script>
<script>
$('#status').change(function(){
    if($(this).val() == 0){
      $('#personal_id').attr("placeholder", "Masukkan NIM: 16013838");
    }else{
      $('#personal_id').attr("placeholder", "Masukkan NIP: 123456789");
    }
    
 });

</script>
</html>
