<?php 
    require_once('./headers.php');
    $dropdowns = $ProductPull->Assistants();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CDF</title>
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
                                <li class="props-nav-link"><a href="cdf" >Records</a></li>
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
                                <h1 class="hero-theme display-6">Constituency Development Funds.</h1>
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
                <div class="row justify-content-center premium-theme">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 text-center">
                        <h3 class="display-5">Records For; Mambilima, Musonda And Munwa Ward.</h3>
                        <p class="premium-theme-text"> 
                            Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been the 
                            industry's standard dummy text ever since the 1500s.
                        </p>
                    </div>
                </div>
                <div class="row premium-cards">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form class="filter_form form-003">
                            <div class="form-group">
                                <label for="">Year</label>
                                <select name="year" id="year">
                                    <?php
                                        foreach($dropdowns["years"] as $year){
                                            echo '<option value="'.$year["year"].'">'.$year["year"].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Type</label>
                                <select name="app" id="app">
                                    <?php
                                        foreach($dropdowns["apps"] as $app){
                                            echo '<option value="'.$app["gt_id"].'">'.$app["gt_name"].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <div class="aux-spm-row-center aux-form-003">
                                    <select name="gender" id="gender">
                                        <?php
                                            foreach($dropdowns["genders"] as $gender){
                                                echo '<option value="'.$gender["g_id"].'">'.$gender["g_name"].'</option>';
                                            }
                                        ?>
                                    </select>
                                    <button type="button" class="filter-btn" id="filter-btn">FILTER</button>
                                </div>
                            </div>
                            <div class="form-group">
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <table class="table table-dark table-striped table-responsive">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">GENDER</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">WARD</th>
                                <th scope="col">PROJECT</th>
                                <th scope="col">YEAR</th>
                                <th scope="col">TYPE</th>
                                <th scope="col">AMOUNT</th>
                              </tr>
                            </thead>
                            <tbody class="records-table">
                                <?php
                                    foreach($dropdowns["cdf"] as $cdf){
                                        echo '<tr>
                                        <th scope="row">'.$cdf["id"].'</th>
                                        <td>'.$cdf["fname"].' '.$cdf["sname"].'</td>
                                        <td>';switch ($cdf["g_id"]) {
                                            case 1:
                                                echo "Male";
                                                break;
                                            case 2:
                                                echo "Female";
                                                break;
                                            case 3:
                                                echo "Other";
                                                break;
                                            default:
                                                echo "Unknown";
                                                break;
                                        }; echo '</td>
                                        <td>'.$cdf["address"].'</td>
                                        <td>';switch ($cdf["w_id"]) {
                                            case 1:
                                                echo "Mambilima";
                                                break;
                                            case 2:
                                                echo "Musonda";
                                                break;
                                            case 3:
                                                echo "Munwa";
                                                break;
                                            default:
                                                echo "Unknown";
                                                break;
                                        }; echo '</td>
                                        <td>'.$cdf["project"].'</td>
                                        <td>'.date("d F, Y",strtotime($cdf["id"])).'</td>
                                        <td>';switch ($cdf["gt_id"]) {
                                            case 1:
                                                echo "Grant";
                                                break;
                                            case 2:
                                                echo "Loan";
                                                break;
                                            case 3:
                                                echo "High School Bursary";
                                                break;
                                            case 4:
                                                echo "Skill Bursary";
                                                break;
                                            default:
                                                echo "Unknown";
                                                break;
                                        }; echo '</td>
                                        <td>'.$cdf["amount"].'</td>
                                    </tr>';
                                    }
                                ?>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
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
    </div>
    </main>
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
        $("#filter-btn").click(function(evt){
            evt.preventDefault();
            let formData = new FormData(),
                year = ($("#year").val()!="")?$("#year").val():$(".error-display").html('<div class="e-notice">Ente First Name</div>'),
                app = ($("#app").val()!="")?$("#app").val():$(".error-display").html('<div class="e-notice">Ente First Name</div>'),
                gender = ($("#gender").val()!="")?$("#gender").val():$(".error-display").html('<div class="e-notice">Enter Email Address</div>');
        
                formData.append("year",year);
                formData.append("app",app);
                formData.append("gender",gender);
                $.ajax({
                    type: 'POST',
                    url: './handlers/filter',
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
                        let records = "";
                        let gender = "";
                        let app = "";
                        let ward = "";
                        $(".records-table").empty();
                        if(q["status"]==200){
                            q["results"].forEach(record => {
                                switch (record["g_id"]) {
                                    case 1:
                                        gender = "Male";
                                        break;
                                    case 2:
                                        gender = "Female";
                                        break;
                                    case 3:
                                        gender = "Other";
                                        break;
                                    default:
                                        gender = "Unknown";
                                        break;
                                };
                                switch (record["gt_id"]) {
                                    case 1:
                                        app = "Grant";
                                        break;
                                    case 2:
                                        app = "Loan";
                                        break;
                                    case 3:
                                        app = "High School Bursary";
                                        break;
                                    case 4:
                                        app = "Skill Bursary";
                                        break;
                                    default:
                                        app = "Unknown";
                                        break;
                                };
                                switch (record["w_id"]){
                                    case 1:
                                        ward = "Mambilima";
                                        break;
                                    case 2:
                                        ward = "Musonda";
                                        break;
                                    case 3:
                                        ward = "Munwa";
                                        break;
                                    default:
                                        ward = "Unknown";
                                        break;
                                };
                                records+='<tr><th scope="row">'+record["id"]+'</th><td>'+record["fname"]+' '+record["sname"]+'</td><td>'+gender+'</td><td>'+record["address"]+'</td><td>'+ward+'</td><td>'+record["project"]+'</td><td>'+record["cdate"]+'</td><td>'+app+'</td><td>'+record["amount"]+'</td></tr>';
                            });
                            $(".records-table").append(records);
                            $(".error-display").html('<div class="e-success">Application Success</div>');
                        }else $(".error-display").html('<div class="e-notice">Operation Failed, Try Again</div>');
                    }
                });
        });
    </script>
</body>
</html>