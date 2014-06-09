<?php
namespace Mesd\DoctrineExtensions\DependentFixtureBundle\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

abstract class AbstractDependentFixture extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return $this::getDependentOrder();
    }

    static function getDependentOrder() {
        return 1;
    }
}
