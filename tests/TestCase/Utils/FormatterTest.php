<?php
namespace App\Test\TestCase\Utils;

use App\Utils\Formatter;
use Cake\TestSuite\TestCase;

/**
 * @property Formatter Formatter
 */
class FormatterTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->Formatter = new Formatter();
    }

    public function tearDown()
    {
        unset($this->Formatter);
        parent::tearDown();
    }

    public function testFormatStatPercentage()
    {
        $expected = '50%';
        $result = $this->Formatter->formatStatPercentage(1, 1);
        $this->assertSame($expected, $result);
    }

    public function testFormatStatPercentageShouldReturnPlayMoreGames()
    {
        $expected = 'Play more games!';
        $result = $this->Formatter->formatStatPercentage(0, 1);
        $this->assertSame($expected, $result);
    }
}
