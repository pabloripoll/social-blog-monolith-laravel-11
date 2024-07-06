<?php

namespace App\Http\Router;

class Bootstrap
{
    protected function pages()
    {
        return [
            'album',
            'album-rtl',
            'blog',
            'blog-rtl',
            'carousel',
            'carousel-rtl',
            'cheatsheet',
            'cheatsheet-rtl',
            'checkout',
            'checkout-rtl',
            'cover',
            'dashboard',
            'dashboard-rtl',
            'features',
            'footers',
            'grid',
            'headers',
            'heroes',
            'jumbotron',
            'jumbotrons',
            'list-groups',
            'masonry',
            'modals',
            'navbar-bottom',
            'navbar-fixed',
            'navbars',
            'navbars-offcanvas',
            'navbar-static',
            'offcanvas',
            'offcanvas-navbar',
            'pricing',
            'product',
            'sidebars',
            'sign-in',
            'starter-template',
            'sticky-footer',
            'sticky-footer-navbar'
        ];
    }

    protected function elements()
    {
        return [
            'badges',
            'breadcrumbs',
            'buttons',
            'carousel',
            'carousel-rtl',
            'cheatsheet',
            'cheatsheet-rtl',
            'checkout',
            'checkout-rtl',
            'cover',
            'dropdowns',
            'features',
            'footers',
            'grid',
            'headers',
            'heroes',
            'jumbotron',
            'jumbotrons',
            'list-groups',
            'masonry',
            'modals',
            'navbar-bottom',
            'navbar-fixed',
            'navbars',
            'navbars-offcanvas',
            'navbar-static',
            'offcanvas',
            'offcanvas-navbar',
            'pricing',
            'product',
            'sidebars',
            'sign-in',
            'starter-template',
            'sticky-footer',
            'sticky-footer-navbar'
        ];
    }

    public function indexContent()
    {
        return view('bootstrap.index', [
            'pages' => $this->pages(),
            'elements' => $this->elements()
        ]);
    }

    public function exampleContent(...$path)
    {
        $default = 'blog';

        $example = isset($path[0]) ? $path[0] : $default;

        try {

            return view('bootstrap.'.$example);

        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

}
