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
        var check_userinfo = this.checkuserinfo(params);

        if(check_userinfo === true) {
            $A('/Auth_ajax/userlogin/', params, this.UserLoginResult.bind(this));
        }

    };

    BoardLogin.prototype.UserLoginResult = function(rsps) {

        if (rsps.code === 'SUCCESS') {
            alert('로그인에 성공하였습니다.');
            window.location.href = '/board/';
        } else if(rsps.code === 'ERROR') {
            alert('아이디 또는 비밀번호를 확인하세요');
        }
    };

    BoardLogin.prototype.checkuserinfo = function(data)
    {
        var isId = /^[a-z0-9][a-z0-9_\-]{3,15}$/;
        var isPass = /^[a-z0-9][a-z0-9_\-]{3,15}$/;


        if (data.user_id === '') {
            alert('아이디를 입력해 주세요.');
            return;

        }

        else if (!isId.test(data.user_id)) {
            alert('아이디는 4글자~15글자 사이로 입력해 주세요');
            return false;
        }

        else if (data.password === '') {
            alert('비밀번호를 입력해주세요.');
            return false;
        }

        else if (!isPass.test(data.password)) {
            alert('비밀번호는 영어,숫자 4~15자리이내로 입력해 주셔야 합니다');
            return false;
        } return true;
    };

    return BoardLogin;

})(jQuery, getAjaxData);