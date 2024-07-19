### English
In short, the simplest example of using the library is:
```
<?php
include './library/core.php';
echo 'Fuck';
```

And you may ask why the fuck I need this library? Well, at least if you make a mistake, the library will tell you where you fucked up:

```
<?php
include './library/core.php';
CallMissedFunction();
echo 'Fuck';
```
And now instead of a silent crash not only fucking pretty "BSoD" is displayed, but this shit is also being logged into `./logs/php.log` in a readable format! 

See more examples in `.php` files. I hope even a dumbass can figure it out.

---
### Русский
Простейший пример использования библиотеки укладывается в 3 строки:
```
<?php
include './library/core.php';
echo 'Fuck!';
```
И можно спросить, а нахуя нужна эта библиотека? Ну, как минимум, если в код вкрадётся ошибка, библиотека подскажет проблемное место:

```
<?php
include './library/core.php';
CallMissedFunction();
echo 'Fuck';
```
И теперь, вместо тупого вылета, отображается не только охуенно красивый экран смерти, но также ещё происходит и логирование ошибки в файл `./logs/php.log` в читабельном формате!

Больше примеров в `.php` файлах. Надеюсь, даже тугодум разберётся. 