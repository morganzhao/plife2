<?php
/**
 * Created by vim.
 * User: Jason Hu
 * Date: 2016-03-07
 * Time: 18:50
 */

namespace Api\Logic;


class VideoLogic extends \Think\Model{

	private $videoOrder = array(1=>"creatime",2=>"viewtimes");   // 排序关键词，1:时间，2:热门

	public function __construct(){
		$this->videoModel = M('Video');
	}

	/**
	 * 分页带获取视频列表
	 * 参数：
	 * @param array $condition : （可选）搜索条件
	 * @param int $page : （可选）分页，默认为1 （不需要额外定义列表的数量）
	 * @param int $sort: （可选）排序依据，默认为 1:最新，2: 最热
	 * @param int $limit : （可选）每次获取的记录条数，默认系统分配（也不可超过系统分配限制数）
	 * @return json : list
	 **/
	public function getVideos($condition=array(), $page=1, $sort=1, $limit=0){
		$mycond = array();
		if(is_array($condition) && count($condition)>0){
			$mycond = $condition;
		}
		$mycond['status'] = '1';

		if($limit>0 && $limit<C('MOB_REC_PER_PAGE')){
			$curpage = $page.','.$limit;
		}else{
			$curpage = $page.','.C('MOB_REC_PER_PAGE');
		}
		if (array_key_exists($sort, $this->videoOrder)){
			$order = $this->videoOrder[$sort];}
		else{
			$order = $this->videoOrder[1];
		}
		return $this->videoModel->where($mycond)->page($curpage)->order("$order desc")->select();
	}

	function changePlayCount($id = ''){
		$this->videoModel->where(array('id' => $id))->setInc('viewtimes', 1);	
		return $this->videoModel->where(array('id' => $id))->getField('viewtimes');
	}
}
