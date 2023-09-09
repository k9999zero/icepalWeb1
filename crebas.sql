/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     7/9/2023 20:07:35                            */
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
   F_CELO               varchar(25),
   N_CELO               varchar(25),
   F_REG                varchar(25),
   ID_CELO              int not null auto_increment,
   ID_MADRE             int,
   primary key (ID_CELO)
);

/*==============================================================*/
/* Table: CERDO                                                 */
/*==============================================================*/
create table CERDO
(
   PESO_CERDO           varchar(25),
   RAZA                 varchar(25),
   SEXO                 varchar(25),
   F_REG                varchar(25),
   F_NACIMIENTO         varchar(25),
   F_SALIDA             varchar(25),
   ID_CERDO             int not null auto_increment,
   ID_CORRAL            int,
   primary key (ID_CERDO)
);

/*==============================================================*/
/* Table: CORRAL                                                */
/*==============================================================*/
create table CORRAL
(
   ID_CORRAL            int not null auto_increment,
   COD_CORRAL           char(25),
   COD_POCILGA          char(25),
   primary key (ID_CORRAL)
);

/*==============================================================*/
/* Table: DIAGNOSTICO                                           */
/*==============================================================*/
create table DIAGNOSTICO
(
   DETALLE              varchar(25),
   F_REG                varchar(25),
   ID_DIAGNOSTICO       int not null auto_increment,
   ID_CERDO             int,
   ID_LECHON            int,
   primary key (ID_DIAGNOSTICO)
);

/*==============================================================*/
/* Table: FICHA_PARTO                                           */
/*==============================================================*/
create table FICHA_PARTO
(
   F_PARTO              varchar(25),
   VIVOS                varchar(25),
   MUERTOS              varchar(25),
   N_PARTO              varchar(25),
   N_LECHONES           varchar(25),
   ID_PARTO             int not null auto_increment,
   ID_MADRE             int,
   primary key (ID_PARTO)
);

/*==============================================================*/
/* Table: LECHON                                                */
/*==============================================================*/
create table LECHON
(
   PESO_LECHON          varchar(25),
   RAZA                 varchar(25),
   SEXO                 varchar(25),
   F_ENTRADA            varchar(25),
   F_SALIDA             varchar(25),
   F_REG                varchar(25),
   ID_LECHON            int not null auto_increment,
   ID_CERDO             int,
   primary key (ID_LECHON)
);

/*==============================================================*/
/* Table: MADRE                                                 */
/*==============================================================*/
create table MADRE
(
   F_MONTA              varchar(25),
   RAZA                 varchar(25),
   F_REG                varchar(25),
   ID_MADRE             int not null auto_increment,
   ID_CERDO             int,
   primary key (ID_MADRE)
);

/*==============================================================*/
/* Table: MEDICAMENTO                                           */
/*==============================================================*/
create table MEDICAMENTO
(
   MEDICAMENTO          varchar(25),
   F_REG                varchar(25),
   ID_MEDICAMENTO       int not null auto_increment,
   ID_DIAGNOSTICO       int,
   primary key (ID_MEDICAMENTO)
);

alter table CELO add constraint FK_RELATIONSHIP_9 foreign key (ID_MADRE)
      references MADRE (ID_MADRE) on delete restrict on update restrict;

alter table CERDO add constraint FK_RELATIONSHIP_2 foreign key (ID_CORRAL)
      references CORRAL (ID_CORRAL) on delete restrict on update restrict;

alter table DIAGNOSTICO add constraint FK_RELATIONSHIP_5 foreign key (ID_CERDO)
      references CERDO (ID_CERDO) on delete restrict on update restrict;

alter table DIAGNOSTICO add constraint FK_RELATIONSHIP_6 foreign key (ID_LECHON)
      references LECHON (ID_LECHON) on delete restrict on update restrict;

alter table FICHA_PARTO add constraint FK_RELATIONSHIP_7 foreign key (ID_MADRE)
      references MADRE (ID_MADRE) on delete restrict on update restrict;

alter table LECHON add constraint FK_RELATIONSHIP_3 foreign key (ID_CERDO)
      references CERDO (ID_CERDO) on delete restrict on update restrict;

alter table MADRE add constraint FK_RELATIONSHIP_4 foreign key (ID_CERDO)
      references CERDO (ID_CERDO) on delete restrict on update restrict;

alter table MEDICAMENTO add constraint FK_RELATIONSHIP_8 foreign key (ID_DIAGNOSTICO)
      references DIAGNOSTICO (ID_DIAGNOSTICO) on delete restrict on update restrict;

