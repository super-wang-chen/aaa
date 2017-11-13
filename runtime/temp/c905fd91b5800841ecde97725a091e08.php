<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\freehostnew\canadalotter\web\public/../application/index\view\index\Winners.html";i:1510050549;s:81:"D:\freehostnew\canadalotter\web\public/../application/index\view\base\header.html";i:1509700338;s:81:"D:\freehostnew\canadalotter\web\public/../application/index\view\base\footer.html";i:1509589301;}*/ ?>
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
		<title>winners</title>
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
    <link type="text/css" rel="stylesheet" href="/static/index/css/Winners.css"/>
    <style type="text/css">
        .page_list{
            margin-top: 30px;
        }
    </style>


            <!--主体左侧-->
            <div class="main_left">
                <p class="title">
                    Keno Winners
                </p>
                <p>
                    Discover the latest Keno winners and find out if you play the same way. Your lucky numbers could be up next! 
                </p>

                <ul class="winners_list">
                    <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <li>
                        <ul>
                            <li><img src="<?php echo $v['pic']; ?>" alt="" width="320" height="170"/></li>
                            <li>￥<?php echo $v['keywords']; ?></li>
                            <li><?php echo $v['from']; ?></li>
                            <li><?php echo $v['description']; ?></li>

                        </ul>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                  <!--  <li>
                        <ul>
                            <li><img src="/static/index/imgs/winners_photo.jpg" alt="" width="320" height="170"/></li>
                            <li>￥745,813,348</li>
                            <li>Lotto 6/49</li>
                            <li>Marlis & Kurt G.</li>
                            <li>Port Moody,BC</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li><img src="/static/index/imgs/winners_photo.jpg" alt="" width="320" height="170"/></li>
                            <li>￥745,813,348</li>
                            <li>Lotto 6/49</li>
                            <li>Marlis & Kurt G.</li>
                            <li>Port Moody,BC</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li><img src="/static/index/imgs/winners_photo.jpg" alt="" width="320" height="170"/></li>
                            <li>￥745,813,348</li>
                            <li>Lotto 6/49</li>
                            <li>Marlis & Kurt G.</li>
                            <li>Port Moody,BC</li>
                        </ul>
                    </li>
-->
                </ul>

                <h1 class="title">
                    <span>More Keno Winners</span>
                </h1>


                <table class="more_keno">
                    <tr>
                        <th>Date</th>
                        <th>Winner</th>
                        <th>City</th>
                        <th>Game</th>
                        <th>Prize</th>
                    </tr>
                    <tr>
                        <td>Oct 12, 2017</td>
                        <td>Duane
                            Schneider</td>
                        <td>Calgary</td>
                        <td>Keno</td>
                        <td>$10,002.00</td>
                    </tr>
                    <tr>
                        <td>Oct 12, 2017</td>
                        <td>Duane
                            Schneider</td>
                        <td>Calgary</td>
                        <td>Keno</td>
                        <td>$10,002.00</td>
                    </tr>
                    <tr>
                        <td>Oct 12, 2017</td>
                        <td>Duane
                            Schneider</td>
                        <td>Calgary</td>
                        <td>Keno</td>
                        <td>$10,002.00</td>
                    </tr>
                    <tr>
                        <td>Oct 12, 2017</td>
                        <td>Duane
                            Schneider</td>
                        <td>Calgary</td>
                        <td>Keno</td>
                        <td>$10,002.00</td>
                    </tr>
                    <tr>
                        <td>Oct 12, 2017</td>
                        <td>Duane
                            Schneider</td>
                        <td>Calgary</td>
                        <td>Keno</td>
                        <td>$10,002.00</td>
                    </tr>
                    <tr>
                        <td>Oct 12, 2017</td>
                        <td>Duane
                            Schneider</td>
                        <td>Calgary</td>
                        <td>Keno</td>
                        <td>$10,002.00</td>
                    </tr>
                    <tr>
                        <td>Oct 12, 2017</td>
                        <td>Duane
                            Schneider</td>
                        <td>Calgary</td>
                        <td>Keno</td>
                        <td>$10,002.00</td>
                    </tr>
                    <tr>
                        <td>Oct 12, 2017</td>
                        <td>Duane
                            Schneider</td>
                        <td>Calgary</td>
                        <td>Keno</td>
                        <td>$10,002.00</td>
                    </tr>
                    <tr>
                        <td>Oct 12, 2017</td>
                        <td>Duane
                            Schneider</td>
                        <td>Calgary</td>
                        <td>Keno</td>
                        <td>$10,002.00</td>
                    </tr>
                    <tr>
                        <td>Oct 12, 2017</td>
                        <td>Duane
                            Schneider</td>
                        <td>Calgary</td>
                        <td>Keno</td>
                        <td>$10,002.00</td>
                    </tr>
                </table>

                <?php echo $page; ?>
            </div>

            <!--主体左侧-->

            <!--主体右侧区域-->
            <div class="main_right">
                <i>Recent Winners</i>
                <h4>￥745,813,348</h4>
                <p>Total Lottery Prizes Won
                    Last Year in BC</p>
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
<style>
    .pagings{
        text-align: center;
        font-size: 14px;
        height: 24px;

    }
    .pagings li{
        margin-right:10px;
        display:inline;
    }
    .pagings li a:hover{
        color: #0E8F61;
    }

</style>
