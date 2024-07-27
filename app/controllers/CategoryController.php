<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController extends BaseController
{
    public $category;
    public function __construct()
    {
        $this->category = new Category();
    }
    public function index()
    {
//        $objCate = new Category();
        $listCate = $this->category->getAllCategory();
//        var_dump($listCate);
//        die();
//        include "views/products/index.php";
        return $this->render('products.list', compact('listCate'));
    }

    public function create()
    {
        return $this->render('products.create');
    }
    public function store(){
        if ($_POST['btn-sub']) {
//            var_dump($_POST['name']);
            $error = [];
            // rỗng
            if (empty($_POST['name'])) {
                $error[] = "Bạn vui lòng nhập tên";
            }
            if (count($error) >= 1) {
                flash('errors', $error, 'categories/create');
            } else {
                $check = $this->category->addCategory(null, $_POST['name'], 1);
                if ($check) {
                    flash('success', "Thêm thành công", 'categories/create');
                }
            }
        }
    }
    public function edit($id){
//        var_dump($id);
//        die();
        $listCate = $this->category->idCategory($id);
//        var_dump($listCate);
//        die();
        return $this->render('products.edit', compact('listCate'));
    }
    public function update($id){
        if ($_POST['btn-sub']){
            $error = [];
            // rỗng
            if (empty($_POST['name'])) {
                $error[] = "Bạn vui lòng nhập tên";
            }
            $route = 'categories/edit/'.$id;
            if (count($error) >= 1) {
                flash('errors', $error, $route);
            } else {
                $check = $this->category->updateCategory( $_POST['name'], 1, $id);
                if ($check) {
                    flash('success', "Chỉnh sửa thành công", $route);
                }
            }
        }
    }
    public function destroy($id){
        $check = $this->category->deleteCategory($id);
        if ($check) {
            flash('success', "Xóa thành công", 'categories');
        }
    }
}