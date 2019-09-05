# Akaunting : SPE Reports

 1. Create module using artisan

> $ php artisan module:make SpeReport<br>
> $ cd modules<br>
> $ rm -rf SpeReport<br> 
> $ cd ..<br>
> $ git clone "this module"<br>
> $ php artisan module:install spereport {*company_id*}

 2. Add Permission at Auth
> **name**: Read module SPE Report<br>
> **code**: read-module-spe-report<br>

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

   
