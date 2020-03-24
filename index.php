<?php
session_start();
ob_start();
    include "model/connect.php";
    include "model/user.php";
    //incluce controller xu ly listphim  trong phim tren thanh menu
    include "controller/header/listphim_header.php";
    include "view/header.php";
   
    //incluce controller xu ly sreach  tren header
    include "controller/header/timkiem_head.php";

    $controller="home";
    if(isset($_GET['contro'])){
        $controller=$_GET['contro'];
    }
    switch($controller){
        case 'home':
            //incluce controller xu ly banner home
            include "controller/home/banner_home.php";
            //incluce controller xu ly listphim (phim dang chieu,phim sap chieu)
            include "controller/home/listphim_home.php";
            //incluce controller xu ly khuyen mai
            include "controller/home/khuyenmai_home.php";
            include "view/home.php";
            break;
        case 'danhsachphim':
            //incluce controller xu ly listphim (phim dang chieu,phim sap chieu) 
            include "controller/danhsachphim/listphim_phim.php";

            include "view/danhsachphim.php";
            break;
        case 'logout':
            include "controller/login/logout.php";
        case 'login':

            include "controller/login/login.php";

            include "view/login.php";
            break;
        case 'detail':
            
            //incluce controller xu ly thong tin phim 

            //incluce controller xu ly sidebar (phim dang chieu,phim sap chieu)
            include "controller/detail/listphim_detail.php";

            //incluce controller xu ly chuc nang binh luan 
            
            include "controller/detail/binhluan_detail.php";
            //incluce controller xu ly mua ve 
            include "view/detail.php";
            break;
        case 'timkiem':

            //incluce controller xu ly kiem kiem 
            
            include "view/timkiem.php";
            break;
    }
    
    
?>