<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"D:\freehostnew\canadalotter\web\public/../application/index\view\index\how_to_play.html";i:1509699741;s:81:"D:\freehostnew\canadalotter\web\public/../application/index\view\base\header.html";i:1509700338;s:81:"D:\freehostnew\canadalotter\web\public/../application/index\view\base\footer.html";i:1509589301;}*/ ?>
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
		<title>how_to_play</title>
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
    <link type="text/css" rel="stylesheet" href="/static/index/css/how_to_play.css">

            <div class="main_left">
                <p class="title">
                    How to play
                </p>
                <ul class="describe">
                    <li>Find out all the great Keno prizes available to be won and the odds of winning them.</li>
                    <li>About Keno</li>
                    <li>With draws every 3:30 minutes, Keno is fast and fun excitement. Playing is easy.
                        Buy your tickets from your favourite lottery retailer, bar or pub, or online at PlayNow.com.</li>
                </ul>
                <h1 class="title">
                    <span>How to play</span>
                </h1>
                <ul class="play_step">
                    <li>
                        <h1>step1</h1>
                        <p>Choose how many numbers you want to play per draw.
                            You can select up to 10 numbers. Check out
                            the Keno Prizes & Odds table to help you decide how many numbers to pick and
                            to see the
                            corresponding prize amounts.</p>
                    </li>
                    <li>
                        <h1>step2</h1>
                        <p>Pick your own numbers from 1 to 80. Can't decide? Play Quick Pick to have random numbers chosen for you.
                        </p>
                    </li>
                    <li>
                        <h1>step3</h1>
                        <p>Choose how many consecutive draws you want to play, up to a maximum of 99.</p>
                    </li>
                    <li>
                        <h1>step4</h1>
                        <p>Decide how much you want to spend per draw. You can wager $1, $2, $5 or $10 per draw. The total cost of your ticket is the number of consecutive draws, multiplied by the amount you choose to spend per draw. The maximum ticket cost is $100 when playing Keno.
                        </p>
                    </li>
                    <li>
                        <h1>step5</h1>
                        <p>Say “Yes” to Keno Bonus and you could multiply your winnings by 1.5, 2, 5, 7, or 10 times.. When you add Keno Bonus, the cost of your ticket doubles. The maximum ticket price is $200 when playing Keno with Keno Bonus.
                        </p>
                    </li>
                    <li>
                        <h1>step6</h1>
                        <p>Watch the Keno draw to see the Keno Bonus multiplier and to see which 20 numbers are drawn. Celebrate if you win!
                            For a fun and different way of playing Keno, try Keno Pattern Play and play with patterns instead of numbers.</p>
                    </li>
                </ul>

                <h1 class="title">
                    <span> Keno Pattern Play</span>
                </h1>

                <p class="keno_info">
                    Keno Pattern Play lets you choose patterns instead of numbers. You can choose preset patterns like Crazy Corners, Diamond Daze, or Bull's Eye, or you can make your own pattern by selecting Rows and Columns. Keno Pattern Play costs $2 per selection.
                </p>
                <ul class="keno_step">
                    <li>
                        <span>Step 1:</span>
                        Choose your pattern. Each pattern is comprised of 40 numbers.
                        Play one of our pre-set patterns: Crazy Corners, Diamond Daze, or Bull's Eye.

                        <img src="/static/index/imgs/play_1.jpg" alt="">
                        <span class="or_text">Or</span>
                        <p>Play Rows and Columns: Pick 4 rows, Pick 5 columns, or Pick 3 rows and 2 columns</p>

                        <img src="/static/index/imgs/play_2.jpg" alt="">
                        <span class="or_text">Or</span>
                        <p>Can't decide? Play Quick Pick, where 40 random numbers are chosen for you.
                        </p>
                    </li>
                    <li>
                        <span>Step 2:</span> You can choose how many consecutive draws you'd like to play, up to a maximum of 49. Each Keno Pattern Play costs $2. Your total wager is the number of consecutive draws, multiplied by $2. The maximum Keno Pattern Play wager is $490.

                    </li>
                    <li>
                        <span>Step 3:</span> Watch the Keno monitor to see which 20 numbers are drawn and to see how many numbers you've matched. Check out the Keno Pattern Play Prizes & Odds table to see if you've won and to see your prize.

                    </li>
                </ul>

                <h1 class="title">
                    <span>Draw Info</span>
                </h1>

                <p class="keno_info">
                    Keno Draws are held every 3:30 minutes, except Tuesday through Sunday from 4:00 a.m. to 4:50 a.m. and Monday from 4:00 a.m. to 6:05 a.m.
                    The Keno Bonus draw occurs right before each 3:30 minute Keno draw. Keno Bonus will display 1.5x, 2x, 5x, 7x, or 10x. With Keno Bonus, you have the chance to multiply your Keno winnings by 1.5, 2, 5, 7, or 10 times.
                </p>
                <div class="learn_more">
                    <h1>Playing Responsibly</h1>
                    Know how the game works and what the odds are before playing.
                    The more you know about the games, the better equipped you are to make informed decisions when you play.
                    <span>Learn More About the Odds at GameSense.ca</span>
                </div>
            </div>
            <!--主体左侧区域-->

            <!--主体右侧区域-->
            <div class="main_right">
                <i>Winning Numbers</i>
                <a href="">Canada Berse</a>
                <p class="date">monady,october 9.2017</p>
                <p class="num">21920252200</p>
            </div>
            <!--主体右侧区域-->
        </div>
        <!--主体区域-->


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