
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

Para iniciar um projeto novo: `Vendor/bin/cake bake project .`. O composer.json e .lock ficarão no mesmo nivel.


# Testes

🔁 setUp() e tearDown() são executados para cada método de teste individualmente.

🧼 As tabelas das fixtures são apagadas e recriadas entre cada método de teste.

Isso garante isolamento total entre os testes, evitando que um testA() influencie o testB().