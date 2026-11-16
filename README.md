# BrightSmile Theme

WordPress theme for the BrightSmile dental clinic website. It needs the `brightsmile-core` plugin, which provides the Services and Doctors content types and the booking form.

## Templates

| File | Used for |
|---|---|
| `front-page.php` | Home page |
| `page.php` | Normal pages (for example Book Appointment) |
| `page-doctors.php` | The Doctors page |
| `archive-service.php` | List of treatments |
| `single-service.php` | One treatment |
| `header.php`, `footer.php` | Shared header (with the Primary menu) and footer |
| `index.php` | Fallback |

## Menus

The theme has one menu location, **Primary**. Set it in Appearance, Menus.

## Local development

1. Put the folder in `wp-content/themes/`.
2. Run `composer install`.
3. Check the code style before every commit:

   `./vendor/bin/phpcs --standard=WordPress -n --ignore=vendor .`

Rules for contributing are in `CONTRIBUTING.md`.

## Deploy

Every change goes through a Pull Request. CI runs `php -l` and PHPCS. When the PR is merged to `main`, the deploy job uploads the theme to the Hostinger server over SSH. The server details are stored as GitHub Secrets, never in the repo.