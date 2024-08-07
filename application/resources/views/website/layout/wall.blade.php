<div class="container-fluid">
    <div class="row">
        <nav class="col-2">
            @include('website.layout.wall-sidebar')
        </nav>
        <main class="col-10">
            <div class="row">
                <div class="col-md-9">
                    <h3 class="pb-4 mb-4 border-bottom">
                        Members Walls
                    </h3>

                    @for ($i = 0; $i <= 30; $i++)
                        <article class="blog-post">
                            <h2 class="display-5 link-body-emphasis mb-1">New feature</h2>
                            <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>
                            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
                                show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
                                demonstration flowing, so be on the lookout for this exact same string of text.</p>
                            <ul>
                                <li>First list item</li>
                                <li>Second list item with a longer description</li>
                                <li>Third list item to close it out</li>
                            </ul>
                            <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly
                                repetitive body text used throughout.</p>
                        </article>
                    @endfor

                    <nav class="blog-pagination" aria-label="Pagination">
                        <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                        <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
                    </nav>
                </div><!-- /.wall -->

                <div class="col-md-3">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-body-tertiary rounded">
                            <h4>About</h4>
                            <p class="mb-0">
                                Customize this section to tell your visitors a little bit about your publication, writers,
                                content, or something else entirely. Totally up to you.
                            </p>
                        </div>
                        <div>
                            <h4>Featured</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                        <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#777" />
                                        </svg>
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">Example blog post title</h6>
                                            <small class="text-body-secondary">January 15, 2024</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                        <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#777" />
                                        </svg>
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">This is another blog post title</h6>
                                            <small class="text-body-secondary">January 14, 2024</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                        <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            <rect width="100%" height="100%" fill="#777" />
                                        </svg>
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                                            <small class="text-body-secondary">January 13, 2024</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.right-bar -->

            </div><!-- /.row -->
        </main>
    </div>
</div>