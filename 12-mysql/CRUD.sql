-- Un commentaire en SQL
-- CECEI EST UN SUPPORT POUR LE COURS
-- Insérer des catégories de films
-- Film de gangsters, Action, Horreur, Science-fiction, Thriller
-- Copier/coller la requête SQL dans PHPMyAdmin (Onglet SQL)
-- On peut mettre les colonnes entre ``(backtick => alt gr + 7)
-- et les valeurs entre '' (quote)

INSERT INTO category (`name`) VALUES ('Film de gangsters');
INSERT INTO category (`name`) VALUES 
('Action'),
('Horreur'),
('Science-fiction'),
('Thriller');

-- Pour récupérer toutes les catégories
SELECT * FROM category;

-- On change le nom de la catégorie qui a l'id 5
UPDATE category SET name = 'Documentaire' WHERE id = 5;

-- Supprimer la catégorie qui a l'id 5
DELETE FROM category WHERE id = 5;

-- Pour reset les catégories
-- Décrocher "Activer la vérification des clés étrangères"
TRUNCATE TABLE category;