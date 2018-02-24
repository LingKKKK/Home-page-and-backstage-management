@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/upload.css">
    <style type="text/css">
        @keyframes change {
            0%{ text-shadow: 0 0 4px #ff0000}
            50%{ text-shadow: 0 0 8px #ff3333}
            100%{ text-shadow: 0 0 4px #ff0000}
        }
    </style>

    <div class="warp" style="min-height: 671px;">
        <div class="inner" style="min-height: 671px;">
            <h4>后台文件管理</h4>
            <ul class="tab-nav">
                <li class="active">添加</li>
                <li>查看</li>
            </ul>
            <div class="tab">
                <div class="append active">
                    <div class="leader-info-tips">
                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                            <span>{{$error}}</span>
                            @endforeach
                        @endif
                    </div>
                    <form class="clearfix" id="form" enctype="multipart/form-data" method="post" action="/uploadDocs" novalidate>
                        <div class="filed">
                            <span>选择上传的文件:</span>
                            <input type="file" name="file" id="file" accept="audio/mp4, video/mp4, application/pdf" value="{{old('file')}}"/>
                        </div>
                        <div class="filed">
                            <span>文件名称:</span>
                            <input type="text" name="name" id="name" value="{{old('name')}}"/>
                        </div>
                        <div class="filed">
                            <span>文件组别:</span>
                            <select name="classify" id="classify">
                                <option value="装备手册" {{old('classify') == '装备手册' ? 'selected' : ''}}>装备手册</option>
                                <option value="教学视频" {{old('classify') == '教学视频' ? 'selected' : ''}}>教学视频</option>
                                <option value="技术文件" {{old('classify') == '技术文件' ? 'selected' : ''}}>技术文件</option>
                                <option value="线下培训" {{old('classify') == '线下培训' ? 'selected' : ''}}>线下培训</option>
                            </select>
                        </div>
                        <div class="filed">
                            <span>文件格式:</span>
                            <select name="type" id="type">
                                <option value="pdf" {{old('type') == 'pdf' ? 'selected' : ''}}>pdf</option>
                                <option value="mp4" {{old('type') == 'mp4' ? 'selected' : ''}}>mp4</option>
                            </select>
                        </div>
                        <!-- <button class="clear" id="clear">清空</button> -->
                        <button class="submit" id="submit" type="submit">提交</button>
                    </form>
                </div>
                <div class="check">
                    <div class="item-t">
                        <ul class="item">
                            <li class="id">文档编号</li>
                            <li class="name">文档名称</li>
                            <li class="classify">文档组别</li>
                            <li class="type">文档类型</li>
                            <li class="time">上传时间</li>
                            <li class="operation">操作</li>
                        </ul>
                    </div>
                    @if($results)
                        @foreach($results as $key => $result)
                            <div class="item-t">
                                <ul class="item">
                                    <li class="id">{{ $result->id or '' }}</li>
                                    <li class="name">{{ $result->name or '' }}</li>
                                    <li class="classify">{{ $result->classify or '' }}</li>
                                    <li class="type">{{ $result->type or '' }}</li>
                                    <li class="time">{{ $result->creat_at or '' }}</li>
                                    <li class="operation">
                                        <a id="{{ $result->id or '' }}">删除</a>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    @else
                        <span class="error">未加载出数据</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function(){
            $('.tab-nav >li').each(function(index,el) {
                $(this).click(function(){
                    $('.tab-nav >li').removeClass('active');
                    $(this).addClass('active');
                    $('.tab >div').removeClass('active');
                    $('.tab >div').eq(index).addClass('active');
                })
            })

            $('.operation a').each(function(index,el){
                $(this).click(function(){
                    var id = $(this).attr('id');
                    $.get("/delete/" + id, function(data, status) {
                        window.location.reload();
                    });
                })
            })
        })
    </script>
@endsection
