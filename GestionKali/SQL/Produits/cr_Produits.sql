CREATE TABLE Produits
(
    produits_id             INTEGER             auto_increment,
    produits_reference      VARCHAR(30),
    produits_nom            VARCHAR(30),
    produits_prix           INTEGER,
    PRIMARY KEY(produits_id)
);

ALTER TABLE Produits AUTO_INCREMENT=1;
