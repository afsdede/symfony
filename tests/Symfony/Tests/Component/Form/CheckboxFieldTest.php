<?php

namespace Symfony\Tests\Component\Form;

use Symfony\Component\Form\CheckboxField;

class CheckboxFieldTest extends \PHPUnit_Framework_TestCase
{
    public function testRender()
    {
        $field = new CheckboxField('name');
        $field->setData(true);

        $html = '<input id="name" name="name" checked="checked" type="checkbox" class="foobar" />';

        $this->assertEquals($html, $field->render(array(
            'class' => 'foobar',
        )));
    }
}