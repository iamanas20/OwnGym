<%@ Page Title="Home Page" Language="C#" AutoEventWireup="true" CodeBehind="Sign In.aspx.cs" Inherits="OwnGymWebApp._Default" %>

<link rel="stylesheet" href="Content/signupstyle.css">
<body>
        <div class="header">
  <a href="#"> <img src="Assets\logo-signup-signin.png" alt=""> </a>    
  
</div>
  

    <div class="signup-with-fb">

    <a href="#" class="signup-fb">
      Log In  with Facebook
    </a>
    </div>
    <br>
      <br>
      <br>
      <div class="">
      <center>
      <h3 style="text-align:center; color:gray;">Or</h3>
    </center>
    </div>
  
  <!-- multistep form -->
<form id="msform">


  <fieldset>
    <h2 class="fs-title">Log in with your email</h2>
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
      <br>    <br>
    <input type="submit" name="submit" class="submit action-button" style="width:200px;" value="Submit" runat="server" id="submit-button" />

  </fieldset>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>



    <script  src="Scripts/signup.js"></script>



</body>
