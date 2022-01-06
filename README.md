<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Eris - property based testing

Don't write tests. Generate them! - John Hughes

## What is this?
Eris is a PHP port of Haskell's QuickCheck

See this [blog](https://blog.jessitron.com/2013/04/25/property-based-testing-what-is-it/) for an explanation of property based testing.

See this [primer](https://medium.com/@thinkfunctional/a-quickcheck-primer-for-php-developers-5ffbe20c16c8) on QuickCheck for PHP developers.

See the [docs](https://eris.readthedocs.io) for Eris.

See the [source](https://github.com/giorgiosironi/eris) for Eris.

See [this](https://www.youtube.com/watch?v=gPFSZ8oKjco) or [this](https://www.youtube.com/watch?v=hXnS_Xjwk2Y) or [this](https://www.youtube.com/watch?v=zi0rHwfiX1Q) presentation by John Hughes on QuickCheck.

See [this](https://www.youtube.com/watch?v=zvRAyq5wj38) John Hughes - How to specify it! A guide to writing properties of pure functions | Code Mesh LDN 19

See [this](https://blog.ploeh.dk/2015/01/10/diamond-kata-with-fscheck/) blog on using property based testing for TDD.

## Big idea
Testing is hard. Thorough testing is impossible. Proving behavior is not the same as testing behavior.

Property based testing seeks to prove that properties for a function will hold for all possible inputs. By generating tests based on properties, a property based testing tool can generate thousands of tests to verify whether the properties hold, or if they don't, it will try to narrow down the failure cases to identify exactly where the failure arose.

The developer is no longer concerned with how to express a specific test to identify correct or incorrect behavior, but rather identify what properties must hold for correct behavior.
