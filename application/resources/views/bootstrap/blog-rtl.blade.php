<!doctype html>
<html lang="ar" dir="rtl" data-bs-theme="auto">

<head>
    <script src="/theme/bootstrap/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>قالب المدونة · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog-rtl/">



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
    <link href="https://fonts.googleapis.com/css?family=Amiri:wght@400;700&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/theme/bootstrap/template/blog.rtl.css" rel="stylesheet">
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
        </symbol>
        <symbol id="cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
        <symbol id="chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </symbol>
    </svg>

    <div class="container">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#">الإشتراك في النشرة البريدية</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">كبير</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="بحث">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                            <title>بحث</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">إنشاء حساب</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-3 border-bottom">
            <nav class="nav nav-underline justify-content-between">
                <a class="nav-item nav-link link-body-emphasis active" href="#">العالم</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">الولايات المتحدة</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">التقنية</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">التصميم</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">الحضارة</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">المال والأعمال</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">السياسة</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">الرأي العام</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">العلوم</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">الصحة</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">الموضة</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">السفر</a>
            </nav>
        </div>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-6 px-0">
                <h1 class="display-4 fst-italic">عنوان تدوينة مميزة أطول</h1>
                <p class="lead my-3">عدة أسطر نصية متعددة تعبر عن التدوية، وذلك لإعلام القراء الجدد بسرعة وكفاءة حول أكثر الأشياء إثارة للاهتمام في محتويات هذه التدوينة.</p>
                <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">أكمل القراءة...</a></p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">العالم</strong>
                        <h3 class="mb-0">مشاركة مميزة</h3>
                        <div class="mb-1 text-body-secondary">نوفمبر 12</div>
                        <p class="card-text mb-auto">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            أكمل القراءة
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">التصميم</strong>
                        <h3 class="mb-0">عنوان الوظيفة</h3>
                        <div class="mb-1 text-body-secondary">نوفمبر 11</div>
                        <p class="mb-auto">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            أكمل القراءة
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    من Firehose
                </h3>

                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">مثال على تدوينة</h2>
                    <p class="blog-post-meta">1 يناير 2021 بواسطة <a href="#"> Mark </a></p>

                    <p>تعرض مشاركة المدونة هذه بضعة أنواع مختلفة من المحتوى الذي يتم دعمه وتصميمه باستخدام Bootstrap. النصوص الأساسية، الصور، والأكواد مدعومة بشكل كامل.</p>
                    <hr>
                    <p>يشكِّل تأمين الغذاء في المستقبل قضية تؤرِّق حكومات العالَم والعلماء على حدٍّ سواء. فخلال القرن العشرين ازداد عدد سكان الأرض أربعة أضعاف، وتشير التقديرات إلى أن العدد سوف يصل إلى عشرة مليارات إنسان بحلول عام 2050م. وسوف تمثل هذه الزيادة الهائلة تحدياً كبيراً وضغطاً متصاعداً على قدرة الإنتاج الزراعي. الأمر الذي كان ولا بد من أن يدفع إلى تطوير تقنيات مبتكرة في تصنيع الغذاء غير الزراعة، منها تقنية مستقبلية تقوم على تصنيع الغذاء من الهواء.</p>
                    <blockquote class="blockquote">
                        <p>تشغل الزراعة مساحات كبيرة من اليابسة، وتستهلك كميات هائلة من المياه، كما أن إنتاج الغذاء بواسطة الزراعة يسهم بنسبة عالية من انبعاثات غازات الاحتباس الحراري العالمية</p>
                    </blockquote>
                    <p>تشغل الزراعة مساحات كبيرة من اليابسة، وتستهلك كميات هائلة من المياه. كما أن إنتاج الغذاء بواسطة الزراعة يسهم بنسبة عالية من انبعاثات غازات الاحتباس الحراري العالمية، وللمقارنة فإن هذه النسبة من الانبعاثات هي أكبر مما ينتجه قطاع النقل بكل ما فيه من سيارات وشاحنات وطائرات وقطارات.</p>
                    <h2>عنوان</h2>
                    <p>تحصل النباتات على غذائها بواسطة عملية تسمى البناء الضوئي، حيث تقوم النباتات بتحويل ضوء الشمس والماء وثاني أكسيد الكربون الموجود في الغلاف الجوي إلى غذاء وتطلق الأكسجين كمنتج ثانوي لهذا التفاعل الكيميائي. وتحدث هذه العملية في "البلاستيدات الخضراء". فالنباتات تستفيد من طاقة ضوء الشمس في تقسيم الماء إلى هيدروجين وأكسجين، وتحدث تفاعلات كيميائية أخرى ينتج عنها سكر الجلكوز الذي تستخدمه كمصدر للغذاء وينطلق الأكسجين من النباتات إلى الغلاف الجوي. وهذا يعني أن النباتات تحوِّل ثاني أكسيد الكربون إلى غذاء من خلال تفاعلات كيميائية معقَّدة. ويُعد البناء الضوئي من أهم التفاعلات الكيميائية على كوكب الأرض، فقد ساعد في الماضي على تطوُّر كوكبنا وظهور الحياة عليه. فالنباتات تستخدم ثاني أكسيد الكربون لصنع غذائها، وتطلق الأكسجين لتساعد الكائنات الأخرى على التنفس!</p>
                    <h3>عنوان فرعي</h3>
                    <p>ألهمت هذه العملية علماء وكالة الفضاء الأمريكية (ناسا) خلال الستينيات من القرن الماضي، لبحث فكرة إطعام روَّاد الفضاء في مهمات الفضاء الطويلة مثل السفر إلى المريخ. وكانت واحدة من الأفكار الواعدة تصنيع الغذاء عن طريق ثاني أكسيد الكربون الذي ينتجه روَّاد الفضاء، لكن ليس بواسطة النباتات بل عن طريق ميكروبات صغيرة وحيدة الخلية قادرة على حصد ثاني أكسيد الكربون لإنتاج كميات وفيرة من البروتين المغذي على شكل مسحوق عديم النكهة، كما يمكن استخدام المادة في صنع الأطعمة المألوفة لدينا.</p>
                    <pre><code>Example code block</code></pre>
                    <p>وخلافاً لما هو الحال في عالم النبات، فإن هذه الميكروبات لا تستخدم الضوء كما يحدث في عملية البناء الضوئي التي تستخدمها النباتات للحصول على الغذاء، أي لأنها قادرة على النمو في الظلام. تسمى هذه البكتريا "هيدروجينوتروف" (Hydrogenotrophs)، وهي تستخدم الهيدروجين كوقود لإنتاج الغذاء من ثاني أكسيد الكربون. فعندما يُنتج روَّاد الفضاء ثاني أكسيد الكربون، تلتقطه الميكروبات، ويتحوَّل مع مدخلات أخرى إلى غذاء غني بالكربون. وبهذه الطريقة سوف نحصل على دورة كربون مغلقة الحلقة.</p>
                    <h3>عنوان فرعي</h3>
                    <p>بعد مرور أكثر من نصف قرن على أبحاث ناسا، تعمل حالياً عدة شركات في قطاع البيولوجيا التركيبية من ضمنها إير بروتين (Air Protein) وسولار فودز (Solar Foods) على تطوير جيل جديد من المنتجات الغذائية المستدامة، من دون وجود بصمة كربونية. ولن تقتصر هذه المنتجات الغذائية على روَّاد الفضاء فحسب، بل سوف تمتد لتشمل جميع سكان الأرض، وسوف تُنتَج في فترة زمنية قصيرة، بدلاً من الشهور، ومن دون الاعتماد على الأراضي الزراعية. وهذا يعني الحصول على منتجات غذائية بشكل سريع جداً. كما سيصبح من الممكن تصنيع الغذاء بطريقة عمودية من خلال هذه الميكروبات، بدلاً من الطريقة الأفقية التقليدية الشبيهة بتقنية الزراعة العمودية الحديثة. وهذا يعني توفير منتجات غذائية أكبر من المساحة نفسها.</p>
                    <p>يتكوَّن الغذاء البشري من ثلاثة أنواع رئيسة، هي:</p>
                    <ul>
                        <li>البروتينات</li>
                        <li>الكربوهيدرات</li>
                        <li>الدهون</li>
                    </ul>
                    <p>وتتكوَّن البروتينات من الأحماض الأمينية، وهي مجموعة من المركبات العضوية يبلغ عددها في جسم الإنسان عشرين حمضاً أمينياً، من بينها تسعة أساسية يحصل عليها الجسم من الغذاء. وتتكوَّن الأحماض الأمينية بشكل أساس من:</p>
                    <ol>
                        <li>الكربون</li>
                        <li>الهيدروجين</li>
                        <li>الأكسجين</li>
                        <li>النيتروجين</li>
                    </ol>
                    <p>ومن الملاحظ أن النيتروجين يشكِّل نسبة %78 من الهواء، كما أن الهيدروجين نحصل عليه من خلال التحليل الكهربائي للماء، ومن الممكن نظرياً سحب الكربون من الهواء لتشكيل هذه الأحماض، ذلك أن الكربون هو العمود الفقري للأحماض الأمينية، كما أن الحياة على كوكب الأرض قائمة على الكربون لقدرته على تكوين سلاسل كربونية طويلة، وهذا ما تفعله الميكروبات بتصنيع أحماض أمينية من ثاني أكسيد الكربون من خلال مجموعة من التفاعلات الكيميائية المعقَّدة. وإضافة إلى صنع وجبات غنية بالبروتين، فهذه الميكروبات تنتج منتجات أخرى مثل الزيوت التي لها عديد من الاستخدامات.</p>
                </article>

                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">تدوينة أخرى</h2>
                    <p class="blog-post-meta">23 ديسمبر 2020 بواسطة <a href="#">Jacob</a></p>

                    <p>في الوقت الحالي، تدرس عدَّة شركات هذه الميكروبات بشكل أعمق، وتستزرعها من أجل الحصول على الغذاء. ففي عام 2019م، أعلن باحثون في شركة (Air Protein) الأمريكية نجاحهم في تحويل ثاني أكسيد الكربون الموجود في الهواء إلى لحوم صناعية مصنوعة من البروتين، التي لا تتطلَّب أي أرض زراعية، بل هي معتمدة بشكل أساسي على الهواء.</p>
                    <blockquote>
                        <p>تم تصنيع اللحوم بأنواع عديدة</p>
                    </blockquote>
                    <p>إذ استخدم هؤلاء الباحثون الهواء والطاقة المتجدِّدة كمدخلات في عملية مشابهة للتخمير، لإنتاج بروتين يحتوي على الأحماض الأمينية التسعة الأساسية وغني بالفيتامينات والمعادن، كما أنه خالٍ من الهرمونات والمضادات الحيوية والمبيدات الحشرية ومبيدات الأعشاب.</p>
                    <p> وتم تصنيع اللحوم بأنواع عديدة بما فيها الدواجن والأبقار والمأكولات البحرية، من دون حصول انبعاثات كربونية، على عكس تربية الأبقار التي تسهم في انبعاث غاز الميثان أحد غازات الاحتباس الحراري.</p>
                </article>

                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">ميزة جديدة</h2>
                    <p class="blog-post-meta">14 ديسمبر 2020 بواسطة <a href="#">Jacob</a></p>

                    <p>كما أن الشركة الفنلندية (Solar Foods) طوَّرت تقنية لإنتاج البروتين من الهواء، حيث تبدأ العملية بتقسيم الماء إلى مكوناته الهيدروجين والأكسجين عن طريق الكهرباء. فالهيدروجين يوفِّر الطاقة للبكتريا لتحويل ثاني أكسيد الكربون والنيتروجين الموجودين في الهواء إلى مادة عضوية غنية بالبروتين بشكل أكفأ من نمو النباتات باستخدام البناء الضوئي. وهذا البروتين يشبه دقيق القمح وقد أطلق عليه اسم "سولين" (Solein).</p>
                    <p>وتقوم الشركة حالياً بجمع البيانات حول المنتج الغذائي لتقديمه إلى الاتحاد الأوروبي بهدف الحصول على ترخيص غذائي، كما أنها تخطط لبدء الإنتاج التجاري في العام المقبل 2021م. وقد أوضحت الشركة أنها مهتمة بإنتاج أطعمة صديقة للبيئة من خلال استخدام المواد الأساسية: الكهرباء وثاني أكسيد الكربون، وهذه الأطعمة سوف تجنبنا الأثر السلبي البيئي للزراعة التقليدية الذي يشمل كل شيء من استخدام الأرض والمياه إلى الانبعاثات الناتجة من تسميد المحاصيل أو تربية الحيوانات.</p>
                    <p>وعلى هذا، فإن البروتينات المشتقة من الميكروبات سوف:</p>
                    <ul>
                        <li>توفر حلاً ممكناً في ظل زيادة الطلب العالمي المستقبلي على الغذاء</li>
                        <li>تتوسع مصانع الغذاء في المستقبل لتكون أكفأ وأكثر استدامة</li>
                        <li>تصبح قادرة على توفير الغذاء لروَّاد الفضاء في سفرهم إلى المريخ وجميع سكان كوكب الأرض في عام 2050م</li>
                    </ul>
                    <p>فتخيّل أن الميكروبات ستكون مصانع المستقبل، وأن غذاء المستقبل سيكون مصنوعاً من الهواء! وأن عام 2050م سيكون مختلفاً تماماً عن عالمنا اليوم. فهو عالم من دون زراعة ولا تربية حيوانات من أجل الغذاء! قد يبدو ذلك خيالياً لكنه ليس مستحيلاً!</p>
                </article>

                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary rounded-pill" href="#">تدوينات أقدم</a>
                    <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">تدوينات أحدث</a>
                </nav>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                        <h4 class="fst-italic">حول</h4>
                        <p class="mb-0">أقبلت، فأقبلت معك الحياة بجميع صنوفها وألوانها: فالنبات ينبت، والأشجار تورق وتزهر، والهرة تموء، والقمري يسجع، والغنم يثغو، والبقر يخور، وكل أليف يدعو أليفه. كل شيء يشعر بالحياة وينسي هموم الحياة، ولا يذكر إلا سعادة الحياة، فإن كان الزمان جسدا فأنت روحه، وإن كان عمرا فأنت شبابه.</p>
                    </div>

                    <div>
                        <h4 class="fst-italic">المشاركات الاخيرة</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">مثال على عنوان منشور المدونة</h6>
                                        <small class="text-body-secondary">15 يناير 2024</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">هذا عنوان آخر للمدونة</h6>
                                        <small class="text-body-secondary">14 يناير 2024</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">أطول عنوان منشور للمدونة: يحتوي هذا الخط على عدة أسطر!</h6>
                                        <small class="text-body-secondary">13 يناير 2024</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">الأرشيف</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">مارس 2021</a></li>
                            <li><a href="#">شباط 2021</a></li>
                            <li><a href="#">يناير 2021</a></li>
                            <li><a href="#">ديسمبر 2020</a></li>
                            <li><a href="#">نوفمبر 2020</a></li>
                            <li><a href="#">أكتوبر 2020</a></li>
                            <li><a href="#">سبتمبر 2020</a></li>
                            <li><a href="#">اغسطس 2020</a></li>
                            <li><a href="#">يوليو 2020</a></li>
                            <li><a href="#">يونيو 2020</a></li>
                            <li><a href="#">مايو 2020</a></li>
                            <li><a href="#">ابريل 2020</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">في مكان آخر</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="py-5 text-center text-body-secondary bg-body-tertiary">
        <p>تم تصميم نموذج المدونة لـ <a href="https://getbootstrap.com/">Bootstrap</a> بواسطة <a href="https://twitter.com/mdo"><bdi lang="en" dir="ltr">@mdo</bdi></a>.</p>
        <p class="mb-0">
            <a href="#">عد إلى الأعلى</a>
        </p>
    </footer>
    <script src="/theme/bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>