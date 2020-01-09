<?php

Breadcrumbs::register('admin.currencymanagers.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.currencymanagers.management'), route('admin.currencymanagers.index'));
});

Breadcrumbs::register('admin.currencymanagers.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.currencymanagers.index');
    $breadcrumbs->push(trans('menus.backend.currencymanagers.create'), route('admin.currencymanagers.create'));
});

Breadcrumbs::register('admin.currencymanagers.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.currencymanagers.index');
    $breadcrumbs->push(trans('menus.backend.currencymanagers.edit'), route('admin.currencymanagers.edit', $id));
});
