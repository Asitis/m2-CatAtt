<?php
namespace Vendor\CatAtt\Setup;

use Magento\Eav\Setup\EavSetup;  
use Magento\Eav\Setup\EavSetupFactory;  
use Magento\Framework\Setup\InstallDataInterface;  
use Magento\Framework\Setup\ModuleContextInterface;  
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{
    /**
     * Category setup factory
     *
     * @var CategorySetupFactory
     */
    private $eavSetupFactory;
 
    /**
     * Init
     *
     * @param CategorySetupFactory $categorySetupFactory
     */
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

        /**
         * Add attributes to the eav/attribute
         */

        $eavSetup->addAttribute(
        \Magento\Catalog\Model\Category::ENTITY, 'cat_bgimg', 
	        [
				'type' => 'text',
				'label' => 'Category backgroundimage',
				'input' => 'text',
				'source' => '',
				'visible_on_front' => true,
				'required' => false,
				'sort_order' => 100,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
				'group' => 'General Information',
	        ]
	    );
    }
}
