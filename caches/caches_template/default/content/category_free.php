<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>

<meta name="keywords" content="<?php echo $SEO['keyword'];?>">

<meta name="description" content="<?php echo $SEO['description'];?>">

<link rel="stylesheet" href="/style/css/replay.css" type="text/css">

<!--<script language="javascript" type="text/javascript" src="/style/font-awesome/js/yanzhen.js"></script>-->
<script type="text/javascript" src="/style/js/jquery-1.8.3.min.js"></script> 
<link rel="stylesheet" href="/style/font-awesome/css/font-awesome.min.css" type="text/css">

</head>

<body>

<div id="wrapper"> 

  <!-- 头部 --> 

  <?php include template("content","top"); ?> 

  <!-- 头部结束 --> 

  

  <!--主要内容--->

  <div class="content w-1000">

 <!--轮播-->

   

       <?php include template("content","lunbo16"); ?>   

    <!--滚动-->

<div class="w-1000"> 

       <?php include template("content","gundong"); ?>   

 </div>   

    

    <!--左侧-->

    <div class="f-left">

      <div class="f-tab">

        <ul>
          <li><a href="javascript:navigate_tabs1('a','first-tab');" id="first-tab">选择去网的理由</a></li>
          <li><a href="javascript:navigate_tabs1('b','second-tab');" id="second-tab">服务流程</a></li>
          <li><a href="javascript:navigate_tabs1('c','third-tab');" id="third-tab">文书展示</a></li>
          <li><a href="javascript:navigate_tabs1('e','five-tab') ;" id="five-tab">成功案例</a></li>
          <li><a href="javascript:navigate_tabs1('d','four-tab');" id="four-tab">顾问名录</a></li>

        </ul>

      </div>

      <div class="f-nr">

        <div class="a rr">

          <div class="f-nr1">

            <div class="fbox">

              <div class="imgbox"><img src="/style/picture/y-8.jpg"  /></div>

              <div class="nrbox">

                <h2>理由一：权威认证&实体店的双重保障</h2>

                <p>去留学网是一家教育类互联网公司，旨在通过互联网为申请者提供专业而高性价比的留学申请服务。去留学网在上线后不到半年里注册用户突破一万，受到了多方媒体的报道和关注。去留学网倾力打造的全球院校智能数据库，已经是众多留学申请者的最得力的选校助手，网站现已成为中国颇具影响力的在线留学服务平台。同时，去留学网拥有北京／上海／成都／武汉／杭州／长沙六大实体服务中心，可以为申请者提供面对面的留学咨询与文书访谈服务。</p>

              </div>

              <div class="clear"></div>

            </div>

            <div class="fbox">

              <div class="imgbox1"><img src="/style/picture/y-9.jpg"  /></div>

              <div class="nrbox">
                  <h2>理由二：按照专业细分的研究型团队</h2>
                  <p>去留学网服务团队成员皆拥有三年以上从业经历，按照文理工商艺五大专业方向进行专业划分，对应学科老师经历了特定专业申请的千锤百炼，熟悉该专业各个学校的申请策略和录取偏好，能够有效把握不同研究生学位项目的现今申请趋势及申请特点，从而帮助申请者更准确地规避申请风险，设计专业而有针对性的文书包装，提高成功率。</p>

              </div>

              <div class="clear"></div>

            </div>

            <div class="fbox">

              <div class="imgbox"><img src="/style/picture/y-10.jpg"  /></div>

              <div class="nrbox">

                <h2>理由三：透明+确认=双重放心保证</h2>

                <p>留学行业公信力普遍偏低的原因是留学中介与申请者的信息不对称，不良留学中介善于在申请过程中设置不能公开的猫腻，同学们一定不想交了一大笔钱，却对申请进展一无所知——进不了申请邮箱，看不到文书材料，甚至连学校申请是否提交了也不知道。因此，去留学网为你提供了便利的申请工作监督手段：可以与咨询师共享申请账号，可以随时查阅自己的文书稿件，可以第一时间知道学校的申请进度。此外为了让同学们彻底放心，去留学网会在选校、文书、申请、录取等所有核心环节征求你的认可。</p>

              </div>

              <div class="clear"></div>

            </div>

            <div class="anniu"><a href="http://wpa.qq.com/msgrd?v=3&uin=3097401794&site=qq&menu=yes" target="_blank">立即咨询</a></div>

          </div>

          <!--咨询表单-->

           <div class="m-form">

            <h1>在线申请留学方案</h1>

            <p>资深顾问免费提供选校方案 | 免费指导申请材料准备 | 申请过程免费指导</p>

            <form action="/index.php?m=school&c=school&a=online_application&t=1" name="form1" id="form1" method="post"  onsubmit="return checkData()">

              <ul>

                <li><span>姓名：</span>

                  <input type="text" name="name" />

                </li>

                <li><span>手机：</span>

                  <input type="text" name="phone" />

                </li>

                <li><span>邮箱：</span>

                  <input type="text" name="email" />

                </li>

                <li><span>目前所在年级：</span>

                  <select name="grade">

				   <option value="3">大三</option>

                    <option value="1">大一</option>

                    <option value="2">大二</option>

           

                    <option value="4">大四</option>

					<option value="5">在职</option>

					<option value="6">其他</option>

                  </select>

                </li>

                <li><span>您目前的情况：</span>

                  <textarea  name="situation" id="textarea" cols="45" rows="5" onclick="this.innerHTML='';"

				  

				   onfocus="if (value =='请输入项目和想要咨询的内容'){value =''}" onblur="if (value ==''){value='请输入项目和想要咨询的内容'}"		  

				  >请输入项目和想要咨询的内容</textarea>

                </li>

                <li>

                  <input type="submit" value=" 提 交 " 

				  onclick="return checkData()"     id="dosubmit" name="dosubmit" class="button">





                </li>

              </ul>

            </form>

          </div>

        </div>

        <div class="b rr">

          <div class="f-nr1">

            <h1>去留学网服务流程</h1>

            <div class="nr">

              <h2>模块一：咨询定校</h2>

              <ul>

                <h3>三次沟通咨询定校</h3>

                <li>80%的学员可以通过3次有效沟通完成定校。</li>
                <li>第1次沟通：咨询顾问老师详细介绍Qu去留学网英澳免费申请项目，了解学员基本情况。</li>
                <li>第2次沟通：顾问老师根据自身的专业经验，协助学员匹配适合的学校和专业。</li>
                <li>第3次沟通：学员确定选校方案，与Qu去留学网签订协议。</li>

              </ul>

              <h3>申请顾问审核选校方案</h3>
              <p>申请顾问会对在办的学员进行二次回访，申请顾问跟进的所有选校方案须最终提交至项目经理处进行严格审核、把关，确保方案的合理性，帮助学员以现有的综合成绩冲击最理想的学校。</p>
	

            </div>

            <div class="nr">

              <h2>模块二：学校申请</h2>
            <h3>全方位个性定制文书包装</h3>
            <p>去留学网将倾力挖掘学员的学习实践经历，精心包装打造，做出有亮点有特色的申请文书；选择更为契合的提升项目，志愿者活动、实习、暑期课程样样不缺，全面的文书包装让学员整体实力得到有效提高。</p>
            <h3>顾问老师+CRM系统双重辅助准备申请材料</h3>
          <p>  准备申请材料之前，申请顾问负责讲解材料准备注意事项，准备过程中有任何疑问，申请顾问老师均会耐心解答；CRM系统清楚罗列申请材料清单，学员对照准备并在CRM系统端轻松上传、存储申请材料。</p>

              <ul>

                <h3>双层申请材料审核把控，保证材料准确有效</h3>
                <li>第1层审核：咨询顾问老师审核材料规范性和准确性。</li>
                <li>第2层审核：申请顾问最后把控，审核确认无误后递交至校方。</li>
               

              </ul>

              <h3>及时获知录取情况</h3>

              <p>学员可通过CRM系统与顾问老师同步获得录取成功的消息，如果学员没有时间，申请顾问老师有责任第一时间将录取成功的消息一个不漏地通知学员。</p>

              <h3>申请顾问老师根据学员情况，指导缴纳学费，获取COE 。</h3>
 

            </div>

            <div class="nr">

              <h2>模块三：签证申请</h2>
              <h3>顾问老师+CRM系统双重辅助准备签证材料 </h3>
              <p>顾问老师+CRM系统双重辅助准备签证材料 

