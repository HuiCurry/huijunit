<h1 align="center"> huijunit </h1>

<p align="center"> 这是一个基于laravel的单元测试组件.</p>


## 安装方式

```shell
$ composer require huicurry/huijunit
```

## 对于框架的要求

laravel >=  5.1 & php > 7.1.3

## 配置
5.5手动配置laravel对于huijunit服务放到config/app.php中

解释路由
```php
 <?php
    Route::get('/', 'JunitController@index');
    Route::post('/', 'JunitController@store')->name('junit.store');
 ?>
```