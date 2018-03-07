<!--
编号 大赛名称 时间节点 报名链接 子赛项 详情连接 操作(删除 截止/允许)

发布大赛

1大赛名称
2大赛背景图
3报名起始时间-报名结束时间
4报名链接

5子赛项名称
6子赛项背景图

子赛项详情页页面
7页面banner图
8图文内容
9详情文档
10详情视频
11报名链接 -->

<link href="assets/css/demo_page.css" rel="stylesheet" />
<link href="assets/css/demo_table.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/DT_bootstrap.css" />
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/style-responsive.css" rel="stylesheet">
<link href="assets/css/cms_documentManage.css" rel="stylesheet">
<style type="text/css">
    .form-group {
        padding-left: 20px;
        padding-top: 20px;
    }

    .form-group select {
        display: block;
        height: 35px;
        text-align: center;
        width: auto;
        padding: 0 2%;
        margin: 0;
        margin-top: 12px;
        font-size: 14px;
        padding-left: 4%;
        padding-right: 4%;
        /* margin-left: 20px; */
        display: block;
        width: 280px;
        height: 34px;
        /* padding: 6px 12px; */
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
</style>
<section class="panel" style="padding-bottom: 1px;">
    <header class="panel-heading">
        赛事信息展示:
        <span class="tools pull-right">
            <!-- <a href="javascript:;" class="fa fa-chevron-down"></a>
            <a href="javascript:;" class="fa fa-times"></a> -->
         </span>
    </header>
    <div class="form-group clearfix">
        <label for="exampleInputEmail1">赛事名称: </label>
        <select name="event_id" id="event_id" style="height: 35px;text-align: center;width: auto;padding: 0 2%;margin: 0;margin-top: 12px;font-size: 14px;padding-left: 4%;padding-right: 4%;" onchange="ch1(this)">
            @if($events)
                <option value="0" data-type="0" selected="selected" style="display: none;">请选择</option>
                @foreach($events as $key => $event)
                <option value="{{$event->id}}" data-type="{{$event->id}}" style="display: block;">{{$event->event_name}}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div class="form-group clearfix">
        <label for="exampleInputEmail1">赛项名称: </label>
        <select name="competition_id" id="competition_id" style="height: 35px;text-align: center;width: auto;padding: 0 2%;margin: 0;margin-top: 12px;font-size: 14px;padding-left: 4%;padding-right: 4%;" onchange="ch2(this)">
            @if($competitionList)
                <option value="0" data-type="0" selected="selected" style="display: block;">请选择</option>
                @foreach($competitionList as $key => $competition)
                <option value="{{$competition->id}}" data-type="{{$competition->event_id}}" style="display: none;">{{$competition->competition_name}}</option>
                @endforeach
            @endif
        </select>
    </div>

    <div class="itemData">
        @if($events)
        <header class="panel-heading">
            表数据信息 :  (<i id="spec" style="font-style: normal;">  赛事  </i>)
             </span>
        </header>
        <div class="panel-body">
            <div class="adv-table">
                <table class="display table table-bordered" id="hidden-table-info">
                    <thead>
                        <tr>
                            <th>赛事编号</th>
                            <th>赛事名</th>
                            <th class="hidden-phone">报名时间</th>
                            <th class="hidden-phone">报名链接</th>
                            <th class="aaa">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $key => $item)
                        <tr class="gradeX">
                            <td>{{ $item->id or '' }}</td>
                            <td>{{ $item->event_name or '' }}</td>
                            <td class="hidden-phone">{{ $item->event_time or '' }}</td>
                            <td class="center hidden-phone">{{ $item->event_href or '' }}</td>
                            <td class="aa">
                                <a id="{{ $item->id or '' }}">关闭报名</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
    <div class="getData">
        <!-- @if($events)
        <header class="panel-heading">
            表数据信息 :  (<i id="spec" style="font-style: normal;">  赛事  </i>)
             </span>
        </header>
        <div class="panel-body">
            <div class="adv-table">
                <table class="display table table-bordered" id="hidden-table-info">
                    <thead>
                        <tr>
                            <th>赛事编号</th>
                            <th>赛事名</th>
                            <th class="hidden-phone">报名时间</th>
                            <th class="hidden-phone">报名链接</th>
                            <th class="aaa">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $key => $item)
                        <tr class="gradeX">
                            <td>{{ $item->id or '' }}</td>
                            <td>{{ $item->event_name or '' }}</td>
                            <td class="hidden-phone">{{ $item->event_time or '' }}</td>
                            <td class="center hidden-phone">{{ $item->event_href or '' }}</td>
                            <td class="aa">
                                <a id="{{ $item->id or '' }}">关闭报名</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif -->
    </div>
