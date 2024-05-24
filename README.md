# phpoc
POC for a php project 


## Local Environment
A file `.env` it's defined a set of variables described next, make sure that the database host it's the same as the `docker-compose.yml` service name for the database container. An example will be provided in this repository, **remember it's only for local test.**

```
DATABASE_HOST=Compose_Database_Service
DATABASE_PORT=3306
DATABASE_NAME=test
DATABASE_USER=yourname
DATABASE_PASSWORD=yourpassword
```

As soon as you validate the variables, run the next command:
```
docker-compose up --build
```

## Production or Dev Environment
For production environment make sure to define the database environment variables required for your environment in regular (secure) way.