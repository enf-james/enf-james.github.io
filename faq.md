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
以[PHPExcel](https://github.com/PHPOffice/PHPExcel)为例：
> The project has not be maintained for years and must not be used anymore. **All users must migrate** to its direct successor [PhpSpreadsheet](https://github.com/PHPOffice/PhpSpreadsheet), or another alternative.

