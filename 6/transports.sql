DROP DATABASE IF EXISTS transports;
CREATE DATABASE transports CHARACTER SET utf8;
USE transports;

CREATE TABLE transports.lignesQuatreCols(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom_de_ligne VARCHAR (255) NOT NULL,
    terminus_a VARCHAR (255) NOT NULL,
    terminus_b VARCHAR (255) NOT NULL
);

INSERT INTO transports.lignesQuatreCols(nom_de_ligne, terminus_a, terminus_b) VALUES
('Ligne tram A', 'Terminus tram A', 'Terminus A bis'),
('Ligne tram B', 'Terminus tram B', 'Terminus B bis'),
('Ligne tram C', 'Terminus tram C', 'Terminus C bis'),
('Ligne tram D', 'Terminus tram D', 'Terminus D bis')
