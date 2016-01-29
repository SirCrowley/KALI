CREATE TABLE Rdvs
(
    rdvs_id         INTEGER         auto_increment,
    rdvs_date       TIMESTAMP,
    rdvs_lieu       VARCHAR(50),
    rdvs_client     INTEGER,
    PRIMARY KEY(rdvs_id),
    FOREIGN KEY(rdvs_client) REFERENCES Clients(clients_id)
);

ALTER TABLE Rdvs AUTO_INCREMENT=1;
