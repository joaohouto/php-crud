# CRUD simples com PHP e BD relacional

### 📌 Banco MySQL

- Criando tabelas

```
CREATE TABLE categories (
    id int(4) AUTO_INCREMENT,
    name varchar(30) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE books (
    id int(4) AUTO_INCREMENT,
    name varchar(60) NOT NULL,
    author varchar(30) NOT NULL,
    category_id int(4) NOT NULL,
    PRIMARY KEY (id)
);

ALTER TABLE books 
    ADD CONSTRAINT fk_category FOREIGN KEY (category_id) 
    REFERENCES categories (id);
```

- Populando

```
INSERT INTO categories VALUES (1, "Ciência"), (2, "Ficção"), (3, "Romance");

INSERT INTO books VALUES
    (NULL, "O Universo Numa Casca de Noz", "Stephen Hawking", 1),
    (NULL, "Vinte Mil Léguas Submarinas", "Júlio Verne", 2),
    (NULL, "A Revolução dos Bichos", "George Orwell", 2),
    (NULL, "Harry Potter e a Pedra Filosofal", "J. K. Rowling", 3),
    (NULL, "O Senhor dos Anéis", "J. R. R. Tolkien", 3);
```

<hr>

Feito por <a href="https://github.com/joaohouto">João Couto</a>