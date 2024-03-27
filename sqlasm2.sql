Create database asm2;

use asm2;

Create table users
(
    id int primary key auto_increment,
    name varchar(100) NOT NULL,
    email varchar(100) NOT NULL UNIQUE,
    password varchar(200) NOT NULL,
    created_at date DEFAULT current_timestamp(),
    updated_at date null
);

Create table personal_access_tokens
(
    id int primary key auto_increment,
    name varchar(100) NOT NULL,
    email varchar(100) NOT NULL UNIQUE,
    password varchar(200) NOT NULL,
    created_at date DEFAULT current_timestamp(),
    updated_at date null
);

INSERT INTO `users` (`name`, `email`, `password`, `created_at`, `updated_at`) VALUES
('Admin Manager', 'admin@gmail.com', '$2y$12$ElFD8Eq8bOZ8bsym04rY1e6znHP874r/FSPw/ZfMy1CB85O/Yc60q', '2024-03-08', '2024-03-08');

Create table customers
(
    id int primary key auto_increment,
    name varchar(100) NOT NULL,
    email varchar(100) NOT NULL UNIQUE,
    phone varchar(100) NOT NULL UNIQUE,
    address varchar(100) NULL,
    gender tinyint NOT NULL DEFAULT '0',
    password varchar(200) NOT NULL,
    email_verified_at date null,
    created_at date DEFAULT current_timestamp(),
    updated_at date null
);

Create table customer_reset_tokens
(
    email varchar(100) primary key,
    token varchar(100) NOT NULL UNIQUE,
    created_at date DEFAULT current_timestamp(),
    updated_at date null
);


Create table categories
(
    id int primary key auto_increment,
    name varchar(100) NOT NULL UNIQUE,
    status tinyint(1) DEFAULT '0',
    created_at date DEFAULT current_timestamp(),
    updated_at date null
);



INSERT INTO categories(name, status) VALUES
('Hand Bag', 1) ,
('Dress', 1) ,
('Shoes', 1) 


Create table products
(
    id int primary key auto_increment,
    name varchar(100) NOT NULL UNIQUE,
    image varchar(100) NOT NULL,
    price float(10,2) NOT NULL,
    sale_price float(10,2) NOT NULL,
    category_id int NOT NULL,
    description text NOT NULL,
    status tinyint(1) DEFAULT '0',
    created_at date DEFAULT current_timestamp(),
    updated_at date null,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

Create table product_images
(
    id int primary key auto_increment,
    image varchar(100) NOT NULL,
    product_id int NOT NULL,
    status tinyint(1) DEFAULT '0',
    created_at date DEFAULT current_timestamp(),
    updated_at date null,
    FOREIGN KEY (product_id) REFERENCES products(id)
);



Create table orders
(
    id int primary key auto_increment,
    name varchar(100) NULL,
    email varchar(100) NULL,
    phone varchar(100) NULL,
    address varchar(100) NULL,
    token varchar(50) NULL,
    customer_id int NOT NULL,
    status tinyint(1) DEFAULT '0',
    created_at date DEFAULT current_timestamp(),
    updated_at date null,
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);

Create table order_details
(
    order_id int NOT NULL,
    product_id int NOT NULL,
    quantity tinyint NOT NULL,
    price float(10,3) NOT NULL,
    primary key (order_id, product_id),
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);


Create table carts
(
    customer_id int NOT NULL,
    product_id int NOT NULL,
    price float(10,2) not null,
    quantity int not null,
    primary key (customer_id, product_id),
    FOREIGN KEY (customer_id) REFERENCES customers(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);