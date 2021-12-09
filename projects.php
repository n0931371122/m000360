<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "Article",
                "headline": "用一張沙發買你十年信任，看GAGU如何從家具批發走出自己的路！",
                "articleBody": "時間是下午五點半，在如今漸入初冬的11月時節，天色早早已晚。驅車蜿蜒在新莊的五股山區中，一盞突然映入眼簾的柔和燈火，為新莊顯得有些寂寥的夜色，帶來了一絲令人滿足的溫暖。",
            }]
        }
    </script>
</head>

<body>
    <?php include "header.php"; ?>
    <!-- main ======================================================================================= -->
    <main>
        <div id="projects" class="overflow-hidden">
            <div class="banner-element position-relative NotoSerifTC">
                <img class="img position-fixed object-fit" src="styles/images/projects/banner.jpg" alt="">
                <div class="text-inner position-absolute text-center text-white">
                    <h1 class="fz-48 fw-600" data-aos="fade-up">案例欣賞</h1>
                    <span class="d-block fz-20 fw-bold" data-aos="fade-up" data-aos-delay="50">OUR PROJECTS</span>
                </div>
            </div>
            <div class="position-relative bg-white z-1">
                <div class="function-element fz-18 fw-600 border-bottom-grayE8" data-aos="fade-up">
                    <div class="options position-relative row g-0 NotoSerifTC fz-18 text-center text-white lh-lg">
                        <div class="px-4">
                            <div class="max1620 position-relative mx-auto">
                                <div class="swiper-container swiper-no-swiping">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <button onClick="changeDetails(event)" class="option py-md-3" type="button">風格</button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button onClick="changeDetails(event)" class="option py-md-3" type="button">格局</button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button onClick="changeDetails(event)" class="option py-md-3" type="button">坪數</button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button onClick="changeDetails(event)" class="option py-md-3" type="button">房屋類型</button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button onClick="changeDetails(event)" class="option py-md-3" type="button">預算</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-buttons position-absolute d-flex justify-content-between w-100 h-100">
                                    <div class="swiper-button swiper-button-prev h-100"><i class="icon-arrow-left-2"></i></div>
                                    <div class="swiper-button swiper-button-next h-100"><i class="icon-arrow-right-2"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="max1620 mx-auto">
                            <div class="details-inner d-flex position-relative align-items-center NotoSansTC fz-17">
                                <div class="details details-1">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">北歐風</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">工業風</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">極簡風</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">日系無印風</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">現代風</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">都會輕奢風</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">鄉村風</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">古典風</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">美式風</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">中式風</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-buttons d-xl-none">
                                        <div class="swiper-button fz-30 text-grayB7 swiper-button-prev"><i class="icon-left-open-mini"></i></div>
                                        <div class="swiper-button fz-30 text-grayB7 swiper-button-next"><i class="icon-right-open-mini"></i></div>
                                    </div>
                                </div>
                                <div class="details details-2">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">1房</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">2房</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">3房</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">4房以上</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-buttons d-xl-none">
                                        <div class="swiper-button fz-30 text-grayB7 swiper-button-prev"><i class="icon-left-open-mini"></i></div>
                                        <div class="swiper-button fz-30 text-grayB7 swiper-button-next"><i class="icon-right-open-mini"></i></div>
                                    </div>
                                </div>
                                <div class="details details-3">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">20坪以下</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">20-30坪</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">30-40坪</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">40坪以上</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-buttons d-xl-none">
                                        <div class="swiper-button fz-30 text-grayB7 swiper-button-prev"><i class="icon-left-open-mini"></i></div>
                                        <div class="swiper-button fz-30 text-grayB7 swiper-button-next"><i class="icon-right-open-mini"></i></div>
                                    </div>
                                </div>
                                <div class="details details-4">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">新成屋</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">中古屋</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-buttons d-xl-none">
                                        <div class="swiper-button fz-30 text-grayB7 swiper-button-prev"><i class="icon-left-open-mini"></i></div>
                                        <div class="swiper-button fz-30 text-grayB7 swiper-button-next"><i class="icon-right-open-mini"></i></div>
                                    </div>
                                </div>
                                <div class="details details-5">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">60萬以下</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">60～100萬</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail">
                                                    <button type="button" onClick="ajaxProductsData(event)">100～200萬</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-buttons d-xl-none">
                                        <div class="swiper-button fz-30 text-grayB7 swiper-button-prev"><i class="icon-left-open-mini"></i></div>
                                        <div class="swiper-button fz-30 text-grayB7 swiper-button-next"><i class="icon-right-open-mini"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 pb-5">
                    <div class="max1620 mx-auto pb-md-5 mb-md-4">
                        <div class="breadcrumb-element d-table fz-15 text-grayB7 ms-auto py-3 py-md-4" data-aos="fade-up">
                            <ul class="ns d-flex">
                                <li class="breadcrumb-item"><a href="./">首頁</a></li>
                                <li class="breadcrumb-item">案例欣賞</li>
                            </ul>
                        </div>
                        <div class="projects-swiper-container swiper-container text-center text-md-start my-xl-5 pb-5" data-aos="fade-up">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="projectItem-style-1 d-block">
                                        <div class="img-inner position-lg-absolute overflow-hidden">
                                            <img class="img object-fit" src="styles/images/projects/slider-1.jpg" alt="">
                                        </div>
                                        <div class="text-inner d-table ms-auto py-4 py-lg-5 pe-4 pe-md-5" style="background-image:url(styles/images/projects/slider-bg.jpg)">
                                            <h2 class="NotoSerifTC fz-32 fw-bold mb-2 pb-1 pt-lg-5 pt-xl-0 pt-xxl-4 mt-xxl-3" data-aos="fade-up">黑白鍵之間 ｜ 台中西屯</h2>
                                            <div class="detail d-flex justify-content-center justify-content-md-start NotoSansTC fz-17 mb-4 pb-lg-3" data-aos="fade-up" data-aos-delay="50">
                                                <span>現代風</span>
                                                <span>2+1房</span>
                                                <span>33坪</span>
                                                <span class="d-none d-md-inline">10-60萬</span>
                                            </div>
                                            <p class="fz-17 text-gray94 lh-19 line4" data-aos="fade-up" data-aos-delay="100">黑與白，就夫妻一樣，看起來不同，卻又密不可分。柴可夫斯基說「音樂是上天給人類最偉大的禮物，只有音樂能夠說明安靜和靜穆」，而黑白灰正可以完整的表達此般沈穩的氛圍。同為音樂工作者的男女主人，形容彼此就像鋼琴的黑鍵與白鍵般，音調不同，但在一首曲子中卻同等重要。</p>
                                            <a href="/project" class="more d-flex align-items-center justify-content-center justify-content-md-start text-hover-yellow mb-lg-2 pt-lg-3 pb-xxl-5" data-aos="fade-up" data-aos-delay="150">
                                                <span>READ MORE</span>
                                                <i class="icon-arrow-right d-none d-md-inline ms-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="projectItem-style-1 d-block">
                                        <div class="img-inner position-lg-absolute overflow-hidden">
                                            <img class="img object-fit" src="styles/images/projects/slider-1.jpg" alt="">
                                        </div>
                                        <div class="text-inner d-table ms-auto py-4 py-lg-5 pe-4 pe-md-5" style="background-image:url(styles/images/projects/slider-bg.jpg)">
                                            <h2 class="NotoSerifTC fz-32 fw-bold mb-2 pb-1 pt-lg-5 pt-xl-0 pt-xxl-4 mt-xxl-3" data-aos="fade-up">黑白鍵之間 ｜ 台中西屯</h2>
                                            <div class="detail d-flex justify-content-center justify-content-md-start NotoSansTC fz-17 mb-4 pb-lg-3" data-aos="fade-up" data-aos-delay="50">
                                                <span>現代風</span>
                                                <span>2+1房</span>
                                                <span>33坪</span>
                                                <span class="d-none d-md-inline">10-60萬</span>
                                            </div>
                                            <p class="fz-17 text-gray94 lh-19 line4" data-aos="fade-up" data-aos-delay="100">黑與白，就夫妻一樣，看起來不同，卻又密不可分。柴可夫斯基說「音樂是上天給人類最偉大的禮物，只有音樂能夠說明安靜和靜穆」，而黑白灰正可以完整的表達此般沈穩的氛圍。同為音樂工作者的男女主人，形容彼此就像鋼琴的黑鍵與白鍵般，音調不同，但在一首曲子中卻同等重要。</p>
                                            <a href="/project" class="more d-flex align-items-center justify-content-center justify-content-md-start text-hover-yellow mb-lg-2 pt-lg-3 pb-xxl-5" data-aos="fade-up" data-aos-delay="150">
                                                <span>READ MORE</span>
                                                <i class="icon-arrow-right d-none d-md-inline ms-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-buttons position-lg-absolute d-flex justify-content-center mt-4 mt-md-5 mt-lg-0">
                                <div class="swiper-button swiper-button-prev position-relative"><i class="icon-arrow-left-3"></i></div>
                                <div class="swiper-button swiper-button-next position-relative"><i class="icon-arrow-right-3"></i></div>
                            </div>
                        </div>
                        <div class="row gx-2 pt-md-4 pb-3">
                            <div class="col-12 col-md-6 col-xl-4 pb-2 pb-md-0 mb-3 mb-md-5 pb-xl-4" data-aos="fade-up" data-aos-delay="0">
                                <h2 class="d-none">光影的魔法 工業風質感宅</h2>
                                <a class="projectItem d-block mb-xl-3" href="/project">
                                    <span class="img-inner d-block overflow-hidden pb-1 pb-md-0 mb-2 mb-md-3">
                                        <img class="object-fit" src="styles/images/projects/1.jpg" alt="">
                                    </span>
                                    <span class="text-inner d-block text-center">
                                        <span class="d-block NotoSerifTC fz-22 fw-bold mb-1">光影的魔法 工業風質感宅</span>
                                        <span class="detail row gx-0 NotoSansTC fz-17 text-gray94 justify-content-center lh-lg">
                                            <span class="col-auto col-lg-auto">工業2廳</span>
                                            <span class="col-auto col-lg-auto">2房</span>
                                            <span class="col-auto col-lg-auto">25坪</span>
                                            <span class="d-none d-lg-inline col-lg-auto">10-60萬</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 pb-2 pb-md-0 mb-3 mb-md-5 pb-xl-4" data-aos="fade-up" data-aos-delay="50">
                                <h2 class="d-none">光影的魔法 工業風質感宅</h2>
                                <a class="projectItem d-block mb-xl-3" href="/project">
                                    <span class="img-inner d-block overflow-hidden pb-1 pb-md-0 mb-2 mb-md-3">
                                        <img class="object-fit" src="styles/images/projects/2.jpg" alt="">
                                    </span>
                                    <span class="text-inner d-block text-center">
                                        <span class="d-block NotoSerifTC fz-22 fw-bold mb-1">光影的魔法 工業風質感宅</span>
                                        <span class="detail row gx-0 NotoSansTC fz-17 text-gray94 justify-content-center lh-lg">
                                            <span class="col-auto col-lg-auto">工業2廳</span>
                                            <span class="col-auto col-lg-auto">2房</span>
                                            <span class="col-auto col-lg-auto">25坪</span>
                                            <span class="d-none d-lg-inline col-lg-auto">10-60萬</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 pb-2 pb-md-0 mb-3 mb-md-5 pb-xl-4" data-aos="fade-up" data-aos-delay="100">
                                <h2 class="d-none">光影的魔法 工業風質感宅</h2>
                                <a class="projectItem d-block mb-xl-3" href="/project">
                                    <span class="img-inner d-block overflow-hidden pb-1 pb-md-0 mb-2 mb-md-3">
                                        <img class="object-fit" src="styles/images/projects/3.jpg" alt="">
                                    </span>
                                    <span class="text-inner d-block text-center">
                                        <span class="d-block NotoSerifTC fz-22 fw-bold mb-1">光影的魔法 工業風質感宅</span>
                                        <span class="detail row gx-0 NotoSansTC fz-17 text-gray94 justify-content-center lh-lg">
                                            <span class="col-auto col-lg-auto">工業2廳</span>
                                            <span class="col-auto col-lg-auto">2房</span>
                                            <span class="col-auto col-lg-auto">25坪</span>
                                            <span class="d-none d-lg-inline col-lg-auto">10-60萬</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 pb-2 pb-md-0 mb-3 mb-md-5 pb-xl-4" data-aos="fade-up" data-aos-delay="0">
                                <h2 class="d-none">光影的魔法 工業風質感宅</h2>
                                <a class="projectItem d-block mb-xl-3" href="/project">
                                    <span class="img-inner d-block overflow-hidden pb-1 pb-md-0 mb-2 mb-md-3">
                                        <img class="object-fit" src="styles/images/projects/4.jpg" alt="">
                                    </span>
                                    <span class="text-inner d-block text-center">
                                        <span class="d-block NotoSerifTC fz-22 fw-bold mb-1">光影的魔法 工業風質感宅</span>
                                        <span class="detail row gx-0 NotoSansTC fz-17 text-gray94 justify-content-center lh-lg">
                                            <span class="col-auto col-lg-auto">工業2廳</span>
                                            <span class="col-auto col-lg-auto">2房</span>
                                            <span class="col-auto col-lg-auto">25坪</span>
                                            <span class="d-none d-lg-inline col-lg-auto">10-60萬</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 pb-2 pb-md-0 mb-3 mb-md-5 pb-xl-4" data-aos="fade-up" data-aos-delay="50">
                                <h2 class="d-none">光影的魔法 工業風質感宅</h2>
                                <a class="projectItem d-block mb-xl-3" href="/project">
                                    <span class="img-inner d-block overflow-hidden pb-1 pb-md-0 mb-2 mb-md-3">
                                        <img class="object-fit" src="styles/images/projects/5.jpg" alt="">
                                    </span>
                                    <span class="text-inner d-block text-center">
                                        <span class="d-block NotoSerifTC fz-22 fw-bold mb-1">光影的魔法 工業風質感宅</span>
                                        <span class="detail row gx-0 NotoSansTC fz-17 text-gray94 justify-content-center lh-lg">
                                            <span class="col-auto col-lg-auto">工業2廳</span>
                                            <span class="col-auto col-lg-auto">2房</span>
                                            <span class="col-auto col-lg-auto">25坪</span>
                                            <span class="d-none d-lg-inline col-lg-auto">10-60萬</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 pb-2 pb-md-0 mb-3 mb-md-5 pb-xl-4" data-aos="fade-up" data-aos-delay="100">
                                <h2 class="d-none">光影的魔法 工業風質感宅</h2>
                                <a class="projectItem d-block mb-xl-3" href="/project">
                                    <span class="img-inner d-block overflow-hidden pb-1 pb-md-0 mb-2 mb-md-3">
                                        <img class="object-fit" src="styles/images/projects/6.jpg" alt="">
                                    </span>
                                    <span class="text-inner d-block text-center">
                                        <span class="d-block NotoSerifTC fz-22 fw-bold mb-1">光影的魔法 工業風質感宅</span>
                                        <span class="detail row gx-0 NotoSansTC fz-17 text-gray94 justify-content-center lh-lg">
                                            <span class="col-auto col-lg-auto">工業2廳</span>
                                            <span class="col-auto col-lg-auto">2房</span>
                                            <span class="col-auto col-lg-auto">25坪</span>
                                            <span class="d-none d-lg-inline col-lg-auto">10-60萬</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 pb-2 pb-md-0 mb-3 mb-md-5 pb-xl-4" data-aos="fade-up" data-aos-delay="0">
                                <h2 class="d-none">光影的魔法 工業風質感宅</h2>
                                <a class="projectItem d-block mb-xl-3" href="/project">
                                    <span class="img-inner d-block overflow-hidden pb-1 pb-md-0 mb-2 mb-md-3">
                                        <img class="object-fit" src="styles/images/projects/7.jpg" alt="">
                                    </span>
                                    <span class="text-inner d-block text-center">
                                        <span class="d-block NotoSerifTC fz-22 fw-bold mb-1">光影的魔法 工業風質感宅</span>
                                        <span class="detail row gx-0 NotoSansTC fz-17 text-gray94 justify-content-center lh-lg">
                                            <span class="col-auto col-lg-auto">工業2廳</span>
                                            <span class="col-auto col-lg-auto">2房</span>
                                            <span class="col-auto col-lg-auto">25坪</span>
                                            <span class="d-none d-lg-inline col-lg-auto">10-60萬</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 pb-2 pb-md-0 mb-3 mb-md-5 pb-xl-4" data-aos="fade-up" data-aos-delay="50">
                                <h2 class="d-none">光影的魔法 工業風質感宅</h2>
                                <a class="projectItem d-block mb-xl-3" href="/project">
                                    <span class="img-inner d-block overflow-hidden pb-1 pb-md-0 mb-2 mb-md-3">
                                        <img class="object-fit" src="styles/images/projects/8.jpg" alt="">
                                    </span>
                                    <span class="text-inner d-block text-center">
                                        <span class="d-block NotoSerifTC fz-22 fw-bold mb-1">光影的魔法 工業風質感宅</span>
                                        <span class="detail row gx-0 NotoSansTC fz-17 text-gray94 justify-content-center lh-lg">
                                            <span class="col-auto col-lg-auto">工業2廳</span>
                                            <span class="col-auto col-lg-auto">2房</span>
                                            <span class="col-auto col-lg-auto">25坪</span>
                                            <span class="d-none d-lg-inline col-lg-auto">10-60萬</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 pb-2 pb-md-0 mb-3 mb-md-5 pb-xl-4" data-aos="fade-up" data-aos-delay="100">
                                <h2 class="d-none">光影的魔法 工業風質感宅</h2>
                                <a class="projectItem d-block mb-xl-3" href="/project">
                                    <span class="img-inner d-block overflow-hidden pb-1 pb-md-0 mb-2 mb-md-3">
                                        <img class="object-fit" src="styles/images/projects/9.jpg" alt="">
                                    </span>
                                    <span class="text-inner d-block text-center">
                                        <span class="d-block NotoSerifTC fz-22 fw-bold mb-1">光影的魔法 工業風質感宅</span>
                                        <span class="detail row gx-0 NotoSansTC fz-17 text-gray94 justify-content-center lh-lg">
                                            <span class="col-auto col-lg-auto">工業2廳</span>
                                            <span class="col-auto col-lg-auto">2房</span>
                                            <span class="col-auto col-lg-auto">25坪</span>
                                            <span class="d-none d-lg-inline col-lg-auto">10-60萬</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <?php include "pageElement.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- main ======================================================================================= -->
    <?php include "footer.php"; ?>
    <?php include "footer-js.php"; ?>
</body>

</html>