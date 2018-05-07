<!-- PAGE TITLE -->
<section class="section section-padded">
    <div class="container-fluid">
        <div class="section-header">
            <h1>
                게시판
            </h1>
        </div>
    </div>
</section>
<section class="section section-padded">
    <div class="container">
        <div class="row">
            <div class="col-xs-12" id="tbd_board_view">
                <table class="table table-hover" width="80%">
                    <thead>
                    <tr>
                        <th width="50%" style="font-size: large"><?=$BOARD_CONTENT['subject']?></th>
                        <th scope="col">글번호: <?=$BOARD_CONTENT['board_id']?></th>
                        <th>작성자: <?=$BOARD_CONTENT['user_id']?></th>
                        <th>조회수: <?=$BOARD_CONTENT['hits']?></th>
                    </tr>
                    </thead>
                </table>
                    <tbody>
                    <div class="tbody m-tcol-c">
                        <?=$BOARD_CONTENT['content']?>
                    </div>
                    </tbody>
                    <br><br>
                    <tfoot>
                    <tr>
                        <th colspan="4">
                            <button type="button" class="btn btn-small btn-primary" id="btn_list">목록</button>
                            <button type="button" class="btn btn-small btn-warning" id="btn_modify">수정</button>
                            <button type="button" class="btn btn-small btn-success" id="btn_delete">삭제</button>
                        </th>
                    </tr>
                    </tfoot>

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
    var board_id = <?=$BOARD_CONTENT['board_id']?>;

    $('#btn_list').on('click', function() {
        window.location.href = '/board' ;
    });

    $('#btn_modify').on('click', function() {
        window.location.href = '/board/modify/' + board_id;
    });

    var oBoardDelete = new BoardDelete(board_id);

    $('#btn_delete').on('click', oBoardDelete.deleteBoardContent.bind(oBoardDelete));

</script>










