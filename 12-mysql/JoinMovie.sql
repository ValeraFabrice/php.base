-- Left join: Récpère tous les films avec ou sans catégories
SELECT * FROM movie m
LEFT JOIN category c ON m.category_id = c.id

-- Inner join: Récupère les films avec catégories
SELECT * FROM movie
INNER JOIN category c ON m.category_id = c.id

--- Right join: Récupère les catégories qui sont associées ou non à un film
SELECT * FROM movie
RIGHT JOIN category c ON m.category_id = c.id

