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
## vee-validate

`data-vv-name` the name or data-vv-name attribute contains a string that is used as input to generate error messages

`data-vv-as`  it outputs an error using the fields name or data-vv-as


## wax
`npm run watch` 比 `npm run dev` 快速。

切换分支，要重新运行`npm run watch`

## vue-multiselect
文档显示`<template slot="option" slot-scope="props"></template>`, 但使用的vue版本不一样，会出错。

> Note that if you're using Vue.js ≤v2.4.x, then you may see this error if you are trying to use slot-scope

查看vue版本：F12，`Vue.version`

slot、scope、v-slot、slot-scope, [文档](https://vuejs.org/v2/api/#slot-deprecated)