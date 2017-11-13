<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:90:"D:\freehostnew\canadalotter\web\public/../application/index\view\index\WinningNumbers.html";i:1509935611;s:81:"D:\freehostnew\canadalotter\web\public/../application/index\view\base\header.html";i:1509700338;s:81:"D:\freehostnew\canadalotter\web\public/../application/index\view\base\footer.html";i:1509589301;}*/ ?>
<?php $id = input('id'); $pid = input('pid'); $cid=input('cid');?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<?php if(empty($id) || ($id instanceof \think\Collection && $id->isEmpty())): ?>
		<link type="text/css" rel="stylesheet" href="/static/index/css/index.css">
		<?php else: ?>
	
		
        <link type="text/css" rel="stylesheet" href="/static/index/css/winning_numbers.css"/>
        <?php endif; ?>
       
		<link type="text/css" rel="stylesheet" href="/static/index/css/common.css" />		
		<script type="text/javascript" src="/static/index/js/jquery-1.11.1.min.js"></script>		
        <script type="text/javascript" src="/static/index/js/jedate-6.0.0/layDate-v5.0.7/laydate/laydate.js"></script>
		<title>winning numbers</title>
	</head>

	<body>

		<div class="box">
			<!--顶部信息-->
			<div class="header">
				<p class="header_content">
					Hello! Welcome to the lottery
				</p>
			</div>
			
			
		
			<style>
				.nav>li:nth-child(2){
					width: auto;
				}
			</style>
			<!--顶部信息-->
			<div class="main">
				<ul class="nav">
					<?php $nav = get_nav();if(is_array($nav) || $nav instanceof \think\Collection): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<li>
						<a href="<?=url($v['link'],['id'=>$v['id']])?>">
							<img src="<?php echo $v['pic']; ?>" alt="">
							<?php if($id == $v['id']): ?>
							<span style="color: white;"> <?php echo $v['title']; ?></span>
							<?php else: ?>
							<span class="nav1"> <?php echo $v['title']; ?></span>
							<?php endif; ?>
						</a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<!--logo-->
				<a class="home" href="/">
					<img src="<?php echo $SITE_LOGO; ?>" alt="" class="logo">
				</a>
				<!--logo-->
<style type="text/css">
	#layui-laydate1{
		width: 100%;
		height: 100%;
	}
	.layui-laydate-main{
		width: 100%;
	}
	.laydate-footer-btns .laydate-btns-confirm{
		display:none;
	}
</style>

<!--主体左侧-->
<div class="main_left">
	<p class="title">
		Keno Winning Numbers
	</p>

	<p class="select_date">
		Select a Date to vlew
	</p>
	<div class="calendar">
		<span class="date"></span>
	</div>
	<div class="search_date">
		<form action="" method="post">
			<label for="search_num">Search by Draw Number</label>
			<input type="text" id="search_num" name="number"/>
			<label for="show_num">Number of draw to show</label>
			<input type="number" value="1" id="show_num" name="key"/>
			<input type="submit" value="Search" onclick="search();return false;" />
		</form>
	</div>

	<div class="show_recent">
		<a href="">Show Most Recent</a>
		<ul>
			<li>
				<a href="javascript:vodie(0)">10</a>
			</li>
			<li>
				<a href="javascript:void(0)">50</a>
			</li>
			<li>
				<a href="javascript:void(0)">100</a>
			</li>
			<li>
				<a href="javascript:void(0)">ALL</a>
			</li>
		</ul>
		<span>Results per Page: </span>

	</div>

	<i class="time_title"><?=date('F d,Y',time())?></i>

	<ul class="winning_numbers" id="tt">
		<?php if(is_array($db) || $db instanceof \think\Collection): $k1 = 0; $__LIST__ = $db;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k1 % 2 );++$k1;?>
		<li>
			<h4>Draw #<?php echo $v['key']; ?>/<?=date('H:i:s',$v['add_time'])?></h4>
			<p>
				<?php echo $v['title']; ?>
			</p>

			<?php if(is_array($list) || $list instanceof \think\Collection): $k2 = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k2 % 2 );++$k2;if($k1 == $k2): ?>
			<ul>
				<?php if(is_array($vo) || $vo instanceof \think\Collection): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$k): $mod = ($i % 2 );++$i;?>
				<li>
					<?php echo $k; ?>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<?php echo $page; ?>
