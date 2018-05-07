<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=EUC-KR">
    <title>아이디 중복 체크</title>

    <style type="text/css">
        #wrap {
            width: 490px;
            text-align :center;
            margin: 0 auto 0 auto;
        }

        #chk{
            text-align :center;
        }

        #cancelBtn{
            visibility:visible;
        }

        #useBtn{
            visibility:hidden;
        }

    </style>

<body onload="pValue()">
<div id="wrap">
    <br>
    <b><font size="4" color="gray">아이디 중복체크</font></b>
    <hr size="1" width="460">
    <br>
    <div id="chk">
            <input type="text" name="idinput" id="userId">
            <input type="button" value="중복확인" id="idcheck">
        <div id="msg"></div>
        <br>
        <input id="cancelBtn" type="button" value="취소" onclick="window.close()"><br>
        <input id="useBtn" type="button" value="사용하기">
    </div>
</div>
</body>
</html>

<script>
    var oMemberJoin = new MemberJoin();
    $.('#useBtn').on('click', oMemberJoin.checkUserIdExist.bind(oMemberJoin));
</script>