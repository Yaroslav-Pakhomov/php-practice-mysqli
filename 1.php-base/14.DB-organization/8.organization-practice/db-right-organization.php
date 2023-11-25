Простое связывание


Товар (название, цена, количество), категория товара. Запросы: (1) достать товары вместе с категориями, (2) достать товары из категории 'Овощи', (3) достать товары из категорий 'Овощи', 'Мясо', 'Морепродукты', (4) достать все категории (без товаров, только названия категорий), (5) достать все категории, в которых есть товары (без товаров, только названия категорий, без дублей). Скрыть решение.

Решение:

Таблицы:

таблица goods (товар), поля: id, name (название), quantity (количество), price (цена), category_id (айди категории)
таблица category (категория), поля: id, name (название)

Запросы:

#1. достать товары вместе с категориями:
SELECT * FROM goods LEFT JOIN category ON  goods.categoryId = category.id
#2. достать товары из категории 'Овощи':
SELECT * FROM goods INNER JOIN category ON goods.categoryId = category.id WHERE category.name = "Овощи"
#3. достать товары из категорий 'Овощи', 'Мясо', 'Морепродукты':
SELECT * FROM goods INNER JOIN category ON goods.categoryId = category.id WHERE category.name IN ('Овощи', 'Мясо', 'Морепродукты')
#4. достать все категории (без товаров, только названия категорий):
SELECT name FROM category
#5. достать все категории, в которых есть товары (без товаров, только названия категорий, без дублей):
SELECT DISTINCT name FROM category INNER JOIN 'goods' ON category.Id = goods.category_id


Товар (название, цена, количество), подкатегория товара, категория товара. Товар принадлежит подкатегории, подкатегория — категории. Пример: помидорки черри (товар), помидоры (подкатегория), овощи (категория). Запросы: (1) достать товары вместе с подкатегориями и категориями, (2) достать товары из подкатегории 'Помидоры', (3) достать все подкатегории категории 'Овощи'. Скрыть решение.

Решение:

Таблицы:

таблица goods (товар), поля: id, name (название), quantity(количество), price(цена), sub_category_id (айди подкатегории)
таблица sub_category (подкатегория), поля: id, name (название), price (цена), category_id (айди категории)
таблица category (категория), поля: id, name (название)

Запросы:

#1. достать товары вместе с категориями:
SELECT goods.name, goods.quantity, goods.price, subcategory.name, category.name FROM goods goods
JOIN subcategory ON goods.subcategoryId = subcategory.id JOIN category ON subcategory.categoryId = category.id
#2. достать товары из категории 'Овощи':
SELECT * FROM goods INNER JOIN subcategory ON goods.subcategoryId = subcategory.categoryId JOIN category ON  subcategory.categoryId = category.id; WHERE category.name = "Овощи"
#3. достать товары из категорий 'Овощи', 'Мясо', 'Морепродукты':
SELECT * FROM goods INNER JOIN subcategory ON goods.subcategoryId = subcategory.categoryId JOIN category ON
subcategory.categoryId = category.id; WHERE category.name IN ('Овощи', 'Мясо', 'Морепродукты')


Товар, категория, склад, брэнд. Товар принадлежит категории, складу и бренду. Запросы: (1) достать товары с их категорией, складом и брэндом, (2) достать все склады. Скрыть решение.

Решение:

Таблицы:

таблица goods (товар), поля: id (идентификатор), name (название), quantity (количество), price (цена), category_id (айди категории)
таблица category (категория), поля: id (идентификатор), name (название), stock_id (айди склада)
таблица stock (склад), поля: id, name (название), brand_id (ай ди брэнда)
таблица brand (брэнд), поля: id, name (название)

Запросы:

#1. достать товары с их категорией, складом и брэндом:
SELECT * FROM goods  LEFT JOIN category ON  goods.categoryId = category.id
LEFT JOIN stock ON category.stockId = stock.id
LEFT JOIN brand ON  stock.brandId= brand.id
#2.  достать все склады:
SELECT * FROM stock


