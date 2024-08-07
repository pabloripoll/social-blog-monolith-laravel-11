<div class="container col-xl-10 col-xxl-8 px-4">
    <div class="row align-items-center g-lg-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Vertically centered hero sign-up form</h1>
            <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control rounded-3" name="username" id="username" placeholder="name@example.com">
                    <label for="username">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-3" name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <div id="login-status">
                    <div class="alert alert-light fade show alert-dismissible" role="alert">&nbsp;</div>
                </div>
                <button type="submit" id="submit-button" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary">SIGN IN <i class="fas fa-sign-in"></i></button>

                <hr class="my-4">

                <h2 class="fs-5 fw-bold mb-3">Or use your social account</h2>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" disabled>
                    <svg class="bi me-1" width="16" height="16">
                        <use xlink:href="#github"></use>
                    </svg>
                    Sign up with Google
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" disabled>
                    <svg class="bi me-1" width="16" height="16">
                        <use xlink:href="#twitter"></use>
                    </svg>
                    Sign up with Twitter
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" disabled>
                    <svg class="bi me-1" width="16" height="16">
                        <use xlink:href="#facebook"></use>
                    </svg>
                    Sign up with Facebook
                </button>
            </form>
        </div>
    </div>
</div>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Not a member yet?</h1>
            <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="/sign-up.html" class="btn btn-primary btn-lg px-4 me-md-2">Sign up</a>
            </div>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <img src="/theme/bootstrap/template/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
    </div>
</div>

<script src="/theme/bootstrap/custom/js/support.js?v={{ rand(10000, 100000) }}"></script>
<script src="/theme/bootstrap/custom/js/login.js?v={{ rand(10000, 100000) }}"></script>