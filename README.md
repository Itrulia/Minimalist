# Minimalist

Minimalist is a wrapper of mrclay/minify which integrates it into Laravel's View engine.

## Installation

Add `itrulia/minimalist` to `composer.json`.

    "itrulia/minimalist": "dev-master"
    
Run `composer update` to pull down the latest version of Minimalist. Now open up `app/config/app.php` and add the service provider to your `providers` array.

    'providers' => array(
        'Itrulia\Minimalist\MinimalistServiceProvider',
    )

## Usage

Rename your View file to NAME.blade.min.php, it is enough if you rename your layout file.