Товар, подкатегория, категория, склад, брэнд. Последние 3 никак не связаны, подкатегория принадлежит категории (например, помидоры овощам). Запросы: (1) достать товары с их подкатегорией и категорией, складом и брэндом. Скрыть решение.

Решение:

Таблицы:

таблица goods (товар), поля: id, name (название), quantity (количество), price (цена), subcategory_id (айди подкатегории)
таблица subcategory (подкатегория), поля: id, name (название), price (цена), category_id (айди категории)
таблица category (категория), поля: id, name (цена)
таблица stock (склад), поля: id, name (название)
таблица brand (брэнд), поля: id, name (название)

Запросы:

#1. достать товары с их категорией, складом и брэндом:
SELECT goods.name, goods.quantity, goods.price, subcategory.name, category.name
FROM goods  JOIN subcategory ON goods.subcategoryId = subcategory.id
JOIN category ON subcategory.categoryId = category.id                    UNION SELECT * FROM stock UNION SELECT * FROM brand


Пользователь, его город. Запросы: (1) достать пользователей вместе с их городом, (2) достать все города, (3) достать всех пользователей из города Минск, (4) достать все города, в которых есть пользователи, (5) достать все города, в которых нет пользователей, (6) вывести список городов с количеством пользователей в них, (7) вывести список городов, в которых количество пользователей больше трех. Скрыть решение.

Решение:

Таблицы:

таблица user (пользователь), поля: id, name (название), city_id (айди города)
таблица city (город), поля: id, name (название)
Запросы:

#1. достать пользователей вместе с их городом:
SELECT user.id, user.name, city.id, city.name FROM user  LEFT JOIN  city ON user.cityId = city.id
#2. достать все города:
SELECT name FROM city
#3. достать всех пользователей из города Минск:
SELECT user.id, user.name FROM user  LEFT JOIN  city ON user.cityId = city.id WHERE city.name = "Минск"
#4. достать всех пользователей из города Минск:
SELECT user.id, user.name FROM user  LEFT JOIN  city ON user.cityId = city.id WHERE user.cityId IS NOT NULL
#5. достать всех пользователей из города Минск:
SELECT user.id, user.name FROM user  LEFT JOIN  city ON user.cityId = city.id WHERE user.cityId  IS NULL
#6. вывести список городов с количеством пользователей в них:
SELECT city.name, COUNT(user.cityId) AS cityUsers FROM city  RIGHT JOIN  user ON city.id = user.cityId
#7. вывести список городов, в которых количество пользователей больше трех:
SELECT city.name, COUNT(user.cityId) AS cityUsers FROM city  RIGHT JOIN  user ON city.id = user.cityId WHERE COUNT(user.cityId) > 3


Пользователь, его город, страна. Запросы: (1) достать всех пользователей вместе с их городом и страной, (2) достать все города с их странами, (3) достать всех пользователей из страны Беларусь (без городов), (4) достать всех пользователей из города Минск (без страны), (5) вывести список стран с количеством пользователей в них. Скрыть решение.

Решение:

Таблицы:

таблица user (пользователь), поля: id, name (название), city_id (айди города)
таблица city (город), поля: id, name (название), country_id (айди страны)
таблица country (страна), поля: id, name (название)
Запросы:

#1. достать пользователей вместе с их городом:
SELECT  user.name, city.name, country.name  FROM user  LEFT JOIN  city ON user.cityId = city.id  LEFT JOIN  country ON  city.countryId = country.id
#2. достать все города с их странами:
SELECT city.name, country.name FROM city LEFT JOIN country ON city.countryId = country.id
#3. достать всех пользователей из страны Беларусь (без городов):
SELECT user.name  FROM user LEFT JOIN city ON user.cityId = city.id  LEFT JOIN country ON city.countryId = country.id WHERE country.name = "Беларусь"
#4.  достать всех пользователей из города Минск :
SELECT user.name FROM user LEFT JOIN city ON user.cityId= city.id WHERE city.name = "Минск"
#5.  вывести список стран с количеством пользователей в них :
SELECT country.name,  COUNT(cityId) AS userCountry FROM country INNER JOIN city ON country.id = city.country_id INNER JOIN user ON city.id = user.cityId


Сложные связи


