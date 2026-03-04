# ClubClub

A Laravel app for tracking a club of interest clubs — books, TV series, languages, and more — in one place.

## What It Does

Members of the ClubClub can join any number of SubClubs and log their progress on the board for each one. Each club type has its own tracked fields (e.g. chapters read, episodes watched, hours practiced), and members can leave notes, ratings, and discussion threads per item. Members who fall behind will be surfaced for poking.

## Clubs

- **Book Club**
- **TV Club**
- **Anime Club**
- **Movie Club**
- **Language Club**

## Stack

- **Laravel 11**
- **SQLite**
- **Blade / Tailwind CSS**

## Using

```bash
git clone git@github.com:your-org/club-of-clubs.git
cd club-of-clubs

composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate

php artisan migrate --seed

php artisan serve
```