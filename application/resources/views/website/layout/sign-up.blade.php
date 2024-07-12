<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Vertically centered hero sign-up form</h1>
            <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3 mb-1" name="alias" id="alias" placeholder="alias">
                    <label for="alias">Alias name</label>
                    <small class="text-body-secondary">From 4 to 16 with <i>a-z 0-9 _-.</i> chars.</small>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control rounded-3" name="username" id="username" placeholder="name@example.com">
                    <label for="username">Email address</label>
                    <small class="text-body-secondary">Your daily email to connect.</small>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-3 mb-1" name="password" id="password"  placeholder="Password">
                    <label for="password">Password</label>
                    <small class="text-body-secondary">From 8 to 32 with at least <i>A-Z a-z 0-9 (special)</i> chars.<a role="button" class="link" onclick="viewPass('password')">(view)</a></small>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-3" name="password-retyped" id="password-retyped"  placeholder="Password">
                    <label for="password-retyped">Re Type Password</label>
                    <small class="text-body-secondary">Retype previous password <a role="button" class="link" onclick="viewPass('password-retyped')">(view)</a></small>
                </div>
                <div id="login-status">
                    <div class="alert alert-light fade show alert-dismissible" role="alert">&nbsp;</div>
                </div>
                <small class="text-body-secondary">
                    By clicking Sign up, you agree to the <a href="/terms-of-use.html" target="_blank" class="text-decoration-none">terms of use</a>.
                </small>
                <br><br>
                <button type="submit" id="submit-button" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary">SIGN UP <i class="fas fa-sign-in"></i></button>

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
<script src="/theme/bootstrap/custom/js/support.js?v={{ rand(10000, 100000) }}"></script>
<script src="/theme/bootstrap/custom/js/register.js?v={{ rand(10000, 100000) }}"></script>