У отца всегда только один сын. Сыновья в свою очередь также могут быть отцами. Запросы: (1) получить пользователя вместе с его отцом и сыном, (2) получить дедушку пользователя, (3) получить прадедушку пользователя. Скрыть решение.

Решение:

Таблицы:

таблица user (пользователь), поля: id, name (имя), son_id (айди сына)
Запросы:

#1. получить пользователя вместе с его отцом и сыном:
SELECT *, sons.name FROM user LEFT JOIN user AS sons ON user.sonId = sons.id
#2. получить дедушку пользователя:
SELECT *, grandfather.name  FROM user   LEFT JOIN user AS father ON user.sonId = father.id  LEFT JOIN  user AS grandfather ON user.id = grandfather.sonId
#3. получить прадедушку пользователя:
SELECT *, grandfather.name  FROM user   LEFT JOIN user AS father ON user.sonId = father.id  LEFT JOIN  user AS grandfather ON
user.id = grandfather.sonId  LEFT JOIN user AS grandfather ON user.sonId = grandfather.id


Есть мужья и жены, а также неженатые/незамужние. Для всех указывается имя, фамилия, возраст, адрес. Муж с женой имеют одну фамилию и живут по одному адресу. Запросы: (1) получить мужей с женами и наоборот, (2) получить холостых, (3) получить семьи (муж+жена), семьи не должны дублироваться (пара должна быть только 1 раз). Скрыть решение.

Решение:

Таблицы:

таблица user (пользователь), поля: id, name (имя), surname (фамилия), age (возраст), address (адрес), family_id (айди семьи)
Запросы:

#1.  получить мужей с женами и наоборот:
SELECT * FROM user LEFT JOIN user AS relations ON user.id = relation.family_id  WHERE user.surname = relations.surname
#2.  получить холостых:
SELECT * FROM user LEFT JOIN user AS relations ON user.id = relation.family_id WHERE family_id IS NULL
#3.  получить семьи (муж+жена), семьи не должны дублироваться (пара должна быть только 1 раз):
SELECT DISTINCT user.name, relations.name FROM user LEFT JOIN user AS relations ON user.id = relation.family_id  WHERE user.surname = relation.surname
Еще более сложные


Товар, который может принадлежать нескольким категориям одновременно. Запросы: (1) достать все товары вместе с их категориями, (2) достать товар 'Огурец' вместе с его категориями, (3) достать все товары из категории 'Овощи', (4) достать все товары, которые принадлежат более чем одной категории. Скрыть решение.

Решение:

Таблицы:

таблица product (продукт), поля: id, name (название), product_id (айди продукта)
таблица order (порядок), поля: id, product_id, category_id (айди категории)
таблица category (категория), поля: id, name (название),
Запросы:
#1. достать все товары вместе с их категориями:
SELECT * FROM product LEFT JOIN order ON product.category.id = order.id LEFT JOIN category ON order.category_id = category.id
#2. достать товар 'Огурец' вместе с его категориями:
SELECT *, category.name FROM product LEFT JOIN order ON product.category.id = order.id LEFT JOIN category
ON order.category_id = category.id WHERE product.name = "Огурец"
#3. достать все товары из категории 'Овощи':
SELECT * FROM product LEFT JOIN order ON product.category.id = order.id LEFT JOIN category ON order.category_id = category.id WHERE category.name = "Овощи"
#4.достать все товары, которые принадлежат более чем одной категории.:
SELECT * FROM product LEFT JOIN order ON product.category.id = order.id LEFT JOIN category ON order.category_id = category.id WHERE


Пользователь и его интересы (могут быть одинаковыми у разных пользователей). Запросы: (1) достать интересы пользователя, (2) достать всех пользователей с данным интересом. Скрыть решение.

Решение:

Таблицы:

таблица user (пользователь), поля: id, name (имя), user_id (айди пользователя)
таблица order (порядок), поля: id, user_id (айди пользователя), interests_id (айди интереса)
таблица interests (интерес), поля: id, name (название),
Запросы:

