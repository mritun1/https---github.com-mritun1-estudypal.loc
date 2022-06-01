1. To register send POST request

```bash
purpose = Insert,
registration = access,
password = '',
password1 = '',
email = '',
first_name = '',
last_name = '',
```

You are going to get response like this

```bash
{"code":0,"status":"User already exists!"}
```

2. To Login send POST request

```bash
purpose = Access,
login = access,
password = '',
email = '',
```

You are going to get response like this

```bash
{"code":1,"status":"Login success"}
```

3. Replace database with your database name

```bash
Go to
1. /api/obj/db.php and change it
Again, Go to
2. /app/controllers/crud/crud.php and change it
```
