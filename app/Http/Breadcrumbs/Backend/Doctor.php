<?php

Breadcrumbs::register('admin.doctors.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.doctors.management'), route('admin.doctors.index'));
});

Breadcrumbs::register('admin.doctors.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.doctors.index');
    $breadcrumbs->push(trans('menus.backend.doctors.create'), route('admin.doctors.create'));
});

Breadcrumbs::register('admin.doctors.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.doctors.index');
    $breadcrumbs->push(trans('menus.backend.doctors.edit'), route('admin.doctors.edit', $id));
});