#1. достать интересы пользователя:
SELECT *, interests.name FROM user LEFT JOIN order ON user.user_id = order.id LEFT JOIN interests ON order.interests_id = interest.id WHERE user.id = 2
#1. достать всех пользователей с данным интересом:
SELECT * FROM user LEFT JOIN order ON user.user_id = order.id LEFT JOIN interests ON order.interests_id = interest.id WHERE interests.id = 2


Пользователь, товары, покупки пользователей. У товара есть цена, пользователь может купить не один экземпляр товара, а одновременно несколько. Запросы: (1) вывести пользователей вместе с их покупками, (2) вывести пользователей вместе с суммами всех их покупок, (3) найти суммарные покупки на сайте за определенный месяц, (4) найти суммарные покупки на сайте помесячно (то есть результат будет в таком виде: март 2010 — сумма1, апрель 2010 — сумма2, май 2010 — сумма3 и тд). Скрыть решение.

Решение:

Таблицы:

таблица product (товар), поля: id, name (название), price (цена), date (дата), product_id (айди продукта)
таблица purchase (покупка), поля: id, name (название), user_id (айди пользователя), product_id (айди продукта)
таблица user (пользователь), поля: id, name (имя)
Запросы:

#1.  вывести пользователей вместе с их покупками:
SELECT *, user.name  FROM product LEFT JOIN purchase ON product.product_id = purchase.id LEFT JOIN user ON
purchase.user_id = user.id
#2.  вывести пользователей вместе с суммами всех их покупок:
SELECT *, user.name, SUM(price)  FROM product LEFT JOIN purchase ON product.product_id = purchase.id LEFT JOIN user ON  purchase.user_id = user.id
#3. найти суммарные покупки на сайте за определенный месяц:
SELECT SUM(price) FROM product LEFT JOIN purchase ON product.product_id = purchase.id LEFT JOIN user ON
purchase.user_id = user.id  WHERE MONTH(date) = 2
#4.  найти суммарные покупки на сайте помесячно:
SELECT SUM(price) AS sum, DATE_FORMAT(date, '%m-%Y') user.name  FROM product LEFT JOIN purchase ON
product.product_id = purchase.id LEFT JOIN user ON  purchase.user_id = user.id


Есть отцы и сыновья. У отца может быть много сыновей. Запросы: (1) получить всех сыновей пользователя, (2) получить отца пользователя, (3) получить дедушку пользователя, (4) получить внуков пользователя. Скрыть решение.

Решение:

Таблицы:

таблица user (пользователь), поля: id, name (имя), user_id (айди человека)
таблица order (порядок), поля: id, user_id (айди человека), son_id (айди сына)
таблица son (интерес), поля: id, name (название),
Запросы:

#1.  получить всех сыновей пользователя:
SELECT * FROM user LEFT JOIN order ON user.user_id = order.id LEFT JOIN son ON order.son_id = son.id
#2.  получить отца пользователя :
SELECT user.name AS fatherName FROM user LEFT JOIN order ON user.user_id = order.id LEFT JOIN son ON order.son_id = son.id  WHERE user.id = 2
#3.   получить дедушку пользователя :
SELECT user.name AS fatherName FROM user LEFT JOIN order ON user.user_id = order.id LEFT JOIN son ON order.son_id = son.id  WHERE user.id = 2


Море, реки, притоки (притоки делятся на правые и левые). Реки могут быть притоками других рек или впадать прямо в море. Запросы: (1) получить все реки Черного Моря, (2) получить все реки Черного Моря вместе с притоками, (3) получить все притоки реки Днепр, (4) получить куда впадает данная река (в какую реку или в какое море). Скрыть решение.

Решение:

Таблицы:

таблица river (река), поля: id, name (название), tried_id (айди притока)
таблица tributaries (приток), поля: id, name (название), sea_id (айди моря), river_id (айди реки)
таблица sea (море), поля: id, name (название)
Запросы:

