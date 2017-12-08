<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 08/12/17
 * Time: 23:14
 */

namespace Webservices\ApiBundle\DataFixtures\ORM;

use Webservices\ApiBundle\Entity\Currency;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $currency = new Currency();
        $currency->setIsoCode('EUR');
        $currency->setName('Euro');
        $currency->setCountry('Europe');
        $currency->setRate(1.0);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('AUD');
        $currency->setName('Australian dollar');
        $currency->setCountry('Australie');
        $currency->setRate(1.562);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('BGN');
        $currency->setName('Bulgarian lev');
        $currency->setCountry('Bulgarie');
        $currency->setRate(1.9558);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('BRL');
        $currency->setName('Brazilian real');
        $currency->setCountry('Brésil');
        $currency->setRate(3.8435);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('CAD');
        $currency->setName('Canadian dollar');
        $currency->setCountry('Canada');
        $currency->setRate(1.5072);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('CHF');
        $currency->setName('Swiss franc');
        $currency->setCountry('Suisse');
        $currency->setRate(1.1704);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('CNY');
        $currency->setName('Chinese yuan renminbi');
        $currency->setCountry('Chine');
        $currency->setRate(7.7729);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('CZK');
        $currency->setName('Czech koruna');
        $currency->setCountry('République Tchèque');
        $currency->setRate(25.555);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('DKK');
        $currency->setName('Danish krone');
        $currency->setCountry('Danemark');
        $currency->setRate(7.4417);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('GBP');
        $currency->setName('Pound sterling');
        $currency->setCountry('Royaume-Uni');
        $currency->setRate(0.87525);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('HKD');
        $currency->setName('Hong Kong Dollar');
        $currency->setCountry('Hong Kong');
        $currency->setRate(9.1661);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('HRK');
        $currency->setName('Croatian Kuna');
        $currency->setCountry('Croatie');
        $currency->setRate(7.5493);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('HUF');
        $currency->setName('Hungarian Forint');
        $currency->setCountry('Hongrie');
        $currency->setRate(314.5);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('IDR');
        $currency->setName('Indonesian Rupiah');
        $currency->setCountry('Indonésie');
        $currency->setRate(15910.0);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('JPY');
        $currency->setName('Japanese Yen');
        $currency->setCountry('Japon');
        $currency->setRate(133.26);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('KRW');
        $currency->setName('South Korean Won');
        $currency->setCountry('Corée du Sud');
        $currency->setRate(1285.3);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('MXN');
        $currency->setName('Mexican Peso');
        $currency->setCountry('Mexique');
        $currency->setRate(22.22);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('MYR');
        $currency->setName('Malaysian Ringgit');
        $currency->setCountry('Malaisie');
        $currency->setRate(4.8001);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('NOK');
        $currency->setName('Norwegian Krone');
        $currency->setCountry('Norvège');
        $currency->setRate(9.7665);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('NZD');
        $currency->setName('New Zealand Dollar');
        $currency->setCountry('Nouvelle Zélande');
        $currency->setRate(1.7157);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('PHP');
        $currency->setName('Philippine Peso');
        $currency->setCountry('Philippines');
        $currency->setRate(59.336);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('PLN');
        $currency->setName('Polish Zloty');
        $currency->setCountry('Pologne');
        $currency->setRate(4.202);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('RON');
        $currency->setName('Romanian Leu');
        $currency->setCountry('Roumanie');
        $currency->setRate(4.6336);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('RUB');
        $currency->setName('Russian Ruble');
        $currency->setCountry('Russie');
        $currency->setRate(69.651);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('SEK');
        $currency->setName('Swedish Krona');
        $currency->setCountry('Suède');
        $currency->setRate(9.977);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('SGD');
        $currency->setName('Singapore Dollar');
        $currency->setCountry('Singapour');
        $currency->setRate(1.5889);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('THB');
        $currency->setName('Thai Baht');
        $currency->setCountry('Thaïlande');
        $currency->setRate(38.361);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('TRY');
        $currency->setName('Turkish lira');
        $currency->setCountry('Turquie');
        $currency->setRate(4.5165);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('USD');
        $currency->setName('United States dollar');
        $currency->setCountry('Etats-Unis d\'Amérique');
        $currency->setRate(1.1742);
        $manager->persist($currency);

        $currency = new Currency();
        $currency->setIsoCode('ZAR');
        $currency->setName('South African Rand');
        $currency->setCountry('Afrique du Sud');
        $currency->setRate(16.039);
        $manager->persist($currency);

        $manager->flush();
    }
}