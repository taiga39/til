```
rails文
User.create(name: 'test')
素の文
INSERT INTO `users` (`name`) VALUES ('test')

rails文
User.where(name: "test)
素の文
 SELECT `users`.* FROM `users` WHERE `users`.`name` = 'test' LIMIT 11
```