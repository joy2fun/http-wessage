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

```sh
curl -XPOST http://{your host}/api/template-message \
    -H 'Content-Type:application/json' \
    -d '{"data": {"msg": "test msg"}}'
```

## docker
