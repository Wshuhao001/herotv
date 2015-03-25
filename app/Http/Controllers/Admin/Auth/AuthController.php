<?php namespace App\Http\Controllers\Admin\Auth;

use App\Http\Requests;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Redirect;
use Input;


use Illuminate\Http\Request;
use App\http\models\admin\admin_route;

class AuthController extends HomeController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.auth.index',[
				'ret' => admin_route::all(),
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.auth.create',['ret' => admin_route::all()]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$this->validate($request, [
				'routename' => 'required|max:255',
				'routeurl' => 'required',
				]);
		
		

		$admin = new admin_route();
		$admin->routename  = $request->input('routename');
		$admin->routesurl = $request->input('routeurl');
		$admin->fid = $request->input('fid');
		
		if ($admin->save())
		{
			return Redirect::to('admin/auth');
		}else{
			return $this->error(url('admin/auth',3,'创建失败'));
		}
		
		
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
		echo '编辑',$id;
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
		$a = admin_route::find($id);
		$a->delete();
		
		$this->ok(url('admin/auth'),3,'删除成功.正在跳转');
	}

}
