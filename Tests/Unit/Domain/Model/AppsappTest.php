<?php
namespace Appsapp\Appsapp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Michael Egli <michael.egli@appsapp.io>
 */
class AppsappTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Appsapp\Appsapp\Domain\Model\Appsapp
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Appsapp\Appsapp\Domain\Model\Appsapp();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }
}
