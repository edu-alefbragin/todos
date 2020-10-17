# Сервис для заметок TODO c JSON API

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
