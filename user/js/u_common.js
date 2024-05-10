// 공통 header 검색창
let searchBtn = document.querySelector('#u_header .u_search');
let search = document.querySelector('.search_area');

searchBtn.addEventListener('click',function(e){
	e.preventDefault();
	search.classList.toggle('active');
	
			if(search.classList.contains('active')) {
				 search.animate(
			[
				{ height: '0'},
				{ height: '310px'},

			],
			{duration:500, fill: "forwards"},
		);
				
	} else {
		 search.animate(
			[
				{ height: '310px'},
				{ height: '0px'},
			],
			{duration:500, fill: "forwards"},
		);
	}
});
//////////// 공통 header 검색창

// 메인배너 - 다영
  $(".user_banner").bxSlider( {
      mode: 'fade',
      speed: 400,
      auto: true,
      pager: false
  });
///////////// 메인배너 - 다영

// 강좌소개 - 선진 
$('.lec_container').bxSlider({
	minSlides: 2,
	maxSlides: 4,
	slideWidth: 282,
	slideMargin: 30,
	pager:false,
	prevSelector:'.lec_controls .lec_prev',
	nextSelector:'.lec_controls .lec_next'
});

$(".lec_cate").click(function(){
	$(".lec_cate").removeClass("active"); 
	$(this).addClass("active"); 
});

//////////// 강좌소개 - 선진 


// 공지사항 - 송림
$('.notice_wrap').bxSlider({
	minSlides: 1,
	pager:false,
	prevSelector:'.main_notice .controls .prev',
	nextSelector:'.main_notice .controls .next'
});
//////////// 공지사항 - 송림


// 수강평 - 다영
	$(".main_review_list").bxSlider( {
		auto: true,
		moveSlides: 1,
		slideWidth: 370,
		slideMargin: 45,
		maxSlides: 3,
		controls:false,
		pager: false
	});

/////////// 수강평 - 다영

// 이벤트 - 다영
$(".user_e_slide").bxSlider( {
	moveSlides: 1,
	slideWidth: 370,
	maxSlides: 3,
	pager: false
});

/////////// 이벤트 - 다영

// back_to_top - 선진 
$(window).scroll(function(){
	if ($(this).scrollTop() > 100) {
		$('.back-to-top').fadeIn();
	} else {
		$('.back-to-top').fadeOut();
	}
});

$('.back-to-top').click(function(){
	$('html, body').animate({scrollTop : 0},0);
	return false;
});
//////////// back_to_top - 선진 