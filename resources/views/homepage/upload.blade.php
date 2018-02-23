@extends('homepage.layout')

@section('content')
    <link rel="stylesheet" href="assets/css/upload.css">

    <div class="warp" style="min-height: 671px;">
        <div class="inner" style="min-height: 671px;">
            <h4>后台文件管理</h4>
            <ul class="tab-nav">
                <li class="active">查看</li>
                <li>添加</li>
            </ul>
            <div class="tab">
                <div class="check active">
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
                <div class="append">
                    <form>
                        <div class="filed">
                            <span>选择上传的文件:</span>
                            <input type="file" name="file" id="file" accept="audio/mp4, video/mp4,     application/pdf" style="line-height: 20px;margin-top: 18px;padding: 0;" />
                        </div>
                        <div class="filed">
                            <span>文件名称:</span>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="filed">
                            <span>文件组别:</span>
                            <select>
                                <option>装备手册</option>
                                <option>教学视频</option>
                                <option>技术文件</option>
                                <option>线下培训</option>
                            </select>
                        </div>
                        <div class="filed">
                            <span>文件格式:</span>
                            <select>
                                <option>pdf</option>
                                <option>mp4</option>
                            </select>
                        </div>
                        <div class="filed">
                            <span>上传时间:</span>
                            <input type="text" name="" value="1123">
                        </div>
                        <a class="clear">清空</a>
                        <a class="submit">提交</a>
                    </form>
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
