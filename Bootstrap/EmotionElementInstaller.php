<?php

namespace BannerTextElement\Bootstrap;

use Shopware\Components\Emotion\ComponentInstaller;

class EmotionElementInstaller
{
    /**
     * @var ComponentInstaller
     */
    private $emotionComponentInstaller;

    /**
     * @var string
     */
    private $pluginName;

    /**
     * @param string $pluginName
     * @param ComponentInstaller $emotionComponentInstaller
     */
    public function __construct($pluginName, ComponentInstaller $emotionComponentInstaller)
    {
        $this->emotionComponentInstaller = $emotionComponentInstaller;
        $this->pluginName = $pluginName;
    }

    public function install()
    {
        $bannertextElement = $this->emotionComponentInstaller->createOrUpdate(
            $this->pluginName,
            'BannerTextElement',
            [
                'name' => ' Banner Text Element',
                'xtype' => 'emotion-components-banner',
                'template' => 'emotion_banner',
                'cls' => 'emotion-banner-element'
            ]
        );

        $bannertextElement->createMediaField([
            'name' => 'preview_image',
            'fieldLabel' => 'Banner Image',
            'valueField' => 'virtualPath'
        ]);

        $bannertextElement->createTextField([
            'name' => 'banner_element_id',
            'fieldLabel' => 'Title',
            'supportText' => 'Text Field.',
            'allowBlank' => false
        ]);

        $bannertextElement->createtinymcefield([
            'name' => 'description_text',
            'fieldLabel' => 'Description',
        ]);

        $bannertextElement->createTextField([
            'name' => 'button_link',
            'fieldLabel' => 'Button Link',
            'supportText' => 'example: https://your-domain.com/'
        ]);

    }
}