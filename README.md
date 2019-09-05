# Akaunting : SPE Reports

 1. Create module using artisan

> $ php artisan module:make SpeReport
> $ cd modules
> $ rm -rf SpeReport
> $ cd ..
> $ git clone "this module"
> $ php artisan module:install spereport {*company_id*}

 2. Add Permission at Auth
> **name**: Read module SPE Report
> **code**: read-module-spe-report

2. Add Menu

>    App\Http\Middleware\AdminMenu.php
>    *line 211*

     //SPE Module
      if ($user->can(['read-module-spe-report'])) {
          $menu->dropdown("SPE Reports", function ($sub) use($user, $attr) {
              if ($user->can('read-module-spe-report')) {
                  $sub->url('spereport', "Last Inventory Stock", 1, $attr);
              }
          }, 6, [
              'title' => "SPE Reports",
              'icon' => 'fa fa-bar-chart',
          ]);
      }

   
