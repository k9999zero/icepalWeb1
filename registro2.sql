/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     14/9/2023 13:52:04                           */
/*==============================================================*/


drop table if exists CELO;

drop table if exists CERDO;

drop table if exists CORRAL;

drop table if exists DIAGNOSTICO;

drop table if exists FICHA_PARTO;

drop table if exists LECHON;

drop table if exists MADRE;

drop table if exists MEDICAMENTO;

/*==============================================================*/
/* Table: CELO                                                  */
/*==============================================================*/
create table CELO
(
   ID_CELO              int not null auto_increment,
   ID_MADRE             int,
   F_CELO               varchar(50),
   N_CELO               int,
   F_REG                date,
   primary key (ID_CELO)
);

/*==============================================================*/
/* Table: CERDO                                                 */
/*==============================================================*/
create table CERDO
(
   ID_CERDO             int not null auto_increment,
   ID_CORRAL            int,
   PESO_CERDO           varchar(30),
   RAZA                 varchar(30),
   F_NACIMIENTO         varchar(50),
   F_SALIDA             varchar(50),
   SEXO                 varchar(50),
   F_REG                date,
   primary key (ID_CERDO)
);

/*==============================================================*/
/* Table: CORRAL                                                */
/*==============================================================*/
create table CORRAL
(
   ID_CORRAL            int not null auto_increment,
   COD_CORRAL           varchar(30),
   COD_POCILGA          varchar(30),
   primary key (ID_CORRAL)
);

/*==============================================================*/
/* Table: DIAGNOSTICO                                           */
/*==============================================================*/
create table DIAGNOSTICO
(
   ID_DIAGNOSTICO       int not null auto_increment,
   ID_MADRE             int,
   ID_LECHON            int,
   ID_CERDO             int,
   F_REG                varchar(50),
   DETALLES             varchar(100),
   primary key (ID_DIAGNOSTICO)
);

/*==============================================================*/
/* Table: FICHA_PARTO                                           */
/*==============================================================*/
create table FICHA_PARTO
(
   ID_PARTO             int not null auto_increment,
   ID_MADRE             int,
   N_LECHONES           int,
   VIVOS                int,
   MUERTOS              int,
   F_REG                date,
   N_PARTO              int,
   primary key (ID_PARTO)
);

/*==============================================================*/
/* Table: LECHON                                                */
/*==============================================================*/
create table LECHON
(
   ID_LECHON            int not null auto_increment,
   ID_CORRAL            int,
   ID_MADRE             int,
   PESO_LECHON          varchar(30),
   F_ENTRADA            varchar(50),
   F_SALIDA             varchar(50),
   F_REG                date,
   RAZA                 varchar(50),
   primary key (ID_LECHON)
);

/*==============================================================*/
/* Table: MADRE                                                 */
/*==============================================================*/
create table MADRE
(
   ID_MADRE             int not null auto_increment,
   ID_CORRAL            int,
   F_MONTA              varchar(50),
   F_REG                date,
   RAZA                 varchar(50),
   primary key (ID_MADRE)
);

/*==============================================================*/
/* Table: MEDICAMENTO                                           */
/*==============================================================*/
create table MEDICAMENTO
(
   ID_MED               int not null auto_increment,
   ID_DIAGNOSTICO       int,
   TIPO_MED             varchar(110),
   F_REG                varchar(50),
   primary key (ID_MED)
);

alter table CELO add constraint FK_RELATIONSHIP_5 foreign key (ID_MADRE)
      references MADRE (ID_MADRE) on delete restrict on update restrict;

alter table CERDO add constraint FK_RELATIONSHIP_2 foreign key (ID_CORRAL)
      references CORRAL (ID_CORRAL) on delete restrict on update restrict;

alter table DIAGNOSTICO add constraint FK_RELATIONSHIP_10 foreign key (ID_CERDO)
      references CERDO (ID_CERDO) on delete restrict on update restrict;

alter table DIAGNOSTICO add constraint FK_RELATIONSHIP_6 foreign key (ID_MADRE)
      references MADRE (ID_MADRE) on delete restrict on update restrict;

alter table DIAGNOSTICO add constraint FK_RELATIONSHIP_9 foreign key (ID_LECHON)
      references LECHON (ID_LECHON) on delete restrict on update restrict;

alter table FICHA_PARTO add constraint FK_RELATIONSHIP_8 foreign key (ID_MADRE)
      references MADRE (ID_MADRE) on delete restrict on update restrict;

alter table LECHON add constraint FK_RELATIONSHIP_1 foreign key (ID_CORRAL)
      references CORRAL (ID_CORRAL) on delete restrict on update restrict;

alter table LECHON add constraint FK_RELATIONSHIP_4 foreign key (ID_MADRE)
      references MADRE (ID_MADRE) on delete restrict on update restrict;

alter table MADRE add constraint FK_RELATIONSHIP_3 foreign key (ID_CORRAL)
      references CORRAL (ID_CORRAL) on delete restrict on update restrict;

alter table MEDICAMENTO add constraint FK_RELATIONSHIP_7 foreign key (ID_DIAGNOSTICO)
      references DIAGNOSTICO (ID_DIAGNOSTICO) on delete restrict on update restrict;

