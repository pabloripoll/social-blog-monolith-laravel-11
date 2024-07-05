<!doctype html>
<html lang="ar" dir="rtl" data-bs-theme="auto">
  <head><script src="/theme/bootstrap/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>ورقة الغش · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cheatsheet-rtl/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="/theme/bootstrap/assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="../cheatsheet/cheatsheet.rtl.css" rel="stylesheet">
  </head>
  <body class="bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>


<header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
  <div class="container-fluid d-flex align-items-center">
    <h1 class="d-flex align-items-center fs-4 text-white mb-0">
      <img src="/theme/bootstrap/assets/brand/bootstrap-logo-white.svg" width="38" height="30" class="me-3" alt="Bootstrap">
      ورقة الغش
    </h1>
    <a href="../examples/cheatsheet/" class="ms-auto link-light" hreflang="en">جدول بيانات LTR</a>
  </div>
</header>
<aside class="bd-aside sticky-xl-top text-body-secondary align-self-start mb-3 mb-xl-5 px-2">
  <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">على هذه الصفحة</h2>
  <nav class="small" id="toc">
    <ul class="list-unstyled">
      <li class="my-2">
        <button type="button" class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">المحتوى</button>
        <ul class="list-unstyled ps-3 collapse" id="contents-collapse">
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#typography">النصوص</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#images">الصور</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#tables">الجداول</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#figures">النماذج البيانية</a></li>
        </ul>
      </li>
      <li class="my-2">
        <button type="button" class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#forms-collapse" aria-controls="forms-collapse">النماذج</button>
        <ul class="list-unstyled ps-3 collapse" id="forms-collapse">
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#overview">نظرة عامة</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#disabled-forms">الحقول المعطلة</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#sizing">الأحجام</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#input-group">مجموعة الإدخال</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#floating-labels">الحقول ذوي العناوين العائمة</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#validation">التحقق</a></li>
        </ul>
      </li>
      <li class="my-2">
        <button type="button" class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#components-collapse" aria-controls="components-collapse">مكونات</button>
        <ul class="list-unstyled ps-3 collapse" id="components-collapse">
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#accordion">المطوية</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#alerts">الإنذارات</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#badge">الشارة</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#breadcrumb">مسار التنقل التفصيلي</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#buttons">الأزرار</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#button-group">مجموعة الأزرار</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#card">البطاقة</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#carousel">شرائح العرض</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#dropdowns">القوائم المنسدلة</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#list-group">مجموعة العناصر</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#modal">الصندوق العائم</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#navs">التنقل</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#navbar">شريط التنقل</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#pagination">ترقيم الصفحات</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#popovers">الصناديق المنبثقة</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#progress">شريط التقدم</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#scrollspy">المخطوطة</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#spinners">الدوائر المتحركة</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#toasts">الإشعارات</a></li>
          <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#tooltips">التلميحات</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</aside>
<div class="bd-cheatsheet container-fluid bg-body">
  <section id="content">
    <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">المحتوى</h2>

    <article class="my-3" id="typography">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>النصوص</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../content/typography/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <p class="display-1">العرض 1</p>
        <p class="display-2">العرض 2</p>
        <p class="display-3">العرض 3</p>
        <p class="display-4">العرض 4</p>
        <p class="display-5">العرض 5</p>
        <p class="display-6">العرض 6</p>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <p class="h1">عنوان 1</p>
        <p class="h2">عنوان 2</p>
        <p class="h3">عنوان 3</p>
        <p class="h4">عنوان 4</p>
        <p class="h5">عنوان 5</p>
        <p class="h6">عنوان 6</p>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <p class="lead">
          هذه قطعة إملائية متميزة، فهي مصممة لتكون بارزة من بين القطع الإملائية الأخرى.
        </p>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <p>يمكنك استخدام تصنيف mark <mark>لتحديد</mark> نص.</p>
        <p><del>من المفترض أن يتم التعامل مع هذا السطر كنص محذوف.</del></p>
        <p><s>من المفترض أن يتم التعامل مع هذا السطر على أنه لم يعد دقيقًا.</s></p>
        <p><ins>من المفترض أن يتم التعامل مع هذا السطر كإضافة إلى المستند.</ins></p>
        <p><u>سيتم عرض النص في هذا السطر كما وتحته خط.</u></p>
        <p><small>من المفترض أن يتم التعامل مع هذا السطر على أنه يحوي تفاصيل صغيرة.</small></p>
        <p><strong>هذا السطر يحوي نص عريض.</strong></p>
        <p><em>هذا السطر يحوي نص مائل.</em></p>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <hr>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <blockquote class="blockquote">
          <p>إقتباس مبهر، موضوع في عنصر blockquote</p>
          <footer class="blockquote-footer">شخص مشهور في <cite title= "عنوان المصدر"> عنوان المصدر </cite></footer>
        </blockquote>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <ul class="list-unstyled">
          <li>هذه قائمة عناصر.</li>
          <li>بالرغم من أنها مصممة كي لا تظهر كذلك.</li>
          <li>إلا أنها مجهزة كـ قائمة خلف الكواليس</li>
          <li>هذا التصميم ينطبق فقد على القائمة الرئيسية</li>
          <li>القوائم الفرعية
            <ul>
              <li>لا تتأثر بهذا التصميم</li>
              <li>فهي تظهر عليها علامات الترقيم</li>
              <li>وتحتوي على مساحة فارغة بجوارها</li>
            </ul>
          </li>
          <li>قد يكون هذا التصميم مفيدًا في بعض الأحيان.</li>
        </ul>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <ul class="list-inline">
          <li class="list-inline-item">هذا عنصر في قائمة.</li>
          <li class="list-inline-item">وهذا أيضًا.</li>
          <li class="list-inline-item">لكنهم يظهرون متجاورين.</li>
        </ul>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="images">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>الصور</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../content/images/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مستجيبة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">صورة مستجيبة</text></svg>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <svg class="bd-placeholder-img img-thumbnail" width="200" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="صورة عنصر نائب مربع عام مع حدود بيضاء حولها ، مما يجعلها تشبه صورة تم التقاطها بكاميرا فورية قديمة: 200x200" preserveAspectRatio="xMidYMid slice" focusable="false"><title>صورة عنصر نائب مربع عام مع حدود بيضاء حولها ، مما يجعلها تشبه صورة تم التقاطها بكاميرا فورية قديمة</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">200x200</text></svg>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="tables">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>الجداول</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../content/tables/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <table class="table table-striped">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم الاول</th>
            <th scope="col">الكنية</th>
            <th scope="col">الاسم المستعار</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td><bdo lang="en" dir="ltr">@mdo</bdo></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td><bdo lang="en" dir="ltr">@fat</bdo></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td><bdo lang="en" dir="ltr">@twitter</bdo></td>
          </tr>
          </tbody>
        </table>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <table class="table table-dark table-borderless">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم الاول</th>
            <th scope="col">الكنية</th>
            <th scope="col">الاسم المستعار</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td><bdo lang="en" dir="ltr">@mdo</bdo></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td><bdo lang="en" dir="ltr">@fat</bdo></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td><bdo lang="en" dir="ltr">@twitter</bdo></td>
          </tr>
          </tbody>
        </table>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <table class="table table-hover">
          <thead>
          <tr>
            <th scope="col">Class</th>
            <th scope="col">عنوان</th>
            <th scope="col">عنوان</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row">Default</th>
            <td>خلية</td>
            <td>خلية</td>
          </tr>

          <tr class="table-primary">
            <th scope="row">Primary</th>
            <td>خلية</td>
            <td>خلية</td>
          </tr>
          <tr class="table-secondary">
            <th scope="row">Secondary</th>
            <td>خلية</td>
            <td>خلية</td>
          </tr>
          <tr class="table-success">
            <th scope="row">Success</th>
            <td>خلية</td>
            <td>خلية</td>
          </tr>
          <tr class="table-danger">
            <th scope="row">Danger</th>
            <td>خلية</td>
            <td>خلية</td>
          </tr>
          <tr class="table-warning">
            <th scope="row">Warning</th>
            <td>خلية</td>
            <td>خلية</td>
          </tr>
          <tr class="table-info">
            <th scope="row">Info</th>
            <td>خلية</td>
            <td>خلية</td>
          </tr>
          <tr class="table-light">
            <th scope="row">Light</th>
            <td>خلية</td>
            <td>خلية</td>
          </tr>
          <tr class="table-dark">
            <th scope="row">Dark</th>
            <td>خلية</td>
            <td>خلية</td>
          </tr>
          </tbody>
        </table>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <table class="table table-sm table-bordered">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم الاول</th>
            <th scope="col">الكنية</th>
            <th scope="col">الاسم المستعار</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td><bdo lang="en" dir="ltr">@mdo</bdo></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td><bdo lang="en" dir="ltr">@fat</bdo></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td><bdo lang="en" dir="ltr">@twitter</bdo></td>
          </tr>
          </tbody>
        </table>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="figures">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>النماذج البيانية</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../content/figures/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <figure class="figure">
          <svg class="bd-placeholder-img figure-img img-fluid rounded" width="400" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 400x300" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">400x300</text></svg>
          <figcaption class="figure-caption">شرح للصورة أعلاه.</figcaption>
        </figure>

  </div>
