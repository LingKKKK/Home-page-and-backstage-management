<!-- 5子赛项名称
6子赛项背景图 -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-fileupload.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.tagsinput.css" />
<style type="text/css">
    #event_id {
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
 <section class="panel">
     <header class="panel-heading">
         填写赛项信息
     </header>
     <div class="panel-body" style="padding-left: 100px;">
         <div class="leader-info-tips">
             @if(count($errors) > 0)
                 @foreach($errors->all() as $error)
                 <span>{{$error}}</span>
                 @endforeach
             @endif
         </div>

        <form role="form" class="clearfix" id="form" enctype="multipart/form-data" method="post" action="/competitionPost" novalidate>
            <div class="form-group clearfix">
                <label for="exampleInputEmail1">赛事名称</label>
                <select name="event_id" id="event_id" style="height: 35px;text-align: center;width: auto;padding: 0 2%;margin: 0;margin-top: 12px;font-size: 14px;padding-left: 4%;padding-right: 4%;">
                    @if($results)
                        @foreach($results as $key => $result)
                        <option value="{{$result->id}}">{{$result->event_name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">赛项名称</label>
                <input type="text" class="form-control" name="competition_name" id="competition_name" value="{{old('competition_name')}}" placeholder="输入赛项名称" style="max-width: 280px;" />
            </div>

            <div class="form-group clearfix">
                <label class="control-label col-md-3" style="padding-left: 0px; width: 40% !important;">选择上传赛项的图片(PNG/JPEG)</label>
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

             <div class="form-group">
                 <label for="exampleInputEmail1"> 备注信息</label>
                 <input type="text" class="form-control" name="competition_remark" id="competition_remark" value="{{old('competition_remark')}}" placeholder="输入配置信息" style="max-width: 280px;" />
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1"> 配置信息</label>
                 <input type="text" class="form-control" name="competition_config" id="competition_config" value="{{old('competition_config')}}" placeholder="输入配置信息" style="max-width: 280px;" />
             </div>

             <a class="submit btn btn-primary" type="submit" style="clear: both; display: none; margin-top: 20px; width: 80px;">Submit</a>
             <button class="submit btn btn-primary" type="submit" style="clear: both; display: block; margin-top: 20px; width: 80px;">Submit</button>
        </form>
    </div>
</section>


<script type="text/javascript" src="assets/js/bootstrap-select.js"></script>

<script type="text/javascript" src="assets/js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

