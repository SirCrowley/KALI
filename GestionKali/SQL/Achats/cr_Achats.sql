CREATE TABLE Achats
(
    achats_id               INTEGER         auto_increment,
    achats_produit          INTEGER,
    achats_client           INTEGER,
    achats_date             TIMESTAMP,
    achats_quantite         INTEGER,
    PRIMARY KEY(achats_id),
    FOREIGN KEY(achats_produit) REFERENCES Produits(produits_id),
    FOREIGN KEY(achats_client) REFERENCES Clients(clients_id)
);

ALTER TABLE Clients AUTO_INCREMENT=1;