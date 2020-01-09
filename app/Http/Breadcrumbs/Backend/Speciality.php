<?php

Breadcrumbs::register('admin.specialities.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.specialities.management'), route('admin.specialities.index'));
});

Breadcrumbs::register('admin.specialities.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.specialities.index');
    $breadcrumbs->push(trans('menus.backend.specialities.create'), route('admin.specialities.create'));
});

Breadcrumbs::register('admin.specialities.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.specialities.index');
    $breadcrumbs->push(trans('menus.backend.specialities.edit'), route('admin.specialities.edit', $id));
});
