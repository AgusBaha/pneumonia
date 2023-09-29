<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Gejala
Breadcrumbs::for('gejala.index', function ($trail) {
    // $trail->push('Dashboard', route('dashboard')); // Example: Add a 'Home' breadcrumb
    $trail->push('Gejala', route('gejala.index')); // Add a 'Gejala' breadcrumb
});

Breadcrumbs::for('gejala.create', function ($trail) {
    $trail->push('Gejala', route('gejala.index')); // Example: Add a 'Home' breadcrumb
    $trail->push('Add New Gejala', route('gejala.create')); // Add a 'Gejala' breadcrumb
});

Breadcrumbs::for('gejala.edit', function ($trail) {
    // Menggunakan variabel $gejala yang telah disediakan oleh metode edit
    $gejala = app('request')->route()->parameter('gejala'); // Mengambil $gejala dari parameter rute

    // Pastikan $gejala memiliki nilai sebelum menggunakannya
    if ($gejala) {
        $trail->push('Gejala', route('gejala.index'));
        $trail->push('Edit Gejala (' . $gejala->id . ')', route('gejala.edit', $gejala));
    }
});

// Profile
Breadcrumbs::for('profile.edit', function ($trail) {
    // $trail->push('Dashboard', route('dashboard')); // Example: Add a 'Home' breadcrumb
    $trail->push('Profile', route('profile.edit')); // Add a 'Gejala' breadcrumb
});
