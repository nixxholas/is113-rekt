drop database if exists week11shopping;

create database week11shopping;
use week11shopping;

create table if not exists item (
    id            INT NOT NULL AUTO_INCREMENT,
    item_name     VARCHAR(50) NOT NULL,
    qty           INT(2) NOT NULL,
    unit_price    FLOAT NOT NULL,
    PRIMARY KEY(id)
);
