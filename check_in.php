<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>고마워토토</title>
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module"
        src="https://bks0c7yrb0.execute-api.ap-northeast-2.amazonaws.com/v1/api/fontstream/djs/?sid=gAAAAABkU0P5YVjwjpEytsF3d7kxC82cwCD6k0NUX6QNQ5poaW6iT7ZGv6fGT8ymiMpzqhjvwpVIVgXFKjR0OV3N2tzJV_OJMyK6_xWRc0UqAgEvg0Gk75J_kqTEn5hPR6g0-RjbaiWr6gcdKIHQFe9p383yyFg5vSgJmQO5WyfMHg3GpFcLkTedmeMognwHg8Jm8f5OycR2XgF6yzDGeLFznmESiSHGh9Zyv-QEDBpXktp-hEggmO2i2jK6XbjY907KmUx6h5IY"
        charset="utf-8"></script>
</head>

<body>
    
    <!-- topnav include -->
    <?php 
    $topnav_title = "CHECK IN";
    include 'topnav.php';
    ?>

    </div>
    <div class="container_check">
        <div class="header1">
            <ul>
                <li>원활한 수업 진행과 사진 전송을 위해 다음 항목에 체크하여 주시기 바랍니다.</li>
            </ul>
        </div>
        <form action="check_ok.php" method="post" enctype="multipart/form-data">
            <div class="mainform">
                <table class="center">
                    <tbody>
                        <tr>
                            <td colspan="2" style="height: 10px;"></td>
                        </tr>
                        <tr>
                            <th><label for="babyname">아이이름&nbsp;:</label></th>
                            <td style="padding-bottom: 4px;"><input type="text1" maxlenth="4" name="child_name" id="child_name" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="line"></div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 30px;"></td>
                        </tr>
                        <tr>
                            <th><label for="Fname">
                                    <div class="letter1">보호자이름&nbsp;:</div>
                                </label></th>
                            <td style="padding-bottom: 4px;"><input type="text1" maxlenth="4" name="parent_name" id="parent_name" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="line"></div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 30px;"></td>
                        </tr>
                        <tr>
                            <th><label for="phone">연&nbsp;&nbsp;락&nbsp;&nbsp;처&nbsp;:</label></th>
                            <td style="padding-bottom: 2px;">010&nbsp;-&nbsp;
                                <input type="tel2" name="phone" pattern="[0-9]{3}[0-9]{2}[0-9]{3}"
                                    required>&nbsp;&nbsp;<input type="radio" id="dad" name="gender" class="radio"
                                    value="m" checked><label for="dad">&nbsp;父</label>&nbsp;&nbsp;<input type="radio"
                                    id="mom" name="gender" value="w"><label for="mom">&nbsp;母</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="line"></div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 30px;"></td>
                        </tr>
                        <tr>
                            <th><label for="phone">
                                    <div class="letter2">E&nbsp;&nbsp;메&nbsp;&nbsp;일&nbsp;:</div>
                                </label></th>
                            <td style="padding-bottom: 4px;"><input type="email" id="email" name="email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="line"></div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 30px;"></td>
                        </tr>
                        <tr>
                            <th><label for="phone">구&nbsp;&nbsp;매&nbsp;&nbsp;처&nbsp;:</label></th>
                            <td style="padding-bottom: 7px;">
                                <div class="txt"><input type="radio" id="현장예약" name="buy_place1" class="radio" value="0"
                                        checked><label for="현장예약">&nbsp;현장예약</label></div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="온라인예약" name="buy_place1" value="1"><label
                                    for="온라인예약">&nbsp;온라인예약</label>
            </div>
            </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="line"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="height: 30px;"></td>
            </tr>
            <th></th>
            <td style="padding-bottom: 2px;">
                <div style="float: left;"><input type="radio" id="기타예약" name="buy_place1" class="radio"><label
                        for="기타예약">&nbsp;기타예약</label></div><input type="text3" name="buy_place3" id="Wbooking" />
            </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="line"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="height: 30px;"></td>
            </tr>
            <tr>
                <th><label for="time">수업시간&nbsp;:</label></th>
                <td style="padding-bottom: 4px;">
                    <div style="float: left;">①콘텐츠명:<input type="text4" name="title" id="title"
                            placeholder="ex 잭과 콩나무" /></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="line"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="height: 30px;"></td>
            </tr>
            <tr>
                <th></th>
                <td style="padding-bottom: 4px;">
                    <div style="float: left;">②수업일자:<input type="text4" name="res_day" id="res_day"
                            placeholder="ex 2023.05.17 AM 11:00" /></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="line"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="height: 30px;"></td>
            </tr>
            <tr>
                <th><label for="babyinfo">특이체질&nbsp;:</label></th>
                <td style="padding-bottom: 6px;"><input type="radio" id="allergy1" name="allergy1" class="radio" checked>
                    <label for="none">&nbsp;무</label>&nbsp;&nbsp;<input type="radio" name="allergy1" id="allergy1">
                        <label for="being">&nbsp;유</label></td>
            </tr>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="line"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="height: 30px;"></td>
            </tr>
            <tr>
                <td colspan="2" style="padding-bottom: 5px;"><input type="text5" name="allergy" id="allergy"
                        placeholder="ex 복숭아 알러지, 오이 알러지 등 상세하게 입력해주세요." /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="line"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="height: 30px;"></td>
            </tr>
            </tbody>
            </table>
    </div>
    <div class="header1">
        <ul>
            <li>이후 항목은 첫 방문 시에만 작성해 주시기 바랍니다.</li>
        </ul>
    </div>
    <div class="mainform">
        <table class="center">
            <tbody>
                <tr>
                    <td colspan="2" style="height: 10px;"></td>
                </tr>
                <tr>
                    <th><label for="birthday"><div class="letter5">출생일자&nbsp;:</div></label></th>
                    <td style="padding-bottom: 5px; padding-left: 10%;"><input type="text6" maxlenth="4" name="birthday1"
                             />년<input type="text6" maxlenth="2" name="birthday2" />월<input type="text6" maxlenth="2"
                            name="birthday3" />일</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="line"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="height: 30px;"></td>
                </tr>
                <tr>
                    <th><label for="birthday">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소&nbsp;:</label></th>
                    <td style="padding-bottom: 5px;"><input type="text2" name="address" id="address" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="line"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="height: 30px;"></td>
                </tr>
                <tr>
                    <th><label for="birthday"><div class="letter5">방문경로&nbsp;:</div></label></th>
                    <td style="padding-bottom: 5px;"><input type="radio" id="fr" name="fr" class="radio" checked>
                        <label for="fr">&nbsp;지인 추천</label><input type="text7" maxlenth="4" name="visit_route1" id="visit_route1"
                            placeholder="ex 추천인 성함" /></td>
                </tr>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="line"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="height: 30px;"></td>
                </tr>
                <tr>
                    <th></th>
                    <td style="padding-bottom: 5px;"><input type="radio" id="search" name="fr" class="radio"><label
                            for="fr">&nbsp;온라인 검색</label><input type="text7" name="visit_route2" id="visit_route2"
                            placeholder="검색채널: ex 인스타그램 등" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="line"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="height: 30px;"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="header1">
        <ul>
            <li>소중한 정보 감사드립니다. 개인정보 수집 및 활용에 동의하십니까?</li>
        </ul>
    </div>
    <div class="mainform">
        <table class="center">
            <tbody>
                <tr>
                    <td colspan="2" style="height: 10px;"></td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-bottom: 5px;"><label for="yes"><input type="radio" id="yes"
                                name="personal_info" class="radio" value="y" checked>&nbsp;네</label></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="line"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="height: 30px;"></td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-bottom: 5px;"><label for="no"><input type="radio" id="no"
                                name="personal_info" class="radio" value="no">&nbsp;아니오</label>&nbsp;<input type="text9" 
                                placeholder="ex 수업 활동 사진 전송 등 다양한 혜택을 받기 어려울 수 있습니다."></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="line"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="height: 30px;"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="btn"><button type="submit" class="button button1">제출하기</button></div>
    </form>
    </div>

</body>

</html>