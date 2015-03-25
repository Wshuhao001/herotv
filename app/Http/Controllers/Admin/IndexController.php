<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller {

	
	
	function _Get_Menu()
	{
		$i = 0;
		$json = ['id' => 'Menu','homepage' => 'admins'];

		$_Menu_ = session('_Menu_');
		foreach ($_Menu_ as $val)
		{
			$i ++;
			//先判断有几个父级
			if ($val->fid == 0)
			{
				$json['menu'][$i]['text'] = $val->routename;

				foreach ($_Menu_ as $value)
				{
					if ($value->fid == $val->id)
					{
						$json['menu'][$i]['items'][] = [
			 				'id' =>   $value->routesurl,
			 				'text' => $value->routename,
			 				'href' => $value->routesurl
						];
					}
					
				}
			}	
		}

			
			
				//$json['menu'][$i]['text'] = $val->routename;

			
			
			
			
			
			//为父id 最大的id
			//每一个菜单的结构是这样的.
// 			if ($val->fid == 0)
// 			{
// 				$json['text'] = $val->routename;
		
// 			}else{
// 				$json['items'][] = [
// 				'id' =>   $val->routesurl,
// 				'text' => $val->routename,
// 				'href' => $val->routesurl
// 				];
// 			}

		
		return $json;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 * 显示默认首页
	 */
	public function index()
	{

		$json = [];
		//
		$json = $this->_Get_Menu();
		
		
		
		//var_dump($json);
		$MenuJson = json_encode($json,JSON_UNESCAPED_UNICODE);
		//echo $MenuJson;
		return view('admin.index.index',['json' => $MenuJson]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
