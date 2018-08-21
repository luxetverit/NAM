var BoardComment = (function($, $A) {
    'use strict';

    function BoardComment()
    {
        this.user_id = user_id;
    }

    BoardComment.prototype.insertBoardComment = function() {
        var params = {
            'comment': $('#comment').val(),
            'user_id': $('#user_id').val(),
            'board_id': $('#board_id').val()
        };

        var check_data = this.checkData(params);

        if (check_data === true) {
            $A('/board_ajax/getCommentOk/', params, this.insertBoardCommentResult.bind(this));
        }
    };

    BoardComment.prototype.insertBoardCommentResult = function(rsps) {
        alert(rsps.msg);

        if (rsps.code == 'SUCCESS') {
            window.location.href = '/board/';
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