</div>

      </div>
    </article>
  </section>

  <section id="forms">
    <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">النماذج</h2>

    <article class="my-3" id="overview">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>نظرة عامة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../forms/overview/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">البريد الإلكتروني</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">لن نقوم بمشاركة بريدك الإلكتروني مع أي شخص آخر.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">كلمة السر</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleSelect" class="form-label">قائمة اختيار</label>
            <select class="form-select" id="exampleSelect">
              <option selected>افتح قائمة الاختيار هذه</option>
              <option value="1">واحد</option>
              <option value="2">اثنان</option>
              <option value="3">ثلاثة</option>
            </select>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">اخترني</label>
          </div>
          <fieldset class="mb-3">
            <legend>أزرار الاختيار الأحادي</legend>
            <div class="form-check">
              <input type="radio" name="radios" class="form-check-input" id="exampleRadio1" checked>
              <label class="form-check-label" for="exampleRadio1">الخيار الافتراضي</label>
            </div>
            <div class="mb-3 form-check">
              <input type="radio" name="radios" class="form-check-input" id="exampleRadio2">
              <label class="form-check-label" for="exampleRadio2">خيار آخر</label>
            </div>
          </fieldset>
          <div class="mb-3">
            <label class="form-label" for="customFile">رفع</label>
            <input type="file" class="form-control" id="customFile">
          </div>
          <div class="mb-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">زر على شكل مفتاح اختيار.</label>
          </div>
          <div class="mb-3">
            <label for="customRange3" class="form-label">مثال على حقل اختيار نطاقي</label>
            <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
          </div>
          <button type="submit" class="btn btn-primary">إرسال</button>
        </form>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="disabled-forms">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>الحقول المعطلة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../forms/overview/#disabled-forms">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <form>
          <fieldset disabled aria-label="مثال على مجموعة الحقول المعطلة">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">حقل إدخال معطل</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="حقل إدخال معطل">
            </div>
            <div class="mb-3">
              <label for="disabledSelect" class="form-label">قائمة اختيار معطلة</label>
              <select id="disabledSelect" class="form-select">
                <option>خيار معطل</option>
              </select>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                <label class="form-check-label" for="disabledFieldsetCheck">
                  زر اختيار معطل
                </label>
              </div>
            </div>
            <fieldset class="mb-3">
              <legend>أزرار اختيار أحادي معطلين</legend>
              <div class="form-check">
                <input type="radio" name="radios" class="form-check-input" id="disabledRadio1" disabled>
                <label class="form-check-label" for="disabledRadio1">خيار معطل</label>
              </div>
              <div class="mb-3 form-check">
                <input type="radio" name="radios" class="form-check-input" id="disabledRadio2" disabled>
                <label class="form-check-label" for="disabledRadio2">خيار آخر معطل</label>
              </div>
            </fieldset>
            <div class="mb-3">
              <label class="form-label" for="disabledCustomFile">رفع معطل</label>
              <input type="file" class="form-control" id="disabledCustomFile" disabled>
            </div>
            <div class="mb-3 form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="disabledSwitchCheckChecked" checked disabled>
              <label class="form-check-label" for="disabledSwitchCheckChecked">زر معطل على شكل مفتاح اختيار.</label>
            </div>
            <div class="mb-3">
              <label for="disabledRange" class="form-label">حقل اختيار نطاقي معطل</label>
              <input type="range" class="form-range" min="0" max="5" step="0.5" id="disabledRange">
            </div>
            <button type="submit" class="btn btn-primary">إرسال</button>
          </fieldset>
        </form>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="sizing">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>الأحجام</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../forms/form-control/#sizing">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="mb-3">
          <input class="form-control form-control-lg" type="text" placeholder="حقل إدخال كبير" aria-label=".form-control-lg مثال">
        </div>
        <div class="mb-3">
          <select class="form-select form-select-lg" aria-label=".form-select-lg مثال">
            <option selected>افتح قائمة الاختيار هذه</option>
            <option value="1">واحد</option>
            <option value="2">اثنان</option>
            <option value="3">ثلاثة</option>
          </select>
        </div>
        <div class="mb-3">
          <input type="file" class="form-control form-control-lg" aria-label="مثال على إدخال ملف كبير">
        </div>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="mb-3">
          <input class="form-control form-control-sm" type="text" placeholder="حقل إدخال صغير" aria-label=".form-control-sm مثال">
        </div>
        <div class="mb-3">
          <select class="form-select form-select-sm" aria-label=".form-select-sm مثال">
            <option selected>افتح قائمة الاختيار هذه</option>
            <option value="1">واحد</option>
            <option value="2">اثنان</option>
            <option value="3">ثلاثة</option>
          </select>
        </div>
        <div class="mb-3">
          <input type="file" class="form-control form-control-sm" aria-label="مثال على إدخال ملف صغير">
        </div>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="input-group">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>مجموعة الإدخال</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../forms/input-group/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">أنا اسمي</span>
          <input type="text" class="form-control" placeholder="فلان الفلاني" aria-label="الاسم" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="أنا أحب الكعك والقهوة" aria-label="الطعام المفضل" aria-describedby="basic-addon2">
          <span class="input-group-text" id="basic-addon2">وغيرها</span>
        </div>
        <label for="basic-url" class="form-label">عنوان حسابك الشخصي</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
          <span class="input-group-text" id="basic-addon3"><bdo lang="en" dir="ltr">https://example.com/users/</bdo></span>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text"><bdo lang="en" dir="ltr">.00</bdo></span>
          <input type="text" class="form-control" aria-label="المبلغ (لأقرب دولار)">
          <span class="input-group-text">$</span>
        </div>
        <div class="input-group">
          <span class="input-group-text">مع textarea</span>
          <textarea class="form-control" aria-label="مع textarea"></textarea>
        </div>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="floating-labels">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>الحقول ذوي العناوين العائمة</h3>
        <a class="d-flex align-items-center" href="../forms/floating-labels/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <form>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">البريد الالكتروني</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="كلمة السر">
            <label for="floatingPassword">كلمة السر</label>
          </div>
        </form>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="validation">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>التحقق</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../forms/validation/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <form class="row g-3">
          <div class="col-md-4">
            <label for="validationServer01" class="form-label">الاسم الاول</label>
            <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
            <div class="valid-feedback">
              يبدو صحيحًا!
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationServer02" class="form-label">الكنية</label>
            <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
            <div class="valid-feedback">
              يبدو صحيحًا!
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationServerUsername" class="form-label">اسم المستخدم</label>
            <div class="input-group has-validation">
              <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required>
              <span class="input-group-text" id="inputGroupPrepend3">@</span>
              <div class="invalid-feedback">
                يرجى اختيار اسم مستخدم.
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationServer03" class="form-label">مدينة</label>
            <input type="text" class="form-control is-invalid" id="validationServer03" required>
            <div class="invalid-feedback">
              يرجى إدخال مدينة صحيحة.
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationServer04" class="form-label">حالة</label>
            <select class="form-select is-invalid" id="validationServer04" required>
              <option selected disabled value="">اختر...</option>
              <option>...</option>
            </select>
            <div class="invalid-feedback">
              يرجى اختيار ولاية صحيحة.
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationServer05" class="form-label">الرمز البريدي</label>
            <input type="text" class="form-control is-invalid" id="validationServer05" required>
            <div class="invalid-feedback">
              يرجى إدخال رمز بريدي صحيح.
            </div>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
              <label class="form-check-label" for="invalidCheck3">
                أوافق على الشروط والأحكام
              </label>
              <div class="invalid-feedback">
                تجب الموافقة قبل إرسال النموذج.
              </div>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">إرسال النموذج</button>
          </div>
        </form>

  </div>
