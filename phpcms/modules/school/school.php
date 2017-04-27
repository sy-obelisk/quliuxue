<?php

defined('IN_PHPCMS') or exit('No permission resources.');

pc_base::load_app_class('admin','admin',0);

class school extends admin{

	function __construct() {

		}

		/*假面by2014-12-1-1:58-star*/

		public function init(){

			pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('school_data_model');

			$list1=pc_base::load_model('professional_data_model');

			if(isset($_POST['dosubmit'])){

				$cnname=$_POST["cnname"];

				$where="cnname like'%".$cnname."%'  ";

				$infos = $list->listinfo($where,$order = 'id desc',$_GET['page'],$pages = '20'); 

		    }else{

		    	$infos = $list->listinfo('','id desc',$_GET['page'],$pages = '20');

		    

		    }

			$pages = $list->pages;

			include $this->admin_tpl('school_admin_index');

		}

		public function add(){

			pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('school_data_model');

			$list1=pc_base::load_model('professional_data_model');

			$where="professional_pid='0'";	

			$data_professional = $list1->listinfo($where,'id asc',$_GET['page'],$pages = '30');

			if (isset($_POST['dosubmit'])) {

				

				$array0 = $_POST["degree"];

                $degree =implode(',',$array0);

				

				$array = $_POST["professional"];

                $professional =implode(',',$array);

				$data_post=array('dianji'=>$_POST["dianji"],'datu'=>$_POST["datu"],'recommend'=>$_POST["recommend"],'odds'=>$_POST["odds"],'country'=>$_POST["country"],'cnname'=>$_POST["cnname"],'enname'=>$_POST["enname"],'logo'=>$_POST["logo"],'location'=>$_POST["location"],'position'=>$_POST["position"],'rank'=>$_POST["rank"],'weburl'=>$_POST["weburl"],'toefl_scores'=>$_POST["toefl_scores"],'ielts_score'=>$_POST["ielts_score"],'school_profile'=>$_POST["school_profile"],'requirements'=>$_POST["requirements"],'qizuibashe'=>$_POST["qizuibashe"],'culture'=>$_POST["culture"],'professional'=>$professional,'degree'=>$degree);//

				$r=$list->insert($data_post);

				if ($r) {

					showmessage(L('添加成功'),HTTP_REFERER);

				}else{

					showmessage(L('添加失败'),HTTP_REFERER);

				}	

			}

			//$del_school = $list->query("truncate table qu_school_data;");//删除表  id从0开始   禁用（测试完删除）

			include $this->admin_tpl('school_admin_add');

		}

        public function edit(){

        	pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('school_data_model');

        	$list1=pc_base::load_model('professional_data_model');

			$where="professional_pid='0'";	

			$data_professional = $list1->listinfo($where,'id asc',$_GET['page'],$pages = '30');

        	$where0=array('id'=>$_GET[id]);



        	$r=$list->get_one($where0);

        	if (isset($_POST['dosubmit'])) {

        		$where1=array('id'=>$_POST[id]);

        		$array0 = $_POST["degree"];

                $degree =implode(',',$array0);

        		$array = $_POST["professional"];

                $professional =implode(',',$array);

        		$data=array('dianji'=>$_POST["dianji"],'datu'=>$_POST["datu"],'recommend'=>$_POST["recommend"],'odds'=>$_POST["odds"],'country'=>$_POST["country"],'cnname'=>$_POST["cnname"],'enname'=>$_POST["enname"],'logo'=>$_POST["logo"],'location'=>$_POST["location"],'position'=>$_POST["position"],'rank'=>$_POST["rank"],'weburl'=>$_POST["weburl"],'toefl_scores'=>$_POST["toefl_scores"],'ielts_score'=>$_POST["ielts_score"],'school_profile'=>$_POST["school_profile"],'requirements'=>$_POST["requirements"],'qizuibashe'=>$_POST["qizuibashe"],'culture'=>$_POST["culture"],'professional'=>$professional,'degree'=>$degree); 

        		$r0=$list->update($data,$where1);

        		if ($r0) {

					showmessage(L('更新成功'),HTTP_REFERER);

				}else{

					showmessage(L('更新失败'),HTTP_REFERER);

				}	

        		

		    }

		    include $this->admin_tpl('school_admin_edit');



	    } 

