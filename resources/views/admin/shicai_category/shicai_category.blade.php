@extends('layous.admin')
@section('content')
    <nav class="breadcrumb">
        <i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 分类管理 <span class="c-gray en">&gt;</span> 食材分类
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
        <a class="btn btn-success radius r" style="line-height:1.6em;margin:3px 5px 0 0" href="{{url('admin/shicai_category/create')}}" title="添加"><i class="Hui-iconfont">&#xe600;</i></a>
    </nav>
    <style>
        .Huifold .item {
            position: relative
        }

        .Huifold .item h4 {
            margin: 0;
            font-weight: bold;
            position: relative;
            border-top: 1px solid #fff;
            font-size: 15px;
            line-height: 22px;
            padding: 7px 10px;
            background-color: #eee;
            cursor: pointer;
            padding-right: 30px
        }

        .Huifold .item .info {
            display: none;
            padding: 10px
        }
    </style>
    <form action="#" method="post">
        <table class="table">
            <ul id="Huifold1" class="Huifold">
                @foreach($data as $v)
                    <li class="item">
                        <h4 style="overflow: hidden">
                            <input style="float:left;width: 30px;text-align: center;height: 25px" type="text" class="input-text radius" onchange="changeorder(this,{{$v->cate_id}})" value="{{$v->cate_order}}">
                            <div style="float:left;width: 100px;text-align: center">{{$v->cate_name}}<b>+</b></div>
                            <div style="float:left;font-weight: 100;font-size: 12px">{{str_limit($v->cate_title, $limit = 130, $end = '...')}}</div>
                            <span style="position: absolute;right: 30px;">
                                <a href="{{url('admin/shicai_category/'.$v->cate_id.'/edit')}}" class="Hui-iconfont">&#xe647;修改</a>
                                <a href="javascript:;" class="Hui-iconfont" onclick="delCate({{$v->cate_id}})">&#xe6e2;删除</a>
                            </span>
                        </h4>
                        <div class="info">
                            <ul>
                            @foreach($data_p as $n)
                                @if($n->cate_pid == $v->cate_id)
                                        <li style="height: 35px">　
                                            <input style="float:left;width: 30px;text-align: center;height: 25px" type="text" class="input-text radius" onchange="changeorder(this,{{$n->cate_id}})" value="{{$n->cate_order}}">
                                            <div style="float:left;width: 100px;text-align: center">{{$n->cate_name}}</div>
                                            <div style="float:left;font-weight: 100;font-size: 12px">{{str_limit($n->cate_title, $limit = 130, $end = '...')}}</div>
                                            <span style="position: absolute;right: 30px;">
                                                <a href="{{url('admin/shicai_category/'.$n->cate_id.'/edit')}}" class="Hui-iconfont">&#xe647;修改</a>
                                                <a href="javascript:;" class="Hui-iconfont" onclick="delCate({{$n->cate_id}})">&#xe6e2;删除</a>
                                            </span>
                                        </li>
                                @endif
                            @endforeach
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul>
        </table>
    </form>
@endsection

@section('script')
    <script>
        $(function () {
            $.Huifold("#Huifold1 .item h4", "#Huifold1 .item .info", "fast", 3, "click");
            /*5个参数顺序不可打乱，分别是：相应区,隐藏显示的内容,速度,类型,事件*/
        });


        function changeorder(obj, cate_id) {
            var cate_order = $(obj).val();
            $.post("{{url('admin/shicai_category/changeorder')}}", {
                '_token': '{{csrf_token()}}',
                'cate_id': cate_id,
                'cate_order': cate_order
            }, function (data) {
                if (data.status == 1) {
                    //location.href = location.href;
                    layer.alert(data.msg, {icon: 6});
                } else {
                    layer.alert(data.msg, {icon: 5});
                }
            });
        }
        function delCate(cate_id) {
            //询问框
            layer.confirm('您确定要删除该分类？', {
                btn: ['删除', '取消'] //按钮
            }, function () {
                //删除
                $.post("{{url('admin/shicai_category/')}}/" + cate_id, {
                    '_token': '{{csrf_token()}}',
                    '_method': 'delete'
                }, function (data) {
                    if (data.status == 0) {
                        location.href = location.href;
                        layer.alert(data.msg, {icon: 6});
                    } else {
                        layer.alert(data.msg, {icon: 5});
                    }
                });
            }, function () {
                //取消
            });
        }
    </script>
@endsection