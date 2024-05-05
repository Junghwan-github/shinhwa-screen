<?php
include_once('./_common.php');
include_once('./gb5/lib/latest.lib.php');
include_once('./gb5/lib/outlogin.lib.php');
include_once('./gb5/lib/poll.lib.php');
include_once('./gb5/lib/visit.lib.php');
include_once('./gb5/lib/connect.lib.php');
include_once('./gb5/lib/popular.lib.php');
include_once('./gb5/lib/uri.lib.php');
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="subject" content="신화방충망 대구롤방충망">
    <meta name="author" content="J2STDUIO">
    <meta name="Keywords" content="대구방충망, 찢어진망교체, 현관방충망, 창문방충망, 방범방충망, 블라인드, 미세촘촘망, 스텐망, 방범창, 프로젝트창방충망, 선반, 샷시교체">
    <meta name="Description" content="대구방충망, 찢어진망교체, 현관방충망, 창문방충망, 방범방충망, 블라인드, 미세촘촘망, 스텐망, 방범창, 프로젝트창방충망, 선반, 샷시교체">
    <meta name="robots" content="index.follow">
    <link rel="canonical" href="http://shinhwa.info">
    <link rel="shortcut icon" href="http://shinhwa.info/favicon.ico">
    <!--open graph-->
    <meta property="og:type" content="website">
    <meta property="og:title" content="신화방충망 대구롤방충망">
    <meta property="og:description" content="대구방충망, 찢어진망교체, 현관방충망, 창문방충망, 방범방충망, 블라인드, 미세촘촘망, 스텐망, 방범창, 프로젝트창방충망, 선반, 샷시교체">
    <meta property="og:image" content="http://shinhwa.info/images/logo_s.png">
    <meta property="og:url" content="http://shinhwa.info/">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="형제방충망">
    <meta name="twitter:description" content="대구방충망, 찢어진망교체, 현관방충망, 창문방충망, 방범방충망, 블라인드, 미세촘촘망, 스텐망, 방범창, 프로젝트창방충망, 선반, 샷시교체">
    <meta name="twitter:image" content="http://shinhwa.info/images/logo_s.png">
    <meta name="twitter:domain" content="http://shinhwa.info/">
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <!-- css reset -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/visual-slider.css">
    <title>신화방충망</title>
</head>

<body>
    <header>
        <div class="h-n-fixed">
            <nav>
                <h1><a href="index.php"><img src="./images/logo.png" alt="신화방충망"></a></h1>
                <div class="ul-area">
                    <ul>
                        <li>
                            <a href="./company-info.html">회사소개</a>
                        </li>
                        <li>
                            <a href="./gb5/pd_window">제품안내</a>
                            <ul>
                                <li>
                                    <a href="./gb5/pd_window">창문방충망</a>
                                </li>
                                <li>
                                    <a href="./gb5/pd_entrance">출입문방충망</a>
                                </li>
                                <li>
                                    <a href="./gb5/pd_blind">블라인드</a>
                                </li>
                                <li>
                                    <a href="./gb5/pd_etc">기타제품</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="./gb5/ct_window">시공사례</a>
                            <ul>
                                <li>
                                    <a href="./gb5/ct_window">창문방충망 시공</a>
                                </li>
                                <li>
                                    <a href="./gb5/ct_entrance">출입문방충망 시공</a>
                                </li>
                                <li>
                                    <a href="./gb5/ct_blind">블라인드 시공</a>
                                </li>
                                <li>
                                    <a href="./gb5/ct_etc">기타제품 시공</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="./gb5/freeboard">문의사항</a>
                        </li>
                        <li>
                            <a href="tel:010-5555-9464">☎ 010.5555.9464</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="m-bg"></div>
            <div id="mobile_rnb">
                <input type="checkbox" id="hamburger">
                <label for="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <div class="sidebar">
                    <div><a href="tel:010-5555-9464">☎ 010.5555.9464</a></div>
                    <input type="radio" name="sidebar" id="mobile-nav1">
                    <label for="mobile-nav1"><a href="./company-info.html">회사소개</a></label>
                    <input type="radio" name="sidebar" id="mobile-nav2">
                    <label for="mobile-nav2">제품안내<i class="xi-angle-down-min"></i></label>
                    <ul>
                        <li><a href="./gb5/pd_window">창문 방충망</a></li>
                        <li><a href="./gb5/pd_entrance">출입문 방충망</a></li>
                        <li><a href="./gb5/pd_blind">블라인드</a></li>
                        <li><a href="./gb5/pd_etc">기타제품</a></li>
                    </ul>
                    <input type="radio" name="sidebar" id="mobile-nav3">
                    <label for="mobile-nav3">시공사례<i class="xi-angle-down-min"></i></label>
                    <ul>
                        <li><a href="./gb5/ct_window">창문 방충망 시공</a></li>
                        <li><a href="./gb5/ct_entrance">출입문 방충망 시공</a></li>
                        <li><a href="./gb5/ct_blind">블라인드 시공</a></li>
                        <li><a href="./gb5/ct_etc">기타제품 시공</a></li>
                    </ul>
                    <input type="radio" name="sidebar" id="mobile-nav5">
                    <label for="mobile-nav5"><a href="./gb5/freeboard">문의사항</a></label>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section id="visual-slider">
            <ul class="visual-slider-wrapper">
                <li>
                    <div class="slider-items"></div>
                </li>
                <li>
                    <div class="slider-items"></div>
                </li>
                <li>
                    <div class="slider-items"></div>
                </li>
            </ul>
            <div class="company-body">
                <span class="text-1">내 가족이 살아 숨 쉬는 공간, 그 공간의 소중함을 알고 있기에
                    <br>보다 더 완벽하게 시공할 것을 약속드립니다.</span>
                <h2 class="company-name">신화<span>방충망</span></h2>
            </div>
            <div class="sticker-wrapper">
                <ul>
                    <li>
                        <div class="blog-link">
                            <div>
                                <img src="./images/naver-logo.png">
                            </div>
                            <p><span>신화방충망 블로그</span>네이버 블로그 바로가기</p>
                        </div>
                    </li>
                    <li>
                        <div class="cs-center">
                            <div><i class="xi-mobile"></i></div>
                            <p><span class="key-point">365일 연중 무휴</span>시공 문의 010.5555.9464<span>1년 무상 A/S은 기본! 믿을 수 있는
                                    시공업체</span></p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <script>
            $(".blog-link").on("click", function() {
                window.open("https://blog.naver.com/jw00239", "_blank");
            })

            $(".cs-center").on("click", function() {
                location.href = "tel:+01055559464";
            })
        </script>
        <section id="product-merit">
            <!-- <div class="bgcolor"></div> -->
            <div class="merit-wrapper">
                <ul class="merit-one">
                    <li>
                        <div class="merit-text-area">
                            <h2><span>01</span>미세 날벌레 100% 차단</h2>
                            <span>0.5mm의 공극으로 미세 날벌레 완전차단!</span>
                        </div>
                        <div class="merit-visual-area">
                            <img src="./images/idssll23sakd.jpg">
                        </div>
                    </li>
                    <li>
                        <div class="merit-text-area">
                            <h2><span>02</span>녹슬지 않는 방충망</h2>
                            <span>광택필라멘트사 원단사용<br>
                                무독성소재 사생활보호기능<br>
                                녹슬지않아 반영구적사용</span>
                        </div>
                        <div class="merit-visual-area">
                            <img src="./images/110skdjlfs.jpg">
                        </div>
                    </li>
                    <li>
                        <div class="merit-text-area">
                            <h2><span>03</span>안전방충망</h2>
                            <span>0.4mm 고강도 스테인레스 블랙코팅망<br>
                                1000kg 하중을 버티는 강한 내구성<br>
                                2중 잠금장치로 외부침입방지<br>
                                어린이 추락방지</span>
                        </div>
                        <div class="merit-visual-area">
                            <img src="./images/dlwndwkarmawkdcl.jpg">
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section id="simple-product-info">
            <div class="simple-product-wrapper">
                <div class="simple-product-subject">
                    <span></span>
                    <h2>신화방충망 제품</h2>
                </div>
                <div class="simple-product-content">
                    <ul>
                        <li>
                            <div>
                                <h3>창문 방충망</h3>
                                <p><a href="./gb5/pd_window">자세히 보기<i class="xi-angle-right-min"></i></a></p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>출입문 방충망</h3>
                                <p><a href="./gb5/pd_entrance">자세히 보기<i class="xi-angle-right-min"></i></a></p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>블라인드</h3>
                                <p><a href="./gb5/pd_blind">자세히 보기<i class="xi-angle-right-min"></i></a></p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>기타제품</h3>
                                <p><a href="./gb5/pd_etc">자세히 보기<i class="xi-angle-right-min"></i></a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="simple-product-info">
            <div class="simple-product-wrapper">
                <div class="simple-product-subject">
                    <span></span>
                    <h2>최근 시공사례</h2>
                </div>
                <div class="simple-product-content">
                    <?php
                    echo latest_group2("pic_block", "construct", 8, 20);
                    ?>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div>
            <p>
                <a href="http://shinhwa.info/gb5/adm" target="
                _blank">관리자 로그인</a>

                대구광역시 달서구 신당동 1729-6 | 대표 : 손창우
                COPYRIGHT ⓒ <span>2024 신화방충망(SHINHWA SCREEN).</span> ALL RIGHTS RESERVED.
            </p>
            <P>
                <span>문의전화</span>
                <span class="cs-tel"><a href="tel:010-5555-9464">010.5555.9464</a></span>
            </P>
        </div>
    </footer>
    <script src="./js/visual-slider.js"></script>
</body>

</html>