</section>

<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<!--dynamic table-->
<script type="text/javascript" language="javascript" src="assets/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->
<script src="assets/js/dynamic_table_init.js"></script>

<script>
    $(function(){
        $('.aaa').removeClass('sorting');
        $('.aa').unbind('click').bind('click', function(event) {
            /* Act on the event */
        });;
    })

    function ch1() {
        $('#competition_id option').each(function(index, el) {
            if ($(this).attr('data-type') == 0) {
                $(this).show();
                $('#competition_id option').removeAttr('selected')
                $(this).attr('selected', 'selected');
            } else {
                $(this).hide();
            }
        });

        var event_val = $('#event_id option:selected').val();
        var competition_val = $('#competition_id option:selected').val();

        if (event_val != 0) {
            var event_id_num = $('#event_id option:selected').attr('data-type')
            $('#competition_id option').each(function(index, el) {
                if ($(this).attr('data-type') == event_id_num) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }else {

        }
        getEventData();
    }

    function ch2() {
        var event_val = $('#event_id option:selected').val();
        var competition_val = $('#competition_id option:selected').val();
        getEventData();
    }

    function getEventData(){
        var event_val = $('#event_id option:selected').val();
        var competition_val = $('#competition_id option:selected').val();
        // console.log($('.itemData').html())
        $.get("/getEvents/" + event_val + "/item/" + competition_val, function(data, status) {
            if (!data) {
                alert('抱歉, 获取失败, 请刷新页面之后再尝试!' )
                return;
            }else {
                if (data.message == '详情信息') {
                    var str = '';
                    str += '<header class="panel-heading">表数据信息 :  (<i id="spec" style="font-style: normal;">  &nbsp'+ data.eventname + '&nbsp中&nbsp' + data.competitionname + '&nbsp的详情信息  </i>)</span>';
                    str += '</header><div class="panel-body"><div class="adv-table"><table class="display table table-bordered" id="hidden-table-info"><thead><tr><th>赛项编号</th><th>banner图</th><th class="hidden-phone">详情文档</th><th class="hidden-phone">相关视频</th><th class="aaa">操作</th></tr></thead><tbody>';
                    for(k in data.data){
                        str += '<tr class="gradeX">';
                        str += '<td>'+ data.data[k]["id"] +'</td><td>';
                        str += '<a href="'+ data.data[k]["intro_banner"] +'">点击预览</a></td>';
                        str += '<td class="hidden-phone"><a href="'+ data.data[k]["intro_doc"] +'">点击预览</a></td>';
                        str += '<td class="hidden-phone"><a href="'+ data.data[k]["intro_video"] +'">点击预览</a></td>';
                        str += '<td class="aa"><a id="'+ data.data[k]["id"] +'">删除</a>';
                        str += '</td></tr>';
                    }
                    str += '</tbody></table></div></div>';
                    $('.itemData').html(str);
                    return;
                }
                if (data.message == '子赛项') {
                    var str = '';
                    str += '<header class="panel-heading">表数据信息 :  (<i id="spec" style="font-style: normal;">  &nbsp'+ data.event + '&nbsp中的赛项  </i>)</span>';
                    str += '</header><div class="panel-body"><div class="adv-table"><table class="display table table-bordered" id="hidden-table-info"><thead><tr><th>赛项编号</th><th>赛项名</th><th class="hidden-phone">备注信息</th><th class="aaa">操作</th></tr></thead><tbody>';
                    for(k in data.data){
                        str += '<tr class="gradeX">';
                        str += '<td>'+ data.data[k]["id"] +'</td>';
                        str += '<td>'+ data.data[k]["competition_name"] +'</td>';
                        str += '<td class="hidden-phone">'+ data.data[k]["competition_remark"] +'</td>';
                        str += '<td class="aa">';
                        str += '<a id="'+ data.data[k]["id"] +'">关闭报名</a>';
                        str += '</td></tr>';
                    }
                    str += '</tbody></table></div></div>';
                    $('.itemData').html(str);
                    return;
                }
            }
        });
    }
</script>

