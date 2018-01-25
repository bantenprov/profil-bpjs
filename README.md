# Profil BPJS
Profil pengguna BPJS

## Install :

```bash

$ composer require bantenprov/profil-bpjs:dev-master

```

## Edit `config/app.php`

```php

'providers' => [
        
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,   
        //...........
        Bantenprov\ProfilBpjs\ProfilBpjsServiceProvider::class,
        Collective\Html\HtmlServiceProvider::class,        

```

```php

'aliases' => [
                
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        //..........
        'View' => Illuminate\Support\Facades\View::class,
        'Form' => Collective\Html\FormFacade::class,
        'Html' => Collective\Html\HtmlFacade::class,

```
