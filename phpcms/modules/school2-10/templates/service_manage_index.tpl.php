﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>phpcmsV9 - 后台管理中心</title>
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>zh-cn-system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>style/zh-cn-styles1.css" title="styles1" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo CSS_PATH;?>style/zh-cn-styles2.css" title="styles2" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo CSS_PATH;?>style/zh-cn-styles3.css" title="styles3" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo CSS_PATH;?>style/zh-cn-styles4.css" title="styles4" media="screen" />
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>admin_common.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>styleswitch.js"></script>
</head>
<body>

<style type="text/css">
	html{_overflow-y:scroll}
</style>
<div class="pad-lr-10">
  <div class="table-list">
    <table width="100%" cellspacing="0" >
      <thead>
        <tr>
          <th width="20">id</th>
          
          <th>姓名</th>
          <th>联系方式</th>
          <th>申请国家</th>
          <th>目标</th>
          <th>时间</th>
        </tr>
      </thead>
      <tbody>
        <?php 
		  foreach ($infos as $v){  ?>
        <tr>
          <td align='center'><?php echo $v['id'] ?></td>
          <td align='center'><?php echo $v['name'] ?></td>
          <td align='center'><?php echo $v['phone'] ?></td>
          <td align='center'>
		  <?php if($v['guojia']==1){echo "美国";}
		   elseif($v['guojia']==2){echo "英国";}
		   elseif($v['guojia']==3){echo "加拿大";}
	       elseif($v['guojia']==4){echo "澳大利亚";}
		   elseif($v['guojia']==5){echo "新加坡";}
		   elseif($v['guojia']==6){echo "香港";}
		  ?>
		  </td>
          <td align='center'>
		  <?php if($v['mubiao']==1){echo "本科";}
		   elseif($v['mubiao']==2){echo "硕士";}
		   elseif($v['mubiao']==3){echo "博士";}
	       elseif($v['mubiao']==4){echo "博士后";}
		  
		  ?>
		</td>
          
          <td align='center'><?php echo date('Y-m-d H:i:s',$v[shijian]) ?></td>
          <?php } ?>
        </tr>
      </tbody>
    </table>
    <div id="pages"> <?php echo $pages;?> </div>
  </div>
</div>
</body>
</html>