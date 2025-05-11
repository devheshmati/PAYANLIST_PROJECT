مدیریت وظایف حرفه‌ای با Laravel

این پروژه یک اپلیکیشن مدیریت وظایف (Task Manager) حرفه‌ای است که با استفاده از فریم‌ورک Laravel توسعه یافته و امکاناتی فراتر از یک لیست ساده To-Do ارائه می‌دهد.
ویژگی‌ها

    ایجاد، ویرایش و حذف وظایف

    دسته‌بندی وظایف بر اساس پروژه‌ها یا برچسب‌ها

    تعیین اولویت و وضعیت برای هر وظیفه

    رابط کاربری مدرن با استفاده از Tailwind CSS و Vite

    احراز هویت کاربران با استفاده از Laravel Breeze

    پشتیبانی از چند کاربر و مدیریت وظایف به‌صورت تیمی

پیش‌نیازها

    PHP 8.1 یا بالاتر

    Composer

    Node.js و npm

    MySQL یا PostgreSQL

نصب و راه‌اندازی

    مخزن را کلون کنید:

    git clone https://github.com/devheshmati/laravel_project_01.git
    cd laravel_project_01

    وابستگی‌های PHP را نصب کنید:

    composer install

    وابستگی‌های JavaScript را نصب کنید:

    npm install && npm run dev

    فایل تنظیمات محیط را کپی و پیکربندی کنید:

    cp .env.example .env
    php artisan key:generate

    پایگاه داده را ایجاد و مهاجرت‌ها را اجرا کنید:

    php artisan migrate

    سرور توسعه را اجرا کنید:

    php artisan serve

مشارکت

اگر علاقه‌مند به مشارکت در توسعه این پروژه هستید، لطفاً یک Fork از مخزن ایجاد کرده، تغییرات خود را اعمال کرده و یک Pull Request ارسال کنید.
مجوز

این پروژه تحت مجوز MIT منتشر شده است.
