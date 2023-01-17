# Faker

- Faker là một thư viện PHP tạo dữ liệu giả.
- Faker yêu cầu PHP >= 7.4.

## Cài đặt:

```
composer require fakerphp/faker
```

## Sử dụng:

```
require_once 'vendor/autoload.php';
```

- Ví dụ tạo fake data:

```
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name();
// 'Vince Sporer'
echo $faker->email();
// 'walter.sophia@hotmail.com'
echo $faker->text();
// 'Numquam ut mollitia at consequuntur inventore dolorem.'
```