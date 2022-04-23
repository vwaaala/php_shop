create table product
(
    id         int auto_increment
        primary key,
    brand      varchar(50)   not null,
    name       varchar(100)  not null,
    price      double(10, 2) not null,
    image      varchar(255)  not null,
    created_at datetime      null
)
    auto_increment = 11;

create table user
(
    id         int auto_increment
        primary key,
    email      varchar(100) not null,
    first_name varchar(50)  not null,
    last_name  varchar(50)  not null,
    role       varchar(50)  not null,
    created_at datetime     null,
    constraint user_email_uindex
        unique (email)
)
    auto_increment = 2;

create table cart
(
    id         int auto_increment
        primary key,
    user_id    int not null,
    product_id int not null,
    constraint cart_product_id_fk
        foreign key (product_id) references product (id),
    constraint cart_user_id_fk
        foreign key (user_id) references user (id)
);

create table wishlist
(
    cart_id    int not null,
    product_id int not null,
    user_id    int not null,
    constraint wishlist_product_id_fk
        foreign key (product_id) references product (id),
    constraint wishlist_user_id_fk
        foreign key (user_id) references user (id)
);

