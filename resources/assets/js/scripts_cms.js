$(function() {
    $(".item_click").each(function(index, el) {
        $(this).on("click", function() {
            var sId = $(this).attr("data-id");

            window.location.hash = sId; //设置锚点

            loadInner(sId);
        });
    });

    function loadInner(sId) {
        var sId = window.location.hash;
        var pathn, i;
        switch (sId) {
            case "#index":
                pathn = "index";
                i = 0;
                break;
            case "#documentManage":
                pathn = "documentManage";
                i = 1;
                break;
            case "#documentUpload":
                pathn = "documentUpload";
                i = 2;
                break;
            case "#newsManage":
                pathn = "newsManage";
                i = 3;
                break;
            case "#newsUpload":
                pathn = "newsUpload";
                i = 4;
                break;
            case "#setting":
                pathn = "setting";
                i = 5;
                break;
            case "#pictureManage":
                pathn = "pictureManage";
                i = 6;
                break;
            case "#pictureUpload":
                pathn = "pictureUpload";
                i = 7;
                break;
            case "#videoManage":
                pathn = "videoManage";
                i = 8;
                break;
            case "#videoUpload":
                pathn = "videoUpload";
                i = 9;
                break;
            default:
                pathn = "index";
                i = 0;
                break;
        }

        $("#cms_content").load(pathn);
    }
    var sId = window.location.hash;
    loadInner(sId);
});
