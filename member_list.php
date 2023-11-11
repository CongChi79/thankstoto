<?php
include "db.php";
?>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>고마워토토 회원조회</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/book.css">
  <link rel="stylesheet" href="css/goods_list.css">
  <link rel="stylesheet" href="css/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css?after" />
  <link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css">
  <script src="datetimepicker/jquery.js"></script>
  <script src="datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
</head>

<body>
  <!-- 고마워토토 관리자 모드 예약조회 스크립트 끝 -->

  <h3><a href="../admin.html">고마워토토 관리자모드</a></h3>
  <!-- 고마워토토 관리자 모드 메뉴 시작 -->
  <div class="topnav" id="myTopnav">
    <div class="dropdown">
      <button class="dropbtn">예약관리
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="naver_form.html">(네이버)예약자 등록</a>
        <a href="book.html">예약 조회</a>
        <a href="book_etc.html">잔여수량조회</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">선예약(OTP)설정
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#OTP_new.html.html">OTP 생성</a>
        <a href="#OTP_set.html">OTP 설정 변경</a>
        <a href="#limit.html">구매제한</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">상품관리
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../goods/goods_list.html">상품목록</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">회원관리
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#member_form.html">회원등록</a>
        <a href="#member_list.html">조회</a>
      </div>
    </div>
    <a href="#payment.html">결제관리</a>
    <a href="#bbs.html">공지사항</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
  <!-- 고마워토토 관리자 모드 메뉴 끝 -->

  <!-- 고마워토토 관리자 모드 예약 조회 시작 -->
  <div class="align2">
    <span style="font-weight: bold;">회원 조회</span>
  </div>
  <form action="member_search.php" method="get">
    <div class="align3">
      <select id="search" name="category" class="text">
        <option value="child_name"><label for="child_name">아이이름</label></option>
        <option value="phone"><label for="phone">전화번호</label></option>
      </select>
      <input type="text" placeholder="Search.." name="search">&nbsp;<button type="submit" class="button button7"><i
          class="fa fa-search"></i></button>
    </div>
    <div style="text-align-last: right;">
      <button type="button" class="button button8">(네이버) 예약 등록</button>
      <button type="button" class="button button10">잔여수량조회</button>
    </div>
  </form>
  <br>

  <!-- 고마워토토 관리자 모드 예약 조회 끝 -->

  <!-- 고마워토토 관리자 모드 예약 조회 리스트 시작 -->
  <div style="overflow-x:auto;">
    <table>
      <thead>
        <tr>
          <th>전화번호</th>
          <th>아이이름</th>
          <th>아이연령</th>
          <th>가입일</th>
          <th>회원 수정/탈퇴</th>
        </tr>
      </thead>
      <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
      } else {
        $page = 1;
      }
      $sql = "SELECT COUNT(*) AS cnt FROM member_parent WHERE stat=".$db->real_escape_string(0)."";
      $result = query($sql);
      $row = mysqli_fetch_assoc($result);
      $row_num = $row['cnt']; //게시판 총 레코드 수
      $list = 10; //한 페이지에 보여줄 개수
      $block_ct = 5; //블록당 보여줄 페이지 개수
      
      $block_num = ceil($page / $block_ct); // 현재 페이지 블록 구하기
      $block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
      $block_end = $block_start + $block_ct - 1; //블록 마지막 번호
      
      $total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
      if ($block_end > $total_page)
        $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
      $total_block = ceil($total_page / $block_ct); //블럭 총 개수
      $start_num = ($page - 1) * $list; //시작번호 (page-1)에서 $list를 곱한다.
      
      // 본인지점에 상품만 나오게 세션에 있는 group_id로 교체해야함
      // 예외처리로 본사에선 모든 상품이 나오게 해야함
      $sql2 = "SELECT * FROM member_parent WHERE stat=".$db->real_escape_string(0)." ORDER BY idx desc limit $start_num, $list";
      $result2 = query($sql2);
      while ($board = $result2->fetch_array()) {
        ?>
        <tbody>
          <tr>
            <td>
              <?php echo $board['phone']; ?>
            </td>
            <td>
              <?php
                $sql3 = "SELECT DISTINCT child_name FROM member_parent a, member_child b WHERE b.parent_id = '".$db->real_escape_string($board['idx'])."' and a.stat=0;";
                $result = query($sql3);
                while ($board2 = $result->fetch_array()) {
                  echo $board2['child_name'] . "<br>";
                }
              ?>
            </td>
            <td>
              <?php
                $sql3 = "SELECT DISTINCT child_age FROM member_parent a, member_child b WHERE b.parent_id = '".$db->real_escape_string($board['idx'])."' and a.stat=0;";
                $result = query($sql3);
                while ($board2 = $result->fetch_array()) {
                  echo $board2['child_age'] . "<br>";
                }
              ?>
            </td>
            <td>
              <?php echo $board['join_day']; ?>
            </td>
            <td>
              <button type="button" id="modify" name="modify" class="button1"
                onclick="document.location.href='member_modify.php?idx=<?php echo $board['idx']; ?>'">수정</button>&nbsp;
              <button type="button"
                onclick="document.location.href='member_delete.php?idx=<?php echo $board['idx']; ?>'" id="del"
                name="del" class="button2">탈퇴</button>
            </td>
          </tr>
        </tbody>
        <?php
      }
      ?>
    </table>
  </div>
  <!---페이징 넘버 --->
  <div id="page_num">
    <ul>
      <?php
      if ($page <= 1) { //만약 page가 1보다 크거나 같다면
        echo "<li class='fo_re'>처음</li>"; //처음이라는 글자에 빨간색 표시 
      } else {
        echo "<li><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
      }
      if ($page <= 1) { //만약 page가 1보다 크거나 같다면 빈값
      
      } else {
        $pre = $page - 1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
        echo "<li><a href='?page=$pre'>이전</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
      }
      for ($i = $block_start; $i <= $block_end; $i++) {
        //for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
        if ($page == $i) { //만약 page가 $i와 같다면 
          echo "<li class='fo_re'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
        } else {
          echo "<li><a href='?page=$i'>[$i]</a></li>"; //아니라면 $i
        }
      }
      if ($block_num >= $total_block) { //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
      } else {
        $next = $page + 1; //next변수에 page + 1을 해준다.
        echo "<li><a href='?page=$next'>다음</a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
      }
      if ($page >= $total_page) { //만약 page가 페이지수보다 크거나 같다면
        echo "<li class='fo_re'>마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
      } else {
        echo "<li><a href='?page=$total_page'>마지막</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
      }
      ?>
    </ul>
  </div>
</body>

</html>