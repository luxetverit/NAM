var MemberJoin = (function($, $A) {
    var id_check = $("#id_check");
    var pwd_check = $("#password_check");
    var name_check = $("#name_check");
    var birthday_check = $("#birthday_check");
    var tel_check = $("#tel_check");
    var email_check = $("#email_check");
    var address_check = $("#address_check");
    var check_check = $("#check_check");

    /* 아이디 */
    function checkId() {
        var m_id = $("#member_id").val();
        var id_msg = $("#id_msg");
        var isId = /^[a-z0-9][a-z0-9_\-]{3,15}$/;

        //아이디 중복검사
        $.ajax({
            type: "POST",
            datatype: "JSON",
            url: "/shop/member/ajax_memberid_check",
            data: {
                m_id: m_id
            },
            success: function (data) {
                if (data == 1) {
                    id_msg.attr("class", "mainfont9");
                    id_msg.text("이미 사용중이거나 탈퇴한 아이디입니다.");
                }
            }
        });

        if (m_id == "") {
            id_check.val("n");
            id_msg.attr("class", "mainfont9");
            id_msg.text("필수 정보입니다.");
        } else if (!isId.test(m_id)) {
            id_check.val("n");
            id_msg.attr("class", "mainfont9");
            id_msg.text("4~15자의 영문 , 숫자 만 사용 가능합니다.");
        } else {
            id_check.val("y");
            id_msg.attr("class", "mainfont8");
            id_msg.text("멋진 아이디네요!");
        }
    }

    /**************************************************/


    /* 비밀번호 */
    function checkPwd1() {
        var pwd1 = $("#password").val();
        var pwd_msg = $("#pwd_msg");
        var pwd2 = $("#password2").val();
        var pwd_msg2 = $("#pwd_msg2");
        var isPwd = /^[a-z0-9][a-z0-9_\-]{3,15}$/;


        if (pwd1 == "") {
            pwd_check.val("n");
            pwd_msg.attr("class", "mainfont9");
            pwd_msg.text("필수 정보입니다.");
            return false;
        }
        if (!isPwd.test(pwd1)) {
            pwd_check.val("n");
            pwd_msg.attr("class", "mainfont9");
            pwd_msg.text("4~15자의 영문 , 숫자 만 사용 가능합니다");
        }
        if (pwd1 != pwd2) {
            pwd_check.val("n");
            pwd_msg2.attr("class", "mainfont9");
            pwd_msg.text("");
            pwd_msg2.text("동일한 비밀번호를 입력해주세요.");
        }
        if (pwd1 == pwd2) {
            pwd_check.val("y");
            pwd_msg2.attr("class", "mainfont8");
            pwd_msg.text("");
            pwd_msg2.text("∨");
        }

    }

    /* 비밀번호 확인 */
    function checkPwd2() {
        var pwd1 = $("#password").val();
        var pwd_msg = $("#pwd_msg");
        var pwd2 = $("#password2").val();
        var pwd_msg2 = $("#pwd_msg2");
        var isPwd = /^[a-z0-9][a-z0-9_\-]{3,15}$/;

        if (pwd1 != pwd2) {
            pwd_check.val("n");
            pwd_msg2.attr("class", "mainfont9");
            pwd_msg.text("");
            pwd_msg2.text("동일한 비밀번호를 입력해주세요.");
        }
        if (pwd1 == pwd2) {
            pwd_check.val("y");
            pwd_msg2.attr("class", "mainfont8");
            pwd_msg.text("");
            pwd_msg2.text("∨");
        }

    }

    /* 이름 */
    function checkName() {
        var m_name = $("#name").val();
        var name_msg = $("#name_msg");
        var isName = /^[가-힣]{2,5}$/;

        if (m_name == "") {
            name_check.val("n");
            name_msg.attr("class", "mainfont9");
            name_msg.text("필수 정보입니다.");
        }
        else if (!isName.test(m_name)) {
            name_check.val("n");
            name_msg.attr("class", "mainfont9");
            name_msg.text("2~5자의 한글만 사용 가능합니다");
        }
        else if (m_name != "") {
            name_check.val("y");
            name_msg.attr("class", "mainfont8");
            name_msg.text("v");
        }
    }

    /* 생년월일 */
    function checkBirthday() {
        var m_yy = $("#year").val();
        var m_mm = $("#month").val();
        var m_dd = $("#day").val();
        var birthday = $("#birthday");
        var birthday_msg = $("#birthday_msg");
        var isNumber = /^[0-9]*$/;

        if (m_yy == "") {
            birthday_check.val("n");
            birthday_msg.attr("class", "mainfont9");
            birthday_msg.text("태어난 년도 4자리를 정확하게 입력하세요.");
        }
        if (m_yy.length != 4) {
            birthday_check.val("n");
            birthday_msg.attr("class", "mainfont9");
            birthday_msg.text("태어난 년도 4자리를 정확하게 입력하세요.");
        }
        if (!isNumber.test(m_yy)) {
            birthday_check.val("n");
            birthday_msg.attr("class", "mainfont9");
            birthday_msg.text("숫자만 입력하세요.");
        }
        if (m_mm.length == 1) {
            m_mm = "0" + m_mm;
        }
        if (m_dd.length == 1) {
            m_dd = "0" + m_dd;
        }
        if (m_yy.length == 4) {
            birthday_check.val("y");
            birthday_msg.attr("class", "mainfont8");
            birthday_msg.text("v");
            var bir = m_yy + m_mm + m_dd;
            birthday.val(bir);

        }

    }

    /* 연락처 */
    function checkTel() {
        var tel = $("#tel");
        var tel1 = $("#tel1").val();
        var tel2 = $("#tel2").val();
        var tel2_msg = $("#tel2_msg");
        var isNumber = /^[0-9]*$/;

        if (tel2 == "") {
            tel_check.val("n");
            tel2_msg.attr("class", "mainfont9");
            tel2_msg.text("필수 정보입니다.");
        } else if (!isNumber.test(tel2)) {
            tel_check.val("n");
            tel2_msg.attr("class", "mainfont9");
            tel2_msg.text("숫자만 입력하세요.");
        } else if (tel2 != "" && tel2.length <= 6) {
            tel_check.val("n");
            tel2_msg.attr("class", "mainfont8");
            tel2_msg.text("");
        } else {
            tel_check.val("y");
            tel2_msg.attr("class", "mainfont8");
            tel2_msg.text("v");
            var t = tel1 + tel2;
            tel.val(t);
        }
    }

    /* 이메일 */
    function checkEmail() {
        var m_email = $("#email").val();
        var email_msg = $("#email_msg");
        var isEmail = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;

        if (m_email == "") {
            email_check.val("n");
            email_msg.attr("class", "mainfont9");
            email_msg.text("필수 정보입니다.");
        } else if (!isEmail.test(m_email)) {
            email_check.val("n");
            email_msg.attr("class", "mainfont9");
            email_msg.text("이메일 주소를 다시 확인해주세요.");
        } else {
            email_check.val("y");
            email_msg.attr("class", "mainfont8");
            email_msg.text("v");
        }
    }

    /* 회원가입버튼 클릭시
    동의
    주소  */
    function checkSubmit() {
        var agree1 = $("#agree1").is(":checked");
        var agree2 = $("#agree2").is(":checked");

        var postcode = $("#sample6_postcode").val();
        var addr1 = $("#sample6_address").val();
        var addr2 = $("#sample6_address2").val();
        var address_msg = $("#address_msg");

        if (!agree1) {
            alert("이용약관에 모두 동의해 주셔야 합니다");
        } else if (!agree2) {
            alert("이용약관에 모두 동의해 주셔야 합니다");
        } else if (postcode == "") {
            address_check.val("n");
            alert("주소찾기를 해주세요");
        } else if (addr1 == "") {
            address_check.val("n");
            alert("주소를 입력해주세요");
        } else if (addr2 == "") {
            address_check.val("n");
            alert("상세주소를 입력해주세요");
        } else if (postcode != "" && addr1 != "" && addr2 != "") {
            address_check.val("y");
        }
    }

    /*폼전송*/
    function join_submit() {
        if (id_check.val() == "n") {
            $("#member_id").focus();
            return false;
        }
        if (pwd_check.val() == "n") {
            $("#password").focus();
            return false;
        }
        if (name_check.val() == "n") {
            $("#name").focus();
            return false;
        }
        if (birthday_check.val() == "n") {
            $("#year").focus();
            return false;
        }
        if (tel_check.val() == "n") {
            $("#tel2").focus();
            return false;
        }
        if (email_check.val() == "n") {
            $("#email").focus();
            return false;
        }
        if (address_check.val() == "n") {
            $("#sample6_postcode").focus();
            return false;
        }

        if (id_check.val() == "y" &&
            pwd_check.val() == "y" &&
            name_check.val() == "y" &&
            birthday_check.val() == "y" &&
            tel_check.val() == "y" &&
            email_check.val() == "y" &&
            address_check.val() == "y" &&
            check_check.val() == "y") {
            return true;
        }

    }
})(jQuery, getAjaxData);