        public function delete(){

        	pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('school_data_model');

        	$where=array('id'=>$_GET['id']);

		    $r=$list->delete($where);

		    if ($r) {

			showmessage(L('删除成功'),HTTP_REFERER);

		}else{

			showmessage(L('删除失败'),HTTP_REFERER);

		}

		}

        public function show_direction(){

			pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('school_data_model');

			$list1=pc_base::load_model('professional_data_model');

			$list2=pc_base::load_model('school_professional_data_model');

			

				$where="direction_school_id =".$_GET['id']." ";

				$infos = $list2->listinfo($where,$order = 'id asc',$_GET['page'],$pages = '20'); 

		        $pages = $list2->pages;

			include $this->admin_tpl('school_direction_show');

		}



        public function add_direction(){

			pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('school_data_model');

			$list1=pc_base::load_model('professional_data_model');

			$list2=pc_base::load_model('school_professional_data_model');

			$where="professional_pid='0'";	

			$data_professional = $list1->listinfo($where,'id asc',$_GET['page'],$pages = '30');//列出所有专业

			$where0=array('id'=>$_GET[id]);



        	$r=$list->get_one($where0);
			//print_r(explode(',',$r[professional]));
			$data_professional00=explode(',',$r[professional]);//该学校以保存专业

			if (isset($_POST['dosubmit'])) {

				

				

              

				$data_post=array('direction_school_id'=>$_POST["direction_school_id"],'direction_rank'=>$_POST["direction_rank"],'direction_cnname'=>$_POST["direction_cnname"],'direction_enname'=>$_POST["direction_enname"],'direction_weburl'=>$_POST["direction_weburl"],'direction_style'=>$_POST["direction_style"],'baomingtime'=>$_POST["baomingtime"],'direction_pid'=>$_POST["direction_pid"]);//

				$r=$list2->insert($data_post);

				if ($r) {

					showmessage(L('添加成功'),HTTP_REFERER);

				}else{

					showmessage(L('添加失败'),HTTP_REFERER);

				}	

			}

			//$del_school = $list->query("truncate table qu_school_data;");//删除表  id从0开始   禁用（测试完删除）

			include $this->admin_tpl('school_direction_add');

		}

        public function edit_direction(){

        	pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('school_data_model');

			$list1=pc_base::load_model('professional_data_model');

			$list2=pc_base::load_model('school_professional_data_model');

			$where="professional_pid='0'";	

			$data_professional = $list1->listinfo($where,'id asc',$_GET['page'],$pages = '30');

         

			$where0=array('id'=>$_GET[id]);

          

        	$r=$list2->get_one($where0);
          
		  
		  
		    $where_zhuanye=array('id'=>$r[direction_school_id]);
            $r_zhuanye=$list->get_one($where_zhuanye);
             //print_r(explode(',',$r[professional]));
			$data_professional00=explode(',',$r_zhuanye[professional]);//该学校以保存专业
        	//print_r($data_professional00);
 
			
			if (isset($_POST['dosubmit'])) {

                $where1=array('id'=>$_POST[id]);

        		

        		$data=array('direction_rank'=>$_POST["direction_rank"],'direction_cnname'=>$_POST["direction_cnname"],'direction_enname'=>$_POST["direction_enname"],'direction_weburl'=>$_POST["direction_weburl"],'direction_style'=>$_POST["direction_style"],'baomingtime'=>$_POST["baomingtime"],'direction_pid'=>$_POST["direction_pid"]);//

				$r0=$list2->update($data,$where1);

        		if ($r0) {

					showmessage(L('更新成功'),HTTP_REFERER);

				}else{

					showmessage(L('更新失败'),HTTP_REFERER);

				}	

		    }

		    include $this->admin_tpl('school_direction_edit');



	    } 

