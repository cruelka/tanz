<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="QUOTE - Request a quote for every type of companies">
    <meta name="author" content="Ansonika">
    <title>Tanznians Abrod</title>

    <link rel="stylesheet" href="{{ asset('font-awesome.min.css') }}">

    <!-- GOOGLE WEB FONT -->


    <!-- BASE CSS -->
    <link href="{{ asset('layerslider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="{{ asset('all_icons_min.css') }}" rel="stylesheet">
    <link href="{{ asset('magnific-popup.min.css') }}" rel="stylesheet">
    <link href="{{ asset('yellow.css') }}" rel="stylesheet">
    <link href="{{ asset('Form_wizard.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('custom.css') }}" rel="stylesheet">

    <style type="text/css">.backpack.dropzone {
            font-size: 15px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 250px;
            height: 150px;
            font-weight: lighter;
            color: white;
            will-change: right;
            z-index: 2147483647;
            bottom: 20%;
            background: #333;
            position: fixed;
            user-select: none;
            transition: left .5s, right .5s;
            right: 0px; }
        .backpack.dropzone .animation {
            height: 80px;
            width: 250px;
            background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/hoverstate.png") left center; }
        .backpack.dropzone .title::before {
            content: 'Save to'; }
        .backpack.dropzone.closed {
            right: -250px; }
        .backpack.dropzone.hover .animation {
            animation: sxt-play-anim-hover 0.91s steps(21);
            animation-fill-mode: forwards;
            background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/hoverstate.png") left center; }

        @keyframes sxt-play-anim-hover {
            from {
                background-position: 0px; }
            to {
                background-position: -5250px; } }
        .backpack.dropzone.saving .title::before {
            content: 'Saving to'; }
        .backpack.dropzone.saving .animation {
            background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/saving_loop.png") left center;
            animation: sxt-play-anim-saving steps(59) 2.46s infinite; }

        @keyframes sxt-play-anim-saving {
            100% {
                background-position: -14750px; } }
        .backpack.dropzone.saved .title::before {
            content: 'Saved to'; }
        .backpack.dropzone.saved .animation {
            background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/saved.png") left center;
            animation: sxt-play-anim-saved steps(20) 0.83s forwards; }

        @keyframes sxt-play-anim-saved {
            100% {
                background-position: -5000px; } }
    </style>

</head>

<body>
<form method="post" id="form1">
    <div class="aspNetHidden">
        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="SxqxX15amnq00UEECue8zagK4O/27fwUjQDYmC+XApuUMatTLm6mui1Kxx78j/3sALzWnz95W0RI41Q94fCsi3/LGhB7FHCX7oGuDT/OhQ+SK5kJ">
    </div>



    <div class="aspNetHidden">

        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="42F2408A">
    </div><script type="text/javascript">
        //<![CDATA[
        Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'form1', ['tctl00$UpdatePanel1','UpdatePanel1'], [], [], 90, 'ctl00');
        //]]>
    </script>

    <div class="modal hide" id="myModal" style=" width: 40%; margin: 0 auto; padding: 10%;">
        <div class="modal-header" style="text-align: center;">
            <button type="button" class="close" data-dismiss="modal" style="float: right; background-color:red; color: #fff;">x</button>
        </div>
        <div class="modal-body" style="background-color: #fff; width: 100%; margin: 0 auto; padding: 5%;">
            <div id="UpdatePanel1" style="width:100%">

                <h2>Login Here</h2>
                <div>

                    <p>
                        <input name="ctl00$txtemail" type="text" id="txtemail" class=" form-control" placeholder="Email" style="width: 100%;">
                        <span id="CustomValidator2" style="display:none;"></span>
                        <span id="CustomValidator4" style="display:none;"></span>

                    </p>
                    <p><input name="ctl00$txtpassword" type="password" id="txtpassword" class=" form-control" placeholder="Password" style="width: 100%;">
                        <span id="CustomValidator1" style="display:none;"></span>
                    </p>
                    <p>
                        <button onclick="if (typeof(Page_ClientValidate) == 'function') Page_ClientValidate('blslog1'); __doPostBack('ctl00$btnsubscribe','')" id="btnsubscribe" class="btn btn-primary" validationgroup="blslog1">Login</button>

                        <a href="#">Forgot Password?</a>
                    </p>
                </div>

            </div>

        </div>
        <div class="modal-footer" style="background-color: #fff;">s

            <a href="Registration.aspx" class="btn btn-primary">Register</a>
        </div>
    </div>
    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /Loader_form -->

    <div style="background-color:#FFF; position: fixed; z-index:10000000; width:100%; padding:50px; ">
        <div id="logo_home">
            <a href="/" title="Quote"><img src="{{ asset('logo-sml.png') }}"></a>
        </div>

        <a id="menu-button-mobile" class="cmn-toggle-switch cmn-toggle-switch__htx"><span>Menu mobile</span></a>
        <nav class="main_nav">
            <ul class="nav nav-tabs">
                <li><a href="/intro">Dashboard</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/services">Services</a></li>
                <!--<li id="welcome" style="top:0;right:0;">Welcome, <a class="" style="padding-left:0px;color: #22b700;font-weight:bold" href="my_dashboard.aspx">Yegor</a> <a class="" href="logout.aspx" style="color:red;">[Log Out]</a></li>-->

                <li><a href="http://www.immigration.go.tz/index.php/en/download/forms" target="_blank">Citizenship form</a></li>
                <li><a href="">Status</a></li>


                <li><a class="" data-toggle="modal" href="#myModal" style="background-color:#e5bf09; color:#222;">Login</a></li>





                <!--  <li><a href="#tab_1" data-toggle="tab">Request a quote</a></li>
                  <li><a href="#tab_2" data-toggle="tab">About</a></li>
                  <li><a href="#tab_3" data-toggle="tab">Contact</a></li> --->
            </ul>
        </nav>










    </div>


    <div style="background-color: #f8f8f8;" class="visible">




        <div class="subheader" id="about"></div>

        <div style="padding: 30px;">


        </div><!-- /TAB 2:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->



    </div>


    <div id="additional_links1">
        <ul>
            <li>© 2018 Tanznians Abroad</li>
            <li><a href="/disclaimer" class="animated_link">Disclaimer</a></li>
            <li><a href="/terms" class="animated_link">Term and conditions</a></li>
        </ul>
    </div><!-- /add links -->








    <style type="text/css">
        div.panel,p.flip {
            margin: 0px;
            padding: 5px;
            text-align: center;
            border: solid 1px #fff;
        }

        div.ta {


            display: none;
        }
        div.panel,p.flip {
            margin: 0px;
            padding: 5px;
            text-align: center;
            border: solid 1px #fff;
        }

        div.ta1 {


            display: none;
        }
    </style>



</body></html>