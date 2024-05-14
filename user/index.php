<?php
$title='홈';

include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/admin/dbcon.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/clean_kangaroo/user/u_header.php';



?>

<main>
<!-- 메인배너 - 다영 -->
  <section class="main_banner">
    <ul class="user_banner">
      <li><img src="../images/user_main_banner1.png" alt=""></li>
      <li><img src="../images/user_main_banner2.png" alt=""></li>
      <li><img src="../images/user_main_banner3.png" alt=""></li>
    </ul>
    <div class="main_count usergrid">
      <ul class="user_count df">
        <li class="user_count_title df">
          <img src="../images/user_main_count.png" alt="">
          <div>
            <p class="body2b">[캥거루 패밀리 세일]</p>
            <p class="body2b">구독 할인 중!</p>
          </div>
        </li>
        <li>
          <div class="countdown">
            <span class="card_title mb-4">
              <span data-date="6/28/2024"></span>
            </span>
            <div class="timer">
              <span id="days" class="value text-warning h4">00</span>
              <span class="text-warning h4">일</span>
              <span id="hours" class="value text-warning h4">00</span>
              <span class="text-warning h4">:</span>
              <span id="minutes" class="value text-warning h4">00</span>
              <span class="text-warning h4">:</span>
              <span id="seconds" class="value text-warning h4">00</span>
              <span class="text-warning h4">남음</span>
            </div>
          </div>
        </li>
        <li class="user_count_btn">
          <a href="" class="body2b">지금 혜택 받기</a>
        </li>
      </ul>
    </div>
  </section>
<!----------- 메인배너 - 다영 -->
  
<!-- 강좌소개 - 선진 -->
  <section class="main_lecture">
    <h2>강좌소개</h2>
    <div class="lec df">
    <div class="lec_cate active"><a href="#tab1">웹/편집/인테리어</a></div>
    <div class="lec_cate"><a href="#tab2">CG/VFX</a></div>
    <div class="lec_cate"><a href="#tab3">모션그래픽</a></div>
    <div class="lec_cate"><a href="#tab4">게임/웹툰</a></div>
    </div>
    <div class="lec_wrapper df">
      <div class="con active" id="tab1">
        <div class="lec_container">
          <ul>
            <li><a href=""><img src="../images/Rectangle 161.png" /></a></li>
            <li><a href="">[입문] 실무 프로세스를 따라 직접 만들며 배우는, 스무의 실전 피그마 A to Z</a></li>
          </ul>
          <ul>
            <li><a href=""><img src="../images/Rectangle 160.png" /></a></li>
            <li><a href="">[2주 완성] 실무에 강한 웹 퍼블리셔 포트폴리오 만들기</a></li>
          </ul>
          <ul>
            <li><a href=""><img src="../images/Rectangle 159.png" /></a></li>
            <li><a href="">기능부터 트렌드까지, 입문자를 위한 포토샵&일러스트</a></li>
          </ul>
          <ul>
            <li><a href=""><img src="../images/Rectangle 162.png" /></a></li>
            <li><a href="">확실한 인포그래픽으로 클라이언트가 만족하는 작업물 만드는 브랜딩 디자인</a></li>
          </ul>
          <ul>
            <li><a href=""><img src="../images/Rectangle 158.png" /></a></li>
            <li><a href="">확실한 인포그래픽으로 클라이언트가 만족하는 작업물 만드는 브랜딩 디자인</a></li>
          </ul>
          <ul>
            <li><a href=""><img src="../images/Rectangle 157.png" /></a></li>
            <li><a href="">확실한 인포그래픽으로 클라이언트가 만족하는 작업물 만드는 브랜딩 디자인</a></li>
          </ul>
        </div>
    </div>
    <div class="con" id="tab2">
        <div class="lec_container">
      <ul>
        <li><img src="../images/Rectangle 001.png" /></li>
        <li>[입문] 피그마 A to Z</li>
      </ul>
      <ul>
        <li><img src="../images/Rectangle 002.jpg" /></li>
        <li>[2주 완성] 실포트폴리오 만들기</li>
      </ul>
      <ul>
        <li><img src="../images/Rectangle 003.jpg" /></li>
        <li>기능부터 트렌드까지</li>
      </ul>
      <ul>
        <li><img src="../images/Rectangle 004.jpg" /></li>
        <li>확실한 인포그래픽으로  브랜딩 디자인</li>
      </ul>
      <ul>
        <li><img src="../images/Rectangle 005.jpg" /></li>
        <li>확실한 인포그래픽으로 클인</li>
      </ul>
      <ul>
        <li><img src="../images/Rectangle 006.jpg" /></li>
        <li>확실한 인 만드는 브랜딩 디자인</li>
      </ul>
          </div>
