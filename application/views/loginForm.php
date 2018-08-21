<section class="section section-padded">
    <div class="container-fluid">
        <div class="section-header">
            <h1>
                로그인
            </h1>
        </div>
    </div>
</section>

<!-- PAGE CONTENT -->
<section>
        <div class="row-fluid" align="center">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="user_id">아이디</label>
                        <input type="text" class="form-control" id="user_id"  placeholder="아이디를 입력하세요">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">비밀번호</label>
                        <input type="password" class="form-control" id="password" placeholder="비밀번호를 입력하세요">
                    </div>
                    <br>
                    <button type="button" class="btn btn-success btn-small" id="btn_login">로그인</button>
                    <button type="button" class="btn btn-secondary btn-small" id="btn_cancel">회원가입</button>
                </form>
            </div>
            <br>
        </div>
    </div>
</section>

<script>
    var oBoardLogin = new BoardLogin();
    $('#btn_cancel').on('click', function() {
        window.location.href = '/board/MemberJoin/'
    });
    $('#btn_login').on('click', oBoardLogin.userLogin.bind(oBoardLogin));
</script>