#1. получить все реки Черного Моря :
SELECT river.name FROM river  LEFT JOIN tributaries ON river.tried_id = tributaries.id LEFT JOIN  sea ON
tributaries.swa_id = sea.id WHERE sea.name = "Черное Море"
#2. получить все реки Черного Моря вместе с притоками :
SELECT river.name, tributaries.name FROM river  LEFT JOIN tributaries ON
river.tried_id = tributaries.id LEFT JOIN  sea ON  tributaries.swa_id = sea.id WHERE sea.name = "Черное Море"
#3. получить все притоки реки Днепр :
SELECT tributaries.name FROM river LEFT JOIN tributaries ON river.tried_id = tributaries.id WHERE river.name = "Днепр"
#4. получить куда впадает данная река (в какую реку или в какое море):
SELECT river.name, sea.name FROM river  LEFT JOIN tributaries ON river.tried_id = tributaries.id LEFT JOIN  sea ON  tributaries.swa_id = sea.id WHERE river.id = 1
Закрепление


Пользователь, обмен сообщениями между пользователями (в личку). Сообщение можно пометить как прочитанное (это может только получатель сообщения). Скрыть решение.

Решение:

Таблицы:

таблица message (сообщение), поля: id, user_id (айд пользователя), author_id (айди автора), text (текст), status (статус)
Запросы:

SELECT * FROM massage LEFT JOIN message AS order_message ON massage.user_id = order_message.author_id  WHERE status = 1


Есть сайт с датами футбольных игр. В каждой игре нужно выводить дату игры, первую команду и вторую команду. После того, как игра прошла — нужно выводить еще и счет. Запросы: (1) получить все игры вместе с командами, (2) получить все игры с командами за текущий месяц, (3) получить все игры с командами за предыдущий месяц, (4) получить все сыгранные игры, (5) получить все несыгранные игры. Скрыть решение.

Решение:

Таблицы:

таблица game (игра) поля: id, team1_id (айди 1й команды), team2_id (айди 2й команды), date (дата), status (статус)
таблица team (команда) поля: id, name (название)
Запросы:

#1. получить все игры вместе с командами :
SELECT * FROM game  INNER JOIN  team  ON game.team1_id= team.id UNION SELECT * FROM game INNER  JOIN team  ON
game.team2_id = team.id
#2. получить все игры с командами за текущий месяц:
SELECT * FROM game  INNER JOIN  team  ON game.team1_id= team.id UNION SELECT * FROM game INNER  JOIN team  ON
game.team2_id = team.id  WHERE MONTH(date)= MONTH(NOW())
#3. получить все игры с командами за предыдущий месяц:
SELECT * FROM game  INNER JOIN  team  ON game.team1_id= team.id UNION SELECT * FROM game INNER  JOIN team  ON
game.team2_id = team.id  WHERE MONTH(date)= MONTH(DATE_ADD(), INTERVAL -1 MONTH)
#4. получить все сыгранные игры:
SELECT * FROM game  INNER JOIN  team  ON game.team1_id= team.id UNION SELECT * FROM game INNER  JOIN team  ON
game.team2_id = team.id  WHERE status IS NOT NULL
#5. получить все несыгранные игры:
SELECT * FROM game  INNER JOIN  team  ON game.team1_id= team.id UNION SELECT * FROM game INNER  JOIN team  ON
game.team2_id = team.id  WHERE status IS NULL


Модифицируем предыдущую задачу так, чтобы выводился также город, в котором будет игра. Каждая команда принадлежит своему городу (игра может быть в городе одной из команд). Добавьте еще и игроков, каждый игрок может принадлежать одной команде. Скрыть решение.

Решение:

Таблицы:

таблица player (команда) поля: id, name (название), team_id (айди команды)
таблица game (игра) поля: id, team1_id (айди 1й команды), team2_id (айди 2й команды), date (дата), game_city (игра в городе), status (статус)
таблица team (команда) поля: id, name (название), city (город)
Запросы:

#1. получить все командами c городами :
SELECT *, team.city FROM game  INNER JOIN  team  ON game.team1_id= team.id UNION SELECT * FROM game INNER  JOIN team  ON game.team2_id = team.id
#2. получить всех игроков команды :
SELECT * FROM player  LEFT JOIN team  ON player.team_id = team.id


Пользователь, страницы, категории страниц. Пользователи пишут посты в гостевой книге к определенной странице. Запросы: (1) получить все комментарии к данной странице, (2) получить все комментарии данного пользователя Скрыть решение.

