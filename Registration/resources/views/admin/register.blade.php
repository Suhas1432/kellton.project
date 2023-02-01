<!-- <!DOCTYPE html>
<html>
  <head>
      <title>New Regstration</title>
  </head>
  <body>
  <form action="{{ url ('registration')}}" method="post">
    @csrf
  <div class="container">
  <h1>Register</h1>
  <p>Please fill in this form to create an account.</p>
  <hr>

  <label for="name"><b>Name</b></label>
  <input type="text" placeholder="Enter name" name="name" id="name" required><br><br>

  <label for="email"><b>E-mail</b></label>
  <input type="email" placeholder="enter mail id" name="email" id="email" required><br><br>

  <label for="password"><b>Password</b></label>
  <input type="password" placeholder="enter new password" name="password" id="password" required><br><br>

  <label for="dob"><b>DOB</b></label>
  <input type="date"  name="dob" id="dob" required><br><br> 

  <label for="adhar"><b>Adhar Number</b></label>
  <input type="number" placeholder="enter adhar number" name="adhar" id="adhar" required><br><br>

  <label for="adhar"><b>Mobile</b></label>
  <input type="number" placeholder="enter mob number" name="mobile" id="mobile" required><br><br>

  <label for="address"><b>Address</b></label>
  <input type="text" placeholder="address" name="address" id="address" required><br><br>

  <label for="gender" ><b>Gender</b></label><br>
                      <input type="radio" name="gender" value="male" id="male"><label for="male">Male</label>&nbsp; &nbsp; &nbsp;
                      <input type="radio" name="gender" value= "female" id="female"><label for="female">Female</label>&nbsp; &nbsp; &nbsp;
                      <input type="radio" name="gender" value="others" id="others"><label for="others">others</label><br><br>

  <label for="dept"><b>Department</b></label>
  <select name="dept_id" required>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>

  </select>
  <hr>

    <button type="submit" value="submit">Register</button>
</div>

<div class="container signin">
  <p>Already have an account? <a href="login">Sign in</a>.</p>
</div>
</form> 
  </body>
</html>



-->



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>registration Page</title>
    <style>
        /* Basics */
        html, body {
        width: 100%;
        height: 100%;
        font-family: "Helvetica Neue", Helvetica, sans-serif;
        color: #444;
        -webkit-font-smoothing: antialiased;
        background: #f0f0f0;
        }
        #container {
        position: fixed;
        width: 440px;
        height: 800px;
        top: 20%;
        left: 50%;
        margin-top: -140px;
        margin-left: -170px;
        background: #fff;
        border-radius: 3px;
        border: 1px solid #ccc;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
        }
        form {
        margin: 0 auto;
        margin-top: 20px;
        }
        label {
        color: #555;
        display: inline-block;
        margin-left: 18px;
        padding-top: 10px;
        font-size: 14px;
        }
        p a {
        font-size: 11px;
        color: #aaa;
        float: right;
        margin-top: -13px;
        margin-right: 20px;
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        transition: all .4s ease;
        }
        p a:hover {
        color: #555;
        }
        input {
        font-family: "Helvetica Neue", Helvetica, sans-serif;
        font-size: 12px;
        outline: none;
        }
        input[type=text],
        input[type=email],
        input[type=date],
        input[type=number],
        input[type=radio],
        input[type=select],
        input[type=password] ,input[type=time]{
        color: #777;
        padding-left: 10px;
        margin: 10px;
        margin-top: 12px;
        margin-left: 18px;
        width: 290px;
        height: 35px;
        border: 1px solid #c7d0d2;
        border-radius: 2px;
        box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        transition: all .4s ease;
        }
        input[type=text]:hover,
        input[type=password]:hover,input[type=time]:hover {
        border: 1px solid #b6bfc0;
        box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .7), 0 0 0 5px #f5f7f8;
        }
        input[type=text]:focus,
        input[type=password]:focus,input[type=time]:focus {
        border: 1px solid #a8c9e4;
        box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
        }
        #lower {
        background: #ecf2f5;
        width: 100%;
        height: 80px;
        margin-top: 20px;
        box-shadow: inset 0 1px 1px #fff;
        border-top: 1px solid #ccc;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
        }
        input[type=radio] {
        margin-left: 5px;
        margin-top: 5px;
        }
        .check {
        margin-left: 3px;
        font-size: 11px;
        color: #444;
        text-shadow: 0 1px 0 #fff;
        }
        input[type=submit] {
        float: right;
        margin-right: 20px;
        margin-top: 20px;
        width: 80px;
        height: 30px;
        font-size: 14px;
        font-weight: bold;
        color: #fff;
        background-color: #acd6ef; /*IE fallback*/
        background-image: -webkit-gradient(linear, left top, left bottom, from(#acd6ef), to(#6ec2e8));
        background-image: -moz-linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
        background-image: linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
        border-radius: 30px;
        border: 1px solid #66add6;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
        cursor: pointer;
        }
        input[type=submit]:hover {
        background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
        background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
        background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
        }
        input[type=submit]:active {
        background-image: -webkit-gradient(linear, left top, left bottom, from(#6ec2e8), to(#b6e2ff));
        background-image: -moz-linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
        background-image: linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
        }
    </style>
  </head>
  <body>
    <!-- Begin Page Content -->
    <div id="container">
    <h1>Register</h1>

        <form action="{{ url ('registration')}}" method="post">
        @csrf
          <label for="loginmsg" style="color:hsla(0,100%,50%,0.5); font-family:"Helvetica Neue",Helvetica,sans-serif;"><?php  echo @$_GET['msg'];?></label>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
           <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
           </span>

          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email">
          <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
          </span>

          <label for="password">Password:</label>
          <input type="password" id="password" name="password">

            <label for="dob">DOB:</label>
          <input type="date" id="dob" name="dob">

          <label for="adhar">Adhar:</label>
          <input type="number" id="adhar" name="adhar">

          <label for="mobile">Mobile:</label>
          <input type="number" id="mobile" name="mobile">

          <label for="address">Address:</label>
          <input type="text" id="address" name="address">

          <label for="gender">Gender:</label>
          <input type="radio" name="gender" value="male" id="male" required><label for="male">Male</label>&nbsp; &nbsp; &nbsp;
                      <input type="radio" name="gender" value= "female" id="female" required><label for="female">Female</label>&nbsp; &nbsp; &nbsp;
                      <input type="radio" name="gender" value="others" id="others" required><label for="others">others</label><br><br>

          <label for="dept">Department:</label>
          <select name="department" required>
            <option value="">-- Select Department --</option>
            @foreach ($data as $d)
            <option value="{{$d->department}}">{{$d->department}}</option>
            @endforeach
      </select>


          
          <div id="lower">
              <input type="submit" value="Register">
          </div>
          <!--/ lower-->
        </form>
    </div>
    <!--/ container-->
    <!-- End Page Content -->
  </body>
</html>


