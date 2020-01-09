<?php

Breadcrumbs::register('admin.smtps.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.smtps.management'), route('admin.smtps.index'));
});

Breadcrumbs::register('admin.smtps.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.smtps.index');
    $breadcrumbs->push(trans('menus.backend.smtps.create'), route('admin.smtps.create'));
});

Breadcrumbs::register('admin.smtps.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.smtps.index');
    $breadcrumbs->push(trans('menus.backend.smtps.edit'), route('admin.smtps.edit', $id));
});
