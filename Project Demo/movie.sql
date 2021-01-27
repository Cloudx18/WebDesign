create table moviedata(
    id int not null auto_increment primary key,
    movie varchar(50) not null,
    showdate varchar(40) not null,
    showtime varchar(40) not null,
    quantity int not null,  
	firstname varchar(40) not null,
	lastname varchar(40) not null,
	mobilenumber varchar(40) not null,
	email varchar(320) not null	
);


