<?php
/**
 * Created by PhpStorm.
 * User: IceLight
 * Date: 15/11/20
 * Time: 上午9:02
 */

namespace Admin\Logic;


class SignLogic extends \Think\Model{

    private $Usersign;

    public function __construct(){
        $this->Usersign = M('User_sign');
    }

    public function getSignUsersList($cond=array(), $p){
        $mycond = array();
        if(is_array($cond) && count($cond)>0){
            $mycond = $cond;
        }
        $pstr = $p.','.C('ADMIN_REC_PER_PAGE');
        $data = $this->Usersign->join('left join pn2_admin on pn2_user_sign.userid = pn2_admin.uid')->group('userid')->where($mycond)->page($pstr)->select();
        return $data;
    }

    public function getSignUsersTotal($cond = array()){
        $mycond = array();
        if(is_array($cond) && count($cond)>0){
            $mycond = $cond;
        }
        $num = count($this->Usersign->group('userid')->where($mycond)->select());
        return $num;
    }

    public function getSignRecord($cond=array(), $p){
        $mycond = array();
        if(is_array($cond) && count($cond)>0){
            $mycond = $cond;
        }
        $pstr = $p.','.C('ADMIN_REC_PER_PAGE');
        $data = $this->Usersign->join('left join pn2_admin on pn2_user_sign.userid = pn2_admin.uid')->where($mycond)->page($pstr)->select();
        return $data;
    }

    public function getSignRecordTotal($cond = array()){
        $mycond = array();
        if(is_array($cond) && count($cond)>0){
            $mycond = $cond;
        }
        $num = $this->Usersign->where($mycond)->count();
        return $num;
    }

}