</div>

      </div>
    </article>
  </section>

  <section id="components">
    <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">العناصر</h2>

    <article class="my-3" id="accordion">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>المطوية</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/accordion/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h4 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                عنصر المطوية الأول
              </button>
            </h4>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>هذا هو محتوى عنصر المطوية الأول.</strong> سيكون المحتوى مخفيًا بشكل إفتراضي حتى يقوم Bootstrap بإضافة الكلاسات اللازمة لكل عنصر في المطوية. هذه الكلاسات تتحكم بالمظهر العام ووتتحكم أيضا بإظهار وإخفاء أقسام المطوية عبر حركات CSS الإنتقالية. يمكنك تعديل أي من هذه عبر كلاسات CSS خاصة بك، او عبر تغيير القيم الإفتراضية المقدمة من Bootstrap. من الجدير بالذكر أنه يمكن وضع أي كود HTML هنا، ولكن الحركة الإنتقالية قد تحد من الoverflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                عنصر المطوية الثاني
              </button>
            </h4>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>هذا هو محتوى عنصر المطوية الثاني.</strong> سيكون المحتوى مخفيًا بشكل إفتراضي حتى يقوم Bootstrap بإضافة الكلاسات اللازمة لكل عنصر في المطوية. هذه الكلاسات تتحكم بالمظهر العام ووتتحكم أيضا بإظهار وإخفاء أقسام المطوية عبر حركات CSS الإنتقالية. يمكنك تعديل أي من هذه عبر كلاسات CSS خاصة بك، او عبر تغيير القيم الإفتراضية المقدمة من Bootstrap. من الجدير بالذكر أنه يمكن وضع أي كود HTML هنا، ولكن الحركة الإنتقالية قد تحد من الoverflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                عنصر المطوية الثالث
              </button>
            </h4>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>هذا هو محتوى عنصر المطوية الثالث.</strong> سيكون المحتوى مخفيًا بشكل إفتراضي حتى يقوم Bootstrap بإضافة الكلاسات اللازمة لكل عنصر في المطوية. هذه الكلاسات تتحكم بالمظهر العام ووتتحكم أيضا بإظهار وإخفاء أقسام المطوية عبر حركات CSS الإنتقالية. يمكنك تعديل أي من هذه عبر كلاسات CSS خاصة بك، او عبر تغيير القيم الإفتراضية المقدمة من Bootstrap. من الجدير بالذكر أنه يمكن وضع أي كود HTML هنا، ولكن الحركة الإنتقالية قد تحد من الoverflow.
              </div>
            </div>
          </div>
        </div>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="alerts">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>الإنذارات</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/alerts/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">


        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          تنبيه primary بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
          تنبيه secondary بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          تنبيه success بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          تنبيه danger بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          تنبيه warning بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
          تنبيه info بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-light alert-dismissible fade show" role="alert">
          تنبيه light بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
          تنبيه dark بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">أحسنت!</h4>
          <p>لقد نجحت في قراءة رسالة التنبيه المهمة هذه. سيتم تشغيل نص المثال هذا لفترة أطول قليلاً حتى تتمكن من رؤية كيفية عمل التباعد داخل التنبيه مع هذا النوع من المحتوى.</p>
          <hr>
          <p class="mb-0">كلما احتجت إلى ذلك ، تأكد من استخدام أدوات الهامش للحفاظ على الأشياء لطيفة ومرتبة.</p>
        </div>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="badge">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>الشارة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/badge/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <p class="h1">مثال على عنوان <span class="badge bg-primary">جديد</span></p>
        <p class="h2">مثال على عنوان <span class="badge bg-secondary">جديد</span></p>
        <p class="h3">مثال على عنوان <span class="badge bg-success">جديد</span></p>
        <p class="h4">مثال على عنوان <span class="badge bg-danger">جديد</span></p>
        <p class="h5">مثال على عنوان <span class="badge text-bg-warning">جديد</span></p>
        <p class="h6">مثال على عنوان <span class="badge text-bg-info">جديد</span></p>
        <p class="h6">مثال على عنوان <span class="badge text-bg-light">جديد</span></p>
        <p class="h6">مثال على عنوان <span class="badge bg-dark">جديد</span></p>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">


        <span class="badge rounded-pill bg-primary">Primary</span>
        <span class="badge rounded-pill bg-secondary">Secondary</span>
        <span class="badge rounded-pill bg-success">Success</span>
        <span class="badge rounded-pill bg-danger">Danger</span>
        <span class="badge rounded-pill text-bg-warning">Warning</span>
        <span class="badge rounded-pill text-bg-info">Info</span>
        <span class="badge rounded-pill text-bg-light">Light</span>
        <span class="badge rounded-pill bg-dark">Dark</span>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="breadcrumb">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>مسار التنقل التفصيلي (فتات الخبز)</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/breadcrumb/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <nav aria-label="فتات الخبز">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الصفحة الرئيسية</a></li>
            <li class="breadcrumb-item"><a href="#">المكتبة</a></li>
            <li class="breadcrumb-item active" aria-current="page">البيانات</li>
          </ol>
        </nav>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="buttons">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>الأزرار</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/buttons/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">


        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>

        <button type="button" class="btn btn-link">رابط</button>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">


        <button type="button" class="btn btn-outline-primary">Primary</button>
        <button type="button" class="btn btn-outline-secondary">Secondary</button>
        <button type="button" class="btn btn-outline-success">Success</button>
        <button type="button" class="btn btn-outline-danger">Danger</button>
        <button type="button" class="btn btn-outline-warning">Warning</button>
        <button type="button" class="btn btn-outline-info">Info</button>
        <button type="button" class="btn btn-outline-light">Light</button>
        <button type="button" class="btn btn-outline-dark">Dark</button>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <button type="button" class="btn btn-primary btn-sm">زر صغير</button>
        <button type="button" class="btn btn-primary">زر قياسي</button>
        <button type="button" class="btn btn-primary btn-lg">زر كبير</button>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="button-group">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>مجموعة الأزرار</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/button-group/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="btn-toolbar" role="toolbar" aria-label="شريط أدوات مع مجموعات أزرار">
          <div class="btn-group me-2" role="group" aria-label="المجموعة الأولى">
            <button type="button" class="btn btn-secondary">1</button>
            <button type="button" class="btn btn-secondary">2</button>
            <button type="button" class="btn btn-secondary">3</button>
            <button type="button" class="btn btn-secondary">4</button>
          </div>
          <div class="btn-group me-2" role="group" aria-label="المجموعة الثانية">
            <button type="button" class="btn btn-secondary">5</button>
            <button type="button" class="btn btn-secondary">6</button>
            <button type="button" class="btn btn-secondary">7</button>
          </div>
          <div class="btn-group" role="group" aria-label="المجموعة الثالثة">
            <button type="button" class="btn btn-secondary">8</button>
          </div>
        </div>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="card">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>البطاقة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/card/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="row  row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: غطاء الصورة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">غطاء الصورة</text></svg>
              <div class="card-body">
                <h5 class="card-title">عنوان البطاقة</h5>
                <p class="card-text">بعض الأمثلة السريعة للنصوص للبناء على عنوان البطاقة وتشكيل الجزء الأكبر من محتوى البطاقة.</p>
                <a href="#" class="btn btn-primary">اذهب لمكان ما</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-header">
                متميز
              </div>
              <div class="card-body">
                <h5 class="card-title">عنوان البطاقة</h5>
                <p class="card-text">بعض الأمثلة السريعة للنصوص للبناء على عنوان البطاقة وتشكيل الجزء الأكبر من محتوى البطاقة.</p>
                <a href="#" class="btn btn-primary">اذهب لمكان ما</a>
              </div>
              <div class="card-footer text-body-secondary">
                منذ يومان
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">عنوان البطاقة</h5>
                <p class="card-text">بعض الأمثلة السريعة للنصوص للبناء على عنوان البطاقة وتشكيل الجزء الأكبر من محتوى البطاقة.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">عنصر</li>
                <li class="list-group-item">عنصر آخر</li>
                <li class="list-group-item">عنصر ثالث</li>
              </ul>
              <div class="card-body">
                <a href="#" class="card-link">رابط البطاقة</a>
                <a href="#" class="card-link">رابط آخر</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="row g-0">
                <div class="col-md-4">
                  <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">صورة</text></svg>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">عنوان البطاقة</h5>
                    <p class="card-text">هذه بطاقة أعرض مع نص داعم تحتها كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
                    <p class="card-text"><small class="text-body-secondary">آخر تحديث منذ 3 دقائق</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="carousel">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>شرائح العرض</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/carousel/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="الشريحة الأولى"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="الشريحة الثانية"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="الشريحة الثالثة"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: الشريحة الأولى" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">الشريحة الأولى</text></svg>
              <div class="carousel-caption d-none d-md-block">
                <h5>عنوان الشريحة الأولى</h5>
                <p>محتوى وصفي يعبئ فراغ الشريحة الأولى.</p>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: الشريحة الثانية" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em">الشريحة الثانية</text></svg>
              <div class="carousel-caption d-none d-md-block">
                <h5>عنوان الشريحة الثانية</h5>
                <p>محتوى وصفي يعبئ فراغ الشريحة الأولى.</p>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: الشريحة الثالثة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em">الشريحة الثالثة</text></svg>
              <div class="carousel-caption d-none d-md-block">
                <h5>عنوان الشريحة الثالثة</h5>
                <p>محتوى وصفي يعبئ فراغ الشريحة الأولى.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">السابق</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">التالي</span>
          </button>
        </div>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="dropdowns">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>القوائم المنسدلة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/dropdowns/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="btn-group w-100 align-items-center justify-content-between flex-wrap">
          <div class="dropdown">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              زر القائمة المنسدلة
            </button>
            <ul class="dropdown-menu">
              <li><h6 class="dropdown-header">عنوان القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              زر القائمة المنسدلة
            </button>
            <ul class="dropdown-menu">
              <li><h6 class="dropdown-header">عنوان القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              زر القائمة المنسدلة
            </button>
            <ul class="dropdown-menu">
              <li><h6 class="dropdown-header">عنوان القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
        </div>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="btn-group">
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">تبديل القائمة المنسدلة</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">عمل</a></li>
            <li><a class="dropdown-item" href="#">عمل آخر</a></li>
            <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">تبديل القائمة المنسدلة</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">عمل</a></li>
            <li><a class="dropdown-item" href="#">عمل آخر</a></li>
            <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-success">Success</button>
          <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">تبديل القائمة المنسدلة</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">عمل</a></li>
            <li><a class="dropdown-item" href="#">عمل آخر</a></li>
            <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-info">Info</button>
          <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">تبديل القائمة المنسدلة</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">عمل</a></li>
            <li><a class="dropdown-item" href="#">عمل آخر</a></li>
            <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-warning">Warning</button>
          <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">تبديل القائمة المنسدلة</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">عمل</a></li>
            <li><a class="dropdown-item" href="#">عمل آخر</a></li>
            <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-danger">Danger</button>
          <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">تبديل القائمة المنسدلة</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">عمل</a></li>
            <li><a class="dropdown-item" href="#">عمل آخر</a></li>
            <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
          </ul>
        </div><!-- /btn-group -->

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="btn-group w-100 align-items-center justify-content-between flex-wrap">
          <div class="dropend">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              زر القائمة المنسدلة لليسار
            </button>
            <ul class="dropdown-menu">
              <li><h6 class="dropdown-header">عنوان القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
          <div class="dropup">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              زر القائمة المنسدلة للأعلى
            </button>
            <ul class="dropdown-menu">
              <li><h6 class="dropdown-header">عنوان القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
          <div class="dropstart">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              زر القائمة المنسدلة لليمين
            </button>
            <ul class="dropdown-menu">
              <li><h6 class="dropdown-header">عنوان القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
        </div>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="btn-group">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              قائمة منسدلة بمحاذاة نهاية الزر
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><h6 class="dropdown-header">عنوان القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
        </div>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="list-group">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>مجموعة العناصر</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/list-group/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <ul class="list-group">
          <li class="list-group-item disabled" aria-disabled="true">عنصر معطل</li>
          <li class="list-group-item">عنصر ثاني</li>
          <li class="list-group-item">عنصر ثالث</li>
          <li class="list-group-item">عنصر رابع</li>
          <li class="list-group-item">وعنصر خامس أيضًا</li>
        </ul>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <ul class="list-group list-group-flush">
          <li class="list-group-item">عنصر</li>
          <li class="list-group-item">عنصر ثاني</li>
          <li class="list-group-item">عنصر ثالث</li>
          <li class="list-group-item">عنصر رابع</li>
          <li class="list-group-item">وعنصر خامس أيضًا</li>
        </ul>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">عنصر مجموعة قائمة default بسيط</a>

          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">عنصر مجموعة قائمة primary بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">عنصر مجموعة قائمة secondary بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success">عنصر مجموعة قائمة success بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-danger">عنصر مجموعة قائمة danger بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-warning">عنصر مجموعة قائمة warning بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-info">عنصر مجموعة قائمة info بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-light">عنصر مجموعة قائمة light بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-dark">عنصر مجموعة قائمة dark بسيط</a>
        </div>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="modal">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>الصندوق العائم</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/modal/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="d-flex justify-content-between flex-wrap">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
            إطلاق صندوق عائم تجريبي
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">
            إطلاق صندوق عائم عالق
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
            صندوق عائم متنصف عاموديًا وقابل للتمرير
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">
            صندوق عائم يملأ الشاشة
          </button>
        </div>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="navs">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>التنقل</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/navs-tabs/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <nav class="nav">
          <a class="nav-link active" aria-current="page" href="#">نشط</a>
          <a class="nav-link" href="#">رابط</a>
          <a class="nav-link" href="#">رابط</a>
          <a class="nav-link disabled" aria-disabled="true">معطل</a>
        </nav>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <nav>
          <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">الصفحة الرئيسية</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">الملف الشخصي</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">اتصل بنا</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <p class="px-3">محتوى لتوضيح كيف يعمل التبويب. هذا المحتوى مرتبط بتبويب الصفحة الرئيسية. إذن، أمامنا بعض التحدّيات الصعبة. لكن لا يمكننا أن نعتمد على التطورات التكنولوجية وحدها في ميدان قوى السوق الحرة، لإخراجنا من هذه الورطة، لا سيّما أنها نفسها، مقرونة بالافتقار إلى البصيرة، هي التي أودت بنا إلى هذا التبدُّل المناخي في الدرجة الأولى.</p>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <p class="px-3">محتوى لتوضيح كيف يعمل التبويب. هذا المحتوى مرتبط بتبويب الملف الشخصي. معظم البشر في بلدان العالَم النامي، لم يقتنوا بعد مكيّفهم الأول، والمشكلة إلى ازدياد. فمعظم البلدان النامية هي من البلدان الأشد حرارة والأكثر اكتظاظًا بالسكان في العالم.</p>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <p class="px-3">محتوى لتوضيح كيف يعمل التبويب. هذا المحتوى مرتبط بتبويب الاتصال بنا. أمامنا بعض التحدّيات الصعبة. لكن لا يمكننا أن نعتمد على التطورات التكنولوجية وحدها في ميدان قوى السوق الحرة، بل يجب وضع معايير جدوى جديدة لشركات البناء ومعايير أعلى لجدوى التكييف من أجل تحفيز الحلول المستدامة قانونيًا.</p>
          </div>
        </div>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">نشط</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">رابط</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">رابط</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">معطل</a>
          </li>
        </ul>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="navbar">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>شريط التنقل</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/navbar/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="/theme/bootstrap/assets/brand/bootstrap-logo-white.svg" width="38" height="30" class="d-inline-block align-top" alt="Bootstrap" loading="lazy"
                   style="filter: invert(1) grayscale(100%) brightness(200%);">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="تبديل التنقل">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">الصفحة الرئيسية</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">رابط</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    قائمة منسدلة
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">عمل</a></li>
                    <li><a class="dropdown-item" href="#">عمل آخر</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">معطل</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="بحث" aria-label="بحث">
                <button class="btn btn-outline-dark" type="submit">بحث</button>
              </form>
            </div>
          </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-5">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="/theme/bootstrap/assets/brand/bootstrap-logo-white.svg" width="38" height="30" class="d-inline-block align-top" alt="Bootstrap" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="تبديل التنقل">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">الصفحة الرئيسية</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">رابط</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    قائمة منسدلة
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">عمل</a></li>
                    <li><a class="dropdown-item" href="#">عمل آخر</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">معطل</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="بحث" aria-label="بحث">
                <button class="btn btn-outline-light" type="submit">بحث</button>
              </form>
            </div>
          </div>
        </nav>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="pagination">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>ترقيم الصفحات</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/pagination/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <nav aria-label="مثال ترقيم الصفحات">
          <ul class="pagination pagination-sm">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
          </ul>
        </nav>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <nav aria-label="مثال قياسي لترقيم الصفحات">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="السابق">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="التالي">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <nav aria-label="مثال آخر لترقيم الصفحات">
          <ul class="pagination pagination-lg flex-wrap">
            <li class="page-item disabled">
              <a class="page-link">السابق</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">التالى</a>
            </li>
          </ul>
        </nav>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="popovers">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>الصناديق المنبثقة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/popovers/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="عنوان الصندوق المنبثق" data-bs-content="وإليك بعض المحتويات الرائعة. إنه آسر للغاية. أليس كذلك؟">
        انقر لعرض/إخفاء الصندوق المنبثق
        </button>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="نجمٌ و لكنه ليس في السماء، بل في أعماق البحار و المحيطات!">
          انبثاق إلى الأعلى
        </button>
        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="نجمٌ و لكنه ليس في السماء، بل في أعماق البحار و المحيطات!">
          انبثاق إلى اليسار
        </button>
        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="نجمٌ و لكنه ليس في السماء، بل في أعماق البحار و المحيطات!">
          انبثاق إلى الأسفل
        </button>
        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="نجمٌ و لكنه ليس في السماء، بل في أعماق البحار و المحيطات!">
          انبثاق إلى اليمين
        </button>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="progress">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>شريط التقدم</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/progress/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="progress mb-3" role="progressbar" aria-label="مثال مع عنوان" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar">0%</div>
        </div>
        <div class="progress mb-3" role="progressbar" aria-label="مثال ناجح مع عنوان" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar bg-success w-25">25%</div>
        </div>
        <div class="progress mb-3" role="progressbar" aria-label="مثال توضيح مع عنوان" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar text-bg-info w-50">50%</div>
        </div>
        <div class="progress mb-3" role="progressbar" aria-label="مثال تنبيه مع عنوان" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar text-bg-warning w-75">75%</div>
        </div>
        <div class="progress" role="progressbar" aria-label="مثال خطر مع عنوان" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar bg-danger w-100">100%</div>
        </div>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">

        <div class="progress-stacked">
          <div class="progress" role="progressbar" aria-label="القسم الأول - مثال افتراضي" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar"></div>
          </div>
          <div class="progress" role="progressbar" aria-label="القسم الثاني - مثال ناجح مقلّم متحرك" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
          </div>
        </div>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="scrollspy">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>المخطوطة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/scrollspy/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example">
          <nav id="navbar-example2" class="navbar bg-body-tertiary px-3">
            <a class="navbar-brand" href="#">شريط التنقل</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link" href="#fat"><bdi lang="en" dir="ltr">@fat</bdi></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mdo"><bdi lang="en" dir="ltr">@mdo</bdi></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">قائمة منسدلة</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#one">واحد</a></li>
                  <li><a class="dropdown-item" href="#two">اثنان</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#three">ثلاثة</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example position-relative mt-2 overflow-auto">
            <h4 id="fat"><bdi lang="en" dir="ltr">@fat</bdi></h4>
            <p>محتوى لتوضيح كيف تعمل المخطوطة. ببساطة، المخطوطة عبارة عن منشور طويل يحتوي على عدة أقسام، ولديه شريط تنقل يسهل الوصول إلى هذه الأقسام الفرعية.</p>
            <h4 id="mdo"><bdi lang="en" dir="ltr">@mdo</bdi></h4>
            <p>بصرف النظر عن تحسيننا جدوى المكيّفات أو عدم تحسينها، فإن الطلب على الطاقة سيزداد. وطبقاً لما جاء في مقالة معهد ماساشوستس للتكنولوجيا، السالف ذكره، ثمَّة أمر يجب عدم إغفاله، وهو كيف أن هذا الطلب سيضغط على نظم توفير الطاقة الحالية. إذ لا بد من إعادة تأهيل كل شبكات الكهرباء، وتوسيعها لتلبية طلب الطاقة في زمن الذروة، خلال موجات الحرارة المتزايدة. فحين يكون الحر شديداً يجنح الناس إلى البقاء في الداخل، وإلى زيادة تشغيل المكيّفات، سعياً إلى جو لطيف وهم يستخدمون أدوات وأجهزة مختلفة أخرى.</p>
            <h4 id="one">واحد</h4>
            <p>وكل هذه الأمور المتزامنة من تشغيل الأجهزة، يزيد الضغط على شبكات الطاقة، كما أسلفنا. لكن مجرد زيادة سعة الشبكة ليس كافياً. إذ لا بد من تطوير الشبكات الذكية التي تستخدم الجسّاسات، ونظم المراقبة، والبرامج الإلكترونية، لتحديد متى يكون الشاغلون في المبنى، ومتى يكون ثمَّة حاجة إلى الطاقة، ومتى تكون الحرارة منخفضة، وبذلك يخرج الناس، فلا يستخدمون كثيراً من الكهرباء.</p>
            <h4 id="two">اثنان</h4>
            <p>مع الأسف، كل هذه الحلول المبتكرة مكلِّفة، وهذا ما يجعلها عديمة الجدوى في نظر بعض الشركات الخاصة والمواطن المتقشّف. إن بعض الأفراد الواعين بيئياً يبذلون قصارى جهدهم في تقليص استهلاكهم من الطاقة، ويعون جيداً أهمية أجهزة التكييف المجدية والأرفق بالبيئة. ولكن جهات كثيرة لن تتحرّك لمجرد حافز سلامة المناخ ووقف هدر الطاقة، ما دامت لا تحركها حوافز قانونية. وعلى الحكومات أن تُقدِم عند الاهتمام بالتغيّر المناخي، على وضع التشريعات المناسبة. فبالنظم والحوافز والدعم، يمكن دفع الشركات إلى اعتماد الحلول الأجدى في مكاتبها.</p>
            <h4 id="three">ثلاثة</h4>
            <p>وكما يتبيّن لنا، من عدد الحلول الملطِّفة للمشكلة، ومن تنوّعها، وهي الحلول التي أسلفنا الحديث عنها، فإن التكنولوجيا التي نحتاج إليها من أجل معالجة هذه التحديات، هي في مدى قدرتنا، لكنها ربما تتطلّب بعض التحسين، ودعماً استثمارياً أكبر!</p>
            <p>ولا مانع من إضافة محتوى آخر ليس تحت أي قسم معين.</p>
          </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="spinners">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>الدوائر المتحركة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/spinners/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">


        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-secondary" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-success" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-danger" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-warning" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-info" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-light" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-dark" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>

  </div>
