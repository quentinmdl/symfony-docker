# Project DOCKER


## Group
    - MENDEL Quentin
    - HOCHET Dylan

Project fromscratch implements users data, with this following dependencies:
    php
    mysql
    phpmyadmin,
    proxy


## Configuration 
    Create .env file and complete it (refers to .example.env)


## How to run

Firstly, run docker composer file :

```bash
    docker-compose up
```

Execute migrations files in mysql container :

```bash
    docker exec -it project-mysql bash
```

```sql
    mysql -u admin -p project_db < 001_users.sql
```
