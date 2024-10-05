<?php

namespace Test\TestPackage;

use Illuminate\Support\ServiceProvider;

class TestPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // تحميل الملفات الخاصة بالمسارات
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    public function register()
    {
        // يمكنك هنا تسجيل أي شيء تريده للحزمة
    }
}
