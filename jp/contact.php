<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Universal - All In 1 Template</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <script language="javascript" src="js/jquery-1.2.6.min.js"></script> 
<script language="javascript">
function fncSubmit()
{
    if(document.form1.company.value == "")
    {
        alert('Please input Company name');
        document.form1.company.focus();
        return false;
    }   
    if(document.form1.name.value == "")
    {
        alert('Please input Your name');
        document.form1.name.focus();        
        return false;
    }   
    document.form1.submit();
}
</script>
</head>

<body>

 <div id="all">
       <!-- *** Header ***
_________________________________________________________ -->
        <header>
           <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs"><font size="5"><b>NAGAO SYSTEM Inc.</b></font>
                            </p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                  <p class="hidden-sm hidden-xs"> <a href="index.php"><font size="3"><b>JP/</b></font></a>
                                   <a href="../en/index_en.php"><font size="3"><b>EN</b></font></a>
                            </div>
                      </div>
                    </div>
                </div>
            </div>


            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="100">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                         
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                     <a href="index.php">ホーム</a>
                                </li>
                                <li class="dropdown"><!-- delete use-yamm yamm-fw -->
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">製品 <b class="caret"></b></a>
                                    <ul class="dropdown-menu" style="width:600px;"><!-- insert style="width:600px;" -->
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <h5>Product</h5>
                                                        <ul>
                                                           <li><a href="product_3DMbrochureE.php">3D-210-D2</a>
                                                            </li>
                                                            <li><a href="product_3D80.php">3D-80</a>
                                                            </li>
                                                            <li><a href="product_3DB80.php">3DB-80</a>
                                                            </li>
                                                            <li><a href="product_PlanetM2_3F.php">Planet M2-3F</a>
                                                            </li>
                                                            <li><a href="product_Mini2F.php">Planet Min(-F)</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul>
                                                             <h5>製品サービス</h5>
                                                        <ul>
                                                        <li><a href="service_product.php">製品サービス</a>
                                                            </li>
                                                            <li><a href="target.php">ターゲットと製品</a>
                                                            </li>
                                                            <li><a href="3DResearchExperimentResultE.php">研究実験</a>
                                                            </li>
                                                            <li><a href="3DAPPE.php">家電＆アタッチメント</a>
                                                            </li>
                                                            <li><a href="youtube_present.php">ビデオ</a>
                                                            </li>
                                                             <li><a href="show_pdf.php">ドキュメント </a>
                                                            </li>
                                                        </ul>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">企業情報 <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile.php">会社概要</a>
                                        </li>
                                        <li><a href="history.php">沿革</a>
                                        </li>
                                        <li><a href="policy.php">行動指針</a>
                                        </li>
                                        <li><a href="sale.php">販売体制</a>
                                        </li>
                                        <li><a href="access1.php">アクセス</a>
                                        </li>
                                        <li><a href="recruit.php">キャリア</a>
                                        </li>
                                    </ul>
                                </li>
                              <li><a href="http://127.0.0.1/wp_test/news/">ニュース</a></li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">パートナー <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                            <li><a href="achievement.php">納品実績</a>
                                            </li>
                                            <li><a href="cleaning.php">容器洗浄方法</a>
                                            </li>
                                            <li><a href="urban.php">都市鉱石事業</a>
                                            </li>
                                            <li><a href="decontamination.php">除染作業</a>
                                            </li>
                                            <li><a href="news.php">新聞記事</a></li>
                                             <li><a href="wanted.php">パートナー</a>
                                            </li>
                                    </ul>
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                               <li class="active"><a href="contact.php">お問合せ</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                        </div>
 </header>


        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->
