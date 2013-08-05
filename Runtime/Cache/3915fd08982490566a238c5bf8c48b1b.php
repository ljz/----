<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
</head>
<body>
<td>
<!--style type="text/css">
2         #iconsale {
	3                 background: url(/Public/Img/index/icon.png) no-repeat top left;
	4                 background-position: 0 -405px;
	5                 height: 85px;
	6                 width: 85px;
	7                 margin: 0 auto;
	8                 cursor: pointer;
	9         }
	10         #iconsale:hover {
		11                 background-position: 0 -1215px;
		12         }
		1 </style-->
		<?php if(!empty($salesonduty)): ?><div id="iconsale" onclick="javascript:window.open('http://bizapp.qq.com/webc.htm?new=0&sid=800020304&eid=&o=www.dnspod.cn&q=7', '_blank', 'height=544,width=644,toolbar=no,scrollbars=no,menubar    =no,status=no');" title="企业QQ咨询：800020304"></div>
		<br/>
		<div>
		<a href="http://bizapp.qq.com/webc.htm?new=0&sid=800020304&eid=&o=www.dnspod.cn&q=7">QQ咨询</a>
		</div>
		<div>与销售在线聊天</div>
		<?php else: ?>
		<div id="iconsale" href="javascript: void(0);" onclick="javascript: window.open('http://<?php echo (C("TICKETS_PATH")); ?>/visitor/index.php?/Default/LiveChat/Chat/Request/_sessionID=/_promptType=cha    t/_proactive=0/_filterDepartmentID=6/_randomNumber=c0f2p576erqxa5yz9qpnp6qpemkvs7ih/_fullName=<?php print_r($_SESSION['userrealnameURLcode']);?>/_email=<?php print_r($_SESSION['useremailURLcode']);?>/_    vstring=/', 'livechatwin', 'toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=0,resizable=1,height=390,width=720');" class="livechatlink"  title="点击向销售发送离线留言"></div>
		<br/>
		<div>销售离线留言</div><?php endif; ?>

<!--  xiaoshou mokuai -->
</td>

</body>
</html>