</div>


        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0">


        <div class="spinner-grow text-primary" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-secondary" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-success" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-danger" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-warning" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-info" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-light" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-dark" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>

  </div>
</div>

      </div>
    </article>
    <article class="my-3" id="toasts">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>الإشعارات</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/toasts/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0 bg-dark p-5 align-items-center">

        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>
            <strong class="me-auto">Bootstrap</strong>
            <small class="text-body-secondary">قبل 11 دقيقة</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="قريب"></button>
          </div>
          <div class="toast-body">
            مرحبًا بالعالم! هذه رسالة إشعار.
          </div>
        </div>

  </div>
</div>

      </div>
    </article>
    <article class="mt-3 mb-5 pb-5" id="tooltips">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>التلميحات</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/tooltips/">دليل الإستخدام</a>
      </div>

      <div>
        <div class="bd-example-snippet bd-code-snippet">
  <div class="bd-example m-0 border-0 tooltip-demo">

        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="تلميح يظهر في الأعلى">تلميح يظهر في الأعلى</button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="تلميح يظهر على اليسار">تلميح يظهر على اليسار</button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="تلميح يظهر في الأسفل">تلميح يظهر في الأسفل</button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="تلميح يظهر على اليمين">تلميح يظهر على اليمين</button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" title="<em>تلميح</em> <u>مع</u> <b>HTML</b>">تلميح مع HTML</button>

  </div>