</div>
<style>
	.pagination{
		text-align: center;
		font-size: 14px;
		height: 24px;

	}
	.pagination li{
		margin-right: 20px;
		display:inline;
	}
	.pagination li a:hover{
		color: #0E8F61;
	}
</style>
<!--主体左侧-->

<!--主体右侧区域-->
<div class="main_right">
	<i>Recent Winners</i>
	<h4>￥<?php echo $news_list[0]['max1']; ?></h4>
	<p>Total Lottery Prizes Won Last Year in BC</p>

	<ul class="winners_list">
		<?php if(is_array($list1) || $list1 instanceof \think\Collection): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
		<li>
			<ul>
				<li><img src="<?php echo $v['pic']; ?>" alt="" /></li>
				<li>￥<?php echo $v['keywords']; ?></li>
				<li><?php echo $v['from']; ?></li>
				<li><?php echo $v['description']; ?></li>
			</ul>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<!--主体右侧区域-->

</div>
<!--主体内容-->

        <!--底部信息-->
        <div class="link_share">
            <div class="link_share_content">
                <ul class="link">
                	<?php $nav = get_nav();if(is_array($nav) || $nav instanceof \think\Collection): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?=url($v['link'],['id'=>$v['id']])?>"><?php echo $v['title']; ?></a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                   <!-- <li>
                        <a href=""> Winning Numbers  </a>
                    </li>
                    <li>
                        <a href=""> Winners  </a>
                    </li>
                    <li>
                        <a href="">How to Play</a>
                    </li>-->
                </ul>
                <ul class="share" style="margin-top: 10px;">
                	<div class="bshare-custom icon-medium-plus">
                		<div class="bsPromo bsPromo2"></div>
                		<a title="分享到Facebook" class="bshare-facebook" href="javascript:void(0);"></a>
                		<a title="分享到飞信" class="bshare-feixin" href="javascript:void(0);"></a>
                		<a title="分享到Twitter" class="bshare-twitter" href="javascript:void(0);"></a>
                		<a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
                		<span class="BSHARE_COUNT bshare-share-count" style="float: none;">55.9K</span>
                	</div>
                	<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
                	<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
                   <!-- <li>
                        <a href="">
                            <img src="/static/index/imgs/ff.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/imgs/play.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/imgs/bird.png" alt="">
                        </a>
                    </li>-->
                </ul>
            </div>
            <i class="concluding_remarks">
                If you gamble,use your GameSense
            </i>
        </div>
        <!--底部信息-->
    </div>

    <!--顶部信息-->
</body>
</html>

<script type="text/javascript" src="/static/index/js/laydate.js"></script>
<script type="text/javascript">
    laydate.render({
        elem: '.calendar', //指定元素
        position:"static",
        change:function (value,data) {
            lay('.date').html(value);
            //var ss=$(".date").html();
            //alert(ss);
        },
        lang:"en"
    });
    function search(){
        var url = '/index/index/goods';
        var DateTime = $(".date").html();
        var SearchNum = $("#search_num").val();
        var ShowNum = $('#show_num').val();
        //alert(url);
		/*$.post(url,{time:DateTime,sernumber:SearchNum,snumber:ShowNum},function (data){

		 });*/
        $("<div></div>").load(url,{time:DateTime,sernumber:SearchNum,snumber:ShowNum},function(data){
            var dat = $(this).find("#tt").html();
            $("#tt").html(dat);
            $(this).remove();
        })
        // alert(url);
    }
    if(!window.name){
        window.name = 'test';
        //alert("第一次开这个窗口！name值"+ window.name);
        myajax();
    }else{
        //alert('bushi');
        setInterval(function(){myajax()},210000);
    }
    function myajax(){
        $.ajax({ url: "/index/index/AjaxAddAll/", success: function(){
            window.location.href="/index/index/goods/id/89";
        }});
    }
    $(".show_recent ul li a").click(function(){
        var aa = $(this).html();
        var url = '/index/index/goods/';
        alert(aa);
    });
</script>
    