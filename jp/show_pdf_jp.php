<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nagao System Inc.</title>

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
</head>

<body>


    <div id="all">
        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
           <?php
           include 'header_product.php';
           ?>

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

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>ドキュメント</h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php">ホーム</a>
                            </li>
                            <li>ドキュメント</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <!-- *** LEFT COLUMN ***
       _________________________________________________________ -->

                    <div class="col-md-12" id="blog-listing-medium">
                        <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/PRSE.pdf">
                                            <img src="img/product/logo967.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/PRSE.pdf">3次元リアクター</a></h2>
                                    <p class="intro">充分な粉砕,混合効果を可能とした3次元ボールミル(3次元リアクター)のご提案</p>
                                    <p class="read-more"><a href="img/PDF/PRSE.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <hr>
                         <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/PRSE1.pdf">
                                            <img src="img/product/issuesE.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/PRSE1.pdf">3Dボールミルの提案</a></h2>
                                    <p class="intro">効率的かつ十分な粉砕・混合が可能な3Dボールミルの提案</p>
                                    <p class="read-more"><a href="img/PDF/PRSE1.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <hr>
                         <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/allE.pdf">
                                            <img src="img/product/logoplanetmin3.jpg" class="img-responsive" alt="Example blog post alt" style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/allE.pdf">製品リーフレット</a></h2>
                                    <p class="intro">十分な粉砕と混合効果を備えた3次元ボールミル（3Dリアクター）を提供する。</p>
                                    <p class="read-more"><a href="img/PDF/allE.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <hr>
                         <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/move.pdf">
                                            <img src="img/product/sesamiE.jpg" class="img-responsive" alt="Example blog post alt" style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/move.pdf">回転運動</a></h2>
                                    <p class="intro">各ボールミルの回転運動比較 ナガオシステム </p>
                                    <p class="read-more"><a href="img/PDF/move.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <hr>
                         <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/ultrafine.pdf">
                                            <img src="img/product/logo301.jpg" class="img-responsive" alt="Example blog post alt" style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/ultrafine.pdf">ウルトラファインバブル</a></h2>
                                    <p class="intro">ウルトラファインバブルの確認 </p>
                                    <p class="read-more"><a href="img/PDF/ultrafine.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>
                         <hr>
                         <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/CrSi2.pdf">
                                            <img src="img/product/pdf_02.png" class="img-responsive" alt="Example blog post alt" style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/CrSi2.pdf">CRSI2</a></h2>
                                    <p class="intro">メカニカルアロイング【素材】</p>
                                    <p class="read-more"><a href="img/PDF/CrSi2.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>
                         <hr>
                         <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/AlAm.pdf">
                                            <img src="img/product/pdf_03.png" class="img-responsive" alt="Example blog post alt" style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/AlAm.pdf">実験 3D-210-D2</a></h2>
                                    <p class="intro">アモルファスにアルミナを変更するには</p>
                                    <p class="read-more"><a href="img/PDF/AlAm.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>
                         <hr>
                         <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/3DSi.pdf">
                                            <img src="img/product/WS000007.jpg" class="img-responsive" alt="Example blog post alt" style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/3DSi.pdf">3D遊星ミルによるシリコン合金</a></h2>
                                    <p class="intro">3D遊星ミルによるシリコン合金/デェセラ粉末の微粉砕 </p>
                                    <p class="read-more"><a href="img/PDF/3DSi.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <hr>
                         <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/Brazil.pdf">
                                            <img src="img/product/296.jpg" class="img-responsive" alt="Example blog post alt" style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/Brazil.pdf">ブラジルナット効果</a></h2>
                                    <p class="intro">粒状対流は、振動や振動を受けた粒状物質が流体対流の種類と同様の循環パターンを示す現象です。</p>
                                    <p class="read-more"><a href="img/PDF/Brazil.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>

                        
                         <hr>
                         <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/3D210E.pdf">
                                            <img src="img/product/logo2d.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/3D210E.pdf">3D-210-D2</a></h2>
                                    <p class="intro">卓 上 型 2 軸 制 御 3 次 元 ボ ー ル ミ ル<br>
                                        主軸/3次元軸独自制御式卓上型


                                  </p>
                                    <p class="read-more"><a href="img/PDF/3D210E.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>

                           <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/3D.pdf">
                                            <img src="img/product/180.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/3D.pdf">3D-180</a></h2>
                                    <p class="intro">3 次 元 ボ ー ル ミ ル<br>
                                        3次元運動を利用した遊星ボールミル進化系
                                  </p>
                                    <p class="read-more"><a href="img/PDF/3D.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>



                    <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/3D80E.pdf">
                                            <img src="img/product/3d-80.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/3D80E.pdf">3D-80</a></h2>
                                    <p class="intro">一 体 型 小 型 3 次 元 ボ ー ル ミ ル<br>
                                    主軸/3次元軸独自制御式卓上型<br></p>
                                    <p class="read-more"><a href="img/PDF/3D80E.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>



                          <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/3DB80E.pdf">
                                            <img src="img/product/3db-80.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/3DB80E.pdf">3DB-80</a></h2>
                                    <p class="intro">分 離 型 小 型 3 次 元 ボ ー ル ミ ル<br>
                                        主軸/3次元軸独自制御式グローブボックス投入型
                                  </p>
                                    <p class="read-more"><a href="img/PDF/3DB80E.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>


                           <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/3D180S.pdf">
                                            <img src="img/product/180ss.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/3D180S.pdf">3D-180S</a></h2>
                                    <p class="intro">卓 上 型 3 次 元 ボ ー ル ミ ル<br>
                                    省スペースで3次元運動を利用した遊星ボールミル進化系
                                  </p>
                                    <p class="read-more"><a href="img/PDF/3D180S.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>


                           <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/3DplanetD.pdf">
                                            <img src="img/product/planet-d.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/3DplanetD.pdf">3D-planet-D</a></h2>
                                    <p class="intro">省スペース、自転回転体が任意角度や3次元で回転可
                                  </p>
                                    <p class="read-more"><a href="img/PDF/3DplanetD.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        
                        
                          <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/PlanetME.pdf">
                                            <img src="img/product/m2.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/PlanetME.pdf">Planet&nbsp; M2-3F</a></h2>
                                    <p class="intro">研究開発用 傾斜自転方式遊星ボールミル
                                  </p>
                                    <p class="read-more"><a href="img/PDF/PlanetME.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        
                        
                          <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/PlanetMinE.pdf">
                                            <img src="img/product/min.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/PlanetMinE.pdf">Planet&nbsp;Min</a></h2>
                                    <p class="intro">グローブBOX用 超小型傾斜型遊星ボールミル 
                                  </p>
                                    <p class="read-more"><a href="img/PDF/PlanetMinE.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        
                        
                          <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/Planet750.pdf">
                                            <img src="img/product/750f.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/Planet750.pdf">Planet&nbsp;750F</a></h2>
                                    <p class="intro">600 mℓ処理用中型傾斜自転方式遊星ボールミル(卓上可) <br>

                                  </p>
                                    <p class="read-more"><a href="img/PDF/Planet750.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        
                        
                   
                          <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/PlanetH.pdf">
                                            <img src="img/product/hf1.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/PlanetH.pdf">Planet&nbsp; HF</a></h2>
                                    <p class="intro">少量研究開発用 傾斜自転方式遊星ボールミル
                                  </p>
                                    <p class="read-more"><a href="img/PDF/PlanetH.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>

                <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/nagaosystem_en.pdf">
                                            <img src="img/profile/company.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/nagaosystem_en.pdf">会社概要 (Eng.Version)</a></h2>
                                    <p class="intro"> 傾斜型遊星ボールミル、3Dボールミル、3D遊星ボールミルは弊社が独 自に開発し、特許を取得した、他社が真似が出来ない製品 
                                  </p>
                                    <p class="read-more"><a href="img/PDF/nagaosystem_en.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        
                        
                     <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/nagaosystem.pdf">
                                            <img src="img/profile/companyjp.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/nagaosystem.pdf">会社概要 (Japan.Version)</a></h2>
                                    <p class="intro"> 傾斜型遊星ボールミル、3Dボールミル、3D遊星ボールミルは弊社が独 自に開発し、特許を取得した、他社が真似が出来ない製品 
                                  </p>
                                    <p class="read-more"><a href="img/PDF/nagaosystem.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>


                            <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/jg0412.pdf">
                                            <img src="img/profile/about.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/jg0412.pdf">会社について</a></h2>
                                    <p class="intro">電動機、理化学機器、医療機器の製造、販売を手掛けています独自に開発した傾斜型遊星ボールミル、3次元ボールミルを製造しています。他社と競合しないモノづくりを目指し、大学や研究機関とも積極的に連携しています
化成品、医薬品、自動車、食品分野での受注拡大を目指し、ジェグテックを活用しました
                                  </p>
                                    <p class="read-more"><a href="img/PDF/jg0412.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>


                     

                       <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/story1.pdf">
                                            <img src="img/profile/story.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/story1.pdf">会社の物語</a></h2>
                                    <p class="intro">好奇心とアイディアで創り出した<br>
                                        疑似無重力状態の粉砕・混合装置 
                                  </p>
                                    <p class="read-more"><a href="img/PDF/story1.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>


                             
                       <hr>
                           <section class="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="image">
                                        <a href="img/PDF/story3.pdf">
                                            <img src="img/profile/story3.jpg" class="img-responsive" alt="Example blog post alt"
                                            style="width: 300px;height: 150px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h2><a href="img/PDF/story3.pdf">会社の物語</a></h2>
                                    <p class="intro">平成２６年度補正　もり・商業・サービス革新補助金 
 
                                  </p>
                                    <p class="read-more"><a href="img/PDF/story3.pdf" class="btn btn-template-main">細はこちら </a>
                                    </p>
                                </div>
                            </div>
                        </section>









                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
       _________________________________________________________ -->


                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

<?php
include 'footer.php';
?>

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

    



</body>

</html>