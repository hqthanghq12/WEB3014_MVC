<?php
session_start();
require_once 'env.php';
//require_once 'app/models/Database.php';
//require_once 'app/models/Category.php';
//require_once 'app/controllers/CategoryController.php';
require_once 'vendor/autoload.php';
require_once 'common/route.php';
//use App\Controllers\CategoryController;
//$objCate = new Category();
//$dataCate = $objCate->getAllCategory();
//var_dump($dataCate);
//$url = isset($_GET['url'])? $_GET['url'] : "/";
//switch ($url){
//    case "/":
//        $cntCate = new CategoryController();
//        $cntCate->index();
//        break;
//    case "create":
//        echo "Ban ve trang them";
//        break;
//}
// https://docs.google.com/document/d/1J-TI-Fomh7ZZ4EJRxIUfYrVQan7V1B25nNDx-3DJdAg/edit?usp=sharing