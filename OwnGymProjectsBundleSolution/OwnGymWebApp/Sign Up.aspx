<%@ Page Title="Home Page" Language="C#" AutoEventWireup="true" CodeBehind="Sign Up.aspx.cs" Inherits="OwnGymWebApp._Default" %>

<link rel="stylesheet" href="Content/signupstyle.css">
<body>
    <div class="header">
        <a href="#">
            <img src="Assets\logo-signup-signin.png" alt="">
        </a>
        </tr>
    </div>
    <div class="signup-with-fb">
        <a href="#" class="signup-fb">Sign up with Facebook
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
            <input type="text" name="fname" placeholder="First Name" />
            <input type="text" name="lname" placeholder="Last Name" />
            <input type="date" name="fname" />
            <br>
            <br>
            <table class="gender">
                <tr>
                    <td style="color: grey; font-size: 14px;">Gender</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>M<input type="radio" name="" value="" id="male"></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>F
                        <input type="radio" name="" value="" id="femmel"></td>
                </tr>
            </table>
            <input type="button" name="previous" class="previous action-button" disabled value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Personal Details</h2>
            <h3 class="fs-subtitle">Step Number 2</h3>
            <input type="text" name="phone" placeholder="Phone" />
            <input type="text" name="Country" placeholder="Country">
            <input type="text" name="City" placeholder="City">
            <input type="text" name="Zip Code" placeholder="Zip Code">
            <input name="Adresse Line" placeholder="Address">
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />

        </fieldset>

        <fieldset>
            <h2 class="fs-title">Workout Details</h2>
            <h3 class="fs-subtitle">Step Number 3</h3>
            <input type="text" name="lname" placeholder="Weight" />
            <input type="text" name="phone" placeholder="Height" />
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Create your account</h2>
            <h3 class="fs-subtitle">Step Number 4</h3>
            <input type="text" name="email" placeholder="Email" />
            <input type="password" name="pass" placeholder="Password" />
            <input type="password" name="cpass" placeholder="Confirm Password" />
            <br>
            <label for="submit" id="terms-condition-signup">By clicking on Sign up, you agree to Own Gym's <span><a href="#">terms & conditions</a></span> and <span><a href="#">privacy policy </a></span></label>
            <br>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" class="submit action-button" value="Submit" />

        </fieldset>
    </form>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>



    <script src="Scripts/signup.js"></script>



</body>
