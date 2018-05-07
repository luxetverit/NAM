var BoardLogin = (function($, $A) {
    'use strict';

    function BoardLogin()
    {

    }

    BoardLogin.prototype.userLogin = function() {
        var params = {
            'user_id': $('#user_id').val(),
            'password': $('#password').val()
        };
        var isId = /^[a-z0-9][a-z0-9_\-]{3,15}$/;
        var isPass = /^[a-z0-9][a-z0-9_\-]{3,15}$/;


        if (!'user_id') {
            alert('아이디를 입력해 주세요.');
            return false;
        }

        else if (!isId.test('user_id')) {
            alert('아이디는 4글자~15글자 사이로 입력해 주세요');
            return false;
        }

        else if (!'password') {
            alert('비밀번호를 입력해주세요.');
            return false;
        }

        else if (!isPass.test('password')) {
            alert('비밀번호는 영어,숫자 4~15자리이내로 입력해 주셔야 합니다');
            return false;
        }
            return $A('/auth_ajax/userlogin/', params, this.UserLoginResult.bind(this));
    };

    BoardLogin.prototype.UserLoginResult = function(rsps) {

        if (rsps.code == 'SUCCESS') {
            alert('로그인에 성공하였습니다.');
            window.location.href = '/board/';
        } else {
            alert('로그인에 실패하였습니다.');
            window.location.href = '/board/memberlogin/';
        }
    };

    return BoardLogin;

})(jQuery, getAjaxData);