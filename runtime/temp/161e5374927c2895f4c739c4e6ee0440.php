<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\freehostnew\canadalotter\web\public/../application/index\view\index\index.html";i:1509786690;s:81:"D:\freehostnew\canadalotter\web\public/../application/index\view\base\header.html";i:1509700338;s:81:"D:\freehostnew\canadalotter\web\public/../application/index\view\base\footer.html";i:1509589301;}*/ ?>
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
		<title>home page</title>
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

        <!--主体内容-->
      


            <!--banner-->
            <div class="banner">
                <?php $banner = get_one('category',33);?>
                <img src="<?php echo $banner['pic']; ?>" alt="" height="400" width="100%">
            </div>
            <!--banner-->

            <!--今日彩票-->
            <div class="today">
                <div class="lottery">
                    <i class="num">01</i>
                    <span>Today the lottery</span>
                    <a class="rule one" href="">
                        <img src="/static/index/imgs/rule.png" alt="">
                        I want to bet
                    </a>
                    <a class="rule" href="/index/index/content/id/91">
                        <img src="/static/index/imgs/rule.png" alt="">
                        How to Play
                    </a>
                </div>
                <div class="canada_berse " style="margin: 18px auto 21px;">
                    <span class="canada_berse_title">
                        CanadaBerse
                    </span>
                    <ul class="winning_num">
                    	<?php if(is_array($list_array) || $list_array instanceof \think\Collection): $i = 0; $__LIST__ = $list_array;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    	<li><?php echo $v; ?></li>  
                    	<?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>                      
                    </ul>
                </div>
                <div class="canada_berse">
                    <p class="canada_berse_text">Prize pool accumulated:￥557,828,271</p>
                    <p style="text-align: center;font-size: 14px">First prize 1754 note 12,742 yuan second prize 57268 note 167 yuan 9 177352 note 75 yuan</p>
                </div>
            </div>
            <!--今日彩票-->

            <!--最近获奖者-->
            <div class="recent_winners">
                <i class="num">02</i>
                <p class="recent_winners_title">
                    Recent Winners
                </p>
                <div class="how_much">
                    <p class="number">￥<?php echo $news_list[0]['max1']; ?></p>
                    Total Lottery Prizes Won
                    Last Year in BC
                </div>

                <ul class="winners_list">
                	<?php if(is_array($news_winner) || $news_winner instanceof \think\Collection): $i = 0; $__LIST__ = $news_winner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li style="background: url(/static/index/imgs/blue_bg.png)no-repeat;">
                        <ul>
                            <li style="font-size: 0"><img src="<?php echo $vo['pic']; ?>" alt=""></li>
                            <li style="font-size:14px;">￥<?php echo $vo['keywords']; ?></li>
                            <li><?php echo $vo['from']; ?></li>
                            <li><?php echo $vo['description']; ?></li>                 
                        </ul>
                        <a href="<?=url('/index/index/news',['id'=>$vo['id']])?>">READ MORE</a>
                    </li>
                      <?php endforeach; endif; else: echo "" ;endif; ?>                  
                </ul>

                <a href="/index/index/news/id/90" class="more_winners">
                    MORE WINNERS
                </a>
            </div>
            <!--最近获奖者-->

            <!--怎么玩-->
            <div class="how_to_play">
               <p class="how_play_title">
                  <i class="num">03</i>
                  <span>
                      How to Play
                  </span>
               </p>

                <ul class="rule_description">
                	<?php if(is_array($content_Play) || $content_Play instanceof \think\Collection): $i = 0; $__LIST__ = $content_Play;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?>
                    <li>
                        <ul>
                            <li><?php echo $vi['title']; ?></li>
                            <li style="font-weight: 700"><?php echo $vi['keywords']; ?></li>
                            <li><?php echo $vi['description']; ?></li>
                        </ul>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>          
                </ul>

                <a href="/index/index/content/id/91" class="learn_more">
                    LEARN MORE
                </a>
            </div>
            <!--怎么玩-->
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