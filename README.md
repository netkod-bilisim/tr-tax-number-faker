# Tr Tax Number Faker

<div style="text-align: center">
<a href="https://packagist.org/packages/netkod-bilisim/tr-tax-number-faker" rel="nofollow">
    <img src="https://img.shields.io/packagist/v/netkod-bilisim/tr-tax-number-faker" alt="Latest Stable Version">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-tax-number-faker" rel="nofollow">
    <img src="https://img.shields.io/packagist/dt/netkod-bilisim/tr-tax-number-faker" alt="Total Downloads">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-tax-number-faker" rel="nofollow">
    <img src="https://poser.pugx.org/netkod-bilisim/tr-tax-number-faker/dependents.svg" alt="Dependents">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-tax-number-faker" rel="nofollow">
    <img src="https://img.shields.io/packagist/l/netkod-bilisim/tr-tax-number-faker" alt="License">
</a>
</div>

<div style="text-align: center">
<a href="https://packagist.org/packages/netkod-bilisim/tr-tax-number-faker" rel="nofollow">
    <img src="http://poser.pugx.org/netkod-bilisim/tr-tax-number-faker/require/php" alt="PHP Version">
</a>
<a href="https://scrutinizer-ci.com/g/netkod-bilisim/tr-tax-number-faker/badges/quality-score.png?b=master" rel="nofollow">
    <img src="https://scrutinizer-ci.com/g/netkod-bilisim/tr-tax-number-faker/badges/quality-score.png?b=master" alt="Scrutinizer">
</a>
<a href="https://github.styleci.io/repos/671831827?branch=master">
    <img src="https://github.styleci.io/repos/671831827/shield?branch=master" alt="StyleCI">
</a>

</div>

## <img src="public/assets/images/presentation.png" width="25" height="25"> Introduction

It is faker function for tax number.

## <img src="public/assets/images/requirement.png" width="25" height="25"> Requirements

- PHP >= 7.4

## <img src="public/assets/images/inbox.png" width="25" height="25"> Install

```bash
composer require netkod-bilisim/tr-tax-number-faker:"^1"
```

## <img src="public/assets/images/web-coding.png" width="25" height="25"> Usage

```php
namespace Database\Factories;
 
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class TaxNumberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tax_number' => trTaxNumberFaker(),
        ];
    }
}
```

## <img src="public/assets/images/licensing.png" width="25" height="25"> License

This package is open source software licensed under
the [MIT License](https://opensource.org/license/mit/).
