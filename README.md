
# Build com Buildx: 
Com buildx, é possível subir a imagem no dockerhub (registry)

```shell
    docker login              # Precisa ter conta no dockerhub, e acesso ao repositorio da imagem
    export COMPOSE_BAKE=true  # Para usar o buildx com compose
    docker-compose up --build # Para buildar img sem subir no registry, OU
    docker buildx bake --push # para subir pro registry
    docker compose up         # Executar imagem
```


# Pipeline

Precisa ter o `src/composer.json`

E dentro do container em /var/ww/html (src) - executar `composer install`. Ao executar isto, o Cake2 será iniciado em `Vendor/`.

Para iniciar um projeto novo: `Vendor/bin/cake bake project .`





As execuções do Bake sempre serão a partir do Vendor do composer `Vendor/bin/cake bake comando`, pois as criações de classese afins, serão realizadas dentro de `app/`.