		public function delete_direction(){

        	pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('school_professional_data_model');

        	$where=array('id'=>$_GET['id']);

		    $r=$list->delete($where);

		    if ($r) {

		    	showmessage(L('删除成功'),HTTP_REFERER);

		    }else{

		    	showmessage(L('删除失败'),HTTP_REFERER);

		    }

		}

        



        public function online_application() { 



 		    pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('online_application_data_model');

			



			if(isset($_POST['dosubmit'])){

				if($_POST['name']!=''){

					if($_POST['phone']!=''){

						if($_POST['email']!=''){

							if($_POST['grade']!=''){

								if($_POST['situation']!=''){

								}

								else{

									showmessage(L('请填写您目前的情况'),HTTP_REFERER);

					            }   

							}

							else{

								showmessage(L('请填写目前所在年级'),HTTP_REFERER);

					        }

						}

					    else{

					    	showmessage(L('请填写邮箱'),HTTP_REFERER);

					    }

					}

					else{

						showmessage(L('请填写手机号'),HTTP_REFERER);

					}

				}

				else{

					showmessage(L('请填写姓名'),HTTP_REFERER);

				}

			



				$data = array('name'=>$_POST['name'],'phone'=>$_POST['phone'],'email'=>$_POST['email'],'grade'=>$_POST['grade'],'situation'=>$_POST['situation'],'shijian'=>time());

 		        $r=$list->insert($data);

			    if ($r) {

			    	showmessage(L('您的在线申请已收到，我们会尽快和您联系！'),HTTP_REFERER,4000);

			    }else{

			    	showmessage(L('在线申请失败'),HTTP_REFERER,4000);

			    }	

 		    }

 	    }

        public function online_service() { 

 		    pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('online_service_data_model');

			if(isset($_POST['dosubmit'])){



				if($_POST['name']!=''){

					if($_POST['phone']!=''){

						if($_POST['guojia']!=''){

							if($_POST['mubiao']!=''){

							}

							else{

								showmessage(L('请填写申请目标'),HTTP_REFERER);

					        }

						}

					    else{

					    	showmessage(L('请填写申请国家'),HTTP_REFERER);

					    }

					}

					else{

						showmessage(L('请填写手机号'),HTTP_REFERER);

					}

				}

				else{

					showmessage(L('请填写姓名'),HTTP_REFERER);

				}



				$data = array('name'=>$_POST['name'],'phone'=>$_POST['phone'],'guojia'=>$_POST['guojia'],'mubiao'=>$_POST['mubiao'],'shijian'=>time());

 			    $r=$list->insert($data);

			    if ($r) {

			    	showmessage(L('您的申请服务已收到，我们会尽快和您联系！'),HTTP_REFERER,4000);

			    }else{

				    showmessage(L('在线申请服务失败'),HTTP_REFERER,4000);

			    }	

 		    }

 		}

 		 public function online_jiayou() { 

 		    pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('onlinejiayou_data_model');

			if(isset($_POST['dosubmit'])){

				$data = array('name'=>$_POST['name'],'phone'=>$_POST['phone'],'email'=>$_POST['email'],'zixun'=>$_POST['zixun'],'mingcheng'=>$_POST['mingcheng'],'lianjie'=>$_POST['lianjie'],'shijian'=>time());

 			    $r=$list->insert($data);

			    if ($r) {

			    	showmessage(L('您的咨询已收到，我们会尽快和您联系！'),HTTP_REFERER,4000);

			    }else{

				    showmessage(L('在线咨询失败'),HTTP_REFERER,4000);

			    }	

 		    }

 		}

