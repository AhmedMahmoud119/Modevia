<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

    <title>Document</title>
</head>

<body>
<nav>
    <div class="container">
        <div class="logo-box">
            <img src="assets/Logo.png" alt="logo" />
        </div>
        <ul class="nav-links">
            <li class="active-page">
                <a href="#">الرئيسيه</a>
            </li>
            <li>
                <a href="#">خدماتنا</a>
            </li>
            <li>
                <a href="#">من نحن</a>
            </li>
            <li>
                <a href="#">اتصل بنا</a>
            </li>
        </ul>
        <div class="nav-buttons">
            <!-- <div class="lang-switch">
              <img src="assets/Vector.png" alt="" />
              <a href="#" class="active-lang">عربي</a>
            </div> -->
            <button class="primary-btn">
                <img src="assets/pasient.png" alt="" />
                <span> احجز الان </span>
            </button>
            <button class="md-hidden">
                <img src="assets/heroicons-mini/bars-3.png" alt="" />
            </button>
        </div>
    </div>
</nav>
<section class="hero">
    <div class="container">
        <div class="hero-box">

            <div class="content-box">
                <h1>
                    إيبسوم هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى)
                </h1>
                <p>
                    لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور
                    النشر.
                    كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر
                </p>
            </div>
            <div class="img-box">
                <div class="background-box">
                    <img src="assets/Group 9412.png" alt="img" />
                </div>
                <div class="tip-box">
                    <div class="tip-card">
                        <h5>
                            خدمه 24/7
                        </h5>
                        <p>
                            لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن الغاية هيلوريم إيبسوم هو ببساطة نص شكلي (بمعنى...
                        </p>
                    </div>
                    <div class="tip-card">
                        <h5>
                            خدمه 24/7
                        </h5>
                        <p>
                            لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن الغاية هيلوريم إيبسوم هو ببساطة نص شكلي (بمعنى...
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-form">
            <form method="POST" action="{{route('store')}}" class="hero-form-box">
                @csrf
                <div class="hero-form-inputs">

                    <label class="input-container">
                        <input type="text" name="name" required class="fancy-input"
                               placeholder="الاسم"
                        >
                        <span></span>
                    </label>
                    <label class="input-container">
                        <input type="email" name="email" required class="fancy-input"
                               placeholder="البريد الالكتروني"
                        >
                        <span></span>
                    </label>
                    <label class="input-container">
                        <input type="text" name="phone" required class="fancy-input"
                               placeholder="رقم الهاتف" >
                        <span></span>
                    </label>
                    <label class="input-container">
                        <input type="text" name="service" class="fancy-input"
                               placeholder="الخدمه"
                        >
                        <span></span>
                    </label>
                    <label class="input-container">
                        <input type="text" name="doctor" class="fancy-input"
                               placeholder="الطبيب"
                        >
                        <span></span>
                    </label>
                    <label class="input-container">
                        <input type="date" name="date" class="fancy-input"
                               placeholder="الموعد"
                        >
                        <span></span>
                    </label>
                </div>
                <button type="submit" class="primary-btn">
                    <img src="assets/pasient.png" alt="" />
                    <span> احجز الان </span>
                </button>
            </form>
        </div>
        <!-- <div class="container">

      </div> -->
</section>
<div class="container">
    <!-- asheery -->
    <!-- خدماتنا -->
    <section class="services">
        <div class="row my-3">
            <div class="col-md-6">
                <h3 class="title-section">خدماتنا</h3>
                <p class="p-3 desc">
                    الحقن التجميلي باحدث الطرق (الفلر و البوتوكس و البلازما و الخلايا
                    الجذعية) شد الوجة و الرقبة بالخيوط التجميلية اللاجراحية علاج
                    البشرة و الشعر باحداث التقنيات العلاجية علاج ندبات حب الشباب باحدث
                    الطرق العلاجية و التجميلية استخدام الليزر لعلاج مشاكل الجلد و
                    تجميل البشرة علاج الامراض الجلدية باحدث التقنيات الطبية خدمات
                    مودفيا
                </p>
                <div
                    class="categrye d-flex w-75 justify-content-around align-content-start"
                >
                    <div>
                        <div class="img-services">
                            <img
                                class="img-fluid w-100"
                                src="assets/skin (2) 1.png"
                                alt="img"
                            />
                        </div>
                        <p class="text-center">ليزر</p>
                    </div>
                    <div class="selected">
                        <div class="img-services">
                            <img
                                class="img-fluid"
                                src="assets/skincare 1.png"
                                alt="img"
                            />
                        </div>
                        <p class="text-center">جلديه</p>
                    </div>
                    <div>
                        <div class="img-services">
                            <img
                                class="img-fluid w-100"
                                src="assets/happy (3) 1.png"
                                alt="img"
                            />
                        </div>

                        <p class="text-center">أسنان</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 p-5">
                <div>
                    <img
                        class="img-fluid"
                        src="assets/Group 9419.png"
                        alt="Group-img"
                    />
                </div>
            </div>
        </div>
    </section>
    <!--بماذا نتميز  -->
    <section class="featured-1">
        <div class="row">
            <div class="col-md-6 d-none d-md-block">
                <div class="img-featured">
                    <img class="img-fluid" src="assets/featured.png" alt="img" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <h3 class="title-section">بماذا نتميز ؟</h3>
                    <p class="desc-featured">
                        التطور المستمر حيث يتقدم العلم و الطب بصورة مذهلة و نحن نواكب
                        هذا التطور. <br />الإنصات الجيد هو واحد من أسرار نجاحنا و الذى
                        يصل بنا إلى رضاء عملائنا التام. <br />الأمانة المهنية فى شرح
                        التفاصيل و الشكل <br />
                        النهائى و فى إتخاذ القرارات الطبية. <br />الخبرة سر آخر من أسرار
                        نجاحنا حيث تحتاج الإجراءات التجميلية للخبرة بشدة.
                    </p>
                    <p class="nasted-title">اطباء ذو خبره عالية</p>
                    <p class="nasted-title">عيادات و تقنيات متطورة</p>
                    <p class="nasted-title">رضا العملاء اولويتنا</p>
                </div>
            </div>
            <div class="col-md-6 d-block d-md-none">
                <div class="img-featured">
                    <img class="img-fluid" src="assets/featured.png" alt="img" />
                </div>
            </div>
        </div>
        <div class="circle-featured">
            <div class="ellipse-featured">
                <img
                    class="img-fluid"
                    src="assets/Ellipse 12.png"
                    alt="img-stars"
                />
            </div>
        </div>
        <div class="starts">
            <div class="img-starts">
                <img
                    class="img-fluid"
                    src="assets/Group 9440.png"
                    alt="img-stars"
                />
            </div>
        </div>
    </section>
</div>
<!-- 2 بماذا نتميز  -->
<section class="featured-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="">
                    <h3 class="title-section">بماذا نتميز ؟</h3>
                    <p class="desc-featured">
                        التطور المستمر حيث يتقدم العلم و الطب بصورة مذهلة و نحن نواكب
                        هذا التطور. <br />الإنصات الجيد هو واحد من أسرار نجاحنا و الذى
                        يصل بنا إلى رضاء عملائنا التام. <br />الأمانة المهنية فى شرح
                        التفاصيل و الشكل <br />
                        النهائى و فى إتخاذ القرارات الطبية. <br />الخبرة سر آخر من أسرار
                        نجاحنا حيث تحتاج الإجراءات التجميلية للخبرة بشدة.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-featured">
                    <img class="img-fluid" src="assets/Group 9443.png" alt="img" />
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container main-container">
    <!-- فريق العمل -->
    <section class="team-work-section">
        <div class="group-img">
            <div>
                <img class="img-fluid" src="assets/Group 9456.png" alt="img" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="team-work">
                    <div class="team-woek-logo">
                        <img class="img-fluid" src="assets/Group 3.png" alt="img" />
                    </div>
                    <div class="team-work-title">
                        <h2 class="fw-bold fs-1">فريق العمل</h2>
                    </div>
                </div>
                <div class="categry mt-5" id="myDIV">
                    <p class="cat active-cat">الكل</p>
                    <p class="cat ">اسنان</p>
                    <p class="cat ">جلديه</p>
                    <p class="cat ">تجميل</p>
                </div>

            </div>
            <div class="col-md-9 all-cards">
                <div class="row">
                    <div class="col-lg-6 ps-5 parent-cred position-relative">
                        <div class="doctor-img">
                            <img
                                class="img-w-100"
                                src="assets/client-1.jpg.png"
                                alt="img"
                            />
                        </div>
                        <div class="card doctor-card rounded-2">
                            <div class="d-flex doctor">
                                <div class="doctor-info px-2 w-100">
                                    <h4 class="doctor-name">د. علا سليمان</h4>
                                    <p class="doctor-desc">خبير في الطب التجميلي</p>
                                </div>
                            </div>
                            <hr class="w-75 m-auto my-3 line" />
                            <div class="doctor-rating">
                                <div class="d-flex align-content-end">
                      <span>
                        <img src="assets/star.png" alt="img" />
                      </span>
                                    <span class="mx-2">88%</span>
                                </div>
                                <div class="d-flex align-content-end">
                      <span>
                        <img src="assets/briefcase.png" alt="img" />
                      </span>

                                    <span class="mx-2"> Years </span>
                                    <span class="mx-1"> 5 </span>
                                </div>
                                <div class="d-flex align-content-end reserve">
                      <span>
                        <img
                            class="img-fluid w-75"
                            src="assets/pasient.png"
                            alt="img"
                        />
                      </span>
                                    <span class="mx-2">احجز</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-5 parent-cred position-relative">
                        <div class="doctor-img">
                            <img
                                class="img-w-100"
                                src="assets/client-1.jpg.png"
                                alt="img"
                            />
                        </div>
                        <div class="card doctor-card rounded-2">
                            <div class="d-flex doctor">
                                <div class="doctor-info px-2 w-100">
                                    <h4 class="doctor-name">د. علا سليمان</h4>
                                    <p class="doctor-desc">خبير في الطب التجميلي</p>
                                </div>
                            </div>
                            <hr class="w-75 m-auto my-3 line" />
                            <div class="doctor-rating">
                                <div class="d-flex align-content-end">
                      <span>
                        <img src="assets/star.png" alt="img" />
                      </span>
                                    <span class="mx-2">88%</span>
                                </div>
                                <div class="d-flex align-content-end">
                      <span>
                        <img src="assets/briefcase.png" alt="img" />
                      </span>

                                    <span class="mx-2"> Years </span>
                                    <span class="mx-1"> 5 </span>
                                </div>
                                <div class="d-flex align-content-end reserve">
                      <span>
                        <img
                            class="img-fluid w-75"
                            src="assets/pasient.png"
                            alt="img"
                        />
                      </span>
                                    <span class="mx-2">احجز</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-5 parent-cred position-relative">
                        <div class="doctor-img">
                            <img
                                class="img-w-100"
                                src="assets/client-1.jpg.png"
                                alt="img"
                            />
                        </div>
                        <div class="card doctor-card rounded-2">
                            <div class="d-flex doctor">
                                <div class="doctor-info px-2 w-100">
                                    <h4 class="doctor-name">د. علا سليمان</h4>
                                    <p class="doctor-desc">خبير في الطب التجميلي</p>
                                </div>
                            </div>
                            <hr class="w-75 m-auto my-3 line" />
                            <div class="doctor-rating">
                                <div class="d-flex align-content-end">
                      <span>
                        <img src="assets/star.png" alt="img" />
                      </span>
                                    <span class="mx-2">88%</span>
                                </div>
                                <div class="d-flex align-content-end">
                      <span>
                        <img src="assets/briefcase.png" alt="img" />
                      </span>

                                    <span class="mx-2"> Years </span>
                                    <span class="mx-1"> 5 </span>
                                </div>
                                <div class="d-flex align-content-end reserve">
                      <span>
                        <img
                            class="img-fluid w-75"
                            src="assets/pasient.png"
                            alt="img"
                        />
                      </span>
                                    <span class="mx-2">احجز</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-5 parent-cred position-relative">
                        <div class="doctor-img">
                            <img
                                class="img-w-100"
                                src="assets/client-1.jpg.png"
                                alt="img"
                            />
                        </div>
                        <div class="card doctor-card rounded-2">
                            <div class="d-flex doctor">
                                <div class="doctor-info px-2 w-100">
                                    <h4 class="doctor-name">د. علا سليمان</h4>
                                    <p class="doctor-desc">خبير في الطب التجميلي</p>
                                </div>
                            </div>
                            <hr class="w-75 m-auto my-3 line" />
                            <div class="doctor-rating">
                                <div class="d-flex align-content-end">
                      <span>
                        <img src="assets/star.png" alt="img" />
                      </span>
                                    <span class="mx-2">88%</span>
                                </div>
                                <div class="d-flex align-content-end">
                      <span>
                        <img src="assets/briefcase.png" alt="img" />
                      </span>

                                    <span class="mx-2"> Years </span>
                                    <span class="mx-1"> 5 </span>
                                </div>
                                <div class="d-flex align-content-end reserve">
                      <span>
                        <img
                            class="img-fluid w-75"
                            src="assets/pasient.png"
                            alt="img"
                        />
                      </span>
                                    <span class="mx-2">احجز</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-5 parent-cred position-relative">
                        <div class="doctor-img">
                            <img
                                class="img-w-100"
                                src="assets/client-1.jpg.png"
                                alt="img"
                            />
                        </div>
                        <div class="card doctor-card rounded-2">
                            <div class="d-flex doctor">
                                <div class="doctor-info px-2 w-100">
                                    <h4 class="doctor-name">د. علا سليمان</h4>
                                    <p class="doctor-desc">خبير في الطب التجميلي</p>
                                </div>
                            </div>
                            <hr class="w-75 m-auto my-3 line" />
                            <div class="doctor-rating">
                                <div class="d-flex align-content-end">
                      <span>
                        <img src="assets/star.png" alt="img" />
                      </span>
                                    <span class="mx-2">88%</span>
                                </div>
                                <div class="d-flex align-content-end">
                      <span>
                        <img src="assets/briefcase.png" alt="img" />
                      </span>

                                    <span class="mx-2"> Years </span>
                                    <span class="mx-1"> 5 </span>
                                </div>
                                <div class="d-flex align-content-end reserve">
                      <span>
                        <img
                            class="img-fluid w-75"
                            src="assets/pasient.png"
                            alt="img"
                        />
                      </span>
                                    <span class="mx-2">احجز</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-5 parent-cred position-relative">
                        <div class="doctor-img">
                            <img
                                class="img-w-100"
                                src="assets/client-1.jpg.png"
                                alt="img"
                            />
                        </div>
                        <div class="card doctor-card rounded-2">
                            <div class="d-flex doctor">
                                <div class="doctor-info px-2 w-100">
                                    <h4 class="doctor-name">د. علا سليمان</h4>
                                    <p class="doctor-desc">خبير في الطب التجميلي</p>
                                </div>
                            </div>
                            <hr class="w-75 m-auto my-3 line" />
                            <div class="doctor-rating">
                                <div class="d-flex align-content-end">
                      <span>
                        <img src="assets/star.png" alt="img" />
                      </span>
                                    <span class="mx-2">88%</span>
                                </div>
                                <div class="d-flex align-content-end">
                      <span>
                        <img src="assets/briefcase.png" alt="img" />
                      </span>

                                    <span class="mx-2"> Years </span>
                                    <span class="mx-1"> 5 </span>
                                </div>
                                <div class="d-flex align-content-end reserve">
                      <span>
                        <img
                            class="img-fluid w-75"
                            src="assets/pasient.png"
                            alt="img"
                        />
                      </span>
                                    <span class="mx-2">احجز</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="circel-team-work">
            <img class="img-fluid" src="assets/Ellipse 13.png" alt="img" />
        </div>
        <div class="d-flex justify-content-center">
            <img
                class="img-fluid points-team-work"
                src="assets/Union.png"
                alt="img"
            />
        </div>
    </section>

    <!-- list doctors  -->
    <section class="list">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col-2"></th>

                    <th scope="col-2">الاحد</th>
                    <th scope="col">الاثنين</th>
                    <th scope="col">الثلاثاء</th>
                    <th scope="col">الاربعاء</th>
                    <th scope="col">الخميس</th>
                    <th scope="col">الجمعه</th>
                    <th scope="col">السبت</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>09:00 - 10:00</td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td></td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                </tr>
                <tr>
                    <td>09:00 - 10:00</td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td></td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                </tr>
                <tr>
                    <td>09:00 - 10:00</td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td></td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                </tr>
                <tr>
                    <td>09:00 - 10:00</td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td></td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                </tr>
                <tr>
                    <td>09:00 - 10:00</td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                    <td></td>
                    <td>
                        <p class="fw-bold dep">تجميل</p>
                        <p>د.علا سليمان</p>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>


    <!-- اراء العملاء -->
    <section class="reviwes">
        <div class="title-section">
            <span></span>
            <span class="title-section">اراء العملاء</span>
            <span></span>
        </div>
    </section>
</div>
<div class="nav-items-modal inactive">
    <div class="nav-bg"></div>
    <button class="close-icon">
        <img src="assets/heroicons-mini/x-mark.png" alt="close">
    </button>
    <ul class="nav-links">
        <li>
            <a href="#">الرئيسية</a>
        </li>
        <li>
            <a href="#">عن العيادة</a>
        </li>
        <li>
            <a href="#">خدماتنا</a>
        </li>
        <li>
            <a href="#">الاطباء</a>
        </li>
        <li>
            <a href="#">المقالات</a>
        </li>
        <li>
            <a href="#">التواصل</a>
        </li>
    </ul>
</div>
<footer>
    <div class="book-now container">
        <img src="assets/footer_book.png" />
        <div class="book-now-content">
            <div class="book-sentance">
                <h3 class="ready-to-get-started f-18-48">احجز موعدك الان</h3>
                <p class="f-12-32">احجز موعدك الان واستمتع بخدماتنا</p>
            </div>
            <button class="primary-btn">احجز الان</button>
        </div>
    </div>
    <div class="container footer-content">
        <section>
            <h4>روابط سريعه</h4>
            <ul>
                <li>
                    <a href="#"> الرئيسية </a>
                </li>
                <li>
                    <a href="#"> خدماتنا </a>
                </li>
                <li>
                    <a href="#"> من نحن </a>
                </li>
                <li>
                    <a href="#"> اتصل بنا </a>
                </li>
            </ul>
        </section>
        <section>
            <a href="/">
                <img src="assets/Group 12.png" alt="logo" />
            </a>
        </section>
        <section>
            <h4>تواصل معنا</h4>
            <div class="address-info">
                <address>الرياض، المملكة العربية السعودية</address>
                <p>يومياً 8ص : 10 م</p>
                <a href="mailto:info@modeviaclinic.com"> info@modeviaclinic.com </a>
            </div>
            <div class="media-box">
                <a href="#">
                    <img src="assets/instagram.png" alt="instagram" />
                </a>
                <a href="#">
                    <img src="assets/snapchat.png" alt="snapchat" />
                </a>
                <a href="#">
                    <img src="assets/tiktok.png" alt="tiktok" />
                </a>
            </div>
        </section>
    </div>
    <hr width="100%" class="container" />
    <a class="copyrights" href="https://www.uktra.net">
        <p>برعايه</p>
        <img src="assets/logo 1.png" alt="uktra" srcset="" />
    </a>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

<script>
    $(document).ready(function() {
        toastr.options.timeOut = 10000;

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}');
            @endforeach
        @endif

        @if (Session::has('error'))
        toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
        @endif
    });

</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