Решение:

Таблицы:

таблица user (пользователь) поля: id, name (имя), text (текст), page_id (айди страницы)
таблица page (страница) поля: id, name (название), category_id (айди категории)
таблица category (категория страницы) поля: id, name (название)
Запросы:

#1. получить все комментарии к данной странице:
SELECT * FROM user  INNER JOIN page ON user.pade_id = page.id INNER JOIN  category ON page.category_id = category.id
#2. получить все комментарии данного пользователя:
SELECT * FROM user  INNER JOIN page ON user.pade_id = page.id INNER JOIN  category ON page.category_id = category.id WHERE user.id = 1


Проекты


Форум, категории, в них темы (тема принадлежит только одной категории), в темах посты. У темы есть автор. Пользователи могут обмениваться личными сообщениями. Скрыть решение.

Решение:

Таблицы:

таблица post (запись) поля: id, nam (название), text (текст), topic_id (айди темы)
таблица topic (тема) поля: id, name (название), category_id (айди категории)
таблица category (категория) поля: id, name (название)
Запросы:

#1. получить все посты :
SELECT * post LEFT JOIN topic ON post.topic_id = topic.id LEFT JOIN category ON topic.category_id = category.id


Социальная сеть, пользователи, их друзья, стена, комментарии к записям на стене. Пользователи могут обмениваться личными сообщениями. Скрыть решение.

Решение:

Таблицы:

таблица user (пользователь), поля: id, name (имя), text (текст), topic_id (айди темы)
Запросы:

#1. получить все посты :
SELECT * post LEFT JOIN topic ON post.topic_id = topic.id LEFT JOIN category ON topic.category_id = category.id


Сайт с одеждой. Каждый товар может быть разного цвета, количество цветов может быть любым. Пример - товар: джинсы, цвета: синий, голубой, зеленый. Запросы (1): получить товары вместе с их цветами. Цвета должны быть в отдельной колонке через запятую, товары не должны дублироваться. Скрыть решение.

Решение:

Таблицы:

таблица product (товар) поля: id, name (название), color_id (айди цвета)
таблица color (цвет) поля: id, name (название)
Запросы:

#1. получить товары вместе с их цветами :
SELECT DISTINCT product.id, product.name, color.name AS color FROM product INNER JOIN color ON
product.color_id = color.id


Сайт с опросами (опросов много). Пользователи отвечают на вопросы опроса. На сайте нужно выводить результаты опроса. Пользователи видят в личном кабинете вопросы, на которые они отвечали, и то, как они на них отвечали. Скрыть решение.

Решение:

Таблицы:

таблица interview (опрос) поля: id, name (название), text (текст), user_id (айди пользователя), status (статус)
таблица user (пользователь) поля: id, name (имя)
Запросы:

#1. вопросы на которые отвечали:
SELECT * FROM interview LEFT JOIN user ON interview.user_id = user.id  WHERE status IS NOT NULL
#1. вопросы на которые не отвечали:
SELECT * FROM interview LEFT JOIN user ON interview.user_id = user.id  WHERE status IS NULL


Дерево категорий. Каждая категория может принадлежать любой надкатегории, та в свою очередь наднадкатегории и так далее. Скрыть решение.

Решение:

Таблицы:

таблица category (категория) поля: id, name (название), category_id (айди категории)
Запросы:

#1. получить все категории:
SELECT * FROM category LEFT JOIN category AS subcategory ON category.category_id = subcategory.id LEFT JOIN category AS overcategory ON subcategory.category_id = overcategory.id


Генеалогическое дерево. Пользователь, его бабушки, дедушки, мама, папа, братья, сестры, дети. Можно найти любого родственника в любом колене (например, пра-пра-пра-дедушку). То есть есть пользователь, он может быть сыном, отцом, братом, дедушкой, прадедушкой и все это одновременно. Нужно хранить и получать родственные связи. Запросы: (1) получить отца пользователя, (2) получить мать пользователя, (3) получить детей пользователя, (4) получить сыновей пользователя, (5) получить дочерей пользователя, (6) получить внуков пользователя, (7) получить бабушек пользователя, (8) получить дедушек пользователя, (9) получить пра-пра-пра-дедушку пользователя, (10) получить братьев и сестер пользователя, (11) получить братьев пользователя, (12) получить дядей и теть пользователя, (13) получить кузенов и кузин пользователя. Скрыть решение.

