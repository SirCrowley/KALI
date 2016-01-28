CREATE TABLE Clients
(
    clients_id          INTEGER     PRIMARY KEY,
    clients_nom         VARCHAR(35),
    clients_prenom      VARCHAR(35),
    clients_societe     VARCHAR(35),
    clients_adresse     VARCHAR(55),
    clients_cp          NUMBER(5),
    clients_ville       VARCHAR(35),
    clients_email       VARCHAR(50),
    clients_fixe        NUMBER(13),
    clients_portable    NUMBER(13),
    clients_notes       VARCHAR(250)
);