<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-fileupload.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.tagsinput.css" />
<!-- <link rel="stylesheet" type="text/css" href="assets/css/documentUpload.css" /> -->

<section class="panel">
    <header class="panel-heading">
        按要求填写所上传文件的信息
    </header>
    <div class="panel-body" style="padding-left: 100px;">
        <div class="leader-info-tips">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                <span>{{$error}}</span>
                @endforeach
            @endif
        </div>

        <form role="form" class="clearfix" id="form" enctype="multipart/form-data" method="post" action="/uploadDocs" novalidate>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="输入文件名称" style="max-width: 280px;" />
            </div>

            <div class="form-group clearfix">
                <label class="control-label col-md-3" style="padding-left: 0px; width: 40% !important;">选择上传的文件(PDF/MP4)</label>
                <div class="controls col-md-9" style="clear: both; padding-left: 5px;">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                            <span class="btn btn-default btn-file" style="display: block; float: left;">
                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                            <input type="file" class="default" name="file" id="file" accept="audio/mp4, video/mp4, application/pdf" value="{{old('file')}}" />
                            </span>
                        <span class="fileupload-preview" style="margin-left: 20px; display: block; float: left; line-height: 35px;"></span>
                        <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                    </div>
                </div>
            </div>

            <div class="form-group clearfix">
                <span>文件组别:</span>
                <select name="classify" id="classify" style="height: 35px;text-align: center;width: auto;padding: 0 2%;margin: 0;margin-top: 12px;font-size: 14px;padding-left: 4%;padding-right: 4%; margin-left: 20px;">
                    <option value="装备手册" {{old('classify') == '装备手册' ? 'selected' : ''}}>装备手册</option>
                    <option value="教学视频" {{old('classify') == '教学视频' ? 'selected' : ''}}>教学视频</option>
                    <option value="技术文件" {{old('classify') == '技术文件' ? 'selected' : ''}}>技术文件</option>
                    <option value="线下培训" {{old('classify') == '线下培训' ? 'selected' : ''}}>线下培训</option>
                </select>
            </div>
            <div class="filed">
                <span>文件格式:</span>
                <select name="type" id="type" style="height: 35px;text-align: center;width: auto;padding: 0 2%;margin: 0;margin-top: 12px;font-size: 14px;padding-left: 4%;padding-right: 4%; margin-left: 20px;">
                    <option value="pdf" {{old('type') == 'pdf' ? 'selected' : ''}}>pdf</option>
                    <option value="mp4" {{old('type') == 'mp4' ? 'selected' : ''}}>mp4</option>
                </select>
            </div>

            <button type="submit" class="submit btn btn-primary"  type="submit" style="clear: both; display: block; margin-top: 20px;">Submit</button>
        </form>

    </div>
</section>

<!--ios7-->
<script src="assets/js/ios-switch/switchery.js" ></script>
<script src="assets/js/ios-switch/ios-init.js" ></script>

<!--icheck -->
<script src="assets/js/iCheck/jquery.icheck.js"></script>
<script src="assets/js/icheck-init.js"></script>
<!--multi-select-->
<script type="text/javascript" src="assets/js/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="assets/js/jquery-multi-select/js/jquery.quicksearch.js"></script>
<script src="assets/js/multi-select-init.js"></script>
<!--spinner-->
<script type="text/javascript" src="assets/js/fuelux/js/spinner.min.js"></script>
<script src="assets/js/spinner-init.js"></script>
<!--file upload-->
<script type="text/javascript" src="assets/js/bootstrap-fileupload.min.js"></script>
<!--tags input-->
<script src="assets/js/jquery-tags-input/jquery.tagsinput.js"></script>
<script src="assets/js/tagsinput-init.js"></script>
<!--bootstrap input mask-->
<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
