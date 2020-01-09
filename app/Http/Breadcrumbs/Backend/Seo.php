<?php

Breadcrumbs::register('admin.seos.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.seos.management'), route('admin.seos.index'));
});

Breadcrumbs::register('admin.seos.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.seos.index');
    $breadcrumbs->push(trans('menus.backend.seos.create'), route('admin.seos.create'));
});

Breadcrumbs::register('admin.seos.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.seos.index');
    $breadcrumbs->push(trans('menus.backend.seos.edit'), route('admin.seos.edit', $id));
});
