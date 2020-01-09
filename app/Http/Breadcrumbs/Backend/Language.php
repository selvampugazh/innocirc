<?php

Breadcrumbs::register('admin.languages.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.languages.management'), route('admin.languages.index'));
});

Breadcrumbs::register('admin.languages.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.languages.index');
    $breadcrumbs->push(trans('menus.backend.languages.create'), route('admin.languages.create'));
});

Breadcrumbs::register('admin.languages.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.languages.index');
    $breadcrumbs->push(trans('menus.backend.languages.edit'), route('admin.languages.edit', $id));
});
