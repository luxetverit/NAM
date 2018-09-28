var BoardComment = (function($, $A) {
    'use strict';

    function BoardComment()
    {
        this.board_id = board_id;
    }

    BoardComment.prototype.insertBoardComment = function() {
        var params = {
            'comment': $('#comment').val(),
            'board_pid': $('#board_id').val()
        };

        var check_data = this.checkData(params);

        if (check_data === true) {
            $A('/board_ajax/getCommentOk/', params, this.insertBoardCommentResult.bind(this));
        }
    };

    BoardComment.prototype.insertBoardCommentResult = function(rsps) {
        alert(rsps.msg);

        if (rsps.code == 'SUCCESS') {
            window.location.href = '/board/' + board_id;
        }
    };

    BoardComment.prototype.checkData = function(data)
    {

        if (data.comment == '') {
            alert('내용을 입력해 주세요');

            return false;
        }

        return true;

    };

    return BoardComment;

})(jQuery, getAjaxData);