<?php
$title = "공지사항 관리";
$menutitle = '게시판 관리'; 
include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/admin/dbcon.php';

$search_keyword = $_GET['search_keyword'] ?? '';
$search_where = "";
if($search_keyword){
  $search_where .= " and (title LIKE '%{$search_keyword}%' or title LIKE '%{$search_keyword}%')";
}
$paginationTarget = 'notice_board';
include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/admin/pagination.php';

$sql = "SELECT * FROM notice_board where 1=1";
$sql .= $search_where;
$order = " order by idx desc";
$sql .= $order;
$limit = " LIMIT $startLimit, $endLimit";
$sql .= $limit;


$result = $mysqli->query($sql);
while ($rs = $result->fetch_object()) {
  $rsArr[] = $rs;
}

// $totalsql = "SELECT COUNT(*) AS post_count FROM notice_board";
// $totalresult = $mysqli -> query($totalsql);
// $totalrow = $totalresult -> fetch_object(); // $row->cnt
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdn.jsdelivr.net/gh/sun-typeface/SUIT/fonts/static/woff2/SUIT.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="icon" href="../images/favicon.png" type="image/x-icon">

  <!-- bxslider -->
  <link rel="stylesheet" href="./css/jquery.bxslider.min.css">

  <!-- datepicker -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="./css/u_common.css">
  <link rel="stylesheet" href="./css/u_notice.css">
  <title>Deep Learning kangaroo</title>
  </head>

<body class="u_body">
  <!-- 사용자 헤더 -->
  <header id="u_header">
    <div class="header_container df aic">
      <h1 class="u_logo">
        <a href="">
          <img src="/images/admin_header_logo.png" alt="">
        </a>
      </h1>
      <nav class="u_gnb_wrap">
        <ul class="u_gnb df">
          <li><a href="" class="body3b">웹디자인/편집</a></li>
          <li><a href="" class="body3b">웹개발</a></li>
          <li><a href="" class="body3b">CG/모션그래픽</a></li>
          <li><a href="" class="body3b">게임/웹툰</a></li>
          <li><a href="" class="body3b">수강평</a></li>
          <li><a href="" class="body3b">Q&A</a></li>
          <li><a href="" class="body3b">공지사항</a></li>
        </ul>
      </nav>
      <div class="util_wrap df aic">
        <a href="" class="u_search"><span class="material-symbols-outlined">search</span></a>
        <a href="" class="cart">
          <span class="material-symbols-outlined">shopping_cart</span>
          <span class="cart_quantity">1</span>
        </a>
        <a href="">로그인</a>
      </div>
    </div>
    <div class="search_area">
      <div class="search_wrap df aic">
        <input class="form-control search" type="text" id="search_keyword" name="keyword"
          placeholder="관심주제, 강의, 포트폴리오 찾기">
        <a href="" class="u_search"><span class="material-symbols-outlined">search</span></a>
      </div>
      <div class="best_wrap">
        <span class="body3b">지금 인기있는 BEST</span>
        <ol class="best_lec df">
          <li class="body2"><strong class="body1b">1</strong>웹 퍼블리셔 기초</li>
          <li class="body2"><strong class="body1b">2</strong>JAVA</li>
          <li class="body2"><strong class="body1b">3</strong>웹툰 그리기 기초</li>
          <li class="body2"><strong class="body1b">4</strong>건축 디자인</li>
        </ol>
        <ol class="best_lec df">
          <li class="body2"><strong class="body1b">5</strong>포토샵/GTQ</li>
          <li class="body2"><strong class="body1b">6</strong>일러스트레이터</li>
          <li class="body2"><strong class="body1b">7</strong>웹 디자인 기초</li>
          <li class="body2"><strong class="body1b">8</strong>3D 랜더링</li>
        </ol>
      </div>
    </div>
  </header>
  <!------- 사용자 헤더 -->
    <div class="wrapper usergrid">
      <h3>공지사항</h3>
      <div class="upper_wrapper df">

        <div class="total">전체 <span class="strong figure"></span>건</div>
          <form action="" id="">
          <div class="board_category df">
            <div class="select_wrap">
              <select class="form-select" aria-label="" id="" name="">
                <option selected>대분류</option>
                <option>중분류</option>
                <option>소분류</option>
              </select>
            </div>
            <div class="search_wrap df">
              <input class="form-control search" type="text" id="search_keyword" name="search_keyword">
              <button class="primary_btn sea">검색</button>
            </div>
          </div>
        </form>
</div>
      <form action="">
        <table class="u_notice table">
          <thead>
            <tr>
              <th scope="col">번호</th>
              <th colspan="3" scope="col">제목</th>
              <th scope="col">작성일</th>
              <th scope="col">조회수</th>
            </tr>
          </thead>
          <tbody class="notice_list">
          <?php
            if(isset($rsArr)){
              foreach($rsArr as $ra){
            ?>
            <tr>
              <td><?=$ra->idx;?></td>
              <td colspan="3" scope="col"><span class="strong"><a href="u_notice_view.php?idx=<?=$ra->idx;?>"><?=$ra->title;?></a></span></td>
              <td><?=$ra->date;?></td>
              <td><?=$ra->hit;?></td>
            </tr>
            <?php
              }
            }
          ?>
          </tbody>
        </table>
      </form>
      <!--공통 pagination-->
      <div class="nav_wrap df aic">
        <nav aria-label="">
        <ul class="pagination">
         <?php
        if($pageNumber > 1){
          echo "<li class=\"page-item\"><a href=\"u_notice_list.php?pageNumber=1\" class=\"page-link\" >처음</a></li>";
          //이전
          if($block_num > 1){
            $prev = 1 + ($block_num - 2) * $block_ct;
            echo "<li class=\"page-item\"><a href=\"u_notice_list.php?pageNumber=$prev\" class=\"page-link\">이전</a></li>";
          }
        }
       
          for($i=$block_start;$i<=$block_end;$i++){
            if($i == $pageNumber){
              echo "<li class=\"page-item active\"><a href=\"u_notice_list.php?pageNumber=$i\" class=\"page-link\">$i</a></li>";
            }else{
              echo "<li class=\"page-item\"><a href=\"u_notice_list.php?pageNumber=$i\" class=\"page-link\">$i</a></li>";
            }            
          }  

          if($pageNumber < $total_page){
            if($total_block > $block_num){
              $next = $block_num * $block_ct + 1;
              echo "<li class=\"page-item\"><a href=\"u_notice_list.php?pageNumber=$next\" class=\"page-item\">다음</a></li>";
            }
            echo "<li class=\"page-item\"><a href=\"u_notice_list.php?pageNumber=$total_page\" class=\"page-link\">마지막</a></li>";
          }        
        ?>
      </ul>
        </nav>
        </div>
      <!------------- 공통 pagination-->
    </div>
    </div>
      <footer class="usergrid">
        <div class="df u_footer_wrap">
          <h2><a href="index.php">딥러닝캥거루</a></h2>
          <ul class="df">
            <li class="body3">딥러닝캥거루</li>
            <li class="body3">사업자번호 : 640-81-01354</li>
            <li class="body3">대표 : 깨끗한 아기 캥거루</li>
            <li class="body3">개인정보책임자 : 김동주</li>
            <li class="body3">제휴&마케팅 문의 : dlkang@create.co.kr</li>
            <li class="body3">Copyright © DEEP LEARNING KANGAROO. All Rights Reserved.</li>
          </ul>
          <p class="h4">대표전화<br><strong>1988-8782</strong></p>
        </div>
      </footer>
  </body>

  <script src="/js/common.js"></script>
  <!-- 스크립트 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


</html>