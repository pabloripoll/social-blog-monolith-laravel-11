<div class="container">
    <aside class="bd-aside sticky-xl-top text-body-secondary align-self-start mb-3 mb-xl-5 px-2">
        <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">My Account</h2>
        <nav class="small" id="toc">
            <ul class="list-unstyled">
                <li class="my-2">
                    <a
                        href="/member/profile"
                        role="button"
                        class="btn d-inline-flex align-items-center border-0 {{ $layout != 'profile' ? '' : 'text-primary' }}">
                        Profile
                    </a>
                </li>
                <li class="my-2">
                    <a
                        href="/member/settings"
                        role="button"
                        class="btn d-inline-flex align-items-center border-0 {{ $layout != 'settings' ? '' : 'text-primary' }}">
                        Settings
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
</div>