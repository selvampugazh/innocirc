<?php

Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push('Dashboard', route('admin.dashboard'));
});

require __DIR__.'/Search.php';
require __DIR__.'/Access/User.php';
require __DIR__.'/Access/Role.php';
require __DIR__.'/Access/Permission.php';
require __DIR__.'/Page.php';
require __DIR__.'/Email_Template.php';
require __DIR__.'/Setting.php';
require __DIR__.'/Blog_Category.php';
require __DIR__.'/Blog_Tag.php';
require __DIR__.'/Blog_Management.php';
require __DIR__.'/Faqs.php';
require __DIR__.'/Menu.php';
require __DIR__.'/LogViewer.php';

require __DIR__.'/Language.php';
require __DIR__.'/Smtp.php';
require __DIR__.'/Currencymanager.php';
require __DIR__.'/Payment.php';
require __DIR__.'/Seo.php';
require __DIR__.'/Blogmodel.php';
require __DIR__.'/Coupon.php';
require __DIR__.'/Doctor.php';
require __DIR__.'/Speciality.php';