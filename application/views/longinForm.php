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
    <div>
        <div class="row-fluid">
            <div>
                <button type="button" class="btn btn-primary" id="btn_write">글쓰기</button>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="user_id">아이디</label>
                        <input type="text" class="form-control" id="user_id" aria-describedby="inputIDhelp"  placeholder="아이디를 입력하세요">
                    </div>
                    <div class="form-group">
                        <label for="password">비밀번호</label>
                        <input type="password" class="form-control" id="password" placeholder="비밀번호를 입력하세요">
                        <div class="pw1Comment"></div>
                    </div>
                    <button type="button" class="btn btn-success btn-large" id="btn_login">로그인</button>
                    <button type="button" class="btn btn-secondary btn-large" id="btn_cancel">취소</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    var oBoardLogin = new BoardLogin();
    $('#btn_cancel').on('click', function() {
        window.location.href = '/board/'
    });
    $('#btn_login').on('click', oBoardLogin.userLogin.bind(oBoardLogin));
</script>