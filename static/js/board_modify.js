var BoardModify = (function($, $A) {
    'use strict';

    function BoardModify(board_id)
    {
        this.board_id = board_id;
    }

    BoardModify.prototype.updateBoardContent = function() {
        var params = {
            'board_id' : this.board_id,
            'subject': $('#subject').val(),
            'content': $('#content').val()
        };
        var check_data = this.checkData(params);

        if(check_data === true) {
            $A('/board_ajax/getmodifyok/', params, this.updateBoardContentResult.bind(this));
        }
    };

    BoardModify.prototype.updateBoardContentResult = function(rsps) {
        alert(rsps.msg);

        if (rsps.code == 'SUCCESS') {
            window.location.href = '/board/board_view/' + this.board_id;
        }
    };

    BoardModify.prototype.checkData = function(data)
    {
        if (data.subject == '') {
            alert('제목을 입력해 주세요');

            return false;
        }

        if (data.content == '') {
            alert('내용을 입력해 주세요');

            return false;
        }

        return true;
    };

    return BoardModify;
})(jQuery, getAjaxData);