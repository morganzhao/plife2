<?php
namespace Api\Controller;
use Think\Controller;

class ProductController extends Controller {

    private $ProductLogic;
    private $Admin;
    private $Userproduct;

    public function __construct(){
        parent::__construct();
        $this->ProductLogic = D('Product','Logic');
        $this->Admin = M('Admin');
        $this->Userproduct = M('User_product');
    }

    public function userInfo(){
        //$userid = I('post.userid');
        $userid = 1001;
        $data = $this->Admin->where('uid='.$userid)->field('uid,totalscore')->find();
        return json_encode($data);
    }

    public function productList(){
        //$userid = I('post.userid');
        $userid = 1001;
        $data = $this->ProductLogic->getProductList($userid);
        return json_encode($data);
    }

    public function productDetail(){
        //$productid = I('post.productid');
        $productid = 1011;
        $data = $this->ProductLogic->getProductDetail($productid);
        return json_encode($data);
    }

    public function doExchange(){
        //$userid = I('post.userid');
        //$productid = I('post.productid');
        $userid = 1001;
        $productid = 1013;
        $nums = $this->Userproduct->where(array('userid'=>$userid,'productid'=>$productid))->count();
        if($nums){
            $data['msg'] = '该商品已经换购过';
        }else{
            $data = $this->ProductLogic->exchangeProductByScore($userid,$productid);
        }
        var_dump($data);die;
        return json_encode($data);
    }

    public function doSearch(){
        //$userid = I('post.userid');
        //$searchstring = I('post.searchstring');
        $userid = 1001;
        $searchstring = '苹果';
        $data = $this->ProductLogic->searchProductByString($userid,$searchstring);
        var_dump($data);die;
        return json_encode($data);
    }

}