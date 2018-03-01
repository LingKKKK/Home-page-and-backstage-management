<section class="panel">
    <header class="panel-heading">
        图片分类预览
    </header>
    <div class="panel-body">

        <ul id="filters" class="media-filter">
            <li><a href="#" data-filter="*"> All</a></li>
            <li><a href="#" data-filter=".forum">大会论坛</a></li>
            <li><a href="#" data-filter=".exposition">博览会</a></li>
            <li><a href="#" data-filter=".contest">大赛</a></li>
        </ul>

        <div id="gallery" class="media-gal">

            @if($results)
                @foreach($results as $key => $result)
                    <div class="item {{ $result->classify or '' }}">
                        <!-- <a href="#myModal" data-toggle="modal"> -->
                        <a style="cursor: pointer;">
                            <img src= '{{ $result->url or '' }}' />
                        </a>
                        <p>{{ $result->name or '' }}</p>
                        <div class="delete" id="{{ $result->id or '' }}" style="cursor: pointer;">x</div>
                    </div>
                @endforeach
            @else
                <span class="error">未加载出数据</span>
            @endif
        </div>

        <!-- <div class="col-md-12 text-center clearfix">
            <ul class="pagination">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div> -->

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body row">

                        <div class="col-md-5 img-modal">
                            <img src="/assets/img/gallery/image1.jpg" alt="">
                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit Image</a>
                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-eye"></i> View Full Size</a>

                            <p class="mtop10"><strong>File Name:</strong> img01.jpg</p>
                            <p><strong>File Type:</strong> jpg</p>
                            <p><strong>Resolution:</strong> 300x200</p>
                            <p><strong>Uploaded By:</strong> <a href="#">ThemeBucket</a></p>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label> Name</label>
                                <input id="name" value="img01.jpg" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Tittle Text</label>
                                <input id="title" value="awesome image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Description</label>
                                <textarea rows="2" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label> Link URL</label>
                                <input id="link" value="/assets/img/gallery/img01.jpg" class="form-control">
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-danger btn-sm" type="button">Delete</button>
                                <button class="btn btn-success btn-sm" type="button">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- modal -->

    </div>
</section>



<!-- Placed js at the end of the document so the pages load faster -->
<script src="/assets/js/jquery-1.10.2.min.js"></script>
<script src="/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/modernizr.min.js"></script>
<script src="/assets/js/jquery.nicescroll.js"></script>

<script src="/assets/js/jquery.isotope.js"></script>

<script type="text/javascript">
    $(function() {
        var $container = $('#gallery');
        $container.isotope({
            itemSelector: '.item',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        // filter items when filter link is clicked
        $('#filters a').click(function() {
            var selector = $(this).attr('data-filter');
            $container.isotope({filter: selector});
            return false;
        });

        $('.delete').each(function(index,el){
            $(this).click(function(){
                var id = $(this).attr('id');
                $.get("/deletepicture/" + id, function(data, status) {
                    // window.location.reload();
                    $('#pictureManage').click();
                });
            })
        })
    });
</script>
