<?php
namespace Mageplaza\SeoRule\Console\ApplyRule;

/**
 * Interceptor class for @see \Mageplaza\SeoRule\Console\ApplyRule
 */
class Interceptor extends \Mageplaza\SeoRule\Console\ApplyRule implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mageplaza\SeoRule\Model\RuleFactory $seoRuleFactory, \Magento\Framework\App\State $state, $name = null)
    {
        $this->___init();
        parent::__construct($seoRuleFactory, $state, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
