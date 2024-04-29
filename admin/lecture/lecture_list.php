<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdn.jsdelivr.net/gh/sun-typeface/SUIT/fonts/static/woff2/SUIT.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  
  <!-- datepicker -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="../../css/common.css">
  <link rel="stylesheet" href="../../css/lecture.css">
  <title>캥거루</title>
</head>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/admin/header.php';
?>


  <div class="board_container">
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
          <input class="form-control search" type="text" id="search_keyword" name="keyword">
          <button class="primary_btn">검색</button>
        </div>
      </div>
    </form>

    <hr>

    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th colspan="3">제 목</th>
            <th scope="col">카테고리</th>
            <th scope="col">일자</th>
            <th scope="col">조회수</th>
            <th scope="col">공개상태</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <a href="lecture_view.html">
                <img src="../../images/test_coupon.png" alt=""></a></td>
              <td colspan="2">
                <div class="lecdesc">
                  <a href="lecture_view.html">
                  강의 제목 1<br>
                  강의설명<br>
                  개강일 : <span class="rel_date">24/04/15</span> <br>
                  수강생 수 : <span class="sub_p">105</span>
            </a>
    </td>
  <td>웹디자인</td>
  <td>2024.04.24</td>
  <td>105</td>
  <td>전체 공개</td>
  <td class="lectureSvg">
    <a href="lecture_edit.html"><img src="../../images/edit.svg" alt=""></a>
    <a href=""><img src="../../images/delete.svg" alt=""></a>
  </td>
  </tr>
  <tr>
    <td>
      <a href="lecture_view.html">
        <img src="../../images/test_coupon.png" alt=""></a></td>
        <td colspan="2">
          
      <div class="lecdesc">
        <a href="lecture_view.html">
          강의 제목 1<br>
        강의설명<br>
        개강일 : <span class="rel_date">24/04/15</span> <br>
        수강생 수 : <span class="sub_p">105</span></a>
      </div>
    </td>
    <td>웹디자인</td>
    <td>2024.04.24</td>
    <td>105</td>
    <td>전체 공개</td>
    <td class="lectureSvg">
      <a href="lecture_edit.html"><img src="/admin/images/edit.svg" alt=""></a>
      <a href=""><img src="/admin/images/delete.svg" alt=""></a>
    </td>
  </tr>
  <tr>
    <td><img src="/admin/images/test_coupon.png" alt=""></td>
    <td colspan="2">
      <div class="lecdesc">
        강의 제목 1<br>
        강의설명<br>
        개강일 : <span class="rel_date">24/04/15</span> <br>
        수강생 수 : <span class="sub_p">105</span>
      </div>
    </td>
    <td>웹디자인</td>
    <td>2024.04.24</td>
    <td>105</td>
    <td><span class="partview">일부 공개</span></td>
    <td class="lectureSvg">
      <a href="lecture_edit.html"><img src="/admin/images/edit.svg" alt=""></a>
      <a href=""><img src="/admin/images/delete.svg" alt=""></a>
    </td>
  </tr>
  <tr>
    <td><img src="/admin/images/test_coupon.png" alt=""></td>
    <td colspan="2">
      <div class="lecdesc">
        강의 제목 1<br>
        강의설명<br>
        개강일 : <span class="rel_date">24/04/15</span> <br>
        수강생 수 : <span class="sub_p">105</span>
      </div>
    </td>
    <td>웹디자인</td>
    <td>2024.04.24</td>
    <td>105</td>
    <td>전체 공개</td>
    <td class="lectureSvg">
      <a href="lecture_edit.html"><img src="/admin/images/edit.svg" alt=""></a>
      <a href=""><img src="/admin/images/delete.svg" alt=""></a>
    </td>
  </tr>
  <tr>
    <td><img src="/admin/images/test_coupon.png" alt=""></td>
    <td colspan="2">
      <div class="lecdesc">
        강의 제목 1<br>
        강의설명<br>
        개강일 : <span class="rel_date">24/04/15</span> <br>
        수강생 수 : <span class="sub_p">105</span>
      </div>
    </td>
    <td>웹디자인</td>
    <td>2024.04.24</td>
    <td>105</td>
    <td><span class="nottoshow">비공개</span></td>
    <td class="lectureSvg">
      <a href="lecture_edit.html"><img src="/admin/images/edit.svg" alt=""></a>
      <a href=""><img src="/admin/images/delete.svg" alt=""></a>
    </td>
  </tr>
  </tbody>
  </table>
  </form>
    <!--공통 pagination-->
    <div class="nav_wrap df aic">
      <nav aria-label="">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link">&laquo;</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">&raquo;</a>
          </li>
        </ul>
      </nav>
    <!------------- 공통 pagination-->
<div class="btn_collect">
        <a href="../category.html" class="primary_btn board_btn">카테고리 등록</a>
        <a href="lecture_up.html" class="primary_btn board_btn">강좌 등록</a>
</div>   
  </div>
    <!------------- 공통 pagination-->

  
  </div>

</body>


<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/admin/footer.php';
?>

</html>