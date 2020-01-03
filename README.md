# VueJS

## Tabs
Bootstrap：Nested tabs are not supported.

借用vuejs的`v-for`和`v-if`可以实现多层嵌套的tabs，不能用`v-show`替代`v-if`。

## v-for with array
```html
//arr=['aaa', 'bbb', ...]
<input v-for="value in arr" v-model="value" />  // not work
<input v-for="(value, index) in arr" v-model="arr[index]" />  // it works
