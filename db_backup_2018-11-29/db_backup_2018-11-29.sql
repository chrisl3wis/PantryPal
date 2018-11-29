create table diets
(
  ID   int auto_increment
    primary key,
  diet varchar(22) null
);

create table errorLogs
(
  id            int auto_increment
    primary key,
  email         varchar(64) null,
  errorlog      mediumtext  null,
  errornumber   varchar(20) null,
  errorDateTime datetime    null
)
  engine = MyISAM
  charset = utf8;

create table failed_logins
(
  username    varchar(64) not null
    primary key,
  login_count int(2)      null,
  last_time   int         null,
  address     varchar(64) not null
)
  engine = MyISAM
  charset = utf8;

create table ingredients
(
  ID         int auto_increment
    primary key,
  ingredient varchar(80) not null
);

create table login
(
  id                int auto_increment
    primary key,
  forename          varchar(64) not null,
  surname           varchar(64) not null,
  email             varchar(64) not null,
  username          varchar(64) null,
  resetpassword     varchar(80) null,
  confirmcode       varchar(32) not null,
  registrationStart datetime    null,
  membershipStart   datetime    null,
  password          varchar(80) not null
)
  charset = utf8;

create table meals
(
  ID        int auto_increment
    primary key,
  meal_type varchar(22) null
);

create table recipe
(
  ID          int auto_increment
    primary key,
  title       varchar(200) null,
  description varchar(200) not null,
  url         varchar(200) not null,
  cooktime    int          null,
  imgURL      varchar(255) null
);

create table recipe_diet
(
  ID        int auto_increment
    primary key,
  recipe_id int null,
  diet_id   int null,
  constraint recipe_diet_diets_ID_fk
  foreign key (diet_id) references diets (ID),
  constraint recipe_diet_recipe_ID_fk
  foreign key (recipe_id) references recipe (ID)
);

create table recipe_ingredient
(
  ID            int auto_increment
    primary key,
  recipe_ID     int not null,
  ingredient_ID int not null,
  constraint recipe_ingredient_ingredients_ID_fk
  foreign key (ingredient_ID) references ingredients (ID),
  constraint recipe_ingredient_recipe_ID_fk
  foreign key (recipe_ID) references recipe (ID)
);

create index recipe_ingredient_ingredients_ID_fk_2
  on recipe_ingredient (ingredient_ID);

create index recipe_ingredient_recipe_ID_fk_2
  on recipe_ingredient (recipe_ID);

create table recipe_meal
(
  ID        int auto_increment
    primary key,
  recipe_id int null,
  meal_id   int null,
  constraint recipe_meal_meals_ID_fk
  foreign key (meal_id) references meals (ID),
  constraint recipe_meal_recipe_ID_fk
  foreign key (recipe_id) references recipe (ID)
);

create table users
(
  id_user      int auto_increment
    primary key,
  name         varchar(128) not null,
  email        varchar(64)  not null,
  phone_number varchar(16)  not null,
  username     varchar(16)  not null,
  salt         varchar(50)  not null,
  password     varchar(80)  not null,
  confirmcode  varchar(32)  null
);

create view all_data_view as
  select `lewischr_recipes`.`recipe`.`ID`              AS `ID`,
         `lewischr_recipes`.`recipe`.`title`           AS `title`,
         `lewischr_recipes`.`recipe`.`description`     AS `description`,
         `lewischr_recipes`.`recipe`.`url`             AS `url`,
         `lewischr_recipes`.`recipe`.`imgURL`          AS `imgURL`,
         `lewischr_recipes`.`recipe`.`cooktime`        AS `cooktime`,
         `lewischr_recipes`.`ingredients`.`ingredient` AS `ingredient`,
         `lewischr_recipes`.`diets`.`diet`             AS `diet`,
         `lewischr_recipes`.`meals`.`meal_type`        AS `meal_type`
  from ((((((`lewischr_recipes`.`recipe` join `lewischr_recipes`.`recipe_ingredient` on ((
    `lewischr_recipes`.`recipe`.`ID` =
    `lewischr_recipes`.`recipe_ingredient`.`recipe_ID`))) join `lewischr_recipes`.`ingredients` on ((
    `lewischr_recipes`.`recipe_ingredient`.`ingredient_ID` =
    `lewischr_recipes`.`ingredients`.`ID`))) join `lewischr_recipes`.`recipe_diet` on ((`lewischr_recipes`.`recipe`.`ID`
                                                                                        =
                                                                                        `lewischr_recipes`.`recipe_diet`.`recipe_id`))) join `lewischr_recipes`.`diets` on ((
    `lewischr_recipes`.`recipe_diet`.`diet_id` =
    `lewischr_recipes`.`diets`.`ID`))) join `lewischr_recipes`.`recipe_meal` on ((`lewischr_recipes`.`recipe`.`ID` =
                                                                                  `lewischr_recipes`.`recipe_meal`.`recipe_id`))) join `lewischr_recipes`.`meals` on ((
    `lewischr_recipes`.`recipe_meal`.`meal_id` = `lewischr_recipes`.`meals`.`ID`)))
  where 1
  order by `lewischr_recipes`.`recipe`.`title`;

create view recipe_diet_join as
  select `lewischr_recipes`.`recipe`.`ID`    AS `dID`,
         `lewischr_recipes`.`recipe`.`title` AS `title`,
         `lewischr_recipes`.`diets`.`diet`   AS `diet`
  from ((`lewischr_recipes`.`recipe` join `lewischr_recipes`.`recipe_diet` on ((`lewischr_recipes`.`recipe`.`ID` =
                                                                                `lewischr_recipes`.`recipe_diet`.`recipe_id`))) join `lewischr_recipes`.`diets` on ((
    `lewischr_recipes`.`recipe_diet`.`diet_id` = `lewischr_recipes`.`diets`.`ID`)))
  where 1;

create view recipe_ingredient_join as
  select `lewischr_recipes`.`recipe`.`ID`              AS `rID`,
         `lewischr_recipes`.`recipe`.`title`           AS `title`,
         `lewischr_recipes`.`ingredients`.`ingredient` AS `ingredient`
  from ((`lewischr_recipes`.`recipe` join `lewischr_recipes`.`recipe_ingredient` on ((`lewischr_recipes`.`recipe`.`ID` =
                                                                                      `lewischr_recipes`.`recipe_ingredient`.`recipe_ID`))) join `lewischr_recipes`.`ingredients` on ((
    `lewischr_recipes`.`recipe_ingredient`.`ingredient_ID` = `lewischr_recipes`.`ingredients`.`ID`)))
  where 1;

create view recipe_meal_join as
  select `lewischr_recipes`.`recipe`.`ID`       AS `mID`,
         `lewischr_recipes`.`recipe`.`title`    AS `title`,
         `lewischr_recipes`.`meals`.`meal_type` AS `meal`
  from ((`lewischr_recipes`.`recipe` join `lewischr_recipes`.`recipe_meal` on ((`lewischr_recipes`.`recipe`.`ID` =
                                                                                `lewischr_recipes`.`recipe_meal`.`recipe_id`))) join `lewischr_recipes`.`meals` on ((
    `lewischr_recipes`.`recipe_meal`.`meal_id` = `lewischr_recipes`.`meals`.`ID`)))
  where 1;