</style>
        <div id="branner-breadcrumbs">
            <div class="container">
                <div class="row">
                <img src="img/product/contact.jpg" style="width: 1200px;height: 420px;">
                    </div>
                </div>
            </div>
        </div>

        <br>
            <br>
        <br>
        <div id="content">
            <div class="container" id="contact">

                <div class="row">
                    <div class="col-md-8">

                        <section>

                            <form name="form1" method="post" action="checkcontact.php" class="contact-form"  onSubmit="JavaScript:return fncSubmit();">
                                <div class="row">
                                     <table name="form1" class="lead" width="100%" id="contact">
                                        <tr>
                                            <th style="font-size: 1em;">会社名</th>
                                            <td><input type="text" class="form-control" id="company" name="company"  placeholder="あなたの会社名"  onKeyUp="if(!(isNaN(this.value))) { alert('Please enter the message'); this.value='';}" style="width: 600px; height: 35px;"/><br></td>
                                        </tr>
                                        <tr>
                                            <th style="font-size: 1em;">あなたの名前</th>
                                            <td><input type="text" class="form-control" id="name" name="name"  placeholder="担当者"  onKeyUp="if(!(isNaN(this.value))) { alert('Please enter the message'); this.value='';}" style="width: 600px; height: 35px;"/><br></td>
                                        </tr>
                                        <tr>
                                            <th style="font-size: 1em;">電話番号</th>
                                            <td><input type="text" class="form-control" id="phone" name="phone"  placeholder="電話番号" style="width: 600px; height: 35px;"><br></td>
                                        </tr>
                                        <tr>
                                            <th style="font-size: 1em;">お問い合わせの内容</th>
                                            <td><textarea id="Content" class="form-control" name="Content"  placeholder="お問い合わせの内容" style="width: 600px; height: 150px;"></textarea><br></td>
                                        </tr>
                                    </table>

                                    <div class="col-sm-12 text-center">
                                       <input type="hidden" name="Email" value="nagaosystem.test@gmail.com" />
                                    <div class="col-sm-12 text-center">
                                        <input type="submit" class="btn btn-template-main" value="send">
                                        <input id="submitbtn" class="btn btn-template-main" type="reset" value=" reset " />

                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>

                        </section>

                    </div>

                    <div class="col-md-4">

                        <section>
                            <h3 class="text-uppercase">住所</h3>
                                <p>〒215-0023 
                                 神奈川県川崎市麻生区片平 1-9-30 
                            </p>

                            <h3 class="text-uppercase">電話</h3>

                             <p>電話 +81-44-954-4486</p>
                            <p class="text-muted">MR.Daisuke Nagao</p>
                            <a href="mailto:">fnagao@rose.plala.or.jp</a>
                        </section>

                    </div>

                </div>
                <!-- /.row -->


            </div>
            <!-- /#contact.container -->
        </div>
        <!-- /#content -->

       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1622.0705736969655!2d139.4986035!3d35.5995847!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018fa464fb424ff%3A0x6c5118b4f446e667!2zSmFwYW4sIOOAkjIxNS0wMDIzIEthbmFnYXdhLWtlbiwgS2F3YXNha2ktc2hpLCBBc2FvLWt1LCBLYXRhaGlyYSwgMSBDaG9tZeKIkjniiJIzMCwg77yI5qCq77yJ44OK44Ks44Kq44K344K544OG44Og!5e0!3m2!1sen!2s!4v1504779077046" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
       


<!-- *** FOOTER ***
_________________________________________________________ -->

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>nagao system INC.</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="#" class="btn btn-template-transparent-primary">クリック</a>
                </div>
            </div>          
        </div>

        <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>企業情報</h4>
                    <p>
                        <br><a href="profile.php" style="color: white;">会社概要 >> </a>
                        <br><a href="history.php" style="color: white;">沿革 >> </a>
                        <br><a href="policy.php" style="color: white;">行動指針  >> </a>
                        <br><a href="sale.php" style="color: white;">販売体制 >> </a>
                        <br><a href="access1.php" style="color: white;">アクセス  >> </a>
                        <br><a href="recruit.php" style="color: white;">採用情報 >> </a>
                    </p>
                    <hr>

                    <hr class="hidden-md hidden-lg hidden-sm">
                    <div class="login">
                               <a href="https://www.facebook.com/nagaosystem" class="external gplus" data-animate-hover="pulse">
                                    <img src="img/product/facebook.png" style="width: 30px;height: 30px;">
                               </i>
                                    </a>

                               <a href="https://www.youtube.com/channel/UCbyYWLsv_5aD25ZhZck8Vag" class="external twitter" data-animate-hover="pulse">
                               <img src="img/product/if_social-youtube-square2_771383.png" style="width: 30px;height: 30px;">
                               </i>
                                    </a>
                               
                                <a href="https://ameblo.jp/nagaosystem/" class="email" data-animate-hover="pulse" target="_blank">
                                    <img src="img/product/2022327-512.png" style="width: 30px;height: 30px;">
                                    </i>
                                        </a>
                            </div>

                </div>
                <!-- /.col-md-3 -->

            <div class="col-md-3 col-sm-6">
             <h4>ニュース</h4>
            <p>
            <br><a href="" style="color: white;">ニュース >> </a>
            </p>
                        
            </div>
                 <div class="col-md-3 col-sm-6">
                    <hr class="hidden-md hidden-lg hidden-sm">
                    <div class="login">
                     <h4>お問合せ</h4>
                     <p style="color: white;">
                     〒215-0023
                      <br>神奈川県川崎市麻生区片平
                      <br>1-9-30
                      <br>電話 +81-44-954-4486
                      <br>ファックス +81-44-954-8258
                      <br>メール fnagao@rose.plala.or.jp
                        <br>
                    </p>

                    <a href="contact.php" class="btn btn-small btn-template-main">お問合せフォーム</a>

                    <hr class="hidden-md hidden-lg hidden-sm">
                            </div>

                </div>
                <br>
                    <br>
                    <br>
                <br>
                <!-- /.col-md-3 -->
                        <a href="http://127.0.0.1/Nagao_system/index.php" class="external gplus" data-animate-hover="pulse">
                                    <img src="img/product/NSQR.png" style="width: 130px;height: 130px;">
                               </i>
                                    </a>
                             <a href="https://jgoodtech.jp/en_US/web/JC0000000000922/eng" class="external twitter" data-animate-hover="pulse">
                               <img src="img/product/JGEQR.png" style="width: 130px;height: 130px;">
                               </i>
                                    </a>  
            </div>
            <!-- /.container -->
           

        </footer>
      

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; copyright©2017 NAGAO SYSTEM INC. all rights reserved.</p>
                    <p class="pull-right">サブナビゲーションプライバシーポリシー 特定商取引法に関する記述</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->
     </div>
    <!-- /#Footer -->




    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

    

    <!-- gmaps -->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script src="js/gmaps.js"></script>
    <script src="js/gmaps.init.js"></script>

    <!-- gmaps end -->





</body>

</html>