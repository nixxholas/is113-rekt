drop database if exists week11flower;

create database week11flower;
use week11flower;

create table if not exists NATIONAL_FLOWER (
    country    VARCHAR(50) NOT NULL,
    flower     VARCHAR(50) NOT NULL
);


INSERT INTO national_flower (country, flower) VALUES ('AUSTRALIA', 'GOLDEN WATTLE');
INSERT INTO national_flower (country, flower) VALUES ('AUSTRIA', 'EDELWEISS');
INSERT INTO national_flower (country, flower) VALUES ('BAHAMAS', 'YELLOW ELDER');
INSERT INTO national_flower (country, flower) VALUES ('BELGIUM','RED POPPY');
INSERT INTO national_flower (country, flower) VALUES ('BELIZE', 'BLACK ORCHID');
INSERT INTO national_flower (country, flower) VALUES ('BHUTAN', 'BLUE POPPY');
INSERT INTO national_flower (country, flower) VALUES ('BOHEMIA', 'THYME');
INSERT INTO national_flower (country, flower) VALUES ('BRAZIL', 'CATTLEYA ORCHID');
INSERT INTO national_flower (country, flower) VALUES ('CANADA', 'MAPLE LEAF');
INSERT INTO national_flower (country, flower) VALUES ('CAYMAN ISLANDS', 'WILD BANANA ORCHID');
INSERT INTO national_flower (country, flower) VALUES ('CHINA', 'PLUM BLOSSOM');
INSERT INTO national_flower (country, flower) VALUES ('COLUMBIA', 'CATTLEYA TRIANAE');
INSERT INTO national_flower (country, flower) VALUES ('DENMARK', 'MARGUERITE DAISY');
INSERT INTO national_flower (country, flower) VALUES ('ECUADOR', 'ROSE');
INSERT INTO national_flower (country, flower) VALUES ('ETHIOPIA', 'CALLA LILY');
INSERT INTO national_flower (country, flower) VALUES ('FRANCE', 'IRIS');
INSERT INTO national_flower (country, flower) VALUES ('GERMANY', 'CORNFLOWER');
INSERT INTO national_flower (country, flower) VALUES ('HOLLAND', 'TULIP');
INSERT INTO national_flower (country, flower) VALUES ('HONG KONG', 'ORCHID BAUHINIA');
INSERT INTO national_flower (country, flower) VALUES ('ICELAND', 'MOUNTAIN AVENS');
INSERT INTO national_flower (country, flower) VALUES ('ITALY', 'LILY');
INSERT INTO national_flower (country, flower) VALUES ('JAPAN', 'CHERRY BLOSSOM ');
INSERT INTO national_flower (country, flower) VALUES ('KYRGYZSTAN', 'TULIP');
INSERT INTO national_flower (country, flower) VALUES ('LUXEMBOURG', 'ROSE');
INSERT INTO national_flower (country, flower) VALUES ('MALDIVES', 'PINK ROSE');
INSERT INTO national_flower (country, flower) VALUES ('POLAND', 'CORN POPPY');
INSERT INTO national_flower (country, flower) VALUES ('RUSSIA', 'CAMOMILE');
INSERT INTO national_flower (country, flower) VALUES ('SCOTLAND', 'THISTLE');
INSERT INTO national_flower (country, flower) VALUES ('SINGAPORE', 'VANDA MISS JOAQUIM ORCHID');
INSERT INTO national_flower (country, flower) VALUES ('SPAIN', 'RED CARNATION');
INSERT INTO national_flower (country, flower) VALUES ('SWITZERLAND', 'EDELWEISS');
INSERT INTO national_flower (country, flower) VALUES ('TURKEY', 'TULIP');
INSERT INTO national_flower (country, flower) VALUES ('UKRAINE', 'SUNFLOWER');
INSERT INTO national_flower (country, flower) VALUES ('UNITED STATES', 'ROSE');
