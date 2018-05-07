var Boardview = (function($, $A) {
    'use strict';

    function Boardview(board_view)
    {
        this.board_view = board_view;
        this.tbd_board_view =
            '<tr><td>{{board_id}}</td>'
            + '<td>{{subject}}</td>'
            + '<td>{{user_id}}</td>'
            + '<td>{{hits}}</td>'
            + '<td>{{content}}</td></tr>';

    }

    Boardview.prototype.initBoardView = function() {
        var len = this.board_view.length;
        var html = '';

        for (var i = 0; i < len; i++) {
            html += this.tbd_board_view;
            $.each(this.board_view[i], function(key, value) {
                if (html.indexOf(key) != -1) {
                    if (key == 'board_id') {
                        html = html.replace(/{{board_id}}/g, value);
                    } else {
                        html = html.replace('{{' + key +  '}}', value);
                    }
                }
            });
        }
        $('#tbd_board_view').append(html);


    };

    return Boardview;

})(jQuery, getAjaxData);

