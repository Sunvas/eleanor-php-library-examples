### Template engine
I do know about those fucking trendy-ass "compiling template engines": and all of them have one crucial defect in common: they failed with localization feature. I insist that all language entities (such as labels on buttons, fields, etc.) are always a sole **matter of the template** (not the fucking controller!). The most the controller can afford is just to pass language code to the templating engine. Later I will reveal my attitude towards a piece of shit called "gettext". And horseshit about "effective secure escaping" or "preventing XSS" is just outdated garbage: thanks to modern Content Security Policy directive, you would never be hacked via XSS like `onclick="alert('Hacked!')"`.

So, Eleanor PHP Library supports 3 types of templates based on:
1. **Files** in directory. Template name means filename. Variables are passed via associative array.
2. **Object** containing methods. Template name means method. Variables are passed as method params.
3. **Array** containing key=>value pairs. Template name means array key.

Templates are chainable, you can use all 3 types simultaneously. See examples to understand how it works.

---
### Шаблонизатор
Я знаю о существовании этих ваших "компилирующих обработчиках шаблонов". Все они одинаково хуёво сделаны, поскольку содержат один фатальный дефект: отсутствует поддержка локализации. Я настаиваю, что все языковые сущности (надписи на кнопках, полях и т.п.) это всегда дело исключительно *шаблона* (а не, бля, контроллера!). Максимум, что может позволить себе контроллер, - это просто передавать языковой код шаблонизатору. Позже я подробнее расскажу, почему поебень «gettext» неприменима для качественного перевода. Басни относительно "безопасного экранирования" или "предотвращения XSS" можно смело оставить в прошлом: благодаря современной директиве Content Security Policy, вас никогда не взломают тупым XSS наподобие `onclick="alert('Hacked!')"`.

Итак, Eleanor PHP Library поддерживание 3 типа шаблонов, основанных на:
1. **Файлах** в каталоге. Имя шаблона означает имя файла. Переменные передаются в качестве ассоциативного массива.
2. **Объекте** содержащий методы. Имя шаблон означает метод. Переменные передаются как параметры метода.
3. **Массив** содержащий пары ключ=>значение. Имя шаблона означает имя ключа массива. 

Шаблоны можно объединять в цепочки, можно использовать все 3 типа одновременно. Смотрите примеры, чтобы понять, как оно работает.