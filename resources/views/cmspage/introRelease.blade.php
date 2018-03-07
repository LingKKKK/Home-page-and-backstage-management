<!-- 子赛项详情页页面
7页面banner图
8图文内容
9详情文档
10详情视频
11报名链接 -->
<link href="assets/css/summernote.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-fileupload.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.tagsinput.css" />
<style type="text/css">
    #cke_20 {
        display: none!important;
    }
    #cke_27 {
        display: none!important;
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

<section class="panel">
    <header class="panel-heading">
        编辑子赛项详情页面
    </header>
    <div class="panel-body" style="padding: 20px 50px;">
        <div class="leader-info-tips">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                <span>{{$error}}</span>
                @endforeach
            @endif
        </div>

        <form role="form" class="clearfix" id="form" enctype="multipart/form-data" method="post" action="/introPost" novalidate>
            <div class="form-group clearfix">
                <label for="exampleInputEmail1">赛事名称: </label>
                <select name="event_id" id="event_id" style="height: 35px;text-align: center;width: auto;padding: 0 2%;margin: 0;margin-top: 12px;font-size: 14px;padding-left: 4%;padding-right: 4%;" onchange="ch1(this)">
                    @if($events)
                        <option value="" selected="selected" style="display: none;">请选择</option>
                        @foreach($events as $key => $event)
                        <option value="{{$event->id}}">{{$event->event_name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group clearfix">
                <label for="exampleInputEmail1">赛项名称: </label>
                <select name="competition_id" id="competition_id" style="height: 35px;text-align: center;width: auto;padding: 0 2%;margin: 0;margin-top: 12px;font-size: 14px;padding-left: 4%;padding-right: 4%;">
                    @if($competitionList)
                        <option value="" data-type="0" selected="selected">请选择</option>
                        @foreach($competitionList as $key => $competition)
                        <option value="{{$competition->id}}" data-type="{{$competition->event_id}}">{{$competition->competition_name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="form-group clearfix">
                <label class="control-label col-md-3" style="padding-left: 0px; width: 40% !important;">选择详情页面banner图(PNG/JPEG)</label>
                <div class="controls col-md-9" style="clear: both; padding-left: 5px;">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                            <span class="btn btn-default btn-file" style="display: block; float: left;">
                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                            <input type="file" class="default" name="file_pics" id="file_pics" accept="image/*" value="{{old('file_pics')}}" />
                            </span>
                        <span class="fileupload-preview" style="margin-left: 20px; display: block; float: left; line-height: 35px;"></span>
                        <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">编辑新闻正文部分: </label>
                <div id="summernote"></div>
                <input type="text" class="form-control" name="intro_content" id="intro_content" value="" style="max-width: 280px; display: none;" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">相关文档上传: </label>
                <!-- <input type="text" class="form-control" name="intro_doc" id="intro_doc" value="" placeholder="相关文档上传" style="max-width: 280px;" /> -->
                <div class="form-group clearfix">
                    <label class="control-label col-md-3" style="padding-left: 0px; width: 40% !important;">选择上传的文件(PDF/DOC)</label>
                    <div class="controls col-md-9" style="clear: both; padding-left: 5px;">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-default btn-file" style="display: block; float: left;">
                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                <input type="file" class="default" name="file_docs" id="file_docs" accept="application/msword, application/pdf" value="{{old('file_docs')}}" />
                                </span>
                            <span class="fileupload-preview" style="margin-left: 20px; display: block; float: left; line-height: 35px;"></span>
                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Video: </label>
                <input type="text" class="form-control" name="intro_video" id="intro_video" value="" placeholder="详情视频路径" style="max-width: 280px;" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">href: </label>
                <input type="text" class="form-control" name="intro_href" id="intro_href" value="" placeholder="报名地址" style="max-width: 280px;" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">备注信息: </label>
                <input type="text" class="form-control" name="intro_remark" id="intro_remark" value="" placeholder="填写备注信息" style="max-width: 280px;" />
            </div>
            <button type="submit" id="submit" type="submit" style="display: none;">Submit</button>
            <a class="submit btn btn-primary" style="clear: both; display: block; margin-top: 20px;width: 100px;">
                <i class="fa fa-check" style="margin-right: 5px;"></i>
                Submit
            </a>
        </form>
        <a href="#myModal" data-toggle="modal" id="showModal" style="display: none;"></a>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" style="font-size: 14px; letter-spacing: 3px;">提示:</h4>
                    </div>
                    <div class="modal-body row">
                        <div class="col-md-5 img-modal">
                            <p id="error_tips" style="letter-spacing: 2px; margin-left: 30px;"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<script src="assets/js/summernote.js"></script>

<script>
    $(document).ready(function() {
        $('#competition_id option').each(function(index, el) {
            if ($(this).attr('data-type') == 1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });

        $('#summernote').summernote({
            callbacks: {
                onImageUpload: function(file) {
                    var formData = new FormData();
                    formData.append("picture", file[0]);

                    $.ajax({
                        type: "post",
                        url: '/uploadNewsPicture',
                        data: formData,
                        cache: false,
                        processData: false,
                        contentType: false,
                        success: function(result) {
                            $('#summernote').summernote('insertImage', result.path);
                        },
                        error: function() {
                            alert("图片文件上传失败");
                        }
                    });
                }
            }
        });


        // $('.note-btn-group.btn-group.note-insert').hide();
        $('.note-editable.panel-body').css({
            'height': 'auto',
            'min-height': '300px'
        });

        $('.btn-primary').click(function() {
            var cms_content_text = $('.note-editable.panel-body').html();
            var intro_content = $('#intro_content');
            intro_content.val(cms_content_text);
            console.log(intro_content.val())
            $('#submit').click();
            // var cms_title = $('#title');
            // var cms_label = $('#label');

            // cms_title.val(trim(cms_title.val()));
            // cms_label.val(trim(cms_label.val()));

            // if (cms_title.val() !== '' && cms_label.val() !== '' && cms_content.val() !== '<p><br></p>') {
            //     $('#error_tips').text('正在为您提交, 请稍候...')
            //     $('#showModal').click()
            //     $('#submit').click();
            //     return;
            // } else {
            //     if (cms_title.val() == '') {
            //         $('#error_tips').text('请填写新闻标题')
            //         $('#showModal').click()
            //     } else if (cms_label.val() == '') {
            //         $('#error_tips').text('请填写新闻分类')
            //         $('#showModal').click()
            //     } else if (cms_content.val() == '<p><br></p>') {
            //         $('#error_tips').text('请填写新闻内容')
            //         $('#showModal').click()
            //     }
            // }
        })
    });
    　　
    function trim(str) {　　
        return str.replace(/(^\s*)|(\s*$)/g, "");　　
    }

    function ch1() {
        var op_v = $('#event_id option:selected').val();
        console.log(op_v)

        $('#competition_id option').each(function(index, el) {
            if ($(this).attr('data-type') == op_v) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
        // var sId = $(this).attr("data-id");
    }
</script>

