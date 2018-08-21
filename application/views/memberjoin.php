<!-- PAGE TITLE -->
<section class="section section-padded">
    <div class="container-fluid">
        <div class="section-header">
            <h1>
                회원가입
            </h1>
        </div>
    </div>
</section>

<!-- PAGE CONTENT -->
<section class="section-dark">
    <div class="container" style="width: 25%">
        <div>
            <div class="table-hover" style="width: 100%">
                <form class="form-horizontal">
                    <div class="inputArea">
                        <label for="user_id">아이디</label>
                        <input type="text" style="width: 100%" id="user_id" aria-describedby="inputIDhelp"  placeholder="아이디를 입력하세요">
                        <div class="idComment"></div>
                        <button type="button" class="btn btn-secondary btn-small" id="idDuplicationCheck">중복확인</button>
                    </div>
                    <div class="form-group">
                        <label for="Password1">비밀번호</label>
                        <input type="password" style="width: 100%" id="password1" placeholder="비밀번호를 입력하세요">
                        <div class="pw1Comment"></div>
                    </div>
                    <div class="form-group">
                        <label for="Password2">비밀번호 확인</label>
                        <input type="password" style="width: 100%" id="password2" placeholder="비밀번호를 한번더 입력하세요">
                        <div class="pw2Comment"></div>
                    </div>
                    <div class="form-group">
                        <label for="Email">이메일</label>
                        <input type="email" style="width: 100%" id="email" aria-describedby="emailHelp" placeholder="이메일을 입력하세요">
                        <div class="emailAddressComment"></div>
                    </div>
                    <div class="form-group">
                        <label for="Name">이름</label>
                        <input type="text" style="width: 100%" id="name" aria-describedby="inputnamehelp" placeholder="이름을 입력하세요">
                        <div class="nameComment"></div>
                    </div>
                    <div class="form-group">
                        <label for="tel">전화번호</label>
                        <input type="text" style="width: 100%" id="tel" aria-describedby="inputtelhelp" placeholder="연락처를 입력하세요">
                        <div class="telComment"></div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-success btn-small" id="btn_join">가입</button>
                    <button type="button" class="btn btn-secondary btn-small" id="btn_cancel">취소</button>
                </form>
                <div class="formCheck">
                    <input type="hidden" name="idCheck" class="idCheck" />
                    <input type="hidden" name="pw2Check" class="pwCheck2" />
                    <input type="hidden" name="emailCheck" class="eMailCheck" />
                    <input type="hidden" name="nameCheck" class="nameCheck" />
                    <input type="hidden" name="telCheck" class="telCheck" />
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    /*var oMemberJoin = new MemberJoin();
    $('#idDuplicationCheck').on('click', oMemberJoin.checkUserIdExist.bind(oMemberJoin));
    $('#btn_join').on('click', oMemberJoin.insertMemberInfo.bind(oMemberJoin));*/
    $('#btn_cancel').on('click', function() {
        window.location.href = '/home/'
    });
</script>