</div>

      </div>
    </article>
  </section>
</div>

<div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">عنوان الصندوق العائم</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
        <button type="button" class="btn btn-primary">حفظ التغيرات</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLiveLabel">عنوان الصندوق العائم</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
      </div>
      <div class="modal-body">
        <p>لن أغلق إذا نقرت خارجي. لا تحاول حتى الضغط على مفتاح الهروب.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
        <button type="button" class="btn btn-primary">حسنًا</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalCenteredScrollableTitle">عنوان الصندوق العائم</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
      </div>
      <div class="modal-body">
        <p>نص لتوضيح عمل الصندوق العائم المتنصّف عاموديًا القابل للتمرير</p>
        <p>في هذه الحالة، هذا الصندوق يحتوي على محتوى أكثر قليلًا، ولذلك لتوضيح كيف  يمكن إضافة خاصية الإنتصاف العامودي لصندوق عائم قابل للتمرير.</p>
        <p>يعتبر كوب أو فنجان القهوة عادة يومية عند غالبية سكان الكرة الأرضية في الصباح والمساء، وفي حين تكثر الدراسات حول إيجابياتها هناك أيضا سلبيات كثيرة للمشروب المفضل للكثيرين.</p>
        <p>وفي هذا الشأن، أظهرت دراسة جديدة أن تناول الكافيين بانتظام يقلل من حجم المادة الرمادية في الدماغ، مما يشير إلى أن تناول القهوة يمكن أن يضعف القدرة على معالجة المعلومات، وفقاً لما نشرته "ديلي ميل" البريطانية.</p>
        <p>وأعطى باحثون سويسريون متطوعين ثلاث حصص من الكافيين 150 ملغم يوميًا لمدة 10 أيام - وهو مقدار كافيين يعادل حوالي أربعة أو خمسة أكواب صغيرة من القهوة المخمرة يوميًا، أو سبعة إسبريسو فردي.</p>
        <p>وتبين حدوث انخفاض في المادة الرمادية، والتي توجد غالبًا في الطبقة الخارجية للدماغ، أو القشرة، وتعمل على معالجة المعلومات.</p>
        <p>كما كان الانخفاض مذهلاً بشكل خاص في الفص الصدغي الإنسي الأيمن، بما في ذلك الحُصين، وهي منطقة من الدماغ ضرورية لتقوية الذاكرة.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
        <button type="button" class="btn btn-primary">حفظ التغيرات</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-4" id="exampleModalFullscreenLabel">صندوق عائم يملأ الشاشة</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
      </div>
      <div class="modal-body">
        <p>في ما يلي، نص طويل لتعبئة كامل الشاشة. قد يبدو أنني أثرثر كثيرًا، لذا سأقوم بنسخ مقالة من إحدى الصحف العربية.</p>
        <p>تكييف الهواء هو من التكنولوجيا التي ما إن نمتلكها حتى نصبح عاجزين عن تخيّل العيش من دونها. وتكييف الهواء في مناطق عديدة من العالم ليس ترفاً يمكن الاستغناء عنه. ولكن هذه الحاجة الحيوية تثير تحديات كبيرة على مستوى استهلاك الطاقة في معظم بلدان العالم. ويُتوقع أن تتفاقم هذه التحديات خلال العقود الثلاثة المقبلة، مع توقُّع ارتفاع عدد المكيفات في العالم نحو ثلاثة أضعاف. وفي حين أن الابتكارات التكنولوجية تحقِّق كل يوم إنجازاً جديداً، وعلى الرغم من بعض التحسينات والتدابير المحدودة التي طرأت على صناعة المكيفات، “فإن تكنولوجيتها الأساسية لا تزال تعمل كما كانت، منذ اعتمادها قبل نحو قرن من السنين"، حسبما جاء في تقرير لمعهد ماساشوستس للتكنولوجيا (MIT)، في الأول من سبتمبر 2020م. ولمعالجة هذه المشكلات الخطيرة، لا مفر من إعادة التفكير بجد.</p>
        <p>التكييف حاجة حيويّة. فالتعرّض للحرارة لمدة طويلة ضارٌ بالصحة. ووفقاً لمنظمة الصحة العالميّة يمكن للتعرُّض الطويل للحرارة أيضاً أن يؤدي إلى "إعياء حراري، وضربة شمس، وتورّم في الرجلين، وطفح جلدي على العنق، وتشنج، وصداع، وحساسيّة، والخمول والوهَن. ويمكن للحرارة أن تسبِّب جفافاً خطراً، وأعراضاً حادة في أوعية الدماغ الدمويّة، وتسهم في تكوّن الجلطات".</p>
        <p>وموجات الحر أيضاً من أشد المخاطر الطبيعيّة المميتة. إذ يقدَّر أن بين عامي 1998 و2017م، توفي نحو 166 ألف شخص من موجات الحر. ومات 70 ألفاً من هؤلاء في أوروبا سنة 2003م وحدها. ومن دون أن يصل الخطر إلى الموت، تتسبَّب الحرارة العالية بانخفاض الأداء المعرفي لدى الشبان البالغين في المباني غير المكيّفة. فقد بيّنت دراسة أجرتها "كليّة ت. هـ. تشان" للصحة العامة في جامعة هارفرد، نشرتها "بلوس ميديسين" في 10 يوليو 2018م، أن التلاميذ الذين ينامون في مهاجع غير مكيّفة، يقل أداؤهم عن أولئك الذين ينامون في مهاجع مكيّفة. ولتجنّب مخاطر التعرّض للحرارة، يلتفت الناس إلى استخدام التكييف.</p>
        <p>يتطلّب التكييف كثيراً من الطاقة. فنحو %10 من استهلاك الكهرباء في العالم يُنفَق في تشغيل المكيّفات. وتصل هذه النسبة إلى %50 في المملكة حسب "المركز السعودي لكفاءة الطاقة". أضف إلى ذلك أن معظم البشر في بلدان العالم النامي، لم يقتنوا بعد مكيّفهم الأول، والمشكلة إلى ازدياد. فمعظم البلدان النامية هي من البلدان الأشد حرارة والأكثر اكتظاظاً بالسكان في العالم. وجاء في تقرير لوكالة الطاقة الدوليّة بعنوان "مستقبل التبريد"، ونُشر في مايو 2018م، أن في أجزاء من أمريكا الجنوبيّة وإفريقيا وآسيا والشرق الأوسط، يعيش 2.8 مليار نسمة، ولا يملك وحدات تكييف سوى %8 من المنازل. في حين الدول المتقدِّمة مثل كوريا الجنوبيّة، واليابان، والولايات المتحدة، فإن %89 من المنازل تملك مكيفات، وفي الصين %60 من البيوت تملكها أيضاً.</p>
        <p>ولكن مع تنامي الدخل في بلدان الاقتصاد الصاعد، يتوقّع أن تزداد المنازل التي تقتني مكيّفاً. وبحسب مقالة نُشرت في صحيفة "نيويورك تايمز"، في 15 مايو 2018م، سيرتفع عدد المكيّفات في العالم من نحو 1.6 مليار حالياً، إلى 5.6 مليارات عام 2050م، طبقاً لمعدَّلات النمو الاقتصادي.</p>
        <p>ومع الافتقار إلى الابتكار وتطوير النظم لفرض معايير الجدوى الأعلى، فسيتضاعف استهلاك الطاقة لتشغيل المكيّفات ثلاثة أضعاف. وسينتج من ذلك طلب إضافي للطاقة يساوي مجموع إنتاج الطاقة في الصين حالياً. فمبيعات المكيّفات ترتفع اليوم في البلدان النامية، لكن فعاليّة هذه الوحدات مشكوك فيها. فمثلاً، أوسع وحدات التكييف انتشاراً في بعض الأسواق الآسيوية تتطلّب ضعفي ما تتطلّبه وحدات تكييف أجدى. والمكيّفات التي تباع في اليابان والاتحاد الأوروبي أجدى بنسبة %25 عادة، من تلك التي تباع في الصين والولايات المتحدة.</p>
        <p>وبصرف النظر عن كثير من الطاقة التي يحتاج إليها المكيّف، فإنه يبث مقادير وفيرة من غازات الدفيئة نفسها. وطبقاً لموقع تكييف الهواء (airconditioning.com)، فإن المبرِّدات في معظم المكيّفات مثل مواد مركبات الكربون الكلورية فلورية أو مواد هيدروفلوروولفينات، ومركبات ثاني أكسيد الكربون الهيدروكلورية فلورية، أسوأ بكثير للبيئة من ثاني أكسيد الكربون، لأنها تحتبس من الحرارة مقادير أكبر حين تتسرّب إلى الجو.</p>
        <p>وبالإضافة إلى ظاهرة الدفيئة، فهذه الغازات تسهم أيضاً بالإضرار بطبقة الأوزون. ويمكن لهذه المواد الكيميائية أن تتسرّب خلال عملية التصنيع أو التصليح. ويعرف كل من يملك في منزله مكيّفاً كم تتكرر أعطال هذه الأجهزة. ثم إن المكيف يُرمَى حين يتعطّل نهائياً ولا يعود قابلاً للإصلاح، والمواد المبرِّدة فيه ستتسرّب على الأرجح لتلوث الهواء.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
      </div>
    </div>
  </div>
</div>
<script src="/theme/bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../cheatsheet/cheatsheet.js"></script></body>
</html>
