
# PHP + ComposerのDocker環境をつくる

## ビルド

```
docker compose build
```

## 起動

```
docker compose up -d
```

## コンテナに入る

```
docker compose exec app bash
```

## バージョン確認

```
php -v
```

```
composer --version
```

## パッケージのインストール

まだapp/composer.lockがない（つまり初回）場合。

```
composer update
```

すでにapp/composer.lockがある場合。

```
composer install
```

上記いずれも実行すると```app/vendor```ディレクトリが作られる。

## PHPの実行確認

```
php sample.php
```

app/logs/app.logに「Hello Monolog!!」が残る。

```
cat /usr/src/app/logs/app.log
```