Решение:

Таблицы:

таблица user (пользователь), поля: id, name (имя), mother_id (айди матери), father_id (айди отца), sex (стать)
Запросы:

#1. получить отца пользователя :
SELECT father.name FROM user LEFT JOIN user AS father user.father_id = father.id
#2. получить мать пользователя :
SELECT mother.name FROM user LEFT JOIN user AS mother user.mother_id = mother.id
#3. получить детей  пользователя :
SELECT * FROM user LEFT JOIN user AS father user.father_id = father.id LEFT JOIN  user AS mother user.mother_id = mother.id WHERE father_id = 1 AND mother.id =1
#4. получить сыновей пользователя :
SELECT * FROM user LEFT JOIN user AS father user.father_id = father.id LEFT JOIN  user AS mother user.mother_id = mother.id WHERE user.sex = 1
#5. получить дочерей пользователя :
SELECT * FROM user LEFT JOIN user AS father user.father_id = father.id LEFT JOIN  user AS mother user.mother_id = mother.id WHERE user.sex = 2
#6. получить внуков пользователя :
SELECT * FROM user LEFT JOIN user AS father user.father_id = father.id LEFT JOIN  user AS mother user.mother_id = mother.id LEFT JOIN user AS grandfather ON father.father_id = grandfather.id LEFT JOIN  user AS grandmother ON  mother.mother_id = grandmother.id
#7. получить бабушек пользователя :
SELECT *, grandmother.name FROM user LEFT JOIN user AS father user.father_id = father.id LEFT JOIN  user AS mother user.mother_id = mother.id LEFT JOIN user AS grandfather ON father.father_id = grandfather.id LEFT JOIN  user AS grandmother ON  mother.mother_id = grandmother.id
#8. получить дедушек пользователя :
SELECT *, grandfather.name FROM user LEFT JOIN user AS father user.father_id = father.id LEFT JOIN  user AS mother user.mother_id = mother.id LEFT JOIN user AS grandfather ON father.father_id = grandfather.id LEFT JOIN  user AS grandmother ON  mother.mother_id = grandmother.id
#9. получить дедушек пользователя :
SELECT *,overgrandfather.name FROM user LEFT JOIN user AS father user.father_id = father.id LEFT JOIN  user AS mother user.mother_id = mother.id LEFT JOIN user AS grandfather ON father.father_id = grandfather.id LEFT JOIN  user AS grandmother ON  mother.mother_id = grandmother.id LEFT JOIN user AS overgrandfather ON grandfather.father_id = overgrandfather.id
#10. получить братьев и сестер пользователя :
SELECT user.name AS relatives  FROM user LEFT JOIN user AS father user.father_id = father.id LEFT JOIN  user AS mother user.mother_id = mother.id
#11.  получить братьев пользователя :
SELECT user.name AS relatives  FROM user LEFT JOIN user AS father user.father_id = father.id LEFT JOIN  user AS mother user.mother_id = mother.id  WHERE user.sex = 1
#12.  получить братьев пользователя :
SELECT user.name AS relatives  FROM user LEFT JOIN user AS father user.father_id = father.id LEFT JOIN  user AS mother user.mother_id = mother.id  WHERE user.sex = 2
#13.  получить кузенов и кузин пользователя :


Как реализовать?


Блокировка и разблокировка пользователя администратором сайта. Скрыть решение.

Решение:

UPDATE table1 SET status= 1 WHERE id = 2
UPDATE table1 SET status= 0 WHERE id = 2


Блокировка пользователя на неделю или месяц. После истечения срока пользователь разблокируется автоматически. Скрыть решение.

Решение:

UPDATE table1 SET block=(DATE_ADD(date, INTERVAL 1 MONTH))  WHERE id = 2
UPDATE table1 SET block= 0 WHERE id = 2


Оплаченный доступ к сайту на два месяца после оплаты.

