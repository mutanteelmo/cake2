group "default" {
  targets = ["app"]
}

target "app" {
  context = "./docker/dockerfiles"
  dockerfile = "PHP&Composer"
  tags = ["analistaelmo/cakephp2_composer_app:1.0"]
}
