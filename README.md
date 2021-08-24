<p align="center"><img src="./public/assets/img/favicon.png" width="100" height="100"></p>

# Information

[![Github All Releases](https://badgen.net/github/release/rahmatsubandi/lara-stater)]() [![Github All Releases](https://img.shields.io/github/downloads/rahmatsubandi/lara-stater/total.svg)]() [![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel) [![License](https://poser.pugx.org/laravel/framework/license.svg)](https://github.com/rahmatsubandi/lara-stater/blob/main/license.txt) [![Github Stars](https://img.shields.io/github/stars/rahmatsubandi/lara-stater.svg)]() [![Github Forks](https://img.shields.io/github/forks/rahmatsubandi/lara-stater.svg)]() [![Github Contributors](https://img.shields.io/github/contributors/rahmatsubandi/lara-stater.svg)]() [![Github Issues](https://img.shields.io/github/issues/rahmatsubandi/lara-stater.svg)]() [![Github All Releases](https://badgen.net/github/watchers/rahmatsubandi/lara-stater)](https://github.com/rahmatsubandi/lara-stater/) [![Buy me black arabica](https://badgen.net/badge/icon/kofi?icon=kofi&label)](https://ko-fi.com/B0B85U6Z6s) [![Sponsor](https://opencollective.com/lara-stater/tiers/sponsor.svg?avatarHeight=36)](https://opencollective.com/lara-stater/tiers/sponsor.svg?avatarHeight=50&width=600)

---

## About Lara Stater

Lara Stater is an open source application for anyone, anywhere who wants to use it for personal, community, even industrial purposes.

Lara Stater was created with a way to create a website that is too monotonous or repetitive. With Lara Stater, this repetitive work is no longer necessary.

Why is that?
Of course in making a website if from the beginning what you need is:

-   Login and Register feature.
-   CRUD (Create, Read, Update, Delete) data or files.
-   Role Management
-   Permissions Management
-   User Management
-   Website Settings Management
-   Activities on the website

By using Lara Stater you don't have to bother creating a website from 0 anymore. This is a revolution for the lay people!

> <i>But you also need to learn programming too! Don't be lazy all the time.</i> 🐱‍💻

---

# Install Lara Stater

> <i>In using the Lara Stater application you need to know the scope of the basic environment in laravel. Of course this affects the use of this starter application. </i>

1. Clone Project from Github.

    ```bash
    git clone https://github.com/rahmatsubandi/lara-stater.git
    ```

2. Go to the folder application using <code>cd</code> command on your cmd or terminal.

    > If you have prepared a folder before cloning this repository, ignore step number 2.

3. Run the following command to install Laravel:

    ```bash
    composer install
    ```

4. Copy <code>.env.example</code> file to <code>.env</code> on the root folder. You can type <code>copy .env.example .env</code> f using command prompt Windows or <code> p .env.example .env </code> if using terminal, Ubuntu.

5. Open your .env file and change the database name (<code>DB_DATABASE</code>) to whatever you have, username (<code>DB_USERNAME</code>) and password (<code>DB_PASSWORD</code>) field correspond to your configuration.
   By default, the username is root and you can leave the password field empty. <b>(This is for Xampp)</b>
   By default, the username is root and password is also root. <b>(This is for Lamp)</b>

6. Run:

    ```bash
    php artisan key:generate
    ```

7. Run:

    ```bash
    php artisan migrate
    ```

    > <b>Note:</b> If you want an existing sample data, you can run it with:

    ```bash
    php artisan migrate:fresh --seed
    ```

8. Run:

    ```bash
    php artisan serve
    ```

9. Open your browser and type <code>http://localhost:8000</code> or <code>http://127.0.0.1:8000</code>.

10. Login access (If you use <code>php artisan migrate:fresh --seed</code> command) then: -

    - | Role  | Email               | Password |
      | ----- | ------------------- | -------- |
      | Admin | rhmtin12@gmail.com  | password |
      | User  | user@larastater.com | password |

    If you don't use the <code>php artisan migrate:fresh --seed</code> command then you can create your own account!

    > Feel the magic that is in Lara Stater. 🚀🚀🚀

---

## About Lara Stater

Lara Stater is an open source application for anyone, anywhere who wants to use it for personal, community, even industrial purposes.

Lara Stater was created with a way to create a website that is too monotonous or repetitive. With Lara Stater, this repetitive work is no longer necessary.

Why is that?
Of course in making a website if from the beginning what you need is:

-   Login and Register feature.
-   CRUD (Create, Read, Update, Delete) data or files.
-   Role Management
-   Permissions Management
-   User Management
-   Website Settings Management
-   Activities on the website

By using Lara Stater you don't have to bother creating a website from 0 anymore. This is a revolution for the lay people!

> <i>But you also need to learn programming too! Don't be lazy all the time.</i> 🐱‍💻

---

## Libraries used docs

-   [Laravel Collective](https://laravelcollective.com/docs/6.0/html)
-   [Laravel Permission](https://spatie.be/docs/laravel-permission/v3/introduction)
-   [Spatie (Activity)](https://spatie.be/docs/laravel-activitylog/v3/introduction)
-   [Unisharp (File Manager)](https://unisharp.github.io/laravel-filemanager/)
-   [Anlurto (Settings)](https://github.com/anlutro/laravel-settings)
-   [Laracasts Flash](https://github.com/laracasts/flash)

## License

The Lara Stater is open-sourced software licensed under the [MIT license](https://github.com/rahmatsubandi/lara-stater/blob/main/license.txt).
