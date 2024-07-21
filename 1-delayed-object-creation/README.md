### Delayed object creation
A perfect example of shit-code is when connection to MySQL database being established during engine initialization (after reading configs):
```
$db=new \MySQLi('localhost','user','password','database');
```
When real usage of created object happens somewhere in controllers. This shitty approach is entirely flawed because:
1. Connection is being established whether it is truly needed or not. Fucking unnecessary overhead!
2. It is impossible to use the assigned variable directly in a function or method. Yeah, you can make it global or pass it as a param or use a dependency injection. But such crutches only litter and uglify the code. Abomination!

Smarter shit-coders create a sophisticated "factory" like:
```
function CreateOrGetMySqliObject():\MySQLi
{
    //...
}
```
Despite it mitigates flaws above, in my opinion it still sucks.

Eleanor PHP Library offers a super elegant solution:
```
class Core extends Eleanor\Library
{
	/** @var null|Eleanor\Assign|\MySQLi */
	public static null|Eleanor\Assign|\MySQLi $Db;
}

Assign::For(Core::$Db,fn()=>new \MySQLi('localhost','user','password','database');
```
Variable `$Db` is wrapped in class `Core` just for super global availability. And now as you might guess, the `\MySQLi` object will be assigned to the static variable `Core::$Db` no sooner than it is truly needed.  

---
### Отложенное создание объектов
Отличным примером говнокода является установление соединения с базой данных MySQL посреди инициализации движка (после чтения конфигов):
```
$db=new \MySQLi('localhost','user','password','database');
```
Когда реальное использование созданного объекта происходит где-то в контроллерах. Такой дерьмовый подход плох по следующим причинам:
1. Соединение устанавливается всегда и вне зависимости от того, нужно оно или нет. Излишние накладные расходы.
2. Полученную переменную невозможно напрямую использовать в функциях или методах. Конечно же, можно сделать её глобальной или передавать её в качестве параметра или использовать внедрение зависимости. Но все эти костыли только засоряют и уродуют код. Фу!

Говнокодеры поумнее создают изощрённые «фабрики» вроде:
```
function CreateOrGetMySqliObject():\MySQLi
{
    //...
}
```
Хотя таким способом и можно "решить" вышеперечисленные недостатки, для меня он по-прежнему омерзителен.

Eleanor PHP Library предлагает супер элегантное решение:
```
class Core extends Eleanor\Library
{
	/** @var null|Eleanor\Assign|\MySQLi */
	public static null|Eleanor\Assign|\MySQLi $Db;
}

Assign::For(Core::$Db,fn()=>new \MySQLi('localhost','user','password','database');
```
Переменная `$Db` обёрнута в класс `Core` только для придания её суперглобальной доступности. И теперь, как можно догадаться, объект `\MySQLi` будет присвоен статической переменной `Core::$Db` не ранее, чем он реально понадобится.  