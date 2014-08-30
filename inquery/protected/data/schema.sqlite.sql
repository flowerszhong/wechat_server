CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);

CREATE TABLE tbl_yellow_cars (id INTEGER PRIMARY KEY, FZJG TEXT, car_id TEXT, plate_type TEXT, car_type TEXT,use_type TEXT, reg_date TEXT, oil TEXT, valid_expire_date TEXT, Manufacture_date TEXT);


INSERT INTO tbl_user (username, password, email) VALUES ('test1', 'pass1', 'test1@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test2', 'pass2', 'test2@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test3', 'pass3', 'test3@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test4', 'pass4', 'test4@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test5', 'pass5', 'test5@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test6', 'pass6', 'test6@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test7', 'pass7', 'test7@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test8', 'pass8', 'test8@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test9', 'pass9', 'test9@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test10', 'pass10', 'test10@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test11', 'pass11', 'test11@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test12', 'pass12', 'test12@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test13', 'pass13', 'test13@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test14', 'pass14', 'test14@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test15', 'pass15', 'test15@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test16', 'pass16', 'test16@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test17', 'pass17', 'test17@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test18', 'pass18', 'test18@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test19', 'pass19', 'test19@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test20', 'pass20', 'test20@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test21', 'pass21', 'test21@example.com');




CREATE TABLE tbl_yellow_cars (id INTEGER PRIMARY KEY, FZJG TEXT, car_id TEXT, plate_type TEXT, car_type TEXT,use_type TEXT, reg_date TEXT, oil TEXT, valid_expire_date TEXT, Manufacture_date TEXT);
INSERT INTO tbl_yellow_cars(FZJG, car_id , plate_type , car_type ,use_type , reg_date , oil , valid_expire_date , Manufacture_date ) VALUES('粤G','GD1805','小汽车','小型轿车','非营运','2000-06-26','汽油','2014-06-30','2000-01-01');
INSERT INTO tbl_yellow_cars(FZJG, car_id , plate_type , car_type ,use_type , reg_date , oil , valid_expire_date , Manufacture_date ) VALUES('粤G','GD1805','小汽车','小型轿车','非营运','00-6-26','汽油','14-6-30','00-1-1');
INSERT INTO tbl_yellow_cars(FZJG, car_id , plate_type , car_type ,use_type , reg_date , oil , valid_expire_date , Manufacture_date ) VALUES('粤G','GE8326','小汽车','小型轿车','非营运','93-8-2','汽油','14-8-31','93-8-1');
INSERT INTO tbl_yellow_cars(FZJG, car_id , plate_type , car_type ,use_type , reg_date , oil , valid_expire_date , Manufacture_date ) VALUES('粤G','GK7901','小汽车','小型轿车','非营运','96-4-11','汽油','14-4-30','95-12-1');
INSERT INTO tbl_yellow_cars(FZJG, car_id , plate_type , car_type ,use_type , reg_date , oil , valid_expire_date , Manufacture_date ) VALUES('粤G','GC5153','小汽车','小型轿车','非营运','96-4-2','汽油','14-10-31','96-3-25');
INSERT INTO tbl_yellow_cars(FZJG, car_id , plate_type , car_type ,use_type , reg_date , oil , valid_expire_date , Manufacture_date ) VALUES('粤G','G88168','小汽车','小型轿车','非营运','95-1-3','汽油','14-1-31','94-12-1');
INSERT INTO tbl_yellow_cars(FZJG, car_id , plate_type , car_type ,use_type , reg_date , oil , valid_expire_date , Manufacture_date ) VALUES('粤G','G65423','小汽车','小型轿车','非营运','94-10-7','汽油','08-10-31','94-8-1');
INSERT INTO tbl_yellow_cars(FZJG, car_id , plate_type , car_type ,use_type , reg_date , oil , valid_expire_date , Manufacture_date ) VALUES('粤G','G35538','小汽车','小型轿车','非营运','98-3-4','汽油','01-8-28','98-3-4');
INSERT INTO tbl_yellow_cars(FZJG, car_id , plate_type , car_type ,use_type , reg_date , oil , valid_expire_date , Manufacture_date ) VALUES('粤G','G41631','小汽车','小型轿车','非营运','99-10-28','汽油','14-10-31','99-10-28');
INSERT INTO tbl_yellow_cars(FZJG, car_id , plate_type , car_type ,use_type , reg_date , oil , valid_expire_date , Manufacture_date ) VALUES('粤G','GE9568','小汽车','小型轿车','非营运','97-4-9','汽油','14-10-31','97-1-1');
INSERT INTO tbl_yellow_cars(FZJG, car_id , plate_type , car_type ,use_type , reg_date , oil , valid_expire_date , Manufacture_date ) VALUES('粤G','G40712','小汽车','小型轿车','非营运','98-7-24','汽油','07-7-31','98-7-24');
INSERT INTO tbl_yellow_cars(FZJG, car_id , plate_type , car_type ,use_type , reg_date , oil , valid_expire_date , Manufacture_date ) VALUES('粤G','GYQ399','小汽车','小型轿车','非营运','00-1-4','汽油','15-1-31','98-2-1');
INSERT INTO tbl_yellow_cars(FZJG, car_id , plate_type , car_type ,use_type , reg_date , oil , valid_expire_date , Manufacture_date ) VALUES('粤G','G39724','小汽车','微型轿车','非营运','98-2-5','汽油','07-4-1','97-12-1');
