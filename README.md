# Сервис для заметок TODO c JSON API

## Документация API

Валидация:

```bash
openapi-spec-validator ./openapi/openapi.yaml
```

Сборка:

```bash
redoc-cli bundle -o ./openapi_build/redoc_static.html ./openapi/openapi.yaml
```


## Получение списка TODO

```
GET /v1/todos
```

```json
[
  {
    "id": 2
    "content": "(A) Do it."
  },
  // ...
]
```

## Получение элемента списка TODO

```
GET /v1/todos/2
```

```json
{
  "id": 2
  "content": "(A) Do it."
},
```
