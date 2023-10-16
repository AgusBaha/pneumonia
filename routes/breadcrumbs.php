<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\pneumonia\BasisKasus;
use App\Models\pneumonia\Gejala;
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

// Basis Kasus
Breadcrumbs::for('basiskasus.index', function ($trail) {
    // $trail->push('Dashboard', route('dashboard')); // Example: Add a 'Home' breadcrumb
    $trail->push('Basis Kasus', route('basiskasus.index')); // Add a 'Gejala' breadcrumb
});
Breadcrumbs::for('basiskasus.create', function ($trail) {
    $trail->push('Basis Kasus', route('basiskasus.index')); // Example: Add a 'Home' breadcrumb
    $trail->push('Add New Basis Kasus', route('basiskasus.create')); // Add a 'Gejala' breadcrumb
});

Breadcrumbs::for('basiskasus.edit', function ($trail) {
    // Mengambil ID BasisKasus dari parameter rute
    $basiskasuId = app('request')->route()->parameter('basiskasu');

    // Pastikan $basiskasuId memiliki nilai sebelum menggunakannya
    if ($basiskasuId) {
        $basiskasu = BasisKasus::find($basiskasuId);

        if ($basiskasu) {
            $trail->push('Basis Kasus', route('basiskasus.index'));
            $trail->push('Edit Basis Kasus (' . $basiskasu->id . ')', route('basiskasus.edit', $basiskasuId));
        }
    }
});
