var Board_View = (function($, Ajax) {
    'use strict';

    function Board_View()
    {

    }

    Board_View.prototype.initBoardCommentList = function($data) {
        var cCnt = $data.length;
        var html = '';

        if($data.length > 0){

            for(var i=0; i<data.length; i++){
                html += "<div>";
                html += "<div><table class='table'><h6><strong>"+$data[i].user_id+"</strong></h6>";
                html += data[i].comment + "<tr><td></td></tr>";
                html += "</table></div>";
                html += "</div>";
            }

        } else {

            html += "<div>";
            html += "<div><table class='table'><h6><strong>등록된 댓글이 없습니다.</strong></h6>";
            html += "</table></div>";
            html += "</div>";

        }
        $("#cCnt").html(cCnt);
        $('#tbd_comment_list').html(html);
    };

    return Board_View;

})(jQuery, getAjaxData);
