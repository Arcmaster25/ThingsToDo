CREATE TABLE users(
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(20) NOT NULL,
        password VARCHAR(20) NOT NULL,
        PRIMARY KEY(id)
);

CREATE TABLE list(
        id INT NOT NULL AUTO_INCREMENT,
        listName VARCHAR(20) NOT NULL,
        user_id INT,
        PRIMARY KEY(id),
        FOREIGN KEY(user_id) REFERENCES users(id)
);

CREATE TABLE homework(
        id INT NOT NULL AUTO_INCREMENT,
        homeWorkName VARCHAR(50) NOT NULL,
        list_id INT,
        PRIMARY KEY(id),
        FOREIGN KEY(list_id) REFERENCES list(id)
);
