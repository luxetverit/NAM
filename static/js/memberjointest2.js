    function checkValue() {
        var form = document.memberjoin;
        this.user_id = $('#user_id').val();
        this.iduncheck = $('#idUncheck').val();
        this.password = $('#password1').val();
        this.password2 = $('#Password2').val();
        this.email = $('#email').val();
        this.name = $('#name').val();
        this.tel = $('#tel').val();
        this.iduncheck = $('#idUncheck').val();

        if(!this.user_id) {
            alert("아이디를 입력하세요.");
            return false;
        }
        if(this.user_id != /^[a-z0-9][a-z0-9_\-]{3,15}$/) {
            alert("아이디는 4글자부터 15글자까지 사용 가능합니다.");
            return false;
        }
        if(!this.iduncheck != "idCheck") {
            alert("아이디 중복체크를 해주세요");
            return false;
        }
        if(!this.password) {
            alert("비밀번호를 입력하세요");
            return false;
        }
        if(this.password != /^[a-z0-9][a-z0-9_\-]{3,15}$/) {
            alert("비밀번호는 4자리 이상 입력하셔야 됩니다.");
            return false;
        }
        if(this.password != form.password2) {
            alert("비밀번호를 동일하게 입력하세요");
            return false;
        }
        if(!this.email) {
            alert("이메일을 입력해주세요");
            return false;
        }
        if(this.email != /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/) {
            alert("올바르지 않은 이메일 양식입니다");
            return false;
        }
        if(!this.name) {
            alert("이름을 입력해주세요");
            return false;
        }
        if(!this.tel) {
            alert("전화번호를 입력해주세요");
            return false;
        }
    }


    var MemberJoin2 = (function($, $A) {
        'use strict';
        function MemberJoin()
        {
            this.is_check_id = false;
        }

        MemberJoin.prototype.checkUserIdExist = function() {
            var params = {
                'user_id': $('user_id').val()
            };

            $A('/membership_ajax/checkidexist/', params, this.checkjoinform.bind(this));
        };
})(jQuery, getAjaxData);