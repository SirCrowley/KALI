CREATE TABLE Rdvs
(
    rdvs_id         INTEGER         auto_increment,
    rdvs_date       TIMESTAMP,
    rdvs_lieu       VARCHAR(50),
    rdvs_client     VARCHAR(50),
    PRIMARY KEY(rdvs_id)
);

ALTER TABLE Rdvs AUTO_INCREMENT=1;
