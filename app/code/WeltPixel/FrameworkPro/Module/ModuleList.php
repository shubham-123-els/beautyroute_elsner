<?php
namespace WeltPixel\FrameworkPro\Module;

class ModuleList extends \Magento\Framework\Module\ModuleList
{
    /**
     * {@inheritdoc}
     */
    public function getAll()
    {
        $result = parent::getAll();
        $moduleName = 'WeltPixel_FrameworkPro';

        $frameworkModule = $result[$moduleName];
        unset($result[$moduleName]);
        $result[$moduleName] = $frameworkModule;

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function getNames()
    {
        $result = parent::getNames();

        foreach ($result as $key => $value) {
            if ($value == 'WeltPixel_FrameworkPro') {
                unset($result[$key]);
            }
        }
        $result[] = 'WeltPixel_FrameworkPro';

        return $result;
    }
}
