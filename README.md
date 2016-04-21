uc-server
===
A library for implementing an Ucenter Server in php. There's also a tiny implementation for Ucenter client on [labs7in0/uc_client](https://github.com/labs7in0/uc_client).

### Install

```bash
composer require labs7in0/uc-server:dev-master
```

### Usage

```php
exit(Server::run($_GET['m'], $_GET['a']));
```

### TODO

* [ ] App
 * [ ] ls
* [ ] Credit
 * [ ] request
* [ ] Feed
 * [ ] add
 * [ ] get
* [ ] Friend
 * [ ] delete
 * [ ] add
 * [ ] totalnum
 * [ ] ls
* [ ] Mail
 * [ ] add
* [ ] Pm
 * [ ] blackls_add
 * [ ] blackls_delete
 * [ ] blackls_get
 * [ ] blackls_set
 * [ ] check_newpm
 * [ ] delete
 * [ ] ignore
 * [ ] ls
 * [ ] sendpm
 * [ ] view
 * [ ] viewnode
* [ ] Pm Client
 * [ ] ls
* [ ] Tag
 * [ ] gettag
* [ ] User
 * [ ] addprotected
 * [ ] check_email
 * [ ] check_username
 * [ ] delete
 * [ ] deleteprotected
 * [ ] edit
 * [ ] get_user
 * [ ] getprotected
 * [ ] login
 * [ ] merge
 * [ ] merge_remove
 * [ ] register
 * [ ] synlogin
 * [ ] synlogout