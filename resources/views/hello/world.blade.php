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

3. mass assignable の設定
```
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['message'];
```
モデルの作成時に、fillableを設定する。
これが無いと値のセットができなくなったりする。
※DBにあるカラムと同じように設定する。

4. form のcsrf
```
<form>
    {{ csrf_field() }}
</form>
```
csrfトークンが入ってないとフォーム送信が弾かれるので、
formを作成する時は必須。
※formにこれがないと419で弾かれる。


5. auth
```
composer require laravel/ui
php artisan ui vue --auth
// vuejs とかのインストール
npm install
// vuejs とかのコンパイル
npm run dev
```