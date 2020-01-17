# FAQ

## 数据库表字段注释写在哪里？
1. mysql字段
1. miration文件
1. docs文档

我觉得应该把文档独立出来，代码里只能写少量注释，文档集中起来好查找，也可以附上demo, 还有不只是IT看的文档。

## PHP7.4出现问题
首页报错：
> Notice: Trying to access array offset on value of type null in Route... (which is being imported from ".../routing_....yml").

原因是[PHP7.4 Backward Incompatible Changes](https://www.php.net/manual/de/migration74.incompatible.php#migration74.incompatible.core.non-array-access):
> **Array-style access of non-arrays**
>
>Trying to use values of type null, bool, int, float or resource as an array (such as $null["key"]) will now generate a notice.

## composer管理的库
[PHPExcel](https://github.com/PHPOffice/PHPExcel)：
> The project has not be maintained for years and must not be used anymore. **All users must migrate** to its direct successor [PhpSpreadsheet](https://github.com/PHPOffice/PhpSpreadsheet), or another alternative.

[symfony/symfony](https://packagist.org/packages/symfony/symfony)：

最新版本5.1，已安装版本2.8

## .gitignore
把vendor添加到.gitignore。
```shell
composer install
```
>The [install](https://getcomposer.org/doc/03-cli.md#install-i) command reads the composer.json file from the current directory, resolves the dependencies, and installs them into vendor.
>
>If there is a composer.lock file in the current directory, it will use the exact versions from there instead of resolving them. This ensures that everyone using the library will get the same versions of the dependencies.
>
>If there is no composer.lock file, Composer will create one after dependency resolution.


## laravel model
```php
$model->$field = $value;

$model->attributes[$field] = $value;

$model->setAttribute($field, $value);

$model->fill([$field => $value]);

// 这4种方法有什么不一样？会不会调用Mutator方法: $model->setFooAttribute()
```

## laravel model
Model::where(...)->get()

怎样让查询结果不带appends和relation? 又要能用到从BaseModel继承的方法。

## 404页面
不要自动跳转

## 图片上传
图片预览：不需要上传到服务器后返回url再显示，有js插件（例如：[jQuery File Upload](https://blueimp.github.io/jQuery-File-Upload/)）可以做到不上传的预览。

建表存上传文件的信息，图片尺寸：有助于页面根据图片大小显示；文件hash: 避免重复上传文件；存图片引用：如果引用为0则可以删除文件；文件类型：页面显示相应icon小图标。

## vue
不要data: res.data
缺点：有些变量只在js里有用，服务端不需要。
      一些问题导致res.data结构不对，页面显示loading。

## twig 和 vue
select options内容不变的话，用twig的变量和for循环，不用vue的。

## twig
macro不要用过多的if...else..., 保持简单，增加几个macro。

例如select用一个macro, input用一个macro。