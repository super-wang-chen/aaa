<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"D:\freehostnew\canadalotter\web\public/../application/index\view\index\prizes_odds.html";i:1510048433;s:81:"D:\freehostnew\canadalotter\web\public/../application/index\view\base\header.html";i:1509700338;s:81:"D:\freehostnew\canadalotter\web\public/../application/index\view\base\footer.html";i:1509589301;}*/ ?>
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
		<title>prizes_olds</title>
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
<link type="text/css" rel="stylesheet" href="/static/index/css/prizes_odds.css"/>

<!--主体左侧-->
<div class="main_left">
    <p class="title">
        Canada Berse Prizes & Odds
    </p>
    <p>
        Find out all the great Keno prizes available to be won and the odds of winning them.
    </p>
    <h1 class="title">
        <span>Keno Prize Table & Odds</span>
    </h1>
    <p>
        Match your Keno numbers to the numbers drawn to see if you win. Your prize will depend on how many numbers you picked and how many numbers you matched.
    </p>

    <table class="odds_tab1">
        <tr>
            <th>Numbers<br/>
                Picked
            </th>
            <th>Numbers<br/>
                Matched
            </th>
            <th>
                Prize Amount<br/>
                (for each $2 play)
            </th>
            <th>Odds*</th>
            <?php if(is_array($t_number) || $t_number instanceof \think\Collection): $k = 0; $__LIST__ = $t_number;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?>
        <tr>
            <td><?php echo $v['keywords']; ?></td>

            <?php if(is_array($c_number) || $c_number instanceof \think\Collection): $k1 = 0; $__LIST__ = $c_number;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;if($k == $k1): ?>
            <td><?php echo $vo['0']; ?></td>
            <?php endif; endforeach; endif; else: echo "" ;endif; if(is_array($str_new) || $str_new instanceof \think\Collection): $k3 = 0; $__LIST__ = $str_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($k3 % 2 );++$k3;if($k3 == $k): ?>
            <td>$<?php echo $vi; ?></td>
             <?php endif; endforeach; endif; else: echo "" ;endif; if(is_array($arr_new) || $arr_new instanceof \think\Collection): $k2 = 0; $__LIST__ = $arr_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($k2 % 2 );++$k2;if($k2 == $k): ?>
            <td><?=sprintf("%01.2f", $voo*100).'%';?></td>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tr>
    </table>

    <div class="approximate_odds">
        <h1>*Approximate Odds</h1>
        <h2>More Information</h2>
        <p>The maximum prize that can be won on any one Keno ticket,
            not including Keno Bonus, is $200,000, regardless of the amount wagered.
            The maximum combined liability for a given draw is $2 million. If you've won a prize of more than $1,000,
            the earliest you can claim your prize is the day after the draw.</p>
    </div>

    <h1 class="title">
        <span>Keno Bonus Prize Table & Odds</span>
    </h1>

    <table class="odds_tab2 odds">
        <tr>
            <th>聽</th>
            <th>1.5×</th>
            <th>2×</th>
            <th>5×</th>
            <th>7×</th>
            <th>10×</th>
        <tr>
            <td>Odds</td>
            <td>1 in 2.0</td>
            <td>1 in 2.2</td>
            <td>1 in 24.7</td>
            <td>1 in 49.4</td>
            <td>1 in 346</td>
        </tr>
        </tr>
    </table>
    <div class="approximate_odds">
        <h1>*Approximate Odds</h1>
        <h2>More Information</h2>
        <p>The maximum prize that can be won on a Keno ticket with Keno Bonus for any given draw is 10 times the value of the Keno prize.
            If you've won a prize of more than $1,000, the earliest you can claim your prize is the day after the draw.</p>
    </div>

    <h1 class="title">
        <span> Keno Pattern Play Prize Table & Odds</span>
    </h1>
    <p>Match your 40 Keno Pattern Play numbers to the numbers drawn to see if you win. </p>

    <table class="odds_tab3">
        <tr>
            <th>Numbers<br/>
                Matched</th>
            <th>Prize Amount</th>
            <th>Odds*/$2Play</th>
        <tr>
            <td>20 or 0</td>
            <td>$50.000</td>
            <td>1 in 12.823.377</td>
        </tr>
        <tr>
            <td>20 or 0</td>
            <td>$50.000</td>
            <td>1 in 12.823.377</td>
        </tr>
        <tr>
            <td>20 or 0</td>
            <td>$50.000</td>
            <td>1 in 12.823.377</td>
        </tr>
        <tr>
            <td>20 or 0</td>
            <td>$50.000</td>
            <td>1 in 12.823.377</td>
        </tr>
        <tr>
            <td>20 or 0</td>
            <td>$50.000</td>
            <td>1 in 12.823.377</td>
        </tr>
        <tr>
            <td>20 or 0</td>
            <td>$50.000</td>
            <td>1 in 12.823.377</td>
        </tr>
        <tr>
            <td>20 or 0</td>
            <td>$50.000</td>
            <td>1 in 12.823.377</td>
        </tr>
        <tr>
            <td>20 or 0</td>
            <td>$50.000</td>
            <td>1 in 12.823.377</td>
        </tr>
        <tr>
            <td>20 or 0</td>
            <td>$50.000</td>
            <td>1 in 12.823.377</td>
        </tr>
        <tr>
            <td>20 or 0</td>
            <td>$50.000</td>
            <td>1 in 12.823.377</td>
        </tr>

    </table>

</div>
<!--主体左侧-->

<!--主体右侧区域-->
<div class="main_right">
    <i>Winning Numbers</i>
    <a href="">Canada Berse</a>
    <p class="date">monady,october 9.2017</p>
    <p class="num">21920252200</p>
</div>
<!--主体右侧区域-->
</div>
<!--主题内容-->


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
      