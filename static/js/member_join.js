(function(){
        var user_id = $('#user_id');
        var pass1 = $('#password1');
        var pass2 = $('#password2');
        var name = $('#name');
        var email = $('#email');
        var tel = $('#tel');

        var idDuplicationCheck = $('#idDuplicationCheck');
        var idComment = $('.idComment');
        var pw1Comment = $('.pw1Comment');
        var pw2Comment = $('.pw2Comment');
        var emailAddressComment = $('.emailAddressComment');
        var nameComment = $('.nameComment');
        var telComment = $('.telComment');

        var idCheck = $('.idCheck');
        var pwCheck2 = $('.pwCheck2');
        var eMailCheck = $('.eMailCheck');
        var telCheck = $('.telCheck');
        var nameCheck = $('.nameCheck')

        var btnjoin = $('#btn_join');

    idDuplicationCheck.click(function(){
        var isId = /^[a-z0-9][a-z0-9_\-]{3,15}$/;

        if (!user_id.val()) {
            idComment.text('아이디를 입력해 주세요.');
            return false;
        } else if (!isId.test(user_id.val())) {
            idComment.text('4글자~15글자 사이로 아이디를 정확히 입력해 주세요');
            return false;
        }
        console.log(user_id.val());
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: '/membership_ajax/checkidexist',
            data: {user_id: user_id.val()},

            success: function (json) {
                if(json.code === 'SUCCESS') {
                    console.log(json.code);
                    idComment.text('사용가능한 아이디 입니다.');
                    idCheck.val('ok');
                } else {
                    idComment.text('다른 아이디를 입력해 주세요.');
                    user_id.focus();
                }
            },

            error: function(){
                console.log('failed');
                return;
            }
        })
    });
    pass1.blur(function(){
        var isPass = /^[a-z0-9][a-z0-9_\-]{3,15}$/;
        if (!pass1) {
            pw1Comment.text('비밀번호를 입력해주세요.');
        } else if (!isPass.test(pass1.val())) {
            pw1Comment.text('비밀번호는 영어,숫자 4~15자리이내로 입력해 주셔야 합니다');
        } else {

        }
    });

    pass2.blur(function () {
        if(pass1.val() != pass2.val()) {
            pw2Comment.text('비밀번호가 일치하지 않습니다.');
            return false;
        } else {
            pw2Comment.text('비밀번호가 일치합니다.');
            pwCheck2.val('ok');
        }
    });

    email.blur(function(){
        var isEmail=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
        if (!email.val()) {
            emailAddressComment.text('이메일을 입력해 주세요');
            return false;
        } else if(!isEmail.test(email.val())) {
            emailAddressComment.text('이메일을 양식에 맞게 입력해 주세요');
            return false;
        } else {
            emailAddressComment.text('올바른 이메일 주소입니다.');
            eMailCheck.val('ok');
        }
    });
    name.blur(function(){
        if (!name.val()) {
            nameComment.text('이름을 입력해 주세요');
            return false;
        } else {
            nameCheck.val('ok');
            nameComment.text('');
        }
    });
    tel.blur(function(){
        if (!tel.val()) {
            telComment.text('전화번호를 입력해 주세요');
            return false;
        } else {
            telCheck.val('ok');
            nameComment.text('');
        }
    });
    var check_form = function checkForm() {

        if (idCheck.val() != 'ok') {
            return false;
        }
        if (pwCheck2.val() != 'ok') {
            return false;
        }
        if (eMailCheck.val() != 'ok') {
            return false;
        }
        if (telCheck.val() != 'ok') {
            return false;
        }
        if (nameCheck.val() != 'ok') {
            return false;
        }
        return true;
    };
    btnjoin.click(function(){
        if (check_form() === true) {
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '/membership_ajax/memberjoinok',
                data: {user_id: user_id.val(), password: pass1.val(), name: name.val(), tel: tel.val(), email: email.val()},


                success: function (json) {
                    if(json.code === 'SUCCESS') {
                        alert('회원가입에 성공하였습니다.');
                        window.location.href="/board/memberjoin";
                    } else {
                        alert('회원가입실패');
                    }
                },

                error: function(){
                    console.log('failed');
                    return;
                }
            });
        } else {
            alert('오류가 발생하였습니다. 가입 양식을 다시 확인해주세요');
            return false;
        }
    });

});




