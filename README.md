# Football Predictor

## 1. Docker
Install [Docker](https://www.docker.com/products/docker-desktop) and [Lando](https://docs.lando.dev/basics/installation.html#system-requirements) .

## 2. Install the backend 
Follow these steps to install the backend:
### 2.1 Lando
Run the following to start the containers:
```bash
lando start
```
### 2.2 Appservice
Enter the appservice container:
```bash
lando ssh
```
### 2.3 Composer
Install all dependencies:
```bash
composer install
```
### 2.4 Environment
Set environment variables:
```bash
cp .env.example .env
```
### 2.5 Artisan
Generate application key:
```bash
php artisan key:generate
```
Run migrations and seeds:
```bash
php artisan migrate --seed
```
## 3. Frontend
Install node modules:
```bash
npm install
```
Build the frontend:
```bash
npm run dev
```
Live reload:
```bash
npm run watch
```
