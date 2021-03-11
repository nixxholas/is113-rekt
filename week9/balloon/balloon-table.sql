create database bizballoon;

CREATE TABLE IF NOT EXISTS balloon (
    balloonID   VARCHAR(20) NOT NULL,
    color       VARCHAR(20) NOT NULL,
    size        VARCHAR(5) NOT NULL,
    price       INTEGER NOT NULL,
    gas         VARCHAR(20) NOT NULL,
    descr        VARCHAR(30) NOT NULL
);


INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon1", "Red", "S",2, "oxygen","Red S oxygen");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon2", "Red", "S", 3, "helium","Red S helium");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon3", "Red", "M", 4, "oxygen","Red M oxygen");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon4", "Red", "M", 5, "helium","Red MS helium");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon5", "Red", "L", 6, "oxygen","Red L oxygen");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon6", "Red", "L", 7, "helium","Red L helium");




INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon7", "Gold", "S", 3, "oxygen","Gold S oxygen");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon8", "Gold", "S", 4, "helium","Gold S helium");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon9", "Gold", "M", 5, "oxygen","Gold M oxygen");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon10", "Gold", "M", 6, "helium","Gold M helium");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon11", "Gold", "L", 7, "oxygen","Gold L oxygen");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon12", "Gold", "L", 8, "helium","Gold L helium");


INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon13", "Green", "S", 4, "oxygen","Green S oxygen");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon14", "Green", "S", 5, "helium","Green S helium");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon15", "Green", "M", 6, "oxygen","Green M oxygen");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon16", "Green", "M", 7, "helium","Green M helium");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon17", "Green", "L", 8, "oxygen","Green L oxygen");

INSERT INTO balloon (balloonID, color, size, price, gas, descr) VALUES 
("balloon18", "Green", "L", 9, "helium","Green L helium");