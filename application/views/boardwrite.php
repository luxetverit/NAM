<!-- PAGE TITLE -->
<section class="pageTitle" style="text-align: center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="titleTable">
                    <div class="titleTableInner">
                        <div class="pageTitleInfo">
                            <h1>게시판</h1>
                            <div class="under-border"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PAGE CONTENT -->
<article id="board_area">
        <div class="form-group" align="center">
            <label for="inputsubject">  Subject </label>
            <input type="text" name="inputsubject" class="form-control" id="subject" style="width:50%" align="center" placeholder="제목을 입력해 주세요" value="">
        </div>
        <div class="form-group" align="center">
            <label for="contentarea"> Content </label>
            <textarea class="form-control" id="content" name="contentarea" style="width:50%" rows="10" placeholder="내용을 입력해 주세요"></textarea>
        </div>
            <input type="hidden" name="user_id" class="form-control" id="user_id" value="">
        <div class="form-actions" align="center">
            <button type="button" class="btn btn-primary" id="write_btn">
                작성
            </button>
            <button type="button" class="btn btn-danger" id="btn_cancel">
                취소
            </button>
        </div>
</article>
<script>
    var oBoardWrite = new BoardWrite();

    $('#write_btn').on('click', oBoardWrite.insertBoardContent.bind(oBoardWrite));
    $('#btn_cancel').on('click', function() {
        window.location.href = '/board/';
    })
</script>

