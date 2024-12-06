<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# Git Commands for Laravel Project

This document outlines the essential Git commands used for managing a Laravel project. These commands will help you clone, branch, commit, push, and manage your repository efficiently.

## Setting Up the Repository

1. **Clone an Existing Repository**
   ```bash
   git clone <repository-url>
   ```
   Example:
   ```bash
   git clone https://github.com/username/laravel-1.git
   ```

2. **Navigate to the Project Directory**
   ```bash
   cd laravel-1
   ```

3. **Initialize a New Git Repository**
   ```bash
   git init
   ```

## Branch Management

1. **Create a New Branch**
   ```bash
   git branch <branch-name>
   ```
   Example:
   ```bash
   git branch kalani-devv
   ```

2. **Switch to a Branch**
   ```bash
   git checkout <branch-name>
   ```
   Example:
   ```bash
   git checkout kalani-devv
   ```

3. **Create and Switch to a New Branch**
   ```bash
   git checkout -b <branch-name>
   ```
   Example:
   ```bash
   git checkout -b kalani-devv
   ```

4. **List All Branches**
   ```bash
   git branch
   ```

5. **Delete a Branch**
   ```bash
   git branch -d <branch-name>
   ```

## Staging and Committing Changes

1. **Check the Status of Your Repository**
   ```bash
   git status
   ```

2. **Stage Changes**
   ```bash
   git add <file-name>
   ```
   To stage all changes:
   ```bash
   git add .
   ```

3. **Commit Changes**
   ```bash
   git commit -m "Commit message"
   ```
   Example:
   ```bash
   git commit -m "Added user authentication feature"
   ```

## Pushing and Pulling Changes

1. **Push Changes to a Remote Repository**
   ```bash
   git push origin <branch-name>
   ```
   Example:
   ```bash
   git push origin kalani-devv
   ```

2. **Pull Changes from a Remote Repository**
   ```bash
   git pull origin <branch-name>
   ```

## Merging and Resolving Conflicts

1. **Merge a Branch into the Current Branch**
   ```bash
   git merge <branch-name>
   ```
   Example:
   ```bash
   git merge main
   ```

2. **Resolve Merge Conflicts**
   - Open the conflicting files and manually resolve the conflicts.
   - Stage the resolved files:
     ```bash
     git add <file-name>
     ```
   - Commit the merge:
     ```bash
     git commit -m "Resolved merge conflicts"
     ```

## Viewing Logs and History

1. **View Commit History**
   ```bash
   git log
   ```
   For a compact view:
   ```bash
   git log --oneline
   ```

2. **Show Changes Made to Files**
   ```bash
   git diff
   ```

## Miscellaneous Commands

1. **Discard Changes**
   ```bash
   git checkout -- <file-name>
   ```

2. **Remove Files from Staging Area**
   ```bash
   git reset <file-name>
   ```

3. **Remove the Last Commit (Soft Reset)**
   ```bash
   git reset --soft HEAD~1
   ```

4. **Remove the Last Commit (Hard Reset)**
   ```bash
   git reset --hard HEAD~1
   ```



