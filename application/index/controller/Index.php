<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Validate;
use think\Request;
use think\File;
header("Content-type:text/html;charset=utf-8");
class Index extends Controller
{
    public function _initialize()
    {
        $this->request = request();
        /*初始化网站配置 * */
        $config=get_config();
        $_config=array();
        foreach($config as $v){
            $_config[strtoupper($v['k'])]=$v['v'];
        }
        if($_config['SITE_CLOSE']==1){
            echo $_config['SITE_CLOSE_CONTENT'];exit;
            //$this->error();
        }
        $this->assign($_config);
        //获取导航
        $data['nav'] = get_nav();
        //获取二级导航
        //$aaa = get_second_nav('24');
        //print_r($aaa);die;
        //获取当前方法名
        $request = request();
        $data['now_action'] = $request->action();
        $this->assign($data);
    }

    public function index(){
        //今日彩票
        //当天的零点
        $dayBegin = strtotime(date('Y-m-d', time()));
        //当天的24点
        $dayEnd = $dayBegin + 24 * 60 * 60;
        $list = db("goods")->where('add_time','>',$dayBegin,'<',$dayEnd)->order('id desc')->field('lottery')->find();
        $data['list_array'] = explode(',',$list['lottery']);

        //奖池(奖金最高的)
        $data['news_list'] =Db::query("SELECT Max(keywords) As max1 From txht_article");
        //print_r($news_list);
        //最近获奖者
        $data['news_winner'] = db('article')->where('id>0')->order('add_time desc')->limit(3)->select();
        //print_r($data);
        //如何玩
        $data['content_Play'] = db('category')->where('pid=91')->limit(3)->select();
        $this->assign($data);
        return view();
    }


    //留言
    public function lyb(){
        if($this->request->isPost()){
            $post = input('post.');
            //print_r($post);die;
            $rule = [
                'content|内容'  => 'require',
            ];
            $validate = new Validate($rule);
            $result   = $validate->check($post);
            if(!$result){
                $this->error($validate->getError());
            }
            unset($post['__hash__']);
            $post['add_time'] = time();
            $post['status']= 1;
            //print_r($post);die;
            $res = db('lyb')->insert($post);
            if($res){
                $this->success('留言成功！');
            }else{
                $this->error('留言失败！');
            }
        }
    }

    //单页
    public function content(){

        return view('how_to_play');
    }
    public function goods(){

        //print_r($curl);die;
        if(Request::instance()->isPost()){
            $data = input('post.');
            $time = strtotime($data['time']);
            $key= $data['sernumber'];
            $pagesize=$data['snumber'];
            $begintime= strtotime(date('Y-m-d 00:00:00', $time));
            //当天23点59分59秒
            $endtime = strtotime(date('Y-m-d 23:59:59', $time));
            $db=db('goods');
            $number['db'] = db("goods")->page('page','pagesize')->where('add_time','>',$begintime,'<',$endtime)->where(array("key"=>$key))->order('id desc')->paginate($pagesize,false,['type'=>'Bootstrap']);
            $number['page']=$number['db']->render();
        }else{
            //今天的零点 和今天的23点59分59秒
            $todayStart= date('Y-m-d 00:00:00', time());
            $todayEnd= date('Y-m-d 23:59:59', time());
            $shownumber = !empty(input('shownumer'))?input('shownumer'):10;
            //过滤掉因刷新次数过多导致的重复字段
            $number['db'] = db('goods')->distinct(true)->where('add_time','>',$todayStart and 'add_time ','<',$todayEnd)->field('key,title,lottery,add_time,status')->order('id desc')->paginate($shownumber,false,['type'=>'Bootstrap']);

            $number['page']=$number['db']->render();
            //print_r($data['page']);die;
            //$number['db'] = db("goods")->page('page','pagesize')->where('add_time','>',$begintime,'<',$endtime)->where(array("key"=>$key))->select();
        }
        foreach($number['db'] as $k=>$v){

            $number['list'][] = explode(',',$v['lottery']);
        }

        //右侧
        $list1 = db('article')->where('id>0')->order('add_time desc')->limit(3)->select();

        $news_list =Db::query("SELECT Max(keywords) As max1 From txht_article");
        $this->assign("news_list",$news_list);
        $this->assign("list1",$list1);
        $this->assign($number);
        return view('WinningNumbers');
    }
    //新闻列表页
    public function news(){
        //最近获奖者
          $id = !empty(input('cid'))?input('cid'):93;
          $winner = get_p($id,'article',2);
          //print_r($winner);die;
          $this->assign($winner);
        return view('Winners');
    }


