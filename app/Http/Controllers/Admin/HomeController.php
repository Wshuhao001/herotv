<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller{
	public function Ok($url = NULL,$time = NULL,$msg = NULL)
	{

		echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="'.$time.';URL='.$url.'" />
<title>'.$msg.'</title>
</head>

<body>
  <h1>'.$msg.'</h1>
</body>
</html>';
		
	}
	
	
	/**
	 * error出错的跳转地址 msg
	 *
	 * @param  $url 将要跳转的地址
	 * @param  $time 时间
	 * @param  $msg 提示的跳转时间
	 * @return Response
	 */
	
	public function error($url,$time,$msg)
	{
		echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="'.$time.';URL='.$url.'" />
<title>'.$msg.'</title>
</head>
		
<body>
  <h1>'.$msg.'</h1>
</body>
</html>';
	}
}
