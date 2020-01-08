# FAQ

## 数据库表字段注释写在哪里？
1. mysql字段
1. miration文件
1. docs文档

## PHP7.4出现问题
各首页均报错：
> Notice: Trying to access array offset on value of type null in Route... (which is being imported from ".../routing_....yml").

原因是[PHP7.4 Backward Incompatible Changes](https://www.php.net/manual/de/migration74.incompatible.php#migration74.incompatible.core.non-array-access):
> **Array-style access of non-arrays**
>
>Trying to use values of type null, bool, int, float or resource as an array (such as $null["key"]) will now generate a notice.

## composer管理的库
[PHPExcel](https://github.com/PHPOffice/PHPExcel)：
> The project has not be maintained for years and must not be used anymore. **All users must migrate** to its direct successor [PhpSpreadsheet](https://github.com/PHPOffice/PhpSpreadsheet), or another alternative.

[symfony/symfony](https://packagist.org/packages/symfony/symfony)：

最新版本5.1， 安装版本2.8

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