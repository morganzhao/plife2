<?php
namespace Api\Controller;
use Think\Controller;

class TaskController extends Controller {

    private $TaskLogic;
    private $Usertask;

    public function __construct(){
        parent::__construct();
        $this->TaskLogic = D('Task','Logic');
        $this->Usertask = M('User_task');
    }

    public function taskList(){
        //$userid = I('post.userid');
        $userid = 1001;
        $data = $this->TaskLogic->getTaskList($userid);
        return json_encode($data);
    }

    public function getTaskStatus(){
        //$userid = I('post.userid');
        //$taskid = I('post.taslid');
        $userid = 1001;
        $taskid = 1046;
        $data = $this->TaskLogic->getTaskRecord($userid,$taskid);
        return json_encode($data);
    }

    public function doTask(){
        //$userid = I('post.userid');
        //$taskid = I('post.taslid');
        //$status = I('post.status');
        $userid = 1001;
        $taskid = 1046;
        $nums = $this->Usertask->where('userid = '.$userid)->count();
        if($nums){
            $data = $this->TaskLogic->addRecord($userid,$taskid);
        }else{
            $data = $this->TaskLogic->getScoreByTask($userid,$taskid);
        }
        var_dump($data);
        return json_encode($data);
    }
}