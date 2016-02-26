<?php
/**
 * Created by PhpStorm.
 * User: IceLight
 * Date: 15/11/20
 * Time: 上午9:02
 */

namespace Admin\Logic;


class ProductLogic extends \Think\Model{

    private $Product;
    private $Userproduct;

    public function __construct(){
        $this->Product = M('Product');
        $this->Userproduct = M('User_product');
    }

    public function getProductList(){
        $data = $this->Product->join('left join pn2_category on pn2_category.id = pn2_product.categoryid')->field('pn2_category.name as categoryname,pn2_product.*')->select();
        return $data;
    }

    public function getProductTotal($cond = array()){
        $mycond = array();
        if(is_array($cond) && count($cond)>0){
            $mycond = $cond;
        }
        $num = $this->Product->where($mycond)->count();
        return $num;
    }

    public function getUserProductList($cond=array(), $p){
        $mycond = array();
        if(is_array($cond) && count($cond)>0){
            $mycond = $cond;
        }
        $pstr = $p.','.C('ADMIN_REC_PER_PAGE');
        $data = $this->Userproduct->join('left join pn2_admin on pn2_admin.uid = pn2_user_product.userid')->join('left join pn2_product on pn2_product.id = pn2_user_product.productid')->field('pn2_admin.username,pn2_product.productname,pn2_user_product.*')->where($mycond)->page($pstr)->select();
        return $data;
    }

    public function getUserProductTotal($cond = array()){
        $mycond = array();
        if(is_array($cond) && count($cond)>0){
            $mycond = $cond;
        }
        $num = $this->Userproduct->where($mycond)->count();
        return $num;
    }

}