顾问老师在学员准备签证材料之前，针对学员个人情况，讲解签证办理注意事项（重点讲解资金财产证明）；CRM系统清楚罗列签证办理材料清单，学员对照准备并在CRM系统端轻松上传、存储签证材料。</p>

              <ul>

                <h3>四层签证材料审核把控，保证材料准确有效</h3>
                <li>第1层审核：CRM系统自动审核材料的完整性。</li>
                <li>第2层审核：咨询顾问老师审核材料的规范性、准确性。</li>
                <li>第3层审核：申请顾问审核材料总体把关。</li>
                <li>第4层审核：负责签证办理的老师最后审核，确认材料无误。</li>

              </ul>

              <h3>办理签证</h3>
              <p>负责签证办理的老师将签证材料递交至移民局。</p>
              <h3>体检指导</h3>
              <p>顾问老师讲解体检注意事项。</p>
			  
              <h3>及时获知签证办理情况</h3>
              <p>申请顾问老师会第一时间告知签证结果，学员也可通过CRM系统获知签证办理情况。</p>

            </div>

            <div class="nr">

              <h2>模块四：行前指导</h2>
              <h3>离境指导</h3>
              <p>顾问老师讲解赴澳所需携带的材料、临行前准备的行李物品、以及在国外学校生活的注意事项等。</p>

            </div>

          </div>

        </div>

        <div class="c rr">

          <div class="f-nr1">

            <h1>去留学网文书定制选段展示</h1>

            <div class="nr"><img src="/style/picture/service_content.jpg"  /></div>

          </div>

          <div class="clear"></div>

        </div>

        <div class="d rr">

          <div class="f-nr1">

            <h1>Qu留学英澳免费申请名师介绍</h1>

                

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d854fc6767d6b1407b134e5f7a10605d&sql=SELECT+%2A+FROM+qu_minglu+a%2C+qu_minglu_data+b+where+a.id%3Db.id+ORDER+BY+a.inputtime+DESC&cache=3600&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT * FROM qu_minglu a, qu_minglu_data b where a.id=b.id ORDER BY a.inputtime DESC',)).'d854fc6767d6b1407b134e5f7a10605d');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM qu_minglu a, qu_minglu_data b where a.id=b.id ORDER BY a.inputtime DESC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>

             <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>

            <div class="ysbox">

              <div class="ys-top">

                <div class="imgbox"><img src="<?php echo $val['thumb'];?>"  /></div>

                <div class="nrbox">

                  <h2><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></h2>

                  <p><?php echo $val['zhicheng'];?></p>

                </div>

                <div class="clear"></div>

              </div>

              <div class="ys-bottom">

                <p><?php echo $val['content'];?></p>

				<div class="zxzx"><a href="tencent://message/?uin=3097401794&Site=&Menu=yes"				

			 target="_blank"><i class="icon-circle-arrow-right"></i>在线咨询</a></div>

              </div>



            </div>

			



        <?php $n++;}unset($n); ?>

         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            <div class="clear"></div>

          </div>

        </div>
        <div class="e rr" id="anli"></div>
      </div>

    </div>

    <!--右侧-->

    

    <div class="f-right">

      <div class="f-1"> 

        <!--申请表单-->

        <h1>10秒登记免费获取申请方案</h1>

        <div class="gj">

       <form action="/index.php?m=school&c=school&a=online_service&t=1" method="post" name="form2" id="form2" onsubmit="return checkData1()">

             

          <p>申请国家：</p>

          <select name="guojia">

            <option value="1">美国</option>

            <option value="2">英国</option>

            <option value="3">加拿大</option>

            <option value="4">澳大利亚</option>

            <option value="5">新加坡</option>

            <option value="6">香港</option>

          </select>

        </div>

        <div class="gj">

          <p>申请目标：</p>

          <select name="mubiao">

		     <option value="2">硕士</option>

            <option value="1">本科</option>

          

            <option value="3">博士</option>

          

          </select>

        </div>

        <p>姓名：</p>

        <input name="name" type="text" />

        <p>联系方式：</p>

        <input name="phone" type="text"  />

        <div class="anniu"><input type="submit" value="立即申请" id="dosubmit" onclick="return checkData1()" name="dosubmit" class="button"></div>

        </form>





  







      </div>

      <!--资料下载-->

      <div class="f-2">

      <div class="picScroll-top">

<h1><span class="s1">资料下载</span><span class="hd"><a class="next"></a><span class="pageState"></span><a class="prev"></a></span></h1>

			<div class="bd">

				<ul class="picList">

					 <?php 

          $list=pc_base::load_model('download_model');

         $info = $list->query("SELECT a.title,a.thumb,b.downfiles FROM qu_download a,qu_download_data b where a.id=b.id ORDER BY a.id ");

         $infos = $list->fetch_array($info);

         foreach($infos as $k=>$v){

         	$tuji[$k][title]=$v[title];

         	$tuji[$k][thumb]=$v[thumb];

         	$arr_downfiles=string2array($v[downfiles]);

         	$tuji[$k][fileurl]=$arr_downfiles[0][fileurl];

         	$tuji[$k][filename]=$arr_downfiles[0][filename];

         }



     ?>

        <?php 

		  foreach ($tuji as $k=> $v){  ?>

					

					<li>

						<div class="pic"><img src="<?php echo $v['thumb'];?>"/></div>

						<div class="title">

                        <h2><?php echo $v['title'];?></h2>

                        <a href="<?php if($_username) { ?><?php echo $v['fileurl'];?><?php } else { ?>/index.php?m=member&c=index&a=register&siteid=<?php echo $siteid;?><?php } ?>">立即下载</a>

                        </div>

					</li>

  <?php }?>  



				</ul>

			</div>

		</div>

        

       </div>

     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5914daa4348edd0c5212ae9225b25ff6&sql=SELECT+%2A+FROM+qu_page+where+catid%3D32\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM qu_page where catid=32 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>

