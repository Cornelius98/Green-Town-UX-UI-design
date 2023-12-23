<?php 
    require_once('./headers.php');
    $dropdowns = $ProductPull->Assistants();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Application</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="property.nmb.css">
</head>
<body class="w-bg">
    <main class="apps-main">
        <header>
            <div class="htransparency application-wrapper">
                <div class="container">
                    <div class="row dsk-top-most">
                        <div class="col-xs-3 col-sm-3 col-md-6 col-lg-6 col-xl-6 h-contacts">
                            <span class="phone"><i class="fa fa-phone"></i> <span class="real-phone">+(260) 967 721 423</span></span>
                            <span class="email"><i class="fa fa-envelope"></i> <span class="real-email">jetszambia@jets.com</span></span>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 aux-spm-row-end h-signups">
                            <a href="application" class="btn btn-primary btn-sm">Sign In</a> &nbsp;
                            <a href="application" class="btn btn-danger btn-sm">Advertise</a>
                        </div>
                    </div>
                    <div class="mb-top-most">
                        <div class="m-splitter aux-spm-row-btwn">
                            <div class="mo-icons">
                                <i class="fa fa-phone"></i>
                                <i class="fab fa-whatsapp"></i>
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="mo-iconies">
                                <a href=""><i class="fa fa-search"></i></a>
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-user"></i></a>
                            </div>
                        </div>
                    </div>
                    <hr class="break-contacts">
                    <div class="row dsk-list-options">
                        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 h-home">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 h-links">
                            <ul>
                                <li class="props-nav-link"><a href="index">Home</a></li>
                                <li class="props-nav-link"><a href="index?#projects">Projects</a></li>
                                <li class="props-nav-link"><a href="index?#services">Our Services</a></li>
                                <li class="props-nav-link"><a href="index?#notifications">Notifications</a></li>
                                <li class="props-nav-link"><a href="offices" target="_blank">Offices</a></li>
                                <li class="props-nav-link"><a href="cdf">Records</a></li>
                                <li class="props-nav-link"><a href="application">Apply</a></li>
                                <li class="props-nav-link"><a href="index?#locations">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 h-icons">
                            <div class="icons">
                                <a href=""><i class="fa fa-search"></i></a>
                                <a href=""><i class="fa fa-heart"></i></a>
                                <a href=""><i class="fa fa-user"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-nav aux-spm-row-btwn">
                        <div class="logo">
                            <i class="fa fa-house"></i>
                        </div>
                        <i class="fa fa-bars show-slidein"></i>
                    </div>
                    <div class="slidein-nav">
                        <div class="aux-spm-row-btwn">
                            <i class="fa fa-home"></i> <b>Selection Menu</b>
                            <span class="slidein-exit">x</span>
                        </div>
                        <hr>
                        <ul>
                            <li class="props-nav-link"><a href="index">Home</a></li>
                            <li class="props-nav-link"><a href="index?#projects">Projects</a></li>
                            <li class="props-nav-link"><a href="index?#services">Our Services</a></li>
                            <li class="props-nav-link"><a href="index?#notifications">Notifiations</a></li>
                            <li class="props-nav-link"><a href="offices" target="_blank">Offices</a></li>
                            <li class="props-nav-link"><a href="cdf" >Records</a></li>
                            <li class="props-nav-link"><a href="application">Apply</a></li>
                            <li class="props-nav-link"><a href="index?#locations">Contact</a></li>
                        </ul>
                    </div>
                    <div class="row justify-content-center header-text">
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                            <div class="hero-text text-center">
                                <h1 class="hero-theme display-6">Start Your Application Now.</h1>
                                <p class="hero-desc">
                                    Lorem Ipsum is simply dummy text of the printing 
                                    and typesetting industry. Lorem Ipsum has been the 
                                    industry's standard dummy text ever since the 1500s.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="premium-wrap apps-main-wrap">
            <div class="container">
                <div class="row premium-cards">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 apps-steps">
                        <h6 class="display-6">THE APLICATION PROCESS</h6>
                        <P>
                            Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been the 
                            industry's standard dummy text ever since the 1500s.
                        </P>
                        <P>
                            <h6 class="step">1</h6>
                            <span>
                                Lorem Ipsum is simply dummy text of the printing 
                                and typesetting industry. Lorem Ipsum has been the 
                                industry's standard dummy text ever since the 1500s.
                            </span>
                        </P>
                        <P>
                            <h6 class="step">2</h6>
                            <span>
                                Lorem Ipsum is simply dummy text of the printing 
                                and typesetting industry. Lorem Ipsum has been the 
                                industry's standard dummy text ever since the 1500s.
                            </span>
                        </P>
                        <P>
                            <h6 class="step">3</h6>
                            <span>
                                Lorem Ipsum is simply dummy text of the printing 
                                and typesetting industry. Lorem Ipsum has been the 
                                industry's standard dummy text ever since the 1500s.
                            </span>
                        </P>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 apps-form-wrap">
                        <div class="error-display"></div>
                        <form class="form-002 shadow">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="fname" id="fname" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label for="">Second Name</label>
                                <input type="text" name="sname" id="sname" placeholder="Enter Second Name">
                            </div>
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="text" name="email" id="email" placeholder="Enter Second Name">
                            </div>
                            <div class="form-group">
                                <label for="">Amount</label>
                                <input type="text" name="amount" id="amount" placeholder="Enter Amount">
                            </div>
                            <div class="form-group">
                                <label for="">Project</label>
                                <input type="text" name="project" id="project" placeholder="Enter Project Name">
                            </div>
                            <div class="form-group">
                                <label for="">Application Type</label>
                                <select name="application" id="application">
                                    <?php
                                        foreach($dropdowns["apps"] as $app){
                                            echo '<option value="'.$app["gt_id"].'">'.$app["gt_name"].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Enter Residential Address</label>
                                <textarea name="address" id="address" cols="30" rows="5" placeholder="Residential Address"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Gender (s)</label>
                                <select name="gender" id="gender">
                                    <?php
                                        foreach($dropdowns["genders"] as $gender){
                                            echo '<option value="'.$gender["g_id"].'">'.$gender["g_name"].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Ward</label>
                                <select name="ward" id="ward">
                                    <?php
                                        foreach($dropdowns["wards"] as $ward){
                                            echo '<option value="'.$ward["w_id"].'">'.$ward["w_name"].'</option>';
                                        }
                                    ?>
            
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="files"><i class="fa fa-image fa-3x"></i></label>
                                <input type="file" name="files" id="files" multiple/>
                            </div>
                            <button type="button" id="apply" class="btn btn-lg btn-success btn-block">
                                <strong>APPLY NOW</strong>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer app-footer">
            <div class="transparency">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 footer-properties">
                            <h5>Popular Searches</h5>
                            <ul>
                                <li><a href="">Constituency Development Fund</a></li>
                                <li><a href="">Agriculture Practices</a></li>
                                <li><a href="">Soya Beans Farminf</a></li>
                                <li><a href="">Cassava Farming</a></li>
                                <li><a href="">Livestock Farming</a></li>
                                <li><a href="">Banana Plantations</a></li>
                                <li><a href="">Fish Farming</a></li>
                                <li><a href="">Groundnut Farming</a></li>
                                <li><a href="">Local Government</a></li>
                                <li><a href="">Notifications</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 footer-locations">
                            <h5>Popular Locations</h5>
                            <ul>
                                <li><a href="">Lusaka Province</a></li>
                                <li><a href="">Copperbelt Province</a></li>
                                <li><a href="">Central Province</a></li>
                                <li><a href="">Luapula Province</a></li>
                                <li><a href="">Southern Province</a></li>
                                <li><a href="">Western Province</a></li>
                                <li><a href="">Muchinga Province</a></li>
                                <li><a href="">Eastern Province</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 footer-policies">
                            <h5>Terms And Conditions</h5>
                            <ul>
                                <li><a href="">Terms Of Service</a></li>
                                <li><a href="">Confidentiality Policy</a></li>
                                <li><a href="">Ownership Policy</a></li>
                                <li><a href="">Advertising Policy</a></li>
                                <li><a href="">Opt-in And Opt-out</a></li>
                                <li><a href="">Disclaimer</a></li>
                                <li><a href="">Accounts</a></li>
                                <li><a href="">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 footer-services">
                            <h5>Mambilima Zambia</h5>
                            <ul>
                                <li><a href="">Pricing Plans</a></li>
                                <li><a href="">Our Services</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Opt-in And Opt-out</a></li>
                                <li><a href="">Disclaimer</a></li>
                                <li><a href="">Accounts</a></li>
                                <li><a href="">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center footer-quick-links">
                            <a href="">Home</a>
                            <a href="">Farmers</a>
                            <a href="">Population</a>
                            <a href="">Women</a>
                            <a href="">Men And Children</a>
                        </div>
                    </div>
                    <hr class="footer-break">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            <div class="copy-right-mark">
                                Copyright &copy; 2023. JETS Zambia
                            </div>
                            <div class="omae-mark">
                                <span class="developer">Developed And Maintained By</span>
                                <span class="omae">Ernest</span><span class="omae-software">Lubingu</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 aux-spm-row-btwn footer-socials">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-whatsapp"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <div class="loader-wrapper spinner-ads" id="loader-wrapper">
        <div class="loader-fader">
            <div class="i-cover">
                <div class="spinning"></div>
                <br>
                <div class="progress-counter" id="progress-counter">85%</div>
            </div>
            <div class="loader-notifier">
                <div class="notiers">
                    <p class="omae-brand" style="width: 100%;">
                        <strong>
                            <span style="color:grey;
                                font-family:arial;
                                    font-weight:100;">
                                    Developed By
                            </span> 
                            <br>
                            <span style="color:grey;font-family:arial;font-weight:800;">ERNEST</span><span style="color:orange;font-family:arial;font-weight:800;">LUBINGA</span>
                            <br>
                            <span style="color:lightgrey;">&copy; 2023</span>
                        </strong>
                    </p>
                </div>
            </div>   
        </div>    
    </div>
    <script type="text/javascript" src="./jquery.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $(function(){
            $(".show-slidein").click(function(){
                $(".slidein-nav").slideDown(3000);
            });
            $(".slidein-exit").click(function(){
                $(".slidein-nav").slideUp(3000);
            });
        });
        $("#apply").click(function(evt){
            evt.preventDefault();
            let formData = new FormData(),
                fname = ($("#fname").val()!="")?$("#fname").val():$(".error-display").html('<div class="e-notice">Ente First Name</div>'),
                sname = ($("#sname").val()!="")?$("#sname").val():$(".error-display").html('<div class="e-notice">Ente First Name</div>'),
                email = ($("#email").val()!="")?$("#email").val():$(".error-display").html('<div class="e-notice">Enter Email Address</div>'),
                application = ($("#application").val()!="")?$("#application").val():$(".error-display").html('<div class="e-notice">Select CDF Type</div>'),
                address = ($("#address").val()!="")?$("#address").val():$(".error-display").html('<div class="e-notice">Enter Adddress</div>'),
                gender = ($("#gender").val()!="")?$("#gender").val():$(".error-display").html('<div class="e-notice">Select Gender</div>'),
                ward = ($("#ward").val()!="")?$("#ward").val():$(".error-display").html('<div class="e-notice">Select Ward</div>');
                amount = ($("#amount").val()!="")?$("#amount").val():$(".error-display").html('<div class="e-notice">Enter Amount</div>');
                project = ($("#project").val()!="")?$("#project").val():$(".error-display").html('<div class="e-notice">Enter Project Name</div>');
        
                formData.append("fname",fname);
                formData.append("sname",sname);
                formData.append("email",email);
                formData.append("application",application);
                formData.append("address",address);
                formData.append("gender",gender);
                formData.append("ward",ward);
                formData.append("amount",amount);
                formData.append("project",project);

                let filesa = document.getElementById("files"),
                filesaFileList = filesa.files,
                filesaListLength = filesaFileList.length,
                q = 0;
                if(filesaListLength > 0){
                    while(q<=filesaListLength){
                        formData.append("filesa[]",filesaFileList[q]);
                        q++;
                    }
                }
                $.ajax({
                    type: 'POST',
                    url: './handlers/cdf',
                    processData: false,
                    contentType: false,
                    async: true,
                    data:formData,
                    beforeSend:function(){
                        $(".spinner-ads").css("display","block");
                    },
                    success:function(s,status,settings){
                        let q = JSON.parse(s);
                        $(".spinner-ads").css("display","none");
                        if(q["status"]==200){
                            $(".error-display").html('<div class="e-success">Application Success</div>');
                        }else $(".error-display").html('<div class="e-notice">Operation Failed, Try Again</div>');
                    }
                });
        });
    </script>
</body>
</html>