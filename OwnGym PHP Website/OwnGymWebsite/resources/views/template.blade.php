<!DOCTYPE html>

<html lang="en">
<head runat="server">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><%: Page.Title %> - My ASP.NET Application</title>

    <asp:PlaceHolder runat="server">
        <%: Scripts.Render("~/bundles/modernizr") %>
    </asp:PlaceHolder>
    <webopt:BundleReference runat="server" Path="~/Content/css" />
    <link href="~/favicon.ico" rel="shortcut icon" type="image/x-icon" />

</head>
<body>
    <form runat="server">
        <asp:ScriptManager runat="server">
            <Scripts>
                <%--To learn more about bundling scripts in ScriptManager see https://go.microsoft.com/fwlink/?LinkID=301884 --%>
                <%--Framework Scripts--%>
                <asp:ScriptReference Name="MsAjaxBundle" />
                <asp:ScriptReference Name="jquery" />
                <asp:ScriptReference Name="bootstrap" />
                <asp:ScriptReference Name="respond" />
                <asp:ScriptReference Name="WebForms.js" Assembly="System.Web" Path="~/Scripts/WebForms/WebForms.js" />
                <asp:ScriptReference Name="WebUIValidation.js" Assembly="System.Web" Path="~/Scripts/WebForms/WebUIValidation.js" />
                <asp:ScriptReference Name="MenuStandards.js" Assembly="System.Web" Path="~/Scripts/WebForms/MenuStandards.js" />
                <asp:ScriptReference Name="GridView.js" Assembly="System.Web" Path="~/Scripts/WebForms/GridView.js" />
                <asp:ScriptReference Name="DetailsView.js" Assembly="System.Web" Path="~/Scripts/WebForms/DetailsView.js" />
                <asp:ScriptReference Name="TreeView.js" Assembly="System.Web" Path="~/Scripts/WebForms/TreeView.js" />
                <asp:ScriptReference Name="WebParts.js" Assembly="System.Web" Path="~/Scripts/WebForms/WebParts.js" />
                <asp:ScriptReference Name="Focus.js" Assembly="System.Web" Path="~/Scripts/WebForms/Focus.js" />
                <asp:ScriptReference Name="WebFormsBundle" />
                <%--Site Scripts--%>
            </Scripts>
        </asp:ScriptManager>

        <div class="navbarAndTitleHousingContainer">

            <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" runat="server" href="~/"><span>Own Gym</span></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <asp:LoginView runat="server" ViewStateMode="Disabled">
                            <AnonymousTemplate>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="link" runat="server" href="~/"><span>Home</span></a></li>
                                    <li><a class="link" runat="server" href="~/About"><span>About</span></a></li>
                                    <li><a class="link" runat="server" href="~/Features"><span>Features</span></a></li>
                                    <li><a class="link" runat="server" href="~/Pricing"><span>Pricing</span></a></li>
                                    <li><a class="linkLast" runat="server" href="~/Contact"><span>Contact</span></a></li>
                                    <li><a class="signInButton" runat="server" href="~/SignIn">
                                        <div class="Sign_Up">Sign In</div>
                                    </a></li>
                                    <li><a class="signUpButton" runat="server" href="~/SignUp">
                                        <div class="Sign_Up">Sign Up</div>
                                    </a></li>
                                </ul>
                            </AnonymousTemplate>
                            <LoggedInTemplate>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a runat="server" href="~/Account/Manage" title="Manage your account">Hello, <%: Context.User.Identity.GetUserName()  %> !</a></li>
                                    <li>
                                        <asp:LoginStatus runat="server" LogoutAction="Redirect" LogoutText="Log off" LogoutPageUrl="~/" OnLoggingOut="Unnamed_LoggingOut" />
                                    </li>
                                </ul>
                            </LoggedInTemplate>
                        </asp:LoginView>
                    </div>
                </div>
            </div>
            
            @yield('title')
            
        </div>

        <div class="container body-content">
            @yield('content')
        </div>

        <div class="container">

        </div>
    </form>
</body>
</html>
