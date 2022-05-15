<h1>
Hello World!
</h1>

1.
コントローラの作成
コマンド
```
php artisan make:controller SandBoxController --resource
```
雛形をapp/Http/Controllers/にひな形を作ってくれる。

routing
```
use App\Http\Controllers\SandBoxController;
Route::get('/sandbox', [SandBoxController::class, 'index']);
```
※出なければrouteのキャッシュを削除。


2.Model作成
```
php artisan make:model SandBox --migration
```

execute migration.
```
php artisan migrate
```