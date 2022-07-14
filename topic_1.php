<?php
include("mysql.php");
$dbh = new PDO(
    'mysql:host=127.0.0.1;dbname=test;charset=utf8mb4',
    'root',
    ''
);
$sql = "SELECT `date_s`,`period` FROM 訂位資料 GROUP BY `date_s`, `period` HAVING SUM(`number`) > 10;";
$run = mysqli_query($link, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.form.js"></script>
    <!-- 導覽列 head -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

    <link type="text/css" rel="stylesheet" href="./css/mmenu.css" />
    <link type="text/css" rel="stylesheet" href="./css/HeaderAndFooter.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


    <!-- 我寫的連結 -->
    <link rel="stylesheet" href="css/Topic.css">
    <script src="js/Topic.js"></script>
    <title>咖啡輕食</title>
</head>

<body>
    <!-- 導覽列 body -->

    <div id="page">

        <br>
        <div id="search-menu">
            <div class="wrapper">
                <form id="form" action="#" method=""><input id="popup-search" type="text" name="u" placeholder="Type here to search" /><button id="popup-search-button" type="submit" name="search"><i class="fas fa-search"></i></button></form>
            </div>
        </div>

        <!-- 導覽列 -->
        <div id="header">

            <a href="#menu"><span></span></a>

            <img class="logo" src="img/LOGO.png" alt="" width="100vh">

            <embed class="icon" src="img/facebook.svg" width="30vh" />

            <i class="fas fa-search icontwo" id="search-icon"></i>

        </div>
    </div>



    <nav id="menu">
        <ul>
            <li><a href="#/">首頁</a></li>
            <li><a href="#/">展場介紹</a></li>
            <li><a href="#/">展場申請</a></li>
            <li><a href="#/">詳細展覽</a></li>
            <li><a href="#/">咖啡輕食</a></li>
            <li><a href="#/">網路商店</a></li>
            <li><a href="#/">交通資訊</a></li>
        </ul>
    </nav>
    </div>

    <!-- mmenu scripts -->
    <script src="./js/mmenu.js"></script>
    <script src="./js/HeaderAndFooter.js"></script>
    <script>
        document.addEventListener(
            "DOMContentLoaded", () => {
                new Mmenu("#menu", {
                    "offCanvas": {
                        "position": "right"
                    },
                    "theme": "light"
                });
            }
        );
    </script>
    <div id="titlev1" style="background-image: url('image/ba_3.png');height: 107vh;text-align: center;">
        <div style="margin: 50px 0 0 0;line-height: 100vh;">
            <h3 id="titlev2" style="color: rgb(208, 187, 0);padding: 300px 0 0 0;font-weight:bolder">
                我們愛上這種悠閒、純真的生活方式，
                在這裡時間、空間都將緩和...
            </h3>
            <h4 id="titlev3" style="color: rgb(193, 193, 193);padding: 20px 0 0 0;">
                用別緻的情境儀式，為藝術說出動人故事<br>
                空間是體驗過程的重要舞台
                細心勾劃一切五感享受
                藉故事性與溫度打開想像的觸點<br>
                為身歷其近的人們留存深刻記憶，銘記再度回訪的理由
            </h4>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div id="tab-demo">
                <ul class="tab-title col-12">
                    <h4 class="none">
                        <li><a href="#tab01" style="text-decoration: none;">
                                <button id="sub_1" class="but">精品咖啡</button>
                            </a></li>
                    </h4>
                    <h4 class="none">
                        <li><a href="#tab02" style="text-decoration: none;">
                                <button id="sub_2" class="but">其他飲品</button>
                            </a></li>
                    </h4>
                    <h4 class="none">
                        <li><a href="#tab03" style="text-decoration: none;">
                                <button id="sub_3" class="but">輕食料理</button>
                            </a></li>
                    </h4>
                </ul>
                <div id="tab01" class="tab-inner">
                    <div id="tab01v2" class="tab-innerv2">
                        <img id="co_1v3" class="cooking" src="image/co_1.jpg" alt="">
                    </div>
                    <div id="tab02v2" class="tab-innerv2">
                        <img id="co_2v3" class="cooking" src="image/co_2.jpg" alt="">
                    </div>
                    <div id="tab03v2" class="tab-innerv2">
                        <img id="co_3v3" class="cooking" src="image/co_3.jpg" alt="">
                    </div>
                    <div id="tab04v2" class="tab-innerv2">
                        <img id="co_4v3" class="cooking" src="image/co_4.jpg" alt="">
                    </div>
                    <div id="tab05v2" class="tab-innerv2">
                        <img id="co_5v3" class="cooking" src="image/co_5.jpg" alt="">
                    </div>
                    <div id="tab06v2" class="tab-innerv2">
                        <img id="co_6v3" class="cooking" src="image/co_6.jpg" alt="">
                    </div>
                    <div id="tab07v2" class="tab-innerv2">
                        <img id="co_7v3" class="cooking" src="image/co_7.jpg" alt="">
                    </div>

                    <div class="menu_1 row">
                        <ul class="tab-titlev2 col-12">
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab01v2">
                                            <samp id="co_1">美式咖啡</samp><br>
                                            <samp id="co_1v1">Caffè Americano</samp>
                                            <samp id="co_1v2" class="menu_2">NTD75</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab02v2">
                                            <samp id="co_2">義式濃縮咖啡</samp><br>
                                            <samp id="co_2v1">Espresso</samp>
                                            <samp id="co_2v2" class="menu_2">NTD85</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab03v2">
                                            <samp id="co_3">椪糖咖啡</samp><br>
                                            <samp id="co_3v1">Dalgona coffee</samp>
                                            <samp id="co_3v2" class="menu_2">NTD90</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab04v2">
                                            <samp id="co_4">卡布奇諾</samp><br>
                                            <samp id="co_4v1">Cappuccino</samp>
                                            <samp id="co_4v2" class="menu_2">NTD95</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab05v2">
                                            <samp id="co_5">咖啡拿鐵</samp><br>
                                            <samp id="co_5v1">Caffè Latte</samp>
                                            <samp id="co_5v2" class="menu_2">NTD95</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab06v2">
                                            <samp id="co_6">焦糖瑪奇朵</samp><br>
                                            <samp id="co_6v1">Caramel Macchiato</samp>
                                            <samp id="co_6v2" class="menu_2">NTD100</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab07v2">
                                            <samp id="co_7">咖啡密斯朵</samp><br>
                                            <samp id="co_7v1">Caffè Misto</samp>
                                            <samp id="co_7v2" class="menu_2">NTD100</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                        </ul>
                    </div>
                </div>
                <div id="tab02" class="tab-inner">
                    <div id="tab01v3" class="tab-innerv3">
                        <img id="lo_1v3" class="cooking" src="image/lo_1.jpg" alt="">
                    </div>
                    <div id="tab02v3" class="tab-innerv3">
                        <img id="lo_2v3" class="cooking" src="image/lo_2.jpg" alt="">
                    </div>
                    <div id="tab03v3" class="tab-innerv3">
                        <img id="lo_3v3" class="cooking" src="image/lo_3.jpg" alt="">
                    </div>
                    <div id="tab04v3" class="tab-innerv3">
                        <img id="lo_4v3" class="cooking" src="image/lo_4.jpg" alt="">
                    </div>
                    <div id="tab05v3" class="tab-innerv3">
                        <img id="lo_5v3" class="cooking" src="image/lo_5.jpg" alt="">
                    </div>
                    <div id="tab06v3" class="tab-innerv3">
                        <img id="lo_6v3" class="cooking" src="image/lo_6.jpg" alt="">
                    </div>
                    <div id="tab07v3" class="tab-innerv3">
                        <img id="lo_7v3" class="cooking" src="image/lo_7.jpg" alt="">
                    </div>
                    <div class="menu_1 row">
                        <ul class="tab-titlev3">
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab01v3">
                                            <samp id="lo_1">錫蘭紅茶</samp><br>
                                            <samp id="lo_1v1">Ceylon Black Tea</samp>
                                            <samp id="lo_1v2" class="menu_2">NTD60 </samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab02v3">
                                            <samp id="lo_2">冰搖檸檬紅茶</samp><br>
                                            <samp id="lo_2v1">Shaken Lemon Black Tea</samp>
                                            <samp id="lo_2v2" class="menu_2">NTD65</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab03v3">
                                            <samp id="lo_3">精選英式奶茶</samp><br>
                                            <samp id="lo_3v1">British Milk Tea</samp>
                                            <samp id="lo_3v2" class="menu_2">NTD80</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab04v3">
                                            <samp id="lo_4">純素黑熱巧克力</samp><br>
                                            <samp id="lo_4v1">Vegan Dark Hot Chocolate</samp>
                                            <samp id="lo_4v2" class="menu_2">NTD85</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab05v3">
                                            <samp id="lo_5">黑糖珍珠奶茶</samp><br>
                                            <samp id="lo_5v1">Brown Sugar Pearl milk tea</samp>
                                            <samp id="lo_5v2" class="menu_2">NTD90</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab06v3">
                                            <samp id="lo_6">熱可可</samp><br>
                                            <samp id="lo_6v1">Hot Chocolate</samp>
                                            <samp id="lo_6v2" class="menu_2">NTD90</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab07v3">
                                            <samp id="lo_7">冰經典巧克力</samp><br>
                                            <samp id="lo_7v1">Iced Signature Chocolate</samp>
                                            <samp id="lo_7v2" class="menu_2">NTD135</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                        </ul>
                    </div>
                </div>
                <div id="tab03" class="tab-inner">
                    <div id="tab01v4" class="tab-innerv4">
                        <img id="eo_1v3" class="cooking" src="image/eo_1.jpg" alt="">
                    </div>
                    <div id="tab02v4" class="tab-innerv4">
                        <img id="eo_2v3" class="cooking" src="image/eo_2.jpg" alt="">
                    </div>
                    <div id="tab03v4" class="tab-innerv4">
                        <img id="eo_3v3" class="cooking" src="image/eo_3.jpg" alt="">
                    </div>
                    <div id="tab04v4" class="tab-innerv4">
                        <img id="eo_4v3" class="cooking" src="image/eo_4.jpg" alt="">
                    </div>
                    <div id="tab05v4" class="tab-innerv4">
                        <img id="eo_5v3" class="cooking" src="image/eo_5.jpg" alt="">
                    </div>
                    <div id="tab06v4" class="tab-innerv4">
                        <img id="eo_6v3" class="cooking" src="image/eo_6.jpg" alt="">
                    </div>
                    <div id="tab07v4" class="tab-innerv4">
                        <img id="eo_7v3" class="cooking" src="image/eo_7.jpg" alt="">
                    </div>
                    <div class="menu_1 row">
                        <ul class="tab-titlev4">
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab01v4">
                                            <samp id="eo_1">哈姆菠菜蛋堡</samp><br>
                                            <samp id="eo_1v1">Ham & Frittata Sandwich</samp>
                                            <samp id="eo_1v2" class="menu_2">NTD80</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab02v4">
                                            <samp id="eo_2">法式烤火腿三明治</samp><br>
                                            <samp id="eo_2v1">Ham & Cheese Sandwich</samp>
                                            <samp id="eo_2v2" class="menu_2">NTD85</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab03v4">
                                            <samp id="eo_3">起司牛肉可頌</samp><br>
                                            <samp id="eo_3v1">Cheese & Beef Croissant</samp>
                                            <samp id="eo_3v2" class="menu_2">NTD90</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab04v4">
                                            <samp id="eo_4">黑松露嫩蛋三明治</samp><br>
                                            <samp id="eo_4v1">Truffle and Egg Sandwich</samp>
                                            <samp id="eo_4v2" class="menu_2">NTD95</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab05v4">
                                            <samp id="eo_5">鹽燒豬肉堡</samp><br>
                                            <samp id="eo_5v1">Saute Pork Sandwich</samp>
                                            <samp id="eo_5v2" class="menu_2">NTD95</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab06v4">
                                            <samp id="eo_6">經典總匯三明治</samp><br>
                                            <samp id="eo_6v1">Club Sandwich</samp>
                                            <samp id="eo_6v2" class="menu_2">NTD110</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h4>
                                    <li class="moo"><a href="#tab07v4">
                                            <samp id="eo_7">舒肥雞肉蔬菜盅</samp><br>
                                            <samp id="eo_7v1">Shu Fei Chicken Vegetable</samp>
                                            <samp id="eo_7v2" class="menu_2">NTD200</samp>
                                        </a></li>
                                </h4>
                            </div>
                            <div class="col-4"></div>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="Reserve" type="button" id="myBtn">
                <h2>線上訂位</h2>
            </div>
            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h4 id="reservation">線上訂位</h4>
                    </div>
                    <form method="POST" action="db.php" name="send" id="upload" onsubmit="return submitForm()">
                        <div class="modal-body">
                            <h5>
                                歡迎蒞臨<br>
                                有訂位需求的顧客，請填寫以下資訊
                            </h5>
                            <br>
                            <h5>用餐日期</h5>
                            <h6>本餐廳只接受二個月內線上訂位</h6>
                            <label for="bookdate">日期：</label>
                            <input type="date" name="date_s" id="bookdate" placeholder="2014-09-18">
                            <div class="news-filter">
                                <select id="period" name="period" required>
                                    <option value="" disabled selected hidden>請選擇時間</option>
                                    <option value="12:00">12:00&nbsp;PM</option>
                                    <option value="12:30">12:30&nbsp;PM</option>
                                    <option value="13:00">13:00&nbsp;PM</option>
                                    <option value="13:30">13:30&nbsp;PM</option>
                                    <option value="14:00">14:00&nbsp;PM</option>
                                    <option value="14:30">14:30&nbsp;PM</option>
                                    <option value="15:00">15:00&nbsp;PM</option>
                                    <option value="15:30">15:30&nbsp;PM</option>
                                    <option value="16:00">16:00&nbsp;PM</option>
                                    <option value="16:30">16:30&nbsp;PM</option>
                                    <option value="17:00">17:00&nbsp;PM</option>
                                </select>
                            </div>
                            <h5>用餐人數</h5>
                            <div class="myDiv">
                                <input type="range" name="number" id="myRange" value="1" min="1" max="10" step="1" required>
                                <br>
                                <span id="rangeTxt"></span>
                            </div>
                            <h5>訂位資訊</h5>
                            <h6>您的大名</h6>
                            <input name="name" id="booking" oninput="mod()" onpropertychange="mod()" type="text" placeholder="例如:陳先生" required>
                            <h6>電話</h6>
                            <input name="telephone" type="text" maxlength="10" pattern="09\d{8}" placeholder="例如:09xxxxxxxx" required>
                            <h6>謝謝<span id="booker">您</span>的填寫！<br>
                                在送出前，請再次確認資訊是否填寫正確。<br>
                                期待您的光臨
                            </h6>
                        </div>
                        <div class="modal-footer">
                            <input onclick="mod_1()" type="submit">
                        </div>
                    </form>
                </div>

            </div>
            <!-- --頁尾-- -->

            <!-- 資訊欄 -->

            <br>
            <hr>
            <br>

            <div class="row">
                <div class="col-6">

                    <span class="float-md-end mb-3 ms-md-3">

                        <h3 class="me-3 fw-bold">定義空間</h3>
                        <p class="me-3">
                            12:00pm - 06:00pm<br>
                            禮拜一公休
                            <br><br>
                            104台北市中山區<br>
                            林森北路107巷10號
                        </p>

                    </span>


                </div>


                <div class="col-6 border-start  border-4 ">

                    <input type="button" onclick="project(this)" class="button btn btn-dark mx-4 mb-4" value="網路商店"><br>

                    <p class="mx-4">
                        tel 02-2537782<br>
                        service@veneu.tw</p>

                    <a class="facebook" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg></a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg></i></a>

                </div>


            </div>
        </div>
    </div>
    <!-- 頁尾 -->
    <div>
        <footer>
            <div class="mt-4 footer row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="container">
                        <p class="menu">
                            <a href="#">展場介紹</a>
                            <a href="#">展場申請</a>
                            <a href="#">展覽介紹</a>
                            <a href="#"><img src="img/LOGO.png" alt="LOGO" width="70vh"></a>
                            <a href="#">咖啡輕食</a>
                            <a href="#">網路商店</a>
                            <a href="#">交通資訊</a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="copyright">Copyright ©2022</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="xxxx" style="display: none;">
        <?php
        if (mysqli_num_rows($run) > 0) {
            foreach ($run as $row) {
        ?>
                <P id="x"><?php echo $row['date_s'] ?></P>
                <p id="y"><?php echo $row['period'] ?></p>
        <?php
            }
        }
        ?>
    </div>
    <script>
        //互動視窗
        // 獲取互動視窗
        var modal = document.getElementById("myModal");

        // 獲取打開互動視窗的按鈕
        var btn = document.getElementById("myBtn");

        // 獲取關閉互動視窗框的 <span> 元素
        var span = document.getElementsByClassName("close")[0];

        // 當用戶單擊按鈕時，打開模式
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // 當用戶點擊 <span> (x) 時，關閉互動視窗框
        span.onclick = function() {
            modal.style.display = "none";
        }

        // 當用戶點擊互動視窗框外的任意位置時，將其關閉
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        // 以上互動視窗

        // 訂位限制
        function convertToISO(timebit) {
            // 刪除 GMT 偏移量
            timebit.setHours(0, -timebit.getTimezoneOffset(), 0, 0);
            // 格式轉換並取結果的前 10 個字符
            var isodate = timebit.toISOString().slice(0, 10);
            return isodate;
        }

        var bookdate = document.getElementById('bookdate');
        var currentdate = new Date();
        bookdate.min = convertToISO(currentdate);
        bookdate.placeholder = bookdate.min;
        var futuredate = new Date();
        // 修改未來幾天的限制
        futuredate.setDate(futuredate.getDate() + 60);
        bookdate.max = convertToISO(futuredate);
        // 以上訂位限制

        // 訂位長條軸人數
        $("#rangeTxt").html($("#myRange").val()); // 在 #rangeTxt 顯示 #myRange 的 bar 值
        $("#myRange").on("input", function() { // 當輸入 input 時執行以下動作
            $("#rangeTxt").html($(this).val()); // 將本數值顯示在 #rangeTxt 上
        });
        $(function() {
            var r = $('input');
            r.on('mouseenter', function() {
                var p = r.val();
                r.on('click', function() {
                    p = r.val();
                    bg(p);
                });
                r.on('mousemove', function() {
                    p = r.val();
                    bg(p);
                });
            });

            function bg(n) {
                r.css({
                    'background-image': '-webkit-linear-gradient(left ,#f22 0%,#f22 ' + n + '%,#fff ' + n + '%, #fff 100%)'
                });
            }
        });
        // 以上訂位長條軸人數

        // 訂位確認通知
        $x = $("#x").text();
        $y = $("#y").text();

        function mod_1() {
            if (document.send.date_s.value == $x &
                document.send.period.value == $y) {
                alert(`${$x}\n當天${$y}訂位已滿喔!`);
                document.send.input.focus();
                return false;
            } else {
                alert("訂位成功\n期待您的光臨");
            }
            return true;
        }
        // 以上訂位確認通知

        // 表單提交後畫面不跳轉
        function submitForm() {
            var form = document.getElementById('upload'),
                formData = new FormData(form);
            $.ajax({
                url: "db.php",
                type: "post",
                data: formData,
                processData: false,
                contentType: false,
                done: function(res) {
                    uxAlert('finish:' + res);
                },
                success: function(res) {
                    if (res) {
                        uxAlert("上傳成功！");
                    }
                    console.log(res);
                },
                error: function(err) {
                    uxAlert("網路連線失敗,稍後重試", err);
                }
            });

            return false;
        }
        // 以上表單提交後畫面不跳轉

        // 菜單樣式
        $('.col-8').mouseenter(function() {
            $('.col-8').removeClass('col-8-active');
            $(this).addClass('col-8-active');
        });
        // 以上菜單樣式

        $('#co_1').text('<?php echo $_POST["co_1"] ?>');
        $('#co_1v1').text('<?php echo $_POST["co_1v1"] ?>');
        $('#co_1v2').text('<?php echo $_POST["co_1v2"] ?>');
        $('#co_2').text('<?php echo $_POST["co_2"] ?>');
        $('#co_2v1').text('<?php echo $_POST["co_2v1"] ?>');
        $('#co_2v2').text('<?php echo $_POST["co_2v2"] ?>');
        $('#co_3').text('<?php echo $_POST["co_3"] ?>');
        $('#co_3v1').text('<?php echo $_POST["co_3v1"] ?>');
        $('#co_3v2').text('<?php echo $_POST["co_3v2"] ?>');
        $('#co_4').text('<?php echo $_POST["co_4"] ?>');
        $('#co_4v1').text('<?php echo $_POST["co_4v1"] ?>');
        $('#co_4v2').text('<?php echo $_POST["co_4v2"] ?>');
        $('#co_5').text('<?php echo $_POST["co_5"] ?>');
        $('#co_5v1').text('<?php echo $_POST["co_5v1"] ?>');
        $('#co_5v2').text('<?php echo $_POST["co_5v2"] ?>');
        $('#co_6').text('<?php echo $_POST["co_6"] ?>');
        $('#co_6v1').text('<?php echo $_POST["co_6v1"] ?>');
        $('#co_6v2').text('<?php echo $_POST["co_6v2"] ?>');
        $('#co_7').text('<?php echo $_POST["co_7"] ?>');
        $('#co_7v1').text('<?php echo $_POST["co_7v1"] ?>');
        $('#co_7v2').text('<?php echo $_POST["co_7v2"] ?>');
        $('#lo_1').text('<?php echo $_POST["lo_1"] ?>');
        $('#lo_1v1').text('<?php echo $_POST["lo_1v1"] ?>');
        $('#lo_1v2').text('<?php echo $_POST["lo_1v2"] ?>');
        $('#lo_2').text('<?php echo $_POST["lo_2"] ?>');
        $('#lo_2v1').text('<?php echo $_POST["lo_2v1"] ?>');
        $('#lo_2v2').text('<?php echo $_POST["lo_2v2"] ?>');
        $('#lo_3').text('<?php echo $_POST["lo_3"] ?>');
        $('#lo_3v1').text('<?php echo $_POST["lo_3v1"] ?>');
        $('#lo_3v2').text('<?php echo $_POST["lo_3v2"] ?>');
        $('#lo_4').text('<?php echo $_POST["lo_4"] ?>');
        $('#lo_4v1').text('<?php echo $_POST["lo_4v1"] ?>');
        $('#lo_4v2').text('<?php echo $_POST["lo_4v2"] ?>');
        $('#lo_5').text('<?php echo $_POST["lo_5"] ?>');
        $('#lo_5v1').text('<?php echo $_POST["lo_5v1"] ?>');
        $('#lo_5v2').text('<?php echo $_POST["lo_5v2"] ?>');
        $('#lo_6').text('<?php echo $_POST["lo_6"] ?>');
        $('#lo_6v1').text('<?php echo $_POST["lo_6v1"] ?>');
        $('#lo_6v2').text('<?php echo $_POST["lo_6v2"] ?>');
        $('#lo_7').text('<?php echo $_POST["lo_7"] ?>');
        $('#lo_7v1').text('<?php echo $_POST["lo_7v1"] ?>');
        $('#lo_7v2').text('<?php echo $_POST["lo_7v2"] ?>');
        $('#eo_1').text('<?php echo $_POST["eo_1"] ?>');
        $('#eo_1v1').text('<?php echo $_POST["eo_1v1"] ?>');
        $('#eo_1v2').text('<?php echo $_POST["eo_1v2"] ?>');
        $('#eo_2').text('<?php echo $_POST["eo_2"] ?>');
        $('#eo_2v1').text('<?php echo $_POST["eo_2v1"] ?>');
        $('#eo_2v2').text('<?php echo $_POST["eo_2v2"] ?>');
        $('#eo_3').text('<?php echo $_POST["eo_3"] ?>');
        $('#eo_3v1').text('<?php echo $_POST["eo_3v1"] ?>');
        $('#eo_3v2').text('<?php echo $_POST["eo_3v2"] ?>');
        $('#eo_4').text('<?php echo $_POST["eo_4"] ?>');
        $('#eo_4v1').text('<?php echo $_POST["eo_4v1"] ?>');
        $('#eo_4v2').text('<?php echo $_POST["eo_4v2"] ?>');
        $('#eo_5').text('<?php echo $_POST["eo_5"] ?>');
        $('#eo_5v1').text('<?php echo $_POST["eo_5v1"] ?>');
        $('#eo_5v2').text('<?php echo $_POST["eo_5v2"] ?>');
        $('#eo_6').text('<?php echo $_POST["eo_6"] ?>');
        $('#eo_6v1').text('<?php echo $_POST["eo_6v1"] ?>');
        $('#eo_6v2').text('<?php echo $_POST["eo_6v2"] ?>');
        $('#eo_7').text('<?php echo $_POST["eo_7"] ?>');
        $('#eo_7v1').text('<?php echo $_POST["eo_7v1"] ?>');
        $('#eo_7v2').text('<?php echo $_POST["eo_7v2"] ?>');


        if ("<?php echo $_FILES['co_1v3']['error'] ?>" == 0) {
            $("#co_1v3").attr("src", "./image/<?php echo $_FILES['co_1v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['co_2v3']['error'] ?>" == 0) {
            $("#co_2v3").attr("src", "./image/<?php echo $_FILES['co_2v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['co_3v3']['error'] ?>" == 0) {
            $("#co_3v3").attr("src", "./image/<?php echo $_FILES['co_3v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['co_4v3']['error'] ?>" == 0) {
            $("#co_4v3").attr("src", "./image/<?php echo $_FILES['co_4v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['co_5v3']['error'] ?>" == 0) {
            $("#co_5v3").attr("src", "./image/<?php echo $_FILES['co_5v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['co_6v3']['error'] ?>" == 0) {
            $("#co_6v3").attr("src", "./image/<?php echo $_FILES['co_6v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['co_7v3']['error'] ?>" == 0) {
            $("#co_7v3").attr("src", "./image/<?php echo $_FILES['co_7v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['lo_1v3']['error'] ?>" == 0) {
            $("#lo_1v3").attr("src", "./image/<?php echo $_FILES['lo_1v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['lo_2v3']['error'] ?>" == 0) {
            $("#lo_2v3").attr("src", "./image/<?php echo $_FILES['lo_2v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['lo_3v3']['error'] ?>" == 0) {
            $("#lo_3v3").attr("src", "./image/<?php echo $_FILES['lo_3v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['lo_4v3']['error'] ?>" == 0) {
            $("#lo_4v3").attr("src", "./image/<?php echo $_FILES['lo_4v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['lo_5v3']['error'] ?>" == 0) {
            $("#lo_5v3").attr("src", "./image/<?php echo $_FILES['lo_5v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['lo_6v3']['error'] ?>" == 0) {
            $("#lo_6v3").attr("src", "./image/<?php echo $_FILES['lo_6v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['lo_7v3']['error'] ?>" == 0) {
            $("#lo_7v3").attr("src", "./image/<?php echo $_FILES['lo_7v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['eo_1v3']['error'] ?>" == 0) {
            $("#eo_1v3").attr("src", "./image/<?php echo $_FILES['eo_1v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['eo_2v3']['error'] ?>" == 0) {
            $("#eo_2v3").attr("src", "./image/<?php echo $_FILES['eo_2v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['eo_3v3']['error'] ?>" == 0) {
            $("#eo_3v3").attr("src", "./image/<?php echo $_FILES['eo_3v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['eo_4v3']['error'] ?>" == 0) {
            $("#eo_4v3").attr("src", "./image/<?php echo $_FILES['eo_4v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['eo_5v3']['error'] ?>" == 0) {
            $("#eo_5v3").attr("src", "./image/<?php echo $_FILES['eo_5v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['eo_6v3']['error'] ?>" == 0) {
            $("#eo_6v3").attr("src", "./image/<?php echo $_FILES['eo_6v3']['name'] ?>");
        }
        if ("<?php echo $_FILES['eo_7v3']['error'] ?>" == 0) {
            $("#eo_7v3").attr("src", "./image/<?php echo $_FILES['eo_7v3']['name'] ?>");
        }
    </script>
</body>

</html>