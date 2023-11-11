<?php
include "db.php";

$bno = mysqli_real_escape_string($db,$_GET['idx']);

$sql = "SELECT * FROM member_child WHERE parent_id='$bno';";
$result = query($sql);
$sql2 = "SELECT phone FROM member_parent WHERE idx='$bno';";
$result2 = query($sql2);
$board2 = $result2->fetch_array()
	?>
<!doctype html>

<head>
	<meta charset="UTF-8">
	<title>회원수정 페이지</title>
	<link rel="stylesheet" type="text/css" href="/testboard/css/style.css" />
	<script src="/thanks_toto/datetimepicker/jquery.js"></script>
</head>
<script>
	$(document).ready(function () {
		$("#add_child_btn").click(function () {
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

		// $(document).on("click", ".remove_child_btn", function () {
		// 	$(this).closest(".child_input_wrapper").remove();
		// });

		
	});

	function child_cancel(cnt) {
		console.log(cnt + "----");

		$.ajax({
			url: 'cancel_child.php',
			method: 'POST', // 요청 방식
			data: { idx: cnt }, // 요청 데이터
			success: function (response) {
				// 성공 시 처리할 코드
				console.log("취소 성공!!!!");
				console.log(response);
				$('.child_input_wrapper' + cnt).remove(); //this(btnDel)의 부모(td)의 부모(tr)를 삭제
			},
			error: function (jqXHR, textStatus, errorThrown) {
				// 실패 시 처리할 코드
				console.log("취소 실패!!!!");
				console.log(textStatus, errorThrown);
			}
		})
	}
	
</script>

<body>
	<div id="board_write">
		<h1><a href="/">회원 수정</a></h1>
		<div id="write_area">
			<form action="/thanks_toto/member_modify_ok.php" method="post" id="sign_form">
				<div id="in_title">
					<input type="tel" name="phone" id="phone" value="<?php echo $board2['phone']; ?>" placeholder="전화번호"
						required />
					<input type="hidden" name="idx" id="idx" value="<?php echo $bno; ?>" required />
				</div>
				<br>
				<div id='add_child_zone'>
					<?php
					while ($board = $result->fetch_array()) {
						echo '<div class="child_input_wrapper'.$board['idx'].'">
							<div class="in_name">
							<input type="hidden" name="child_id[]" class="child_id" value=' . $board['idx'] . ' required />
							<input type="text" name="child_name[]" class="child_name" placeholder="아이이름" value=' . $board['child_name'] . ' required />
							</div>
							<div class="in_content">
							<input type="number" name="child_age[]" class="child_age" placeholder="아이연령" value=' . $board['child_age'] . ' required />
							</div>
							<button type="button" onclick="child_cancel('.$board['idx'].')" class="remove_child_btn">취소</button>
							</div>';
					} ?>
				</div>
				<div class="bt_se">
					<button type="button" id="add_child_btn">자녀 추가</button>
					<button type="submit">수정</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>