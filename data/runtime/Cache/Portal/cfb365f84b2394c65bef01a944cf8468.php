<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>富农管理</title>
    <link rel="stylesheet" href="/themes/simplebootx/Public/assets/css/weui/weuix.min.css">
    <link rel="stylesheet" href="/themes/simplebootx/Public/assets/css/commen.css">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-color: #fff;
        }
        .weui-header .weui-header-title, .weui-header h1{
            color:#000;
            font-size:22px;
        }
        .weui-header .weui-header-left, .weui-header .weui-header-right{
            color:#000;
        }
        .f-white {
            color: #000 !important;
        }
        .bg-orange {
            background-color: white;
            border-bottom:1px solid #ccc;
            
        }
        .bg-orange:not(.weui_btn_disabled):active {
            color: rgba(255, 255, 255, 0.4);
            background-color: #fff;
        }
        .container{
            background-color: #fff;
			padding: 0 15px;
			}
			.index-content li{
				width: 50%;
				float: left;
			}
			.index-content .index-top{
				width: 40%;
				padding: 15px;
				padding-top: 40px;
				margin: 0 auto;
			}
			.index-content .index-bottom{
                text-align: center;
                color:black;
			}
    </style>
</head>
<body>
     <div class="bg-orange weui-header "> 
        <div class="weui-header-left"><a class="icon icon-95 f-white">微信</a></div>
        <h1 class="weui-header-title">富农管理</h1>
    </div>
    <div class="container">
			<div class="empty"></div>
			<div class="index-content">
				<ul class="clearfix">
					<li>
						<a href="<?php echo U('portal/database/minmarket');?>">
							<div class="index-top">
								<img src="/themes/simplebootx/Public/assets/images/dataimg/img/blance.png"/>
							</div>
							<div class="index-bottom">
								现货采销平衡表
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo U('portal/database/sale');?>">
							<div class="index-top">
								<img src="/themes/simplebootx/Public/assets/images/dataimg/img/sell.png"/>
							</div>
							<div class="index-bottom">
								销售统计
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo U('portal/database/purchase');?>">
							<div class="index-top">
								<img src="/themes/simplebootx/Public/assets/images/dataimg/img/buy.png"/>
							</div>
							<div class="index-bottom">
								采购统计
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo U('portal/database/saleopen');?>">
							<div class="index-top">
								<img src="/themes/simplebootx/Public/assets/images/dataimg/img/order.png"/>
							</div>
							<div class="index-bottom">
								销售开单统计
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo U('portal/database/purchaseopen');?>">		
							<div class="index-top">
								<img src="/themes/simplebootx/Public/assets/images/dataimg/img/buyer.png"/>
							</div>
							<div class="index-bottom">
								采购开单统计
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo U('portal/database/userdata');?>">
							<div class="index-top">
								<img src="/themes/simplebootx/Public/assets/images/dataimg/img/customer.png"/>
							</div>
							<div class="index-bottom">
								用户统计
							</div>
						</a>
					</li>
				</ul>
			</div>		
		</div>
</body>
</html>