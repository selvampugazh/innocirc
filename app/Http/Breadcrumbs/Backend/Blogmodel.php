<?php

Breadcrumbs::register('admin.blogmodels.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.blogmodels.management'), route('admin.blogmodels.index'));
});

Breadcrumbs::register('admin.blogmodels.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.blogmodels.index');
    $breadcrumbs->push(trans('menus.backend.blogmodels.create'), route('admin.blogmodels.create'));
});

Breadcrumbs::register('admin.blogmodels.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.blogmodels.index');
    $breadcrumbs->push(trans('menus.backend.blogmodels.edit'), route('admin.blogmodels.edit', $id));
});
