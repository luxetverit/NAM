function BoardGetComment() {
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '/board_ajax/getCommentView',
        data: $("#commentForm").serialize(),


        success : function(data){

            var html = "";
            var cCnt = data.length;

            if(data.length > 0){

                for(i=0; i<data.length; i++){
                    html += "<div>";
                    html += "<div><table class='table'><h6><strong>"+data[i].writer+"</strong></h6>";
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
            $("#commentList").html(html);

        },
        error:function(request,status,error){

        }
    });
}