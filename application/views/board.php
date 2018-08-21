<!-- PAGE TITLE -->
<section class="section section-padded">
    <div class="container-fluid">
        <div class="section-header">
            <h1>
                게시판
            </h1>
        </div>


<!-- PAGE CONTENT -->
        <div class="row-fluid">
            <div>
                <button type="button" class="btn btn-primary" id="btn_write">글쓰기</button>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>조회수</th>
                    </tr>
                    </thead>
                    <tbody id="tbd_board_list">
                    </tbody>
                </table>
				<td id="pagination"></td>
            </div>
        </div>
    </div>
</section>
<!--pagenation-->
<!--<ul class="pagination pagination-sm" id="paging">
    <li class="prev"><a href="#"><<</a></li>
    <li class="disabled prevx"><a href="#"><</a></li>
    <span class="pageaction"></span>
    <li class="num"><a href="#">{page}</a></li>
    <li class="active now"><a href="#">{page} <span class="sr-only">(current)</span></a></li>
    <li class="next"><a href="#">></a></li>
    <li class="disabled nextx"><a href="#">>></a></li>
</ul>-->

<script>
    var oBoard = new Board(<?=json_encode($BOARD_LIST)?>);
    oBoard.initBoardList();

    $('#btn_write').on('click', function() {
        window.location.href="/board/write/"
    });

    $('#btn_join').on('click', function() {
        window.location.href="/board/memberjoin/"
    });

    $('#btn_login').on('click', function() {
        window.location.href="/board/memberlogin/"
    });

    $('#btn_logout').on('click', function() {
        window.location.href="/auth_ajax/logout/";
    });

</script>










