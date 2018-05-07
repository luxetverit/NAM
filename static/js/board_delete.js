var BoardDelete = (function($, $A) {
    'use strict';

    function BoardDelete(board_id)
    {
        this.board_id = board_id;
    }

    BoardDelete.prototype.deleteBoardContent = function() {
        var params = {
            'board_id' : this.board_id
        };

        if(confirm('정말 삭제하시겠습니까?')) {
            $A('/board_ajax/getdeleteok/', params, this.deleteBoardContentResult.bind(this));
        } else {
            window.location.href = '/board/board_view/' + this.board_id;
        }


    };

    BoardDelete.prototype.deleteBoardContentResult = function(rsps) {

        alert(rsps.msg);

        if (rsps.code == 'SUCCESS') {
            window.location.href = '/board/'
        }

    };

    return BoardDelete;
})(jQuery, getAjaxData);