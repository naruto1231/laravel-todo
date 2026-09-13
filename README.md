# laravel-todo

Laravelで作成したTodoアプリです。

## 概要

タスクの登録・管理ができるシンプルなTodoアプリです。

## 使用技術

- PHP
- Laravel
- Blade
- Docker

## 主な機能

- Todoの登録・編集・削除
- タスクの一覧表示

## セットアップ(ローカル)

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## Docker

Dockerfile / docker-compose.yml を用意しているため、Docker環境でも起動できます。

```bash
docker compose up -d
```

## デプロイ

Renderにデプロイしています(`php artisan serve` でRenderの`PORT`に対応)。

## ライセンス

MIT