<?php echo $val['content'];?>

<?php $n++;}unset($n); ?>

<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    </div>

    <div class="clear"></div>

  </div>

  <!--尾部版权-->

<?php include template("content","bot"); ?> 



<!--遮罩层-->

<?php include template("content","login"); ?>

<script type="text/javascript" src="/style/js/jquery-1.8.3.min.js"></script> 
<script type="text/javascript" src="/style/js/search.js"></script><!--搜索-->
<script type="text/javascript" src="/style/js/cover.js"></script><!--遮罩层-->
<script type="text/javascript" src="/style/js/jquery.SuperSlide.js"></script><!--消息滚动-->
<script type="text/javascript">
jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
jQuery(".txtScroll-top").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"topLoop",autoPlay:true,delayTime:700});
jQuery(".picScroll-top").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"topLoop",autoPlay:true,vis:2});
function checkData() {

for (var i = 0; i < document.form1.length; i++) {

    if (document.form1.elements[i].type == "text" && document.form1.elements[i].value == "") {

        alert("请完善所要填写的信息!");

                 return false;

    }

}

}
function checkData1() {
    for (var i = 0; i < document.form2.length; i++) {
        if (document.form2.elements[i].type == "text" && document.form2.elements[i].value == "") {
            alert("请完善所要填写的信息!");
                     return false;

        }

    }
}
$(function() {
	$.post("/index.php?m=content&c=anliApi&a=anli",{},function(data) {
        $('#anli').html(data);
    });
    $(document).on({
        click: function() {
            repage(this.href);
            return false;
        },
    },
    ".pages a");});

function repage(url)
{
  if(typeof url == 'undefined') url='/index.php?m=content&c=anliApi&a=anli&page=<?php echo $_GET['page'];?>';
   $.post(url,$('form').serialize(),function(data){
        $('#anli').html(data);
   });
}
</script>
<script type="text/javascript" src="/style/js/tab.js"></script>
<!--选项卡-->
</body>
</html>