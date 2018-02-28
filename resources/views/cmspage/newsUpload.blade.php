<link href="assets/css/summernote.css" rel="stylesheet">
<style type="text/css">
    #cke_20 {
        display: none!important;
    }
    #cke_27 {
        display: none!important;
    }
</style>

<section class="panel">
    <header class="panel-heading">
        编辑新闻
    </header>
    <div class="panel-body" style="padding: 20px 50px;">
        <div class="leader-info-tips">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                <span>{{$error}}</span>
                @endforeach
            @endif
        </div>

        <form role="form" class="clearfix" id="form" enctype="multipart/form-data" method="post" action="/uploadNews" novalidate>
            <div class="form-group">
                <label for="exampleInputEmail1">新闻标题: </label>
                <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}" placeholder="输入新闻标题" style="max-width: 280px;" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">新闻标签: </label>
                <input type="text" class="form-control" name="label" id="label" value="{{old('label')}}" placeholder="eg. 最新动态,赛事信息等  (可以为空)" style="max-width: 280px;" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">编辑新闻正文部分: </label>
                <div id="summernote"></div>
                <input type="text" class="form-control" name="content" id="content" value="{{old('content')}}" style="max-width: 280px; display: none;" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Rule: </label>
                <input type="text" class="form-control" name="rule" id="rule" value="管理员" disabled="disabled" style="max-width: 280px;" />
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
        $('#summernote').summernote();
        $('.note-btn-group.btn-group.note-insert').hide();
        $('.note-editable.panel-body').css({
            'height': 'auto',
            'min-height': '300px'
        });

        $('.btn-primary').click(function() {
            var cms_content_text = $('.note-editable.panel-body').html();
            var cms_title = $('#title');
            var cms_label = $('#label');
            var cms_content = $('#content');

            cms_title.val(trim(cms_title.val()));
            cms_label.val(trim(cms_label.val()));
            cms_content.val(cms_content_text);

            if (cms_title.val() !== '' && cms_label.val() !== '' && cms_content.val() !== '<p><br></p>') {
                $('#error_tips').text('正在为您提交, 请稍候...')
                $('#showModal').click()
                $('#submit').click();
                return;
            } else {
                if (cms_title.val() == '') {
                    $('#error_tips').text('请填写新闻标题')
                    $('#showModal').click()
                } else if (cms_label.val() == '') {
                    $('#error_tips').text('请填写新闻分类')
                    $('#showModal').click()
                } else if (cms_content.val() == '<p><br></p>') {
                    $('#error_tips').text('请填写新闻内容')
                    $('#showModal').click()
                }
            }
        })
    });
    　　
    function trim(str) {　　
        return str.replace(/(^\s*)|(\s*$)/g, "");　　
    }
</script>
