
# Build com Buildx: 
Com buildx, é possível subir a imagem no dockerhub (registry)

```shell
    docker login              # Precisa ter conta no dockerhub, e acesso ao repositorio da imagem
    export COMPOSE_BAKE=true  # Para usar o buildx com compose
    docker-compose up --build # Para buildar img sem subir no registry, OU
    docker buildx bake --push # para subir pro registry
    docker compose up         # Executar imagem
```
