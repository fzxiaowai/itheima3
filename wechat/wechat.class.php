<?php
require './wechat.cfg.php';

class Wechat {

	private $appid;
	private $appsecret;
	//实例化会触发一个方法
	public function __construct(){
		//初始化操作,赋值
		$this->appid = APPID;
		$this->appsecret = APPSECRET;
	}

	//封装一个请求方法
	public function request($url,$https=true,$method='get',$data=null){
		//初始化
		$ch = curl_init($url);
		//设置url
		//返回数据不输出
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		//满足https
		if($https === true){
			//绕过ssl验证
			curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
			curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
		}
		//满足post
		if($method === 'post'){
			curl_setopt($ch,CURLOPT_POST,true);
			curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		}
		//发送请求
		$content = curl_exec($ch);
		//关闭资源
		curl_close($ch);
		return $content;
	}

	//获取access_token
	public function getAccessToken(){
		//url
		$url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$this->appid.'&secret='.$this->appsecret;
		//发送请求
		$content = $this->request($url);
		//处理返回值
		$content = json_decode($content);
		return $content->access_token;
	}

	// 获取access_token  保存到文件
	
	public function getAccessTokenByFile(){
		$fileName = './access_token';

		if(file_exists($fileName) && (time() - filemtime($fileName)) < 7200){
			$access_token = file_get_contents($fileName);
		}else{
			$url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$this->appid.'&secret='.$this->appsecret;

			$content = $this->request($url);

			$content = json_decode($content);
			$access_token = $content->access_token;
			file_put_contents($fileName,$access_token);
		}
		echo $access_token;
	}

	//获取access_token 保存到memcache
	public function getAccessTokenByMem(){
		$mem = new Memcache();
		$mem -> connect('127.0.0.1',11211);
		 $access_token = $mem->get('accessToken');
		 // dump($access_token);die;
		if($access_token === false){
			$url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$this->appid.'&secret='.$this->appsecret;

			

			$content = $this->request($url);
			// dump($content);die;
			//处理返回值 转json为obj
			$content = json_decode($content);
			$access_token = $content->access_token;
			//网络取到之后,在存储到memcache里
			$mem->set('accessToken',$access_token,0,7200);

		}
		return $access_token;
	}

	//获取ticket
	//临时二维码请求说明

	//获取ticket
	 public function getTicket($scene_id,$tmp=true,$expire_seconds=604800){
    //1.url地址
    $url = 'https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token='.$this->getAccessTokenByMem();
    // echo $url;
    //2.请求方法
    //判断临时还是永久的
    if($tmp === true){
      $data = '{"expire_seconds": '.$expire_seconds.', "action_name": "QR_SCENE", "action_info": {"scene": {"scene_id": '.$scene_id.'}}}';
    }else{
      $data = '{"action_name": "QR_LIMIT_SCENE", "action_info": {"scene": {"scene_id": '.$scene_id.'}}}';
    }
    //3.发送请求
    $content = $this->request($url,true,'post',$data);
    //4.处理返回值
    //json转对象
    $content = json_decode($content);
    echo $content->ticket;
  }

  //换取二维码
  public function getQRCode(){
  	$ticket = 'gQG78TwAAAAAAAAAAS5odHRwOi8vd2VpeGluLnFxLmNvbS9xLzAyQ2lZTDhjTFplWGsxMDAwMDAwM2MAAgSf8eVYAwQAAAAA';

  	$url = 'https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket='.$ticket;
  	$content = $this->request($url);
  	echo file_put_contents('./qrcode.jpg',$content);
  }

  //创建菜单
  public function createMenu(){
  	//url
  	 $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$this->getAccessTokenByMem();
  	 var_dump($url);
  	// var_dump($url);die;
  	//请求方式
  	$data = '{
              "button":[
              {
                   "type":"click",
                   "name":"今日资讯",
                   "key":"news"
               },
               {
                    "name":"黑马3期",
                    "sub_button":[
                    {
                        "type":"view",
                        "name":"百度",
                        "url":"http://www.baidu.com/"
                     },
                     {
                        "type":"view",
                        "name":"H5",
                        "url":"http://panteng.me/demos/whb/"
                     },
                     {
                        "name": "发送位置",
                        "type": "location_select",
                        "key": "rselfmenu_2_0"
                     }]
                }]
             }';
      //3.发送请求
    $content = $this->request($url,true,'post',$data);
    //4.处理返回值
    //json转obj
    $content = json_decode($content);
    // {"errcode":0,"errmsg":"ok"}
    if($content->errmsg == 'ok'){
      echo '创建成功!';
    }else{
      echo '创建失败!'.'<br />';
      echo '失败原因:'.$content->errcode;
    }
  }
  //查询菜单
  public function showMenu(){
  	//url
  	$url = 'https://api.weixin.qq.com/cgi-bin/menu/get?access_token='.$this->getAccessTokenByMem();
  	//发送请求
  	$content = $this->request($url);
  	var_dump($content);

  }
  //删除菜单
  public function delMenu(){
  	//url
  	$url = 'https://api.weixin.qq.com/cgi-bin/menu/delete?access_token='.$this->getAccessTokenByMem();

  	//发送请求
  	$content - $this->request($url);
  	//json转obj
  	$content = json_decode($content);
  	if($content->errmsg == 'ok'){
  		echo '删除成功!';
  	}else{
  		echo '删除失败!'.'<br/>';
  		echo '失败原因:'.$content->errcode;
  	}
  }

  //获取用户openID列表
  public function getUserList(){
    //url
    $url = 'https://api.weixin.qq.com/cgi-bin/user/get?access_token='.$this->getAccessTokenByMem();
    //发送请求
    $content = $this->request($url);
    //json转obj
    $content = json_decode($content);
    // var_dump($content);
    echo '关注数:'.$content->total.'<br/>';
    echo '拉取数' .$content->count.'<br/>';
    foreach($content->data->opend as $key => $value){
      echo ($key+1).'###'.$value.'<br/>';
    }
  }

  //通过openID列表获取用户信息
  public function getuserInfo(){
    $openid = 'orz271CFaP82Ti9BM_GX1F6sHyhU';

    //url 
    $url = 'https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$this->getAccessTokenByMem().'&openid='.$openid.'&lang=zh_CN';

    //发送请求
    $content = $this->request($url);

    $content = json_decode($content);
    // var_dump($content);
    echo '昵称:'.$content->nickname.'<br/>';
    echo '性别:'.$content->sex.'<br/>';
    echo '省份:'.$content->province.'<br/>';
    echo '<img src="'.$content->headimgurl.'" style="width:100px;" />';
  }

  //通过mediaID获取素材
  public function getMediaFile(){
    $media_id = 'XzvMjQdJ-3MkxC5B6nC7qUVxX5NrChLnJaOR5HVf19GrbxuC_JDgmCt2w8bvVJPL';

    $url = 'https://api.weixin.qq.com/cgi-bin/media/get?access_token='.$this->getAccessTokenByMem().'&media_id='.$media_id;

    $content = $this->request($url);

    echo file_put_contents('./girl.jpg',$content);
  }
	
}