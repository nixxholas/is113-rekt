drop database if exists week13q3;

create database week13q3;
use week13q3;

create table if not exists course (
    id            INT NOT NULL AUTO_INCREMENT,
    stud_name     VARCHAR(30) NOT NULL,
    coursename    VARCHAR(30) NOT NULL,
    score         INT NOT NULL,
    PRIMARY KEY(id)
);

insert into course (stud_name, coursename,score) values ("Mary", "Programming", 80);
insert into course (stud_name, coursename,score) values ("John", "Programming", 90);
insert into course (stud_name, coursename,score) values ("John", "Database", 65);