Удаление пользователей, которые не заходили на сайт более 3-х месяцев.

Активация аккаунта пользователя через email сразу после регистрации.

Активация аккаунта пользователя через email каждые 180 дней после регистрации.

Есть тест с 500 вопросами. Покажите пользователю 20 случайных вопросов.

Есть гостевая книга, сообщение в нее добавляется только после одобрения администратором.

При заходе на страницу сайта пользователь видит, сколько раз он ее посещал и дату последнего посещения.

Есть форум. Пользователь, у которого менее 10-ти сообщений, может оставить новое сообщение только через 5 минут после предыдущего.

Код на скидку 10% на одну покупку (в покупке может быть много товаров, но заказ будет один). Код действует только на 1 покупку для любого пользователя. Кодов может быть много (они где-то раздаются в подарок, например, на флаерах).

Есть сайт с платным доступом на вебинары. Когда участник (ему не надо регистрироваться на сайте) покупает доступ — он получает специальный код (пример: dk85Fj,_865gklg) и по этому коду может зайти на вебинар. Доступ может быть разовым (1 человек на 1 любой вебинар, второй человек зайти по этому коду уже не сможет) или многоразовым (например, 10 вебинаров). При этом по многоразовому доступу не могут зайти два человека на 1 вебинар.

Страницы на сайте. Каждая страница может быть отредактирована в админке при этом старая версия не удаляется, а хранится как 'предыдущая версия'. При необходимости страницу можно откатить к предыдущей версии. Нужно хранить не более 5-ти предыдущих версий каждой страницы (то есть 6-тую уже не храним).

На сайте есть общая рассылка на email. Рассылка делается автоматически после каждого добавления новой статьи на сайт. Но есть проблема: на хостингах бывает ограничение на время выполнение скрипта. Поэтому необходимо рассылать не по всей базе пользователей, а порциями, например, по 20 штук, и кроном запускать скрипт рассылки каждые N минут. Как это реализовать?

Есть работники с разными профессиями. У каждой профессии фиксированная зарплата за 1 рабочий день, эта зарплата каждый месяц меняется (из-за инфляции). Каждый работник работает в месяц разное количество дней. Получите зарплаты всех работников за предыдущий месяц. Иногда может понадобится получить зарплаты за какой-то месяц какого-либо года или все зарплаты работника за год (напишите соответствующие запросы). Есть ли смысл каждый раз высчитывать это или лучше рассчитанные и выданные зарплаты как-то хранить? Если хранить — то как это реализовать?


Сложные задачи на базы данных


Найти возраст по дате рождения. Скрыть решение.

Решение:

Таблицы:

таблица users (пользователь), поля: id, name, birthday
Запросы:

#1. найти возраст по дате рождения:
SELECT birthday,((YEAR(CURRENT_DATE) - YEAR(birthday))(DATE_FORMAT(CURRENT_DATE, '%m%d') < DATE_FORMAT(birthday, '%m%d')) ) AS age FROM users


Вывести четные записи (не с четным id, а четные, в id могут быть дыры). Скрыть решение.

Решение:

Запросы:

#1. вывести четные записи:
SELECT * FROM table_name WHERE id % 2 = 0


Дан id записи. Найдите соседей этой записи. Скрыть решение.

Решение:

Запросы:

#1. дан id записи. Найдите соседей этой записи
SELECT * FROM post INNER JOIN (( SELECT id FROM post WHERE id < 1 ORDER BY id LIMIT 1 DESC) UNION (SELECT id FROM post WHERE id > 1 ORDER BY id  LIMIT 1 ASC)) sub_post ON post.id IN (sub_post.id)


Дана таблица с именами. Имена могут повторятся, к примеру, есть 2 Маши. Получите имена, которые повторяются только один раз. Получите имена, которые повторяются более одного раза.

Дана таблица с именами. Имена могут повторятся, к примеру есть 3 Маши. Удалите все дубли, кроме первого, то есть всех маш, кроме первой.

Выбрать из базы тех пользователей, которые не заходят в аккаунт более 90 дней.

Есть таблица с покупками. Найдите суммарную стоимость покупок по неделям. Неделя с понедельника по воскресенье.
