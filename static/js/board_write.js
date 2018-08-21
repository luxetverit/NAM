var BoardWrite = (function($, $A) {
    'use strict';

    function BoardWrite()
    {

    }

    BoardWrite.prototype.insertBoardContent = function() {
        var params = {
            'subject': $('#subject').val(),
            'content': $('#content').val()
        };

        var check_data = this.checkData(params);

        if (check_data === true) {
            $A('/board_ajax/getwriteok/', params, this.insertBoardContentResult.bind(this));
        }
    };

    BoardWrite.prototype.insertBoardContentResult = function(rsps) {
        alert(rsps.msg);

        if (rsps.code == 'SUCCESS') {
            window.location.href = '/board/';
        }
    };

    BoardWrite.prototype.checkData = function(data)
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

    return BoardWrite;
})(jQuery, getAjaxData);