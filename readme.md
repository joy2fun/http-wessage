# http-wessage

## environment variables

```sh
APP_ID=
APP_SECRET=
APP_TOKEN=
TEMPLATE_ID=默认模板
TOUSER=默认接收用户
```

## 发送消息

```
POST /api/template-message
Content-Type: application/json

{
    "data": {
        "msg": "test"
    },
    "touser": "可选，默认使用环境变量 TOUSER",
    "template_id": "可选，默认使用环境变量 TEMPLATE_ID"
}
```


## docker

```sh
docker run -d \
    -p 8000:80 \
    -e APP_ID=xxx \
    -e APP_SECRET=xxx \
    -e APP_TOKEN=xxx \
    -e TEMPLATE_ID=xxx \
    -e TOUSER=xxx \
    joy2fun/http-wessage
```

使用 curl 调用发送模板消息的接口：

```sh
curl -XPOST http://localhost:8000/api/template-message \
    -H 'Content-Type:application/json' \
    -d '{"data": {"msg": "test msg"}}'
```