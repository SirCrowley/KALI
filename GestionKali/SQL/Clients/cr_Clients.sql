CREATE TABLE Clients
(
    clients_id          INTEGER     auto_increment,
    clients_nom         VARCHAR(35),
    clients_prenom      VARCHAR(35),
    clients_societe     VARCHAR(35),
    clients_adresse     VARCHAR(55),
    clients_cp          VARCHAR(5),
    clients_ville       VARCHAR(35),
    clients_email       VARCHAR(50),
    clients_fixe        VARCHAR(13),
    clients_portable    VARCHAR(13),
    clients_notes       VARCHAR(250),
    PRIMARY KEY(clients_id)
);

ALTER TABLE Clients AUTO_INCREMENT=1;
