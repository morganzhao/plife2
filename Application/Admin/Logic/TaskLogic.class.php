<?php
/**
 * Created by PhpStorm.
 * User: IceLight
 * Date: 15/11/20
 * Time: 上午9:02
 */

namespace Admin\Logic;


class TaskLogic extends \Think\Model{

    private $Task;

    public function __construct(){
        $this->Task = M('Task');
        $this->UserTask = M('User_task');
    }

    public function getTaskList($cond=array(), $p){
        $mycond = array();
        if(is_array($cond) && count($cond)>0){
            $mycond = $cond;
        }
        $pstr = $p.','.C('ADMIN_REC_PER_PAGE');
        $data = $this->Task->join('left join pn2_category on pn2_category.id = pn2_task.categoryid')->field('pn2_task.id,pn2_task.title,pn2_task.content,pn2_task.score,pn2_task.starttimes,pn2_task.endtimes,pn2_category.name')->where($mycond)->page($pstr)->select();
        return $data;
    }

    public function getTaskTotal($cond = array()){
        $mycond = array();
        if(is_array($cond) && count($cond)>0){
            $mycond = $cond;
        }
        $num = $this->Task->where($mycond)->count();
        return $num;
    }

    public function getTastCategory(){
        $mycond =array('pid'=>1);
        $data = M('Category')->where($mycond)->select();
        return $data;
    }

    public function getUserTaskList($cond=array(), $p){
        $mycond = array();
        if(is_array($cond) && count($cond)>0){
            $mycond = $cond;
        }
        $pstr = $p.','.C('ADMIN_REC_PER_PAGE');
        $data = $this->UserTask->join('left join pn2_admin on pn2_user_task.userid = pn2_admin.uid')->group('userid')->where($mycond)->page($pstr)->select();
        return $data;
    }

    public function getUserTaskTotal($cond = array()){
        $mycond = array();
        if(is_array($cond) && count($cond)>0){
            $mycond = $cond;
        }
        $num = count($this->UserTask->group('userid')->where($mycond)->select());
        return $num;
    }

    public function getRecordByUid($cond=array(), $p){
        $mycond = array();
        if(is_array($cond) && count($cond)>0){
            $mycond = $cond;
        }
        $pstr = $p.','.C('ADMIN_REC_PER_PAGE');
        $data = $this->UserTask->join('left join pn2_admin on pn2_user_task.userid = pn2_admin.uid')->join('left join pn2_task on pn2_user_task.taskid = pn2_task.id')->where($mycond)->page($pstr)->select();
        return $data;
    }

    public function getRecordTotalByUid($cond = array()){
        $mycond = array();
        if(is_array($cond) && count($cond)>0){
            $mycond = $cond;
        }
        $num = $this->UserTask->where($mycond)->count();
        return $num;
    }

}