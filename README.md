# Notes

## Tabs
Bootstrap：Nested tabs are not supported.

用vuejs的`v-for`和`v-if`可以嵌套多层的tabs，`v-if`不能用`v-show`替代。

## v-for with array
```html
//arr=['aaa', 'bbb', ...]
<input v-for="value in arr" v-model="value" />  // not work
<input v-for="(value, index) in arr" v-model="arr[index]" />  // it works
```
## Reset VueJS data properties to initial values
```js
Object.assign(this.$data, this.$options.data.apply(this));
```

## laravel migrate 指定的文件
查看migrations表的字段batch最大值（例如57），把想要migrate的batch手动改为最大值+1(例如58)，然后运行：
```shell
php artisan migrate:rollback
php artisan migrate
```

## twig里面字符串拼接
```twig
 "Hello " ~ name ~ "!" 
 "foo #{bar} baz" 
 "foo #{1 + 2} baz" 
```

