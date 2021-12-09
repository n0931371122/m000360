<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
</head>

<body>

    <?php include "header.php"; ?>
    <!-- main ======================================================================================= -->
    <main>
        <div id="contact">
            <div class="banner-element style-2 position-relative NotoSerifTC">
                <img class="img position-fixed object-fit" src="styles/images/contact/banner.jpg" alt="">
                <div class="text-inner position-absolute text-center text-white">
                    <h1 class="fz-48 fw-600" data-aos="fade-up">聯繫我們</h1>
                    <span class="d-block fz-20 fw-bold" data-aos="fade-up" data-aos-delay="50">CONTACT US</span>
                </div>
                <div class="links-block d-flex justify-content-center align-items-end position-absolute fz-18 fw-600 w-100">
                    <a class="flex-center" href="/location">門市據點</a>
                    <a class="flex-center active" href="/contact">線上諮詢</a>
                    <a class="flex-center" href="/cooperate">專案合作</a>
                </div>
            </div>
            <div class="px-4 position-relative bg-white z-1 pb-lg-5">
                <div class="max1620 mx-auto pb-5">
                    <div class="breadcrumb-element d-table fz-15 text-grayB7 ms-auto py-3 py-md-4" data-aos="fade-up">
                        <ul class="ns d-flex">
                            <li class="breadcrumb-item"><a href="./">首頁</a></li>
                            <li class="breadcrumb-item">聯繫我們</li>
                            <li class="breadcrumb-item">線上諮詢</li>
                        </ul>
                    </div>
                    <div class="bg max1520 background-cover mx-auto px-4 py-3 py-md-5 my-md-5" style="background-image:url(styles/images/contact/contact-bg.jpg)">
                        <form class="form NotoSansTC max1084 mx-auto py-xl-4 my-xl-2" action="contact-send">
                            <div class="box mb-2 pb-1" data-aos="fade-up">
                                <div class="d-flex justify-content-between align-items-center border-bottom-grayD7 py-3 mb-3 mb-md-4">
                                    <h2 class="NotoSerifTC fz-18 fw-600 mb-0 my-md-2">聯絡人資訊</h2>
                                    <span class="fz-15 text-gray94">*為必填之項目</span>
                                </div>
                                <div class="content pt-md-2">
                                    <div class="row">
                                        <div class="col-md-6 mb-3 pb-md-1">
                                            <div class="form-field">
                                                <label for="name">* 姓名</label>
                                                <input type="text" id="name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 pb-md-1 d-flex">
                                            <div class="radios d-flex align-items-center py-md-3 ps-md-2">
                                                <span class="label short-style">性別</span>
                                                <div class="me-1">
                                                    <input type="radio" name="gender" id="male" value="male" checked>
                                                    <label class="cursor ps-4" for="male">男</label>
                                                </div>
                                                <div class="ms-3 ps-2">
                                                    <input type="radio" name="gender" id="female" value="female">
                                                    <label class="cursor ps-4" for="female">女</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 pb-md-1">
                                            <div class="form-field">
                                                <label for="tel">* 聯絡電話</label>
                                                <input type="text" id="tel" name="tel">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 pb-md-1">
                                            <div class="form-field ps-md-2">
                                                <label for="lineId">LINE ID</label>
                                                <input type="text" id="lineId" name="lineId">
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3 pb-md-1">
                                            <div class="radios d-md-flex align-items-center py-md-3">
                                                <span class="label">方便連絡時段</span>
                                                <div>
                                                    <input type="radio" name="connectTime" id="connectTime-1" value="connectTime-1" checked>
                                                    <label class="cursor ps-4" for="connectTime-1">上午9:00~12:00</label>
                                                </div>
                                                <div class="ms-md-3 ps-md-2">
                                                    <input type="radio" name="connectTime" id="connectTime-2" value="connectTime-2">
                                                    <label class="cursor ps-4" for="connectTime-2">下午12:00~18:00</label>
                                                </div>
                                                <div class="ms-md-3 ps-md-2">
                                                    <input type="radio" name="connectTime" id="connectTime-3" value="connectTime-3">
                                                    <label class="cursor ps-4" for="connectTime-3">晚上18:00~21:00</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box mb-2 pb-1 mb-xl-4" data-aos="fade-up">
                                <div class="d-flex justify-content-between align-items-center border-bottom-grayD7 py-3 mb-3 mb-md-4">
                                    <h2 class="NotoSerifTC fz-18 fw-600 mb-0 my-md-2">施工資訊</h2>
                                </div>
                                <div class="content pt-md-2">
                                    <div class="row">
                                        <div class="col-12 mb-3 pb-1">
                                            <div class="form-field align-items-start">
                                                <label class="mt-md-2 pt-md-1" for="name">* 施工地址</label>
                                                <div class="row gx-3 flex-grow-1">
                                                    <div class="selects col-lg mb-3 mb-lg-0">
                                                        <div class="row gx-2">
                                                            <div class="col-md-6 mb-3 mb-md-0">
                                                                <div class="select-element">
                                                                    <select class="selectpicker w-100" id="city" name="city">
                                                                        <option>選擇縣市</option>
                                                                        <option>台北市</option>
                                                                        <option>台中市</option>
                                                                        <option>台南市</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="select-element">
                                                                    <select class="selectpicker w-100" id="area" name="area">
                                                                        <option>選擇區域</option>
                                                                        <option>北區</option>
                                                                        <option>中區</option>
                                                                        <option>南區</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg form-field">
                                                        <input type="text" id="address" name="address">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 pb-md-1">
                                            <div class="form-field">
                                                <label for="pings">
                                                    <span>* 坪數實際坪數</span>
                                                    <span class="fz-15 text-grayB7">&nbsp;&nbsp;(不含公設)</span>
                                                </label>
                                                <input type="text" id="pings" name="pings">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 pb-md-1">
                                            <div class="form-field">
                                                <label for="item" class="ms-xl-2">* 施作項目</label>
                                                <div class="select-element col">
                                                    <select class="selectpicker w-100" id="item" name="item">
                                                        <option>選擇項目</option>
                                                        <option>全室設計</option>
                                                        <option>全室設計</option>
                                                        <option>全室設計</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3 pb-1">
                                            <div class="form-field">
                                                <label for="message">留言內容</label>
                                                <textarea class="w-100" name="message" id="message" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box mb-2 pb-1" data-aos="fade-up">
                                <div class="d-flex justify-content-between align-items-center border-bottom-grayD7 py-3 mb-3 mb-md-4">
                                    <h2 class="NotoSerifTC fz-18 fw-600 mb-0 my-md-2">驗證碼</h2>
                                </div>
                                <div class="content pt-md-2">
                                    <div class="row">
                                        <div class="col-12 mb-3 pb-1">
                                            <div class="form-field verificationCode">
                                                <label for="verificationCode">* 驗證碼</label>
                                                <div class="position-relative d-flex flex-grow-1">
                                                    <input type="text" id="verificationCode" name="verificationCode">
                                                    <img class="verificationCode-img position-absolute" src="styles/images/common/verificationCode.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-table ms-auto"><a class="text-grayB7 text-hover-black text-decoration-underline" href="#">更換驗證碼</a></div>
                                </div>
                            </div>
                            <div class="flex-center NotoSerifTC fz-17 mt-md-5 py-4" data-aos="fade-up">
                                <button class="flex-center fw-bold bg-yellow bg-hover-yellowHover btn-200-50 mx-3" type="submit">確定送出</button>
                                <button class="flex-center fw-bold text-white text-hover-black bg-black bg-hover-yellowHover btn-200-50 mx-3" type="reset">清除重填</button>
                            </div>
                        </form>
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