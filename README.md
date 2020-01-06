# Notes

## Tabs
Bootstrap：Nested tabs are not supported.

借用vuejs的`v-for`和`v-if`可以实现多层嵌套的tabs，不能用`v-show`替代`v-if`。

## v-for with array
```html
//arr=['aaa', 'bbb', ...]
<input v-for="value in arr" v-model="value" />  // not work
<input v-for="(value, index) in arr" v-model="arr[index]" />  // it works
```

## laravel migrate 指定的文件
查看migrations表的字段batch最大值（例如57），把想要migrate的batch手动改为最大值+1(例如58)，然后运行：
```shell
php artisan migrate:rollback
php artisan migrate
```
