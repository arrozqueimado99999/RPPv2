DROP TABLE IF EXISTS artigos;

CREATE TABLE IF NOT EXISTS artigos (
    id              INTEGER PRIMARY KEY,
    titulo           TEXT    NOT NULL,
    texto  TEXT
);