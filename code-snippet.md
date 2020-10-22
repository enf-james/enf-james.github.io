# input()改写测试

```php
// RouteAdmin::ip() 输出接收到的内容

var_export(input_all());

var_export(input('cell_type.CIS'));

```

```sh
// CURL发送请求

curl "http://admin.enf.dd/ip?id=asa"

curl -X POST -d "a=aaa&b=bbb" "http://admin.enf.dd/ip?id=asa"

curl -X POST -d '{"a":"AAA","b":"BBB"}' -H "Content-Type:application/json" "http://admin.enf.dd/ip?id=asa"

curl -X POST -d @Documents/demo.json -H "Content-Type:application/json" "http://admin.enf.dd/ip?id=asa"

```
