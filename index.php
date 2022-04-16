<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include 'function/system/config.php';
define('FB_PROFILE', 'https://www.facebook.com/TVDVO');
$bizweb = false;
if (isset($_SESSION['login']) && $_SESSION['login'] == 'ok') {
    $bizweb = true;
    $idctv = $_SESSION['id_ctv'];
    $gets_info = mysqli_query($conn, 'SELECT username, name, bill, profile FROM member WHERE id_ctv='.$idctv);
    $infos = mysqli_fetch_assoc($gets_info);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Hệ Thống Tools Facebook 2018</title>
        <link rel="shortcut icon" href="/temples/images/favicon.png" type="image/x-icon">
        <!-- Bootstraps -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="/temples/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/temples/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="/temples/plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="/temples/plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="/temples/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <link href="/temples/plugins/morrisjs/morris.css" rel="stylesheet" />
        <link href="/temples/css/style.css" rel="stylesheet">
        <link href="temples/css/themes/all-themes.css" rel="stylesheet" />
        <link href="/temples/plugins/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" />
        <link href="/temples/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
        @media only screen and (max-width: 768px) {
        .m-show {
            display: none !important;
            max-height: none !important;
            overflow: visible !important;
            }
         }
        </style>
    </head>
    <body class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
           <p>Xin vui lòng đợi trong giây lát...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="SEARCH...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/index.php"><img src="temples/images/logo.png" /></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right" >
                      <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">THÔNG BÁO MỚI</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 Thành viên mới tham gia</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 Dịch vụ mới</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Xóa toàn bộ tài khoản ảo</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Cập nhật phiên bản V.3</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Update thêm tính năng</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">Xem Thêm</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TÌNH TRẠNG</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Tools Facebook
                                                <small>Hoạt động</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                MuaVipLike.Com
                                                <small>Hoạt động</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                DichVuDaTeh.Com
                                                <small>Hoạt động</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                TuongTac.Mobi
                                                <small>Hoạt động</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">Xem Thêm</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="//zalo.me/0812665001" class="js-right-sidebar" data-close="true"><i class="material-icons">lock_outline</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
         <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="<?= isset($infos['profile']) ? 'https://graph.fb.me/'.$infos['profile'].'/picture' : 'https://banner2.cleanpng.com/20180623/iqh/kisspng-computer-icons-avatar-social-media-blog-font-aweso-avatar-icon-5b2e99c40ce333.6524068515297806760528.jpg'; ?>" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= isset($infos['username']) ? $infos['username'] : 'Tuấn Ori - Chủ Bản Quyền'; ?> . <?= isset($infos['bill']) ? number_format($infos['bill']). ' VNĐ' : ''; ?></div>
                        <div class="email"><?= isset($infos['name']) ? $infos['name'] : 'Zalo : 0812.665.001'; ?></div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="?DS=Profile"><i class="material-icons">person</i>CÁ NHÂN</a></li>
                                <li role="seperator" class="divider"></li>
                                <li><a href="/function/system/logout.php"><i class="material-icons">input</i>ĐĂNG XUẤT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                 <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                       
                        <li class="active">
                            <a href="/index.php">
                                <i class="material-icons">home</i>
                                <span>TRANG CHỦ</span>
                            </a>
                        </li>
                        <?php if ($bizweb == false) { ?>
                            <li>
                                <a href="index.php?DS=Register">
                                    <i class="material-icons">exit_to_app</i>
                                    <span>ĐĂNG KÝ TÀI KHOẢN</span>
                                </a>
                            </li>
                            <li>
                                <a href="//like49.com" target="_blank">
                                    <i class="material-icons">favorite</i>
                                    <span>LIKE49.COM</span>
                                </a>
                            </li>
                            <li>
                                <a href="//zalo.me/0812665001" target="_blank">
                                    <i class="material-icons">verified_user</i>
                                    <span>LIÊN HỆ & BÁO LỖI</span>
                                </a>
                            </li>
                        <?php } else {  $page = false; ?>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">thumb_up</i>
                                    <span>VIP CURL LLIKE</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="?DS=Add_VIP_CURL">
                                             ● THÊM ID
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=VIP_CURL">
                                            ● QUẢN LÝ ID
                                        </a>
                                    </li>
                                </ul>
                            </li><li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">thumbs_up_down</i>
                                    <span>AUTO LIKE POST</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="?DS=Add_Buzz_ID">
                                            ● THÊM ID
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Buzz_ID">
                                           ● QUẢN LÝ ID
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">thumb_up</i>
                                    <span>AUTO CMT POST</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="?DS=Add_CMT">
                                             ● THÊM ID
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=List_CMT">
                                            ● QUẢN LÝ ID
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">thumb_up</i>
                                    <span>AUTO SHARE POST</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="?DS=Add_SHARE">
                                             ● THÊM ID
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=List_SHARE">
                                            ● QUẢN LÝ ID
                                        </a>
                                    </li>
                                </ul>
                            </li>
  <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">spa</i>
                                    <span>BOT REACTION</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="?DS=Add_Reaction">
                                            ● THÊM ID
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=List_Reaction">
                                           ● QUẢN LÝ ID BOT
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">menu</i>
                                    <span>MENU TOOLS</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="?DS=Token">
                                            ● CHECK TOKEN LIVE
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=UID">
                                           ● CHECK UID LIVE
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Loc_Token">
                                           ● TÁCH TOKEN
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Loc_Cookie">
                                           ● TÁCH COOKIE
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Add_Group">
                                           ● ADD MEMBER
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Auto_Share">
                                           ● AUTO SHARE POST
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Convert">
                                           ● CONVERT UID
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Convert_Token">
                                           ● CONVERT TOKEN
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Loc_Page">
                                           ● LỌC FANPAGE
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Remove_Friends">
                                           ● REMOVE FRIENDS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Scan_ID">
                                           ● SCAN ID POST
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Up_AVT">
                                           ● UP AVT FACEBOOK
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Auto_Like">
                                           ● AUTO LIKE
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Report">
                                           ● AUTO REPORT
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Loc_UID">
                                           ● TÁCH UID
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Loc_Trung">
                                           ● LỌC TRÙNG TOKEN
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Get_Token">
                                           ● GET TOKEN
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?DS=Get_Token_SLL">
                                           ● GET TOKEN SLL
                                        </a>
                                    </li>
                                    <li>
                                        <a href="function/tools_fb/tienich/index.php">
                                           ● TIỆN ÍCH FACEBOOK
                                        </a>
                                    </li>
                                    <li>
                                        <a href="function/tools">
                                           ● TÍNH NĂNG KHÁC
                                        </a>
                                    </li>
                                </ul>
                            </li>
                               <li>
                                <a href="//zalo.me/0812665001" target="_blank">
                                    <i class="material-icons">verified_user</i>
                                    <span>LIÊN HỆ & BÁO LỖI</span>
                                </a>
                            </li>
                            <!-- Admin -->
                            <?php if($idctv == 1) { ?>
                                <li>
                                    <a href="?DS=List_Member">
                                        <i class="material-icons">people</i>
                                        <span>THÀNH VIÊN</span>
                                    </a>
                                </li>
                                <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">whatshot</i>
                                    <span>TOKEN SETING</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="?DS=Add_Token">
                                           ● THÊM TOKEN
                                        </a>
                                    </li>
                                    <li>
                                        <a href="function/tools_fb/del_token/index.php">
                                           ● XÓA TOKEN DIE
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>
                            <!-- Logout -->
                            <li>
                            <a href="/function/system/logout.php">
                                <i class="material-icons">system_update_alt</i>
                                <span>ĐĂNG XUẤT</span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- #Menu -->
                 <!-- Footer -->
                <script>
<!--
document.write(unescape("%3Cdiv%20class%3D%22legal%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22copyright%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cb%3ECopyright%20%26copy%3B%20%20%3Ca%20href%3D%22//zalo.me/0812665001%22%20target%3D%22_blank%22%3ETu%u1EA5n%20Ori%202021%20-%202022%3C/a%3E%3C/b%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/div%3E"));
//-->
</script>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- content here -->
                <?php
                if ($bizweb == true) {
                    if (isset($_GET['DS'])) {
                        $DS = $_GET['DS'];
                        switch ($DS) {
                            case 'Add_VIP_CURL':
                                include 'function/vip/vip/add.php';
                                break;
                            case 'VIP_CURL':
                                include 'function/vip/vip/list.php';
                                break;
                            case 'Delete_VIP_CURL':
                                include 'function/vip/vip/del.php';
                                break;
                            case 'Update_VIP_CURL':
                                include 'function/vip/vip/update.php';
                                break;

                            // BUFF_LIKE_ID
                            case 'Add_Buzz_ID':
                                include 'function/vip/like/add.php';
                                break;
                            case 'Buzz_ID':
                                include 'function/vip/like/list.php';
                                break;
                            case 'Delete_Buzz_ID':
                                include 'function/vip/like/del.php';
                                break;
                            case 'Update_Buzz_ID':
                                include 'function/vip/like/update.php';
                                break;

                            // BUFF_CMT_ID
                            case 'Add_CMT':
                                include 'function/vip/cmt/add.php';
                                break;
                            case 'List_CMT':
                                include 'function/vip/cmt/list.php';
                                break;
                            case 'Delete_CMT':
                                include 'function/vip/cmt/del.php';
                                break;
                            case 'Update_CMT':
                                include 'function/vip/cmt/update.php';
                                break;
                            // BUFF_SHARE_ID
                            case 'Add_SHARE':
                                include 'function/vip/share/add.php';
                                break;
                            case 'List_SHARE':
                                include 'function/vip/share/list.php';
                                break;
                            case 'Delete_SHARE':
                                include 'function/vip/share/del.php';
                                break;
                            case 'Update_SHARE':
                                include 'function/vip/share/update.php';
                                break;
                            
                            //member
                            case 'List_Member':
                                include 'function/member/list.php';
                                break;
                            //Update_Member
                            case 'Update_Member':
                                include 'function/member/update.php';
                                break; 
                            //Delete_Member
                            case 'Delete_Member':
                                include 'function/member/del.php';
                                break; 
                            //
                            case 'Loc_Trung':
                                include 'function/tools_fb/tools/Loc_Trung.php';
                                break;
                            case 'Loc_Group':
                                include 'function/tools_fb/tools/Loc_Group.php';
                                break;
                            case 'Loc_Cookie':
                                include 'function/tools_fb/tools/Loc_Cookie.php';
                                break;
                            case 'Loc_Token':
                                include 'function/tools_fb/tools/Loc_Token.php';
                                break;
                            case 'Loc_Token':
                                include 'function/tools_fb/tools/Loc_Token.php';
                                break;
                            case 'Loc_UID':
                                include 'function/tools_fb/tools/Loc_UID.php';
                                break;
                            //
                            case 'Token':
                                include 'function/tools_fb/tools/Token_Live.php';
                                break;
                            case 'UID':
                                include 'function/tools_fb/tools/UID_Live.php';
                                break;
                            case 'Convert':
                                include 'function/tools_fb/tools/Convert.php';
                                break; 
                            case 'Loc_Page':
                                include 'function/tools_fb/tools/Loc_Page.php';
                                break; 
                            case 'Auto_Like':
                                include 'function/tools_fb/tools/Auto_Like.html';
                                break; 
                            case 'Auto_CMT':
                                include 'function/tools_fb/tools/Auto_CMT.php';
                                break; 
                            case 'Auto_CMT_Pro':
                                include 'function/tools_fb/tools/Auto_CMT_Pro.php';
                                break; 
                            case 'Auto_Follow':
                                include 'function/tools_fb/tools/Auto_Follow.php';
                                break; 
                            case 'Auto_Block':
                                include 'function/tools_fb/tools/Auto_Block.php';
                                break; 
                            // Profile
                            case 'Profile':
                                include 'function/system/profile.php';
                                break;
                              // Home
                            case 'Home':
                                include 'function/system/home.php';
                                break;  
                            case 'Auto_Share':
                                include 'function/tools_fb/tools/Auto_Share.php';
                                break;  
                            case 'Remove_Friends':
                                include 'function/tools_fb/tools/Remove_Friends.php';
                                break;  
                            case 'Scan_ID':
                                include 'function/tools_fb/tools/Scan_ID.php';
                                break;  
                            case 'Convert_Token':
                                include 'function/tools_fb/tools/Convert_Token.php';
                                break;  
                            case 'Add_Group':
                                include 'function/tools_fb/tools/Add_Group.php';
                                break;  
                            case 'Up_AVT':
                                include 'function/tools_fb/tools/Up_AVT.php';
                                break;  
                              // Add Token
                            case 'Add_Token':
                                include 'function/tools_fb/add_token/index.php';
                                break; 
                            case 'Report':
                                include 'function/tools_fb/report/index.php';
                                break; 
                            case 'Add_Reaction':
                                include 'function/vip/reaction/add.php';
                                break; 
                            case 'List_Reaction':
                                include 'function/vip/reaction/list.php';
                                break; 
                            case 'Update_Reaction':
                                include 'function/vip/reaction/update.php';
                                break; 
                            case 'Delete_Reaction':
                                include 'function/vip/reaction/del.php';
                                break; 
                            case 'Get_Token_SLL':
                                include 'function/gettoken/index.php';
                                break; 
                            case 'Get_Token':
                                include 'function/tools_fb/get_token/get_token.php';
                                break; 
                            default:
                                header('Location: /index.php');
                                break;
                        }
                    } else {
                        include 'function/system/home.php';
                    }
                } else {
                    if (isset($_GET['DS'])) {
                        $DS = $_GET['DS'];
                        switch ($DS) {
                            
                            case 'Register':
                                include 'function/system/register.php';
                                break;

                            default:
                                header('Location: /index.php');
                                break;
                        }
                    } else {
                        include 'function/system/login.php';
                    }
                }
                ?>
            </div>
        </section>
        <!-- Bootstrap Js -->
        <script src="/temples/plugins/jquery/jquery.min.js"></script>
        <script src="/temples/plugins/bootstrap/js/bootstrap.js"></script>
        <script src="/temples/plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <script src="/temples/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="/temples/plugins/node-waves/waves.js"></script>
        <script src="/temples/plugins/jquery-countto/jquery.countTo.js"></script>
        <script src="/temples/plugins/raphael/raphael.min.js"></script>
        <script src="/temples/plugins/morrisjs/morris.js"></script>
        <script src="/temples/plugins/flot-charts/jquery.flot.js"></script>
        <script src="/temples/plugins/flot-charts/jquery.flot.resize.js"></script>
        <script src="/temples/plugins/flot-charts/jquery.flot.pie.js"></script>
        <script src="/temples/plugins/flot-charts/jquery.flot.categories.js"></script>
        <script src="/temples/plugins/flot-charts/jquery.flot.time.js"></script>
        <script src="/temples/plugins/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="/temples/plugins/ion-rangeslider/js/ion.rangeSlider.js"></script>
        <script src="/temples/js/pages/ui/range-sliders.js"></script>
        <script src="/temples/js/admin.js"></script>
        <script src="/temples/js/pages/forms/basic-form-elements.js"></script>
        <script src="/temples/js/pages/index.js"></script>
        <script src="/temples/js/demo.js"></script>
        <script>
          function create_cookie(a, b, c) {
	  if (c) {
		var d = new Date;
		d.setTime(d.getTime() + 864E5 * c);
		c = "; expires=" + d.toGMTString()
	} else c = "";
	document.cookie = a + "=" + b + c + "; path=/"
        }
	auto_debug();
	function auto_debug(){
		debugger;
		setTimeout(function(){ auto_debug(); }, 500);
	}
        function read_cookie(a) {
	a += "=";
	for (var b = document.cookie.split(";"), c = 0; c < b.length; c++) {
		for (var d = b[c];
		     " " == d.charAt(0);) d = d.substring(1, d.length);
		if (0 == d.indexOf(a)) return d.substring(a.length, d.length)
	}
	return null
        }
        function del_cookie(name) {
	create_cookie(name,"",-1);
        }
        </script>
    </body>
</html>
