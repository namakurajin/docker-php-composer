
FROM php:8.2-cli

RUN apt-get update && apt-get install -y git zip unzip

COPY ./app /usr/src/app

# マルチステージビルドを利用してComposerの実行ファイルを取得している
COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /usr/src/app
