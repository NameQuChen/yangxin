<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\xampp\htdocs\public/../application/admin\view\Main\dingdan_xinxi.html";i:1509355558;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<style type="text/css" media=print>
.noprint{display : none }

</style>
<style type="text/css">
	.dianpu_name{
		text-align:center;
		margin-bottom:20px;
	}
	#biaoti div{
		float: left;
	}
	.dingdan_xiangqing{
		clear: both;
	}
	.dingdan_xiangqing div{
		float: left;
	}
</style>
<input id="btnPrint" type="button" value="打印" class="noprint" onclick="javascript:window.print();" />



<p class="noprint"></p>
	

<?php if($goods): ?>
<div class="dianpu_name">欢迎光临:ssss</div>
	<div class="diancan_xinxi" style="padding: 10px;border-top:1px solid; border-top-style:dashed;">
	<div id="biaoti">
		<div style="width:40%;">名称</div>
		<div style="width:30%;">数量</div>
		<div style="width:30%;">单价/元</div>
	</div>
	<?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<div class="dingdan_xiangqing">
			<div style="width:40%;"><?php echo $vo; ?></div>
			<div style="width:30%;"><?php echo $shops[$key]; ?></div>
			<div style="width:30%;"><?php echo $moneys[$key]; ?></div>
		</div>
	
	<?php endforeach; endif; else: echo "" ;endif; ?>
	
	</div>

		
		<div style="text-align:right;padding-top:10px;clear: both;border-top:1px solid; border-top-style:dashed;padding-right: 30px;">
			<span>总额:</span><label><?php echo $money/1000; ?>元</label>
		</div>
		<div style="text-align:right;padding-top:10px;padding-right: 30px;">
			<span>下单时间：</span><?php echo $time; ?>
		</div>
		<div style="margin-top:20px;text-align:center">***************</div>
		
<?php endif; ?>
<script>

function preview(oper)
{
if (oper < 10)
{
bdhtml=window.document.body.innerHTML;//获取当前页的html代码
sprnstr="<!--startprint"+oper+"-->";//设置打印开始区域
eprnstr="<!--endprint"+oper+"-->";//设置打印结束区域
prnhtml=bdhtml.substring(bdhtml.indexOf(sprnstr)+18); //从开始代码向后取html

prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));//从结束代码向前取html
window.document.body.innerHTML=prnhtml;
window.print();
window.document.body.innerHTML=bdhtml;
} else {
window.print();
}
}
</script>

</body>
</html>