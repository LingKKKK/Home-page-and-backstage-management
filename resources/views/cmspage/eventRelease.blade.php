<!-- 1大赛名称
2大赛背景图
3报名起始时间-报名结束时间
4报名链接
 -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-fileupload.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.tagsinput.css" />

<!-- <link rel="stylesheet" type="text/css" href="assets/css/datapicker.css" /> -->
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<script type="text/javascript" src='assets/js/vue.js'></script>
<script type="text/javascript" src='assets/js/datapicker.js'></script>
<style type="text/css">
    .el-range-separator {
        padding: 0px 0px !important;
    }

    .el-date-editor.el-range-editor.el-input__inner.el-date-editor--daterange {
        height: 36px;
    }
</style>

 <section class="panel">
     <header class="panel-heading">
         填写赛事信息
     </header>
     <div class="panel-body" style="padding-left: 100px;">
         <div class="leader-info-tips">
             @if(count($errors) > 0)
                 @foreach($errors->all() as $error)
                 <span>{{$error}}</span>
                 @endforeach
             @endif
         </div>

        <form role="form" class="clearfix" id="form" enctype="multipart/form-data" method="post" action="/eventPost" novalidate>
            <div class="form-group">
                <label for="exampleInputEmail1">赛事名称</label>
                <input type="text" class="form-control" name="event_name" id="event_name" value="{{old('event_name')}}" placeholder="输入赛事名称" style="max-width: 280px;" />
            </div>

        <div class="form-group clearfix">
            <label class="control-label col-md-3" style="padding-left: 0px; width: 40% !important;">选择上传赛事的图片(PNG/JPEG)</label>
            <div class="controls col-md-9" style="clear: both; padding-left: 5px;">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                        <span class="btn btn-default btn-file" style="display: block; float: left;">
                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" name="file" id="file" accept="image/*" value="{{old('file')}}" />
                        </span>
                    <span class="fileupload-preview" style="margin-left: 20px; display: block; float: left; line-height: 35px;"></span>
                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                </div>
            </div>
        </div>

        <div class="form-group clearfix">
            <label for="exampleInputEmail1"> 报名时间:</label>
            <div id="app">
                <template>
                <div class="block">
                    <el-date-picker v-model="value6" type="daterange" range-separator="至" start-placeholder="开始日期" end-placeholder="结束日期"></el-date-picker>
                </div>
                </template>
            </div>
             <input type="text" class="form-control" name="event_time" id="event_time" value="" style="display: none;" />
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1"> 报名链接</label>
             <input type="text" class="form-control" name="event_href" id="event_href" value="{{old('event_href')}}" placeholder="输入报名链接" style="max-width: 280px;" />
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1"> 备注信息</label>
             <input type="text" class="form-control" name="event_remark" id="event_remark" value="{{old('event_remark')}}" placeholder="输入配置信息" style="max-width: 280px;" />
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1"> 配置信息</label>
             <input type="text" class="form-control" name="event_config" id="event_config" value="{{old('event_config')}}" placeholder="输入配置信息" style="max-width: 280px;" />
         </div>

         <a class="submit btn btn-primary" type="submit" style="clear: both; display: block; margin-top: 20px; width: 80px;">Submit</a>
         <button type="submit" style="display: none;"></button>
        </form>
        <script>
            new Vue({
                el: '#app',
                data: function() {
                    return {
                        value6: '',
                        value7: ''
                    };
                }
            })
        </script>
        </div>
 </section>


 <script type="text/javascript" src="assets/js/bootstrap-fileupload.min.js"></script>
 <script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

 <script type="text/javascript">
     $(function(){
        $('.submit.btn.btn-primary').click(function(){
            var time1 = $('.el-date-editor.el-range-editor.el-input__inner.el-date-editor--daterange input').eq(0).val();
            var time2 = $('.el-date-editor.el-range-editor.el-input__inner.el-date-editor--daterange input').eq(1).val();
            $('#event_time').val(time1 + ' 至 ' + time2);

            if ($('#event_name').val() == '' || $('#file').val() == '' || $('#event_time').val() == '' || $('#event_time').val() == ' 至 ') {
                console.log('为填写成功')
                return;
            } else {
                $(this).siblings('button').click();
            }
        })
     })
 </script>
