/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2/9/2023 22:45:50                            */
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
   ID_CELO              int not null,
   ID_MADRE             int not null,
   F_CELO               char(50),
   N_CELO               int,
   F_REG                char(50),
   primary key (ID_CELO)
);

/*==============================================================*/
/* Table: CERDO                                                 */
/*==============================================================*/
create table CERDO
(
   ID_CERDO             int not null,
   ID_CORRAL            int not null,
   PESO_CERDO           char(30),
   RAZA                 char(30),
   F_NACIMIENTO         char(50),
   F_SALIDA             char(50),
   SEXO                 char(50),
   F_REG                char(52),
   primary key (ID_CERDO)
);

/*==============================================================*/
/* Table: CORRAL                                                */
/*==============================================================*/
create table CORRAL
(
   ID_CORRAL            int not null,
   COD_CORRAL           char(30),
   COD_POCILGA          char(30),
   primary key (ID_CORRAL)
);

/*==============================================================*/
/* Table: DIAGNOSTICO                                           */
/*==============================================================*/
create table DIAGNOSTICO
(
   ID_DIAGNOSTICO       int not null,
   ID_LECHON            int not null,
   ID_MADRE             int,
   F_REG                char(50),
   DETALLES             char(100),
   primary key (ID_DIAGNOSTICO)
);

/*==============================================================*/
/* Table: FICHA_PARTO                                           */
/*==============================================================*/
create table FICHA_PARTO
(
   ID_PARTO             int not null,
   ID_MADRE             int not null,
   N_LECHONES           int,
   VIVOS                int,
   MUERTOS              int,
   F_REG                char(52),
   N_PARTO              int,
   primary key (ID_PARTO)
);

/*==============================================================*/
/* Table: LECHON                                                */
/*==============================================================*/
create table LECHON
(
   ID_LECHON            int not null,
   ID_MADRE             int not null,
   PESO_LECHON          char(30),
   F_ENTRADA            char(50),
   F_SALIDA             char(50),
   F_REG                char(50),
   RAZA                 char(50),
   primary key (ID_LECHON)
);

/*==============================================================*/
/* Table: MADRE                                                 */
/*==============================================================*/
create table MADRE
(
   ID_CERDO             int not null,
   ID_MADRE             int not null,
   F_MONTA              char(50),
   F_REGISTRO           char(50),
   RAZA                 char(50),
   primary key (ID_MADRE)
);

/*==============================================================*/
/* Table: MEDICAMENTO                                           */
/*==============================================================*/
create table MEDICAMENTO
(
   ID_MED               int not null,
   ID_DIAGNOSTICO       int not null,
   TIPO_MED             char(110),
   F_REG                char(50),
   primary key (ID_MED)
);

alter table CELO add constraint FK_RELATIONSHIP_5 foreign key (ID_MADRE)
      references MADRE (ID_MADRE) on delete restrict on update restrict;

alter table CERDO add constraint FK_CERDO_CENTA foreign key (ID_CORRAL)
      references CORRAL (ID_CORRAL) on delete restrict on update restrict;

alter table DIAGNOSTICO add constraint FK_RELATIONSHIP_6 foreign key (ID_MADRE)
      references MADRE (ID_MADRE) on delete restrict on update restrict;

alter table DIAGNOSTICO add constraint FK_RELATIONSHIP_7 foreign key (ID_LECHON)
      references LECHON (ID_LECHON) on delete restrict on update restrict;

alter table FICHA_PARTO add constraint FK_RELATIONSHIP_4 foreign key (ID_MADRE)
      references MADRE (ID_MADRE) on delete restrict on update restrict;

alter table LECHON add constraint FK_RELATIONSHIP_9 foreign key (ID_MADRE)
      references MADRE (ID_MADRE) on delete restrict on update restrict;

alter table MADRE add constraint FK_CERDO_MADRE foreign key (ID_CERDO)
      references CERDO (ID_CERDO) on delete restrict on update restrict;

alter table MEDICAMENTO add constraint FK_RELATIONSHIP_8 foreign key (ID_DIAGNOSTICO)
      references DIAGNOSTICO (ID_DIAGNOSTICO) on delete restrict on update restrict;

