<?php
namespace Kunstmaan\PagePartBundle\Tests\Form;
use Kunstmaan\PagePartBundle\Form\ToTopPagePartAdminType;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-08-20 at 12:03:51.
 */
class ToTopPagePartAdminTypeTest extends PagePartAdminTypeTestCase
{
    /**
     * @var ToTopPagePartAdminType
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new ToTopPagePartAdminType();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert () == 'kunstmaan_pagepartbundle_totoppageparttype'.
     *
     * @covers                Kunstmaan\PagePartBundle\Form\ToTopPagePartAdminType::getName
     */
    public function testGetName()
    {
        $this->assertEquals('kunstmaan_pagepartbundle_totoppageparttype', $this->object->getName());
    }

    /**
     * @covers Kunstmaan\PagePartBundle\Form\ToTopPagePartAdminType::buildForm
     */
    public function testBuildForm()
    {
        $this->object->buildForm($this->builder, array());
    }

    /**
     * @covers Kunstmaan\PagePartBundle\Form\ToTopPagePartAdminType::configureOptions
     */
    public function testConfigureOptions()
    {
        $this->object->configureOptions($this->resolver);
        $resolve = $this->resolver->resolve();
        $this->assertEquals($resolve["data_class"], 'Kunstmaan\PagePartBundle\Entity\ToTopPagePart');
    }
}
