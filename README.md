# Creode's Wordpress base theme.
This theme contains minimal versions all Wordpress templates and styles.
Reusable functionality, template parts and styles can be added here and will become available to all child themes.
This theme is forked from and can be updated from: https://github.com/Automattic/_s

## Recomended intallation process
If your site uses composer with installer paths and "wordpress-theme" package types are correctly mapped to the Wordpress theme directory, this package can be installed using the following process:

Ensure that https://packagist.creode.co.uk is an availible repository by adding the following to the "repositories" array within composer.json

```
{
    "type": "composer",
    "url": "https://packagist.creode.co.uk"
}
```

1. open Terminal
2. cd to the directory containing composer.json
3. run: composer require creode/wordpress-base-theme:1.0.0-alpha1

## Parenting process