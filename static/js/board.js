var Board = (function($, Ajax) {
    'use strict';

    function Board(board_list)
    {
        this.board_list = board_list;
        this.tbd_board_list =
            '<tr><td>{{board_id}}</td>'
            + '<td><a rel="external" href="/board/board_view/{{board_id}}" name="subject">{{subject}}</a></td>'
            + '<td>{{user_id}}</td>'
            + '<td>{{hits}}</td></tr>';

        this.tbd_board_view = '<tr>{{content}}</tr>';

    }

    Board.prototype.initBoardList = function() {
        var len = this.board_list.length;
        var html = '';

        for (var i = 0; i < len; i++) {
            html += this.tbd_board_list;
            $.each(this.board_list[i], function(key, value) {
                if (html.indexOf(key) != -1) {
                    if (key == 'board_id') {
                        html = html.replace(/{{board_id}}/g, value);
                    } else {
                        html = html.replace('{{' + key +  '}}', value);
                    }
                }
            });
        }
        $('#tbd_board_list').append(html);
    };

    return Board;

})(jQuery, getAjaxData);

/*var totalData = 0;
var dataPerPage = 20;
var pageCount = 5;

function paging(totalData, dataPerPage, pageCount, currentPage){

    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '/board/index',
        data: {totalData: totalData},

        success: function (json) {
            console.log(totalData);
        },

        error: function(){
            console.log('failed');
            return;
        }
    });
    console.log("currentPage : " + currentPage);

    var totalPage = Math.ceil(totalData/dataPerPage);
    var pageGroup = Math.ceil(currentPage/pageCount);

    console.log("pageGroup : " + pageGroup);

    var last = pageGroup * pageCount;
    if(last > totalPage)
        last = totalPage;
    var first = last - (pageCount-1);
    var next = last+1;
    var prev = first-1;

    console.log("last : " + last);
    console.log("first : " + first);
    console.log("next : " + next);
    console.log("prev : " + prev);

    var $pingingView = $("#paging");

    var html = "";

    if(prev > 0)
        html += "<a href=# id='prev'><</a> ";

    for(var i=first; i <= last; i++){
        html += "<a href='#' id=" + i + ">" + i + "</a> ";
    }

    if(last < totalPage)
        html += "<a href=# id='next'>></a>";

    $("#paging").html(html);
    $("#paging a").css("color", "black");
    $("#paging a#" + currentPage).css({"text-decoration":"none",
        "color":"red",
        "font-weight":"bold"});

    $("#paging a").click(function(){

        var $item = $(this);
        var $id = $item.attr("id");
        var selectedPage = $item.text();

        if($id == "next")    selectedPage = next;
        if($id == "prev")    selectedPage = prev;

        paging(totalData, dataPerPage, pageCount, selectedPage);
    });

}

$("document").ready(function(){
    paging(totalData, dataPerPage, pageCount, 1);
});*/



/*
function writeCheck()
{
    var form = document.writeform;

    if( !form.name.value )   // form 에 있는 name 값이 없을 때
    {
        alert( "이름을 적어주세요" ); // 경고창 띄움
        form.name.focus();   // form 에 있는 name 위치로 이동
        return;
    }

    if( !form.password.value )
    {
        alert( "비밀번호를 적어주세요" );
        form.password.focus();
        return;
    }

    if( !form.title.value )
    {
        alert( "제목을 적어주세요" );
        form.title.focus();
        return;
    }

    if( !form.content.value )
    {
        alert( "내용을 적어주세요" );
        form.content.focus();
        return;
    }

    form.submit();
}*/
