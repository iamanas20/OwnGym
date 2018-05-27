<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
<link rel="stylesheet" href="{{asset('SignInUp/Content/signupstyle.css')}}">
</head>
<body>
        <div class="header">
  <a href="#"> <img src="{{asset('SignInUp/Assets\logo-signup-signin.png')}}" alt=""> </a>    
  </tr>
</div>
  

    <div class="signup-with-fb">

    <a href="#" class="signup-fb">
      Sign up with Facebook
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
<form id="msform" method="POST" action="{{url('Userregister')}}">
 {{ csrf_field()}}


  <!-- progressbar -->
  <center>
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Personal Details</li>
    <li>Personal Details</li>
    <li>Personal Details</li>
  </ul>
</center>
  <!-- fieldsets -->

    <fieldset class="personal">
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">Step Number 1</h3>
    <input type="text" name="name" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="date" name="birthdate" />
    <br>
    <br>
    <table class="gender">
        <tr>
          <td style=" color: grey; font-size:14px;">Gender</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td> M<input type="radio" name="" value="" id="male"></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td> F <input type="radio" name="" value="" id="femmel"></td>
        </tr>
    </table>
    <input type="button" name="previous" class="previous action-button" disabled value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">Step Number 2</h3>
    <input type="text" name="phone" placeholder="Phone" />
    <input type="text" name="country"  placeholder="Country">
    <input type="text" name="city"  placeholder="City">
    <input type="text" name="zip_code"  placeholder="Zip Code">
    <input name="adress" placeholder="address">
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />

  </fieldset>

    <fieldset>
    <h2 class="fs-title">Workout Details</h2>
    <h3 class="fs-subtitle">Step Number 3</h3>
    <input type="text" name="weight" placeholder="Weight" />
    <input type="text" name="height" placeholder="Height" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">Step Number 4</h3>
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="password" placeholder="Password" />
    <input type="password" name="" placeholder="Confirm Password" />
    <br>
    <label for="submit" id="terms-condition-signup">By clicking on Sign up, you agree to Own Gym's <span><a href="#">terms & conditions</a></span> and <span><a href="#">privacy policy </a> </span> </label>
    <br>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
     <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
    <!--button type="submit" name="submit" class="submit action-button" >Submit</button-->
    

  </fieldset>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>



    <script  src="{{asset('SignInUp/Scripts/signup.js')}}"></script>



</body>

</html>