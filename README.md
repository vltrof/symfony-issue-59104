# issue-59104 reproducer

```shell
   $ composer install
```
```shell
   $ php -S 127.0.0.1:8080 -t public
```

http://127.0.0.1:8080/test?id=1

http://127.0.0.1:8080/test?id=x