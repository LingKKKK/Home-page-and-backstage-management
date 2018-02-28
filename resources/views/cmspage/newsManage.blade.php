<link href="assets/css/demo_page.css" rel="stylesheet" />
<link href="assets/css/demo_table.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/DT_bootstrap.css" />
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/style-responsive.css" rel="stylesheet">
<link href="assets/css/cms_documentManage.css" rel="stylesheet">

<section class="panel">
    <header class="panel-heading">
        文档数据信息:
        <span class="tools pull-right">
            <!-- <a href="javascript:;" class="fa fa-chevron-down"></a>
            <a href="javascript:;" class="fa fa-times"></a> -->
         </span>
    </header>
    <div class="panel-body">
        <div class="adv-table">
            <table class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>新闻编号</th>
                        <th>新闻标题</th>
                        <th class="hidden-phone">新闻标签</th>
                        <th class="hidden-phone">快速访问</th>
                        <th class="hidden-phone">发布时间</th>
                        <th class="aaa">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @if($results)
                        @foreach($results as $key => $result)
                            <tr class="gradeX">
                                <td>{{ $result->id or '' }}</td>
                                <td>{{ $result->title or '' }}</td>
                                <td class="hidden-phone">{{ $result->lebel or '' }}</td>
                                <td class="center hidden-phone">
                                    <a href="{{ $result->url or '' }}" target="_blank">点击跳转</a>
                                </td>
                                <td class="center hidden-phone">{{ $result->creat_at or '' }}</td>
                                <td class="aa">
                                    <a id="{{ $result->id or '' }}">删除</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <span class="error">未加载出数据</span>
                    @endif
                </tbody>
            </table>
        </div>
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

        $('.gradeX a').each(function(index,el){
            $(this).click(function(){
                var id = $(this).attr('id');
                $.get("/deleteNews/" + id, function(data, status) {
                    // window.location.reload();
                    $('#newsManage').click();
                });
            })
        })
    })
</script>
