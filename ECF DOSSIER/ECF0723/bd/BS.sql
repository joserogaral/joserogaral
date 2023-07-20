CREATE DATABASE Personnel1;
    use Personnel;
    CREATE TABLE `person1` (
        ID INT(11) NOT NULL AUTO_INCREMENT,
        nom VARCHAR(100),
        prenom VARCHAR(100),
        ddn DATE,
        ddd DATE,
        email VARCHAR(100),
        adresse VARCHAR(100),
        telephone VARCHAR(50),
        usuario VARCHAR(50),
        pass VARCHAR(50),
        PRIMARY KEY (`ID`)
    );

    INSERT INTO `person1` (nom, prenom, ddn, ddd, email, adresse, telephone, usuario, pass) VALUES ('parrot', 'parrot', '2023-07-14', '2023-07-14', 'info@garagevparrot.com', 'place du capotole', '112343343', 'vparrot', '0798621');

CREATE DATABASE contact1;
    use contact;
    CREATE TABLE `cont1` (
        ID INT(11) NOT NULL AUTO_INCREMENT,
        nomypre VARCHAR(100),
        telephone VARCHAR(100),
        email VARCHAR(100),
        objet VARCHAR(100),
        msg VARCHAR(1500),
        date DATE,
        PRIMARY KEY (`ID`)
    );

    CREATE DATABASE garage1;
    use garage;
    CREATE TABLE `autos1` (
        ID INT(11) NOT NULL AUTO_INCREMENT,
        marque VARCHAR(100),
        prix VARCHAR(100),
        km VARCHAR(100),
        iamge VARCHAR(100),
        details VARCHAR(1500),
        PRIMARY KEY (`ID`)
    );

    CREATE DATABASE hor1;
    use hor;
    CREATE TABLE `ora1` (
        ID INT(11) NOT NULL AUTO_INCREMENT,
        hi INT(11),
        hf INT(11),
        hic INT(11),
        hfc INT(11),
        his INT(11),
        hfs INT(11),
        PRIMARY KEY (`ID`)
    );

    CREATE DATABASE parrot1;
    use hor;
    CREATE TABLE `avis1` (
        ID INT(11) NOT NULL AUTO_INCREMENT,
        pseu VARCHAR(100),
        coment VARCHAR(1500),
        date DATE,
        PRIMARY KEY (`ID`)
    );

    