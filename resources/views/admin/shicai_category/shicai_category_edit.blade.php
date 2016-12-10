@extends('layous.admin')
@if(count($errors) > 0)
    <div class="mark">
        @if(is_object($errors))
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        @else
            {{$errors}}
        @endif
    </div>
@endif
<div class="page-container">
    <form action="{{url('admin/shicai_category/'.$field->cate_id)}}" method="post" class="form form-horizontal" id="form-article-add">
        {{method_field('put')}}
        {{csrf_field()}}
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$field->cate_name}}" placeholder="" id="" name="cate_name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">分类标题：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$field->cate_title}}" placeholder="" id="" name="cate_title">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                    <select name="cate_pid" class="select">
                        <option value="0">一级分类</option>
                        @foreach($data as $d)
                            <option value="{{$d->cate_id}}" @if($d->cate_id==$field['cate_pid']) selected @endif>{{$d->cate_name}}</option>
                        @endforeach
                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">排序值：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$field->cate_order}}" placeholder="" id="" name="cate_order">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">产品关键字：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" name="cate_keywords" id="" placeholder="多个关键字用英文逗号隔开，限10个关键字" value="{{$field->cate_keywords}}"
                       class="input-text">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">产品摘要：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <textarea name="cate_description" cols="" rows="" class="textarea" placeholder="说点什么...最少输入10个字符"
                          datatype="*10-100"
                          dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,200)">{{$field->cate_description}}</textarea>
                <p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核
                </button>
                <button class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
