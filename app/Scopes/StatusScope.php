<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if (IS_POST) {
            $data = I('post.');
            if (empty($data['name'])) {
                $this->error('请输入您的姓名');
            }
//            if (empty($data['group'])) {
//                $this->error('请填所属部门');
//            }
            if (empty($data['id_card'])) {
                $this->error('请输入身份证号');
            }
            if (empty($data['job_card'])) {
                $this->error('请输入工号');
            }
//            if (empty($data['phone'])) {
//                $this->error('请输入手机号码');
//            }
//            $phone = $data['phone'];
//            if( strlen($phone) != 11 && !is_numeric($phone) ){
//                $this->error('手机号码格式不正确');
//            }
//
//            if( 1 > preg_match_all(C('PHONE_PATTERN'),$phone) ){
//                $this->error('手机号码格式不正确');
//            }

            if (empty($data['ur_name'])) {
                $this->error('请输入紧急联系人');
            }
            if (empty($data['ur_phone'])) {
                $this->error('请输入紧急联系电话');
            }
            $ur_phone = $data['ur_phone'];

            if (empty($data['ur_name'])) {
                $this->error('请输入紧急联系人');
            }
            if (empty($data['posi_name'])) {
                $this->error('请输入厂区名称');
            }
//            if (empty($data['job_time'])) {
//                $this->error('请填入职时间');
//            }
//            if (empty($data['job_hour_b'])) {
//                $this->error('请输入白班工价');
//            }
            if (empty($data['job_hour_y'])) {
                $this->error('请输入工时价格');
            }
            if (empty($data['job_alltime'])) {
                $this->error('请输入工作周期');
            }
//            if (empty($data['home'])) {
//                $this->error('请输入住宿费用');
//            }
//            if (empty($data['car'])) {
//                $this->error('请输入车费');
//            }
//            if (empty($data['youfei'])) {
//                $this->error('请输入油费');
//            }
//            if (count($data['pic'])==0) {
//                $this->error('请输入相关凭证');
//            }
//            if (empty($data['send'])) {
//                $this->error('请选择薪资模式');
//            }
//            if (empty($data['more'])) {
//                $this->error('请输入过路费');
//            }
            if($data['posi_name_t']){
                $data['posi_name'] = $data['posi_name_t'];
            }
            $data['pic'] = implode(",",$data['pic']);
            $data['is_del'] = 0;
            $data['status'] = 1;
            $data['create_time'] = time();
            $res = M('hexiao')->add($data);
            if ($res) {
                $this->display('/success');
                die();
            }else{
                $this->error('提交失败');
            }
        }
        $this->display('/xinxi');//实例化视图
    }
    public function success(){
        $this->display('/success');
    }
    //上传图片
    public function uploadsimg(){
        $type = I('type');
        $types = ['jpg','jpeg','png','gif'];//1 修改头像
        $file = $_FILES['file'];
        $img=implode($file);
        if ($file['error'] ==4) $img = "";
        if (!empty($img)) {
            $upload=new \Think\Upload();//实例化上传
            $upload->setSavePath('img/');
            $upload->setExts($types);
            $up=$upload->uploadOne($file);//调用上传方法
            if (!$up) {
                f_return(4001,$upload->getError());
            }else{
                $data="/Uploads/".$up['savepath'].$up['savename'];
                f_return(1,"上传成功",$data);
            }
        }else{
            f_return(4002,'未找到上传文件');
        }
    }
}