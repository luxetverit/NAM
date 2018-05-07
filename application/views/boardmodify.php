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

        <!-- PAGE CONTENT -->
<section class="section section-padded">
        <div class="row-fluid">
            <div class="span12">
                <div class="form-group" align="center">
                    <label for="subjectarea">  Subject </label>
                    <input type="text" class="form-control" name="subjectarea" id="subject" style="width:50%" align="center" value="<?=$BOARD_CONTENT['subject']?>">
                    <input type="hidden" id="board_id" value="<?=$BOARD_ID?>" />
                </div>
                <div class="form-group" align="center">
                    <label for="textarea"> Content </label>
                    <textarea class="form-control" id="content" name="textarea" style="width:50%" rows="10">
                        <?=$BOARD_CONTENT['content']?>
                    </textarea>
                </div>
                <div class="form-actions" align="center">
                    <button type="button" class="btn btn-primary" id="modify_btn">
                        수정
                    </button>
                    <button type="button" class="btn btn-danger" id="btn_cancel">
                        취소
                    </button>
                </div>
            </div>
        </div>
</section>
<script>
    var board_id = '<?=$BOARD_ID?>';

    var oBoardModify = new BoardModify('<?=$BOARD_ID?>');

    $('#modify_btn').on('click', oBoardModify.updateBoardContent.bind(oBoardModify));
    $('#btn_cancel').on('click', function() {
        window.location.href = '/board/board_view/' + board_id;
    })
</script>