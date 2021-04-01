drop database if exists week12revision;

create database week12revision;
use week12revision;

create table if not exists tasks (
    id            INT NOT NULL AUTO_INCREMENT,
    week_day      VARCHAR(5) NOT NULL,
    task          VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
);

insert into tasks (week_day, task) values ("Mon", "Study");
insert into tasks (week_day, task) values ("Tue", "Do Assignment");
insert into tasks (week_day, task) values ("Sat", "Party");


