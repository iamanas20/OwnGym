<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="About.aspx.cs" Inherits="OwnGymWebApp.About" %>

<asp:Content ID="Content1" ContentPlaceHolderID="TitlePlaceHolder" runat="server">
    <h1 class="pageTitle">About</h1>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="MainContent" runat="server">
    <div class="container aboutContainer">
        <div class="row">
            <div class="col-md-6 textCol">
                <h3 class="Take_a_look__around_our_apps">Our Story</h3>
                <p class="We_re_a_passionate_team_dedicated_to_health_and">
                    We're a passionate team dedicated to health and fitness, that's why we made this app
that we hope it  helps transform people's lives 
by empower and inspire them  to live a healthier life.
                </p>
            </div>
            <div class="col-md-6">
                <img src="Assets/PhoneSingle.png" class="phoneImageDiv" alt="Alternate Text" />
            </div>
        </div>
    </div>
    <div class="container notTheFirstContainer">
        <div class="col-md-6 ">
            <img src="Assets/PhoneWithCalendar.png" class="phoneWithCalendarImageDiv" alt="Alternate Text" />
        </div>
        <div class="row">
            <div class="col-md-6 textCol ourTeamTextCol">
                <h3 class="Take_a_look__around_our_apps">Our Team</h3>
                <p class="We_re_a_passionate_team_dedicated_to_health_and">
                    Our team is about three developers located in Morocco, we are passionate about making something useful to people out there,<br />
                    so we made this health app, because we feel fitness and health should be fun and exciting, we think that people are more likely to reach their goals if
                    they are having fun and empowered along the way.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="card">
                    <div id="blur">
                        <div id="color"></div>
                    </div>
                    <div id="profile">
                        <img src="Assets/IMG_20180412_135439.jpg" alt="User" />
                        <h1>Iva Dopuđ</h1>
                        <p>Front-end Web Developer</p>
                        <div class="links">
                            <a><i class="fa fa-instagram">dqdqz</i></a>
                            <a><i class="fa fa-facebook"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="card">
                    <div id="blur">
                        <div id="color"></div>
                    </div>
                    <div id="profile">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/225748/profile.jpg" alt="User" />
                        <h1>Iva Dopuđ</h1>
                        <p>Front-end Web Developer</p>
                        <div class="links">
                            <a><i class="fa fa-instagram">dqdqz</i></a>
                            <a><i class="fa fa-facebook"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="card">
                    <div id="blur">
                        <div id="color"></div>
                    </div>
                    <div id="profile">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/225748/profile.jpg" alt="User" />
                        <h1>Iva Dopuđ</h1>
                        <p>Front-end Web Developer</p>
                        <div class="links">
                            <a><i class="fa fa-instagram">dqdqz</i></a>
                            <a><i class="fa fa-facebook"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</asp:Content>