    //图片列表页
    public function pic(){
        //获取挑选的数字
        $list['t_number'] = db('pic')->where('pid=100')->order('add_time desc')->limit(9)->field('keywords')->select();
        //获取最近开奖的数字
        $j_number = db('goods')->order('add_time desc')->limit(9)->field('lottery')->select();
        //获取两个挑选的数字在开奖数字中出现的个数
        $pic_array=array();
        foreach($list['t_number'] as $k=>$v){
            $pic_array[]=explode(',',$v['keywords']);
        }
        $goods_array=array();

        foreach($pic_array as $k7=>$v7){
            $count_num[] = count($v7);

        }

        foreach($j_number as $k=>$v){
            $goods_array[]=explode(',',$v['lottery']);
        }
        foreach($pic_array as $k1=>$v1){
            foreach($v1 as $k2=>$v2){
                if(in_array($v2,$goods_array[$k1]) ){
                    $pic_array[$k1][][$v2]=1;
                }
            }
        }
        //print_r($pic_array);die;
        foreach($pic_array as $k=>$v){
            foreach ($v as $k3=>$v3){
                if(is_array($v3)){
                    $bb[$k][]=$v3;
                }else{
                    $bb[$k]=array();
                }
            }
        }

       //print_r($bb);die;
        foreach ($bb as $k4=>$v4){
            $c_number[$k4][]=!empty(count($bb))?count($bb[$k4]):0;
        }
        foreach($c_number as $k8=>$v8){
            $dd[] = $v8['0'];
        }
        $number = count($dd);
        $arr_new = array();
        $str_new = array();
        for($i=0; $i<$number; $i++){
            $arr_new[] = $dd[$i]/$count_num[$i];
            $str_new[] = $dd[$i]*2;
        }
        //print_r($str_new);die;
        $this->assign('str_new',$str_new);
        $this->assign('arr_new',$arr_new);
        $this->assign('c_number',$c_number);
        $this->assign($list);
        return view('prizes_odds');
    }
    //详情页
    public function comm_con(){
        //获取当前页面的id
        $id=intval(input('id'));
        $cid=intval(input('cid'));
        //print_r($cid);die;
        $res = get_info('category',['id'=>$id]);
        //print_r($res);die;
        $table = $res['link'];
        //print_r($table);die;
        if($res['link']=='news'){
            $table = 'article';
            //浏览量+1
            Db::name('article')->where(['id'=>$cid,'status'=>1])->setInc('view');
        }
        if($res['link']=='goods'){
            $table = 'goods';
            //浏览量+1
            Db::name('goods')->where(['id'=>$cid,'status'=>1])->setInc('model');
        }
        $info = get_con($id,$cid,$table);  	//调用获取数据的方法（包括当前详情以及上一条下一条）;
        //$info1 = get_con($id,$cid,$table1);
        $goods_cate = Db::name('goods_cate')->select();
        $pro_list = Db::name('goods')->order('rand()')->limit(3)->select();
        $news_list = Db::name('article')->order('rand()')->limit(8)->select();
        //print_r($pro_list);die;
        $this->assign('news_list',$news_list);
        $this->assign('goods_cate',$goods_cate);
        $this->assign('pro_list',$pro_list);
        $this->assign($info);
        return view();
    }

    public function search(){
        if(Request::instance()->isGet()){

            $title = input('title');
            //print_r($title);die;
            $seo = get_seo('goods',$title);
        }
        //$this->assign('seo',$seo);
    }
    //循环添加
    public function AjaxAddAll(){
        $db=Db::name('link');
        $result = $db->field("link")->order('id desc')->find();
        $url = $result['link'] ;
        $curl = curl($url);
        //print_r($curl);die;
        $json = json_decode($curl);
        //$aa = new \stdClass
        foreach ($json as $k=>$v){
            $json_k[] = $k;
            foreach ($v as $k1=>$v1){
                $json_er_array[] =  $v1;
            }
        }
        for($i=0; $i<count($json_er_array);$i++){
            if($i%2==0)
                $data['number'][]  = $json_er_array[$i];
            else if($i%2!=0)
                $data['time'][]= $json_er_array[$i];
        }
        $data['key'] = $json_k;
        //print_r($data);die;
        $count = 339;$date='2017-11-04';
        $now = strtotime(date('Y-m-d', time()));
        if($now > strtotime($date))
        {
            $add = intval(($now-strtotime($date))/(24*3600));
            $count += 1*$add;
        }
        $data1 = ['title'=>$count,'pid'=>'92','status'=>'1','lottery'=>$data['number']['0'],'add_time'=>strtotime($data['time']['0']),'key'=>$data['key']['0']];
        //print_r($data1);
        db::name('goods')->insert($data1);
        //strtotime($data['time']);
        /*  foreach($data['number'] as $k=>$v){

              $data1 = array('title'=>$count,'pid'=>98,'static'=>1,'lottery'=>$v,'add_time'=>strtotime($data['time'][$k]),'key'=>$data['key'][$k]);
 //$sql="insert into  goods (number,time.key) values ('".$v."','".$data['time'][$k]."','".$data['key'][$k]."')";

          }
        */
    }

}



/*public function down(){
      $imgurl =session('imgurl');
      //用以解决中文不能显示出来的问题
$file_name=iconv("utf-8","gb2312",$imgurl);
$file_sub_path=$_SERVER['DOCUMENT_ROOT']."";

$file_path=$file_sub_path.$file_name;
//print_r($file_path);die;
//首先要判断给定的文件存在与否
 if(!file_exists($file_path)){
 echo "没有该文件文件";
return ;
}
$fp=fopen($file_path,"r");
//print_r($fp);die;
$file_size=filesize($file_path);
//print_r($file_size);die;
//下载文件需要用到的头
Header("Content-type: application/octet-stream");
Header("Accept-Ranges: bytes");
Header("Accept-Length:".$file_size);
Header("Content-Disposition: attachment; filename=".$file_name);
$buffer=1024;
$file_count=0;
//向浏览器返回数据
while(!feof($fp) && $file_count<$file_size){
$file_con=fread($fp,$buffer);
$file_count+=$buffer;
echo $file_con;
}
fclose($fp);
}
}*/