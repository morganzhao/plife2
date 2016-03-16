<?php
/**
 * Created by vim.
 * User: Jason Hu
 * Date: 2016-03-07
 * Time: 18:50
 */

namespace Api\Logic;


class BannerLogic extends \Think\Model{

	private $bannerModel;

	public function __construct(){
		$this->bannerModel = M('banner');
	}

	public function getBanners($condition=array(), $num = 5){
		$condition['status'] = '1';
		return $this->bannerModel->limit($num)->where($condition)->select();
	}
}
