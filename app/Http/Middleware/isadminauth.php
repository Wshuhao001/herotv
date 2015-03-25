<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Request;



class isadminauth {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		
		$uri =	$_SERVER['REQUEST_URI'];
		if (session('admin') == NULL)
			return response('Unauthorized.', 401);
		if (session('_Menu_') == NUll)
			return response('Unauthorized.', 401);
		$data = session('admin');
	
		$ret = DB::select("select * from hero_admin_groups where uid like '%".$data['groupid']."%' ");;

		$url = DB::select('SELECT * FROM `hero_admin_routes` WHERE id in('.$ret[0]->route.')');
		
		if ($url == NULL)
			return $this->error('login',3,'登陆出错,获取网站菜单出错');


		$uri = explode("/",$uri);
		$i = 0;
		foreach ($url as $value)
		{
			
			
			if($uri['2'] === $value->routesurl)
			{
				 $i = 1;
			}else{
				$i = 0;
			}
			
			if ($i === 1)
				break;
			
		}
		if ($i === 0)
		{
			return response('Unauthorized.', 401);
		}
		
		
		return $next($request);
	}

}
