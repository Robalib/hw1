Create DATABASE hw1;
USE hw1;

CREATE TABLE users (
    id integer primary key auto_increment,
    username varchar(16) not null unique,
    password varchar(255) not null,
    email varchar(255) not null unique,
    name varchar(255) not null,
    surname varchar(255) not null
) Engine = InnoDB;

CREATE TABLE products (
    id integer primary key auto_increment,
    name varchar(255) not null,
    url varchar(255) not null,
    price integer not null
) Engine = InnoDB;

CREATE TABLE favourites (
    product_id integer not null,
    user_id integer not null,
    primary key(product_id, user_id),
    foreign key (product_id) references products(id),
    foreign key (user_id) references users(id)
) Engine = InnoDB;

insert into products(name, url, price) values('Gcds Logo Lounge Cropped T-shirt','img/cropped_t-shirt.webp',95);
insert into products(name, url, price) values('Logo Bikini Bra','img/bikini.webp',120);
insert into products(name, url, price) values('Gcds Logo Lounge Tank Top','img/tank_top.webp',110);
insert into products(name, url, price) values('Ti Amo Gcds Socks','img/socks.webp',40);
insert into products(name, url, price) values('Gcds Logo Lounge Swim Shorts','img/swim_shorts.webp',175);
insert into products(name, url, price) values('Ti Amo Gcds Baseball Hat','img/hat.webp',75);
insert into products(name, url, price) values('Gcds Logo Lounge Baseball Hat','img/black_hat.webp',75);
insert into products(name, url, price) values('Classic Logo Belt','img/belt.webp',155);
insert into products(name, url, price) values('Heart Bag','img/heart_bag.webp',350);
insert into products(name, url, price) values('Custodia per Auricolari pro Gcds','img/custodia_auricolari.webp',45);
insert into products(name, url, price) values('Leather Racing Jacket','img/jacket.webp',2200);
insert into products(name, url, price) values('Call Me Bag','img/call_me_bag.webp',625);
