<!doctype html>
<head>
<meta charset="UTF-8">
<title>회원등록 페이지</title>
<link rel="stylesheet" type="text/css" href="/testboard/css/style.css" />
<script src="/thanks_toto/datetimepicker/jquery.js"></script>
</head>
<script>
    $(document).ready(function() {
    $("#add_child_btn").click(function() {
        var html = `
        <div class="child_input_wrapper">
            <div class="in_name">
            <input type="text" name="child_name[]" class="child_name" placeholder="아이이름" required />
            </div>
            <div class="in_content">
            <input type="number" name="child_age[]" class="child_age" placeholder="아이연령" required />
            </div>
            <button type="button" class="remove_child_btn">취소</button>
        </div>
        `;
        $("#sign_form").append(html);
    });

    $(document).on("click", ".remove_child_btn", function() {
        $(this).closest(".child_input_wrapper").remove();
    });
    });
</script>
<body>
    <div id="board_write">
        <h1><a href="/">회원 등록</a></h1>
            <div id="write_area">
                <form action="/thanks_toto/sign_ok.php" method="post" id="sign_form">
                    <div id="in_title">
                        <input type="tel" name="phone" id="phone"  placeholder="전화번호" required />
                    </div>
                    <div id="in_name">
                        <input type="text" name="child_name[]" id="child_name"  placeholder="아이이름" required />
                    </div>
                    <div id="in_content">
                        <input type="number" name="child_age[]" id="child_age"  placeholder="아이연령" required />
                    </div>
                    <div class="bt_se">
                        <button type="button" id="add_child_btn">자녀 추가</button>
                        <button type="submit">등록</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>