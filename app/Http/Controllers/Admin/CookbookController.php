<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Cookbook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CookbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $data = Cookbook::where('cate_pid', '0')->orderBy('cate_order', 'asc')->get();
        $data_p = Cookbook::orderBy('cate_order', 'asc')->get();
        return view('admin.shicai_category.shicai_category', compact('data', 'data_p'));*/
       return view('admin.cookbook.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //创建分类请求
    public function create()
    {
        //$data = Cookbook::where('cate_pid', '0')->get();
        //dd($data);
        return view('admin.cookbook.cookbook_add'/*, compact('data')*/);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    //保存分类信息
    public function store()
    {
        $input = Input::except('_token');
        $rules = [
            'cate_name' => 'required',
        ];
        $message = [
            'cate_name.required' => '分类名称不能为空！',
        ];
        $validator = Validator::make($input, $rules, $message); //数据验证
        if ($validator->passes()) {
            $re = Cookbook::create($input);
            if ($re) {
                return redirect('admin/shicai_category');
            } else {
                return back()->withErrors('分类添加失败，请稍后重试！');
            }
        } else {
            return back()->withErrors($validator);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $cate_id
     * @return \Illuminate\Http\Response
     */
    public function edit($cate_id)
    {
        $field = Cookbook::find($cate_id);
        $data = Cookbook::where('cate_pid', 0)->get();
        return view('admin.shicai_category.shicai_category_edit', compact('field', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $cate_id
     * @return \Illuminate\Http\Response
     */
    public function update($cate_id)
    {
        $input = Input::except('_token', '_method');
        $re = Cookbook::where('cate_id', $cate_id)->update($input);
        if ($re) {
            return redirect('admin/shicai_category');
        } else {
            return back()->withErrors('修改分类失败，请稍后重试！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $cate_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cate_id)
    {
        $is_cate = Cookbook::where('cate_pid', $cate_id)->get();
        if (!$is_cate->isEmpty()) {
            $data = [
                'status' => 2,
                'msg' => '删除分类失败，请先删除该分类下的所有子分类后重试！',
            ];
        } else {
            $re = Cookbook::where('cate_id', $cate_id)->delete();
            if ($re) {
                $data = [
                    'status' => 0,
                    'msg' => '删除分类成功！',
                ];
            } else {
                $data = [
                    'status' => 1,
                    'msg' => '删除分类失败，请稍后重试！',
                ];
            }
        }
        return $data;
    }

    public function changeOrder()
    {
        $input = Input::all();
        $categroy = Cookbook::find($input['cate_id']);
        $categroy->cate_order = $input['cate_order'];
        $re = $categroy->update();
        if ($re) {
            $data = [
                'status' => 1,
                'msg' => '排序更新成功！',
            ];
        } else {
            $data = [
                'status' => 2,
                'msg' => '排序更新失败！请稍后重试',
            ];
        }
        return $data;
    }
}
