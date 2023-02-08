<?php

namespace oop\Faker\Provider;

require_once 'vendor/autoload.php';

// https://fakerphp.github.io
use Faker\Factory;

class News
{
    private string $title;
    private string $name;
    private string $date;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function createFaker()
    {
        return Factory::create("vi_VN");
    }

    public function fakeTitle()
    {
        $faker = $this->createFaker();
        return $faker->text($maxNbChars = 50);
    }

    public function fakeName()
    {
        $faker = $this->createFaker();
        return $faker->name();
    }

    public function fakeDateTime()
    {
        $faker = $this->createFaker();
        return $faker->dateTime()->format('d/m/Y');
    }

    public function fakeContent()
    {
        $faker = $this->createFaker();
        return $faker->text();
    }
    public function fakeImageUrl($width, $height, $category)
    {
        $faker = $this->createFaker();
        return $faker->imageUrl($width, $height, $category, true);
    }
}
