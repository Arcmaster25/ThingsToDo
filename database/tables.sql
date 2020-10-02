CREATE TABLE users(
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(20) NOT NULL,
        password VARCHAR(200) NOT NULL,
        PRIMARY KEY(id)
);

CREATE TABLE list(
        id INT NOT NULL AUTO_INCREMENT,
        list_name VARCHAR(20) NOT NULL,
        user_id INT,
        PRIMARY KEY(id),
        FOREIGN KEY(user_id) REFERENCES users(id)
);

CREATE TABLE homework(
        id INT NOT NULL AUTO_INCREMENT,
        homeWork_name VARCHAR(50) NOT NULL,
        list_id INT,
        PRIMARY KEY(id),
        FOREIGN KEY(list_id) REFERENCES list(id)
);
