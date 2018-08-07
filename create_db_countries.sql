CREATE SCHEMA `COUNTRIES`;
USE `COUNTRIES`;

drop table if exists COUNTRY;

/*==============================================================*/
/* Table: COUNTRY                                               */
/*==============================================================*/
create table COUNTRY
(
   ID             		bigint not null auto_increment,
   NAME         		varchar(200),
   CAPITAL              varchar(200),
   primary key (ID)
);