 		 public function online_tucao() { 

 		    pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('tucao_data_model');

			if(isset($_POST['dosubmit'])){



				/*if(!empty($_SESSION['code'])) {

                //判断验证码

					$code = isset($_POST['code']) && trim($_POST['code']) ? trim($_POST['code']) : showmessage(L('input_code'), HTTP_REFERER);

                    if ($_SESSION['code'] != strtolower($code)) {

                        showmessage(L('code_error'), HTTP_REFERER);

                    }

                }验证码已经关闭*/

				//取用户手机号

				$mobile_verify = $_POST['mobile_verify'] ? intval($_POST['mobile_verify']) : '';

				if($mobile_verify=='') showmessage('请提供正确的手机验证码！', HTTP_REFERER,4000);

 				$sms_report_db = pc_base::load_model('sms_report_model');

				$posttime = SYS_TIME-360;

				$where = "`id_code`='$mobile_verify' AND `posttime`>'$posttime'";

				$r = $sms_report_db->get_one($where,'*','id DESC');

 				if(!empty($r)){

					$userinfo['mobile'] = $r['mobile'];

				}else{

					showmessage('未检测到正确的手机号码！', HTTP_REFERER,4000);

				}

				$data = array('name'=>$_POST['name'],'phone'=>$_POST['phone'],'zhongjie'=>$_POST['zhongjie'],'yuanyin'=>$_POST['yuanyin'],'shijian'=>time());

 			    $r=$list->insert($data);

			    if ($r) {

			    	showmessage(L('您的吐槽已收到，我们会尽快处理！'),HTTP_REFERER,4000);

			    }else{

				    showmessage(L('在线吐槽失败'),HTTP_REFERER,4000);

			    }	

 		    }

 		}



 		 public function online_jilv() { 

 		    pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('jilv_data_model');

			if(isset($_POST['dosubmit'])){



				if(!empty($_SESSION['code'])) {

                //判断验证码

					$code = isset($_POST['code']) && trim($_POST['code']) ? trim($_POST['code']) : showmessage(L('input_code'), HTTP_REFERER);

                    if ($_SESSION['code'] != strtolower($code)) {

                        showmessage(L('code_error'), HTTP_REFERER);

                    }

                }

				$data = array('name'=>$_POST['name'],'email'=>$_POST['email'],'phone'=>$_POST['phone'],'yixiang'=>$_POST['yixiang'],'jiudu'=>$_POST['jiudu'],'chuguotime'=>$_POST['chuguotime'],'shijian'=>time());

 			    $r=$list->insert($data);

			    if ($r) {

			    	showmessage(L('您的录取几率评估已收到，我们会尽快回复！'),HTTP_REFERER,4000);

			    }else{

				    showmessage(L('在线录取几率评估失败'),HTTP_REFERER,4000);

			    }	

 		    }

 		}

 		public function online_guwen() { 

 		    pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('online_guwen_data_model');

			if(isset($_POST['dosubmit'])){

				/*if(!empty($_SESSION['code'])) {

                //判断验证码

					$code = isset($_POST['code']) && trim($_POST['code']) ? trim($_POST['code']) : showmessage(L('input_code'), HTTP_REFERER);

                    if ($_SESSION['code'] != strtolower($code)) {

                        showmessage(L('code_error'), HTTP_REFERER);

                    }

                }验证码已经关闭*/

				//取用户手机号

				$mobile_verify = $_POST['mobile_verify'] ? intval($_POST['mobile_verify']) : '';

				if($mobile_verify=='') showmessage('请提供正确的手机验证码！', HTTP_REFERER,4000);

 				$sms_report_db = pc_base::load_model('sms_report_model');

				$posttime = SYS_TIME-360;

				$where = "`id_code`='$mobile_verify' AND `posttime`>'$posttime'";

				$r = $sms_report_db->get_one($where,'*','id DESC');

 				if(!empty($r)){

					$userinfo['mobile'] = $r['mobile'];

				}else{

					showmessage('未检测到正确的手机号码！', HTTP_REFERER,4000);

				}

				$data = array('name'=>$_POST['name'],'phone'=>$_POST['mobile'],'email'=>$_POST['email'],'zhongjie'=>$_POST['zhongjie'],'zixun'=>$_POST['zixun'],'leixing'=>$_POST['leixing'],'shijian'=>time());

 			    $r=$list->insert($data);

			    if ($r) {

			    	showmessage(L('您的在线申请顾问已收到，我们会尽快处理！'),HTTP_REFERER,4000);

			    }else{

				    showmessage(L('在线申请失败'),HTTP_REFERER,4000);

			    }	

 		    }

 		}



        

        /*学校加推荐，点击切换状态*/

	    public function addhot() {

	 	 	

	 	pc_base::load_sys_class('form', '', 0);

	 	$list=pc_base::load_model('school_data_model');

        $where=array('id'=>$_GET[id]);

        $r=$list->get_one($where); 

        $recommend=$r[recommend];



        if($recommend==0){

        	$recommend=1;

        }else{

        	$recommend=0;

        }    



        $data=array('recommend'=>$recommend);//

		$rs=$list->update($data,$where);	



          if ($rs) {

			    	showmessage(L('操作成功'),HTTP_REFERER);

			    }else{

				    showmessage(L('操作失败'),HTTP_REFERER);

			    }	      

	    }

	    /*ajax获取高校列表*/

	    public function hightschool() {

	 	pc_base::load_sys_class('form', '', 0);

	 	$list=pc_base::load_model('hightschool_model');

        $list1=pc_base::load_model('hightschool_data_model');

        

          $rs = $list->query("select title from qu_hightschool a, qu_hightschool_data b where a.id=b.id order by b.schoolstyle "); 

		  $data = $list->fetch_array($rs);

		  foreach ($data as $key => $value) {

		  	$val[$key]=$value[title];

		  }

        //print_r($val);  

	 	echo  json_encode($val);

       

	    }







	    /*在线申请管理*/

	    public function application_manage(){

			pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('online_application_data_model');

			$infos = $list->listinfo('','id desc',$_GET['page'],$pages = '20');

		    

			$pages = $list->pages;

			include $this->admin_tpl('application_manage_index');

		}

		/*在线申请服务*/

	    public function service_manage(){

			pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('online_service_data_model');

			$infos = $list->listinfo('','id desc',$_GET['page'],$pages = '20');

		    

			$pages = $list->pages;

			include $this->admin_tpl('service_manage_index');

		}

		/*名校加油站申请*/

	    public function jiayou_manage(){

			pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('onlinejiayou_data_model');

			$infos = $list->listinfo('','id desc',$_GET['page'],$pages = '20');

		    

			$pages = $list->pages;

			include $this->admin_tpl('jiayou_manage_index');

		}

		/*吐槽黑中介*/

	    public function tucao_manage(){

			pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('tucao_data_model');

			$infos = $list->listinfo('','id desc',$_GET['page'],$pages = '20');

		    

			$pages = $list->pages;

			include $this->admin_tpl('tucao_manage_index');

		}



        /*预约中介顾问*/

	    public function guwen_manage(){

			pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('online_guwen_data_model');

			$infos = $list->listinfo('','id desc',$_GET['page'],$pages = '10');

		    

			$pages = $list->pages;

			include $this->admin_tpl('guwen_manage_index');

		}

		/*录取几率*/

	    public function jilv_manage(){

			pc_base::load_sys_class('form', '', 0);

			$list=pc_base::load_model('jilv_data_model');



			$infos = $list->listinfo('','id desc',$_GET['page'],$pages = '20');

		    

			$pages = $list->pages;

			include $this->admin_tpl('jilv_manage_index');

		}



}?>