</div>
<div class="con" id="tab3">
  <div class="lec_container">
    <ul>
      <li><img src="../images/Rectangle 007.jpg" /></li>
      <li>[입문] 피그마 A to Z</li>
    </ul>
    <ul>
      <li><img src="../images/Rectangle 008.png" /></li>
      <li>[2주 완성] 실포트폴리오 만들기</li>
    </ul>
    <ul>
      <li><img src="../images/Rectangle 009.jpg" /></li>
      <li>기능부터 트렌드까지</li>
    </ul>
    <ul>
      <li><img src="../images/Rectangle 010.jpg" /></li>
      <li>확실한 인포그래픽으로  브랜딩 디자인</li>
    </ul>
    <ul>
      <li><img src="../images/Rectangle 011.png" /></li>
      <li>확실한 인포그래픽으로 클인</li>
    </ul>
    <ul>
      <li><img src="../images/Rectangle 012.png" /></li>
      <li>확실한 인 만드는 브랜딩 디자인</li>
    </ul>
  </div>
  </div>
  <div class="con" id="tab4">
    <div class="lec_container">
      <ul>
        <li><img src="../images/Rectangle 013.jpg" /></li>
        <li>[입문] 피그마 A to Z</li>
      </ul>
      <ul>
        <li><img src="../images/Rectangle 014.jpg" /></li>
        <li>[2주 완성] 실포트폴리오 만들기</li>
      </ul>
      <ul>
        <li><img src="../images/Rectangle 015.png" /></li>
        <li>기능부터 트렌드까지</li>
      </ul>
      <ul>
        <li><img src="../images/Rectangle 016.png" /></li>
        <li>확실한 인포그래픽으로  브랜딩 디자인</li>
      </ul>
      <ul>
        <li><img src="../images/Rectangle 017.png" /></li>
        <li>확실한 인포그래픽으로 클인</li>
      </ul>
      <ul>
        <li><img src="../images/Rectangle 018.png" /></li>
        <li>확실한 인 만드는 브랜딩 디자인</li>
      </ul>
    </div>
  </div>
     </section>

  <!----------- 강좌소개 - 선진 -->

    <!-- 공지사항 - 송림 -->
    <section class="main_notice">
      <h2>공지사항</h2>
      <div class="notice_wrap">
        <ul class="notice df fdc">
          <li class="notice_table df aic">
            <a href="" class="notice_tit">프론트엔드 수업 관련 안내 공지드립니다.</a>
            <a href="" class="notice_ct">프론트엔드 수업 개강날짜가 변경되었습니다. 기존의 5월6일에서 5월 23일로 변경되었으니 이점 유의해주시기 바랍니다.</a>
            <a href=""><span class="material-symbols-outlined"> east</span></a>
          </li>
          <li class="notice_table df aic">
            <a href="" class="notice_tit">국비지원교육 지원금 관련 공지사항입니다.</a>
            <a href="" class="notice_ct">국비지원교육 지원금 대상 변경되었습니다. 기존의 지원금 대상이셨던 분들도 해당되오니 담당 부서에 확인부탁드립니다.</a>
            <a href=""><span class="material-symbols-outlined"> east</span></a>
          </li>
          <li class="notice_table df aic">
            <a href="" class="notice_tit">대체공휴일 보강수업 일정 안내사항 입니다.</a>
            <a href="" class="notice_ct">대체공휴일 보강 수업에 희망하시는 분들에 한해서 학원에서 별도로 보강 수업을 진행합니다.</a>
            <a href=""><span class="material-symbols-outlined"> east</span></a>
          </li>
        </ul>
        <ul class="notice df fdc">
          <li class="notice_table df aic">
            <a href="" class="notice_tit">프론트엔드 수업 관련 안내 공지드립니다.</a>
            <a href="" class="notice_ct">프론트엔드 수업 개강날짜가 변경되었습니다. 기존의 5월6일에서 5월 23일로 변경되었으니 이점 유의해주시기 바랍니다.</a>
            <a href=""><span class="material-symbols-outlined"> east</span></a>
          </li>
          <li class="notice_table df aic">
            <a href="" class="notice_tit">국비지원교육 지원금 관련 공지사항입니다.</a>
            <a href="" class="notice_ct">국비지원교육 지원금 대상 변경되었습니다. 기존의 지원금 대상이셨던 분들도 해당되오니 담당 부서에 확인부탁드립니다.</a>
            <a href=""><span class="material-symbols-outlined"> east</span></a>
          </li>
          <li class="notice_table df aic">
            <a href="" class="notice_tit">대체공휴일 보강수업 일정 안내사항 입니다.</a>
            <a href="" class="notice_ct">대체공휴일 보강 수업에 희망하시는 분들에 한해서 학원에서 별도로 보강 수업을 진행합니다.</a>
            <a href=""><span class="material-symbols-outlined"> east</span></a>
          </li>
        </ul>
        <ul class="notice df fdc">
          <li class="notice_table df aic">
            <a href="" class="notice_tit">프론트엔드 수업 관련 안내 공지드립니다.</a>
            <a href="" class="notice_ct">프론트엔드 수업 개강날짜가 변경되었습니다. 기존의 5월6일에서 5월 23일로 변경되었으니 이점 유의해주시기 바랍니다.</a>
            <a href=""><span class="material-symbols-outlined"> east</span></a>
          </li>
          <li class="notice_table df aic">
            <a href="" class="notice_tit">국비지원교육 지원금 관련 공지사항입니다.</a>
            <a href="" class="notice_ct">국비지원교육 지원금 대상 변경되었습니다. 기존의 지원금 대상이셨던 분들도 해당되오니 담당 부서에 확인부탁드립니다.</a>
            <a href=""><span class="material-symbols-outlined"> east</span></a>
          </li>
          <li class="notice_table df aic">
            <a href="" class="notice_tit">대체공휴일 보강수업 일정 안내사항 입니다.</a>
            <a href="" class="notice_ct">대체공휴일 보강 수업에 희망하시는 분들에 한해서 학원에서 별도로 보강 수업을 진행합니다.</a>
            <a href=""><span class="material-symbols-outlined"> east</span></a>
          </li>
        </ul>
      </div>
      <div class="controls">
        <span class="prev"></span>
        <span class="next"></span>
      </div>
    </section>
  <!----------- 공지사항 - 송림 -->

    <!-- 수강평 - 다영 -->
    <section class="main_review">
      <div class="usergrid">
        <h2>student review</h2>
        <ul class="df main_review_list">
          <li class="u_profile">
            <div class="df main_review_img">
              <img src="../images/user_profile1.png" alt="">
              <p>
                <span class="h4">김*윤</span><br>
                <span class="body1">3d애니메이터</span>
              </p>
            </div>
            <div class="df main_review_txt">
              <p class="body4">애니메이션 작업을 파이프라인을 따라<br>
                직접 작업해보고,<br>
                또한 선생님의 상세한 피드백을 통해서<br>
                개인적으로 부족한 점을 다시 한번 되돌아<br>
                볼 수 있었습니다.
              </p>
              <a href="" class="primary_btn">CG/VFX</a>
            </div>
          </li>
          <li class="u_profile">
            <div class="df main_review_img">
              <img src="../images/user_profile1.png" alt="">
              <p>
                <span class="h4">김*윤</span><br>
                <span class="body1">3d애니메이터</span>
              </p>
            </div>
            <div class="df main_review_txt">
              <p class="body4">애니메이션 작업을 파이프라인을 따라<br>
                직접 작업해보고,<br>
                또한 선생님의 상세한 피드백을 통해서<br>
                개인적으로 부족한 점을 다시 한번 되돌아<br>
                볼 수 있었습니다.
              </p>
              <a href="" class="primary_btn">CG/VFX</a>
            </div>
          </li>
          <li class="u_profile">
            <div class="df main_review_img">
              <img src="../images/user_profile1.png" alt="">
              <p>
                <span class="h4">김*윤</span><br>
                <span class="body1">3d애니메이터</span>
              </p>
            </div>
            <div class="df main_review_txt">
              <p class="body4">애니메이션 작업을 파이프라인을 따라<br>
                직접 작업해보고,<br>
                또한 선생님의 상세한 피드백을 통해서<br>
                개인적으로 부족한 점을 다시 한번 되돌아<br>
                볼 수 있었습니다.
              </p>
              <a href="" class="primary_btn">CG/VFX</a>
            </div>
          </li>
        </ul>
        <a href="u_review_list.html" class="primary_btn">후기 더 보러가기</a>
      </div>
    </section>
  <!----------- 수강평 - 다영 -->

  <!-- 이벤트 - 다영 -->
  <section class="main_event usergrid df">
    <div class="user_e_title">
      <h2>EVENT</h2>
      <p class="body2b">딥러닝캥거루에서 진행하는 다양한 이벤트를 확인하고 참여해보세요!</p>
      <a href="event_list.html" class="user_e_link">더 보기</a>
      <span class="slider_next"></span>
    </div>
    <ul class="user_e_slide">
      <li>
        <a href="">
          <img src="../images/user_main_eventbanner1.png" alt="">
          <p class="body1b">인디자인 강의 신청 이벤트</p>
        </a>
      </li>
      <li>
        <a href="">
          <img src="../images/user_main_eventbanner1.png" alt="">
          <p class="body1b">인디자인 강의 신청 이벤트</p>
        </a>
      </li>
      <li>
        <a href="">
          <img src="../images/user_main_eventbanner1.png" alt="">
          <p class="body1b">인디자인 강의 신청 이벤트</p>
        </a>
      </li>
    </ul>
  </section>
<!----------- 이벤트 - 다영 -->

<!-- back_to_top - 선진 -->
<div class="back-to-top qna"><span class="qnaquick">
  <a href="">Q&A</a>
  </span></div>
<div class="back-to-top"><span class="material-symbols-outlined">
  arrow_upward
  </span></div>
<!-- back_to_top - 선진 -->

</main>

<!-- 사용자 푸터 -->
<footer>
  <div class="user_countainer">
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
  </div>
</footer>
<!--------- 사용자 푸터 -->
</body>


<!-- 스크립트 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script src="./js/jquery.bxslider.min.js"></script>

<!-- 카운트다운 -->
<script src='./js/moment.js'></script>
<script src='./js/moment-with-locales.js'></script>
<script src="./js/countdown.js"></script>

<script src="./js/u_main.js"></script>
<script src="./js/u_common.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha512-ahmSZKApTDNd3gVuqL5TQ3MBTj8tL5p2tYV05Xxzcfu6/ecvt1A0j6tfudSGBVuteSoTRMqMljbfdU0g2eDNUA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>