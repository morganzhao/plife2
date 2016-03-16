<?php
/**
 * Created by vim.
 * User: jason
 * Date: 2016-03-07 
 * Time: 14:08
 **/

namespace Api\Logic;

class CategoryLogic extends \Think\Model{
	
	private $categoryModel;

	public function __construct()
	{
		$this->categoryModel = M('Category');
	}


	/**
	 * 视频和app分类接口
	 * @param string type : 电视剧电影 video 游戏 games 应用apps 视频分类 video_category
	 * @return json : data
	 **/
	function getCategoryList( $type= ''){
		if(empty($type)){
			return '';
		}
		$prefix = C('DB_PREFIX');
		$data = $this->categoryModel->field('category.id, category.title')
			->join(C('DB_PREFIX').'category as category ON category.pid = '.C('DB_PREFIX').'category.id')
			->where(array($prefix.'category.category'=>$type, 'category.isdel' => array('neq', '1')))->select();
        return $data;
	}
}

