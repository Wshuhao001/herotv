<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\http\models\admin\admin_users;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class LoginController extends HomeController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		//
		return view('admin.login.login');
	}
	
	
	public function logout()
	{
		session(['admin' => null]);
		session(['_Menu_' => null]);
		return $this->Ok('login',3,'退出成功! 即将跳转到首页!');
	}
	
	
	public function Postlogin(Request $request)
	{
		$Aurl = [];
		$this->validate($request, [
				'username' => 'required|max:32|min:5',
				'password' => 'required',
				]);
		$username = $request->input('username');
		$password = $request->input('password');
		$user = new admin_users();
		$ret = json_decode($user->where('username','=',$username)->get(),true);
		foreach ($ret as $value)
		{
			if ($value['username'] == $username && Hash::check($password,$value['password']))
			{
				
				session(['admin'=> $value]);
				$ret = DB::select("select * from hero_admin_groups where uid like '%".$value['groupid']."%' ");;
				if ($ret == NULL)
					return $this->error('login',3,'登陆出错! -- 未选定权限组');
				foreach ($ret as $route)
				{
					$url = DB::select('SELECT * FROM `hero_admin_routes` WHERE id in('.$route->route.')');
					if ($url == NULL)
						return $this->error('login',3,'登陆出错,获取网站菜单出错');
					//开始组合url
					foreach($url as $Urlvalues)
					{
						$Aurl[] = $Urlvalues;
						
					}
					
				}

				session(['_Menu_' => $Aurl]);
				
			   	return $this->Ok('index',3,'登陆成功正在跳转');
			}
		}
		
		return $this->error('login',3,'登陆失败,用户名或密码错误!');
	}

}
