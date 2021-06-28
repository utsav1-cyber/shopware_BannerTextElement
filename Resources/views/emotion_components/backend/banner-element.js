//{namespace name="backend/emotion/shopping_world_element"}
//{block name="emotion_components/backend/banner_text_element"}
Ext.define('Shopware.apps.Emotion.view.components.BannerTextElement', {

    /**
     * Extend from the base class for the emotion components
     */
    extend: 'Shopware.apps.Emotion.view.components.Base',

    /**
     * Create the alias matching the xtype you defined in your `createEmotionComponent()` method.
     * The pattern is always 'widget.' + xtype
     */
    alias: 'widget.emotion-components-banner',

     /**
      * The constructor method of each component.
      */
     initComponent: function () {
         var me = this;

        /**
         * Call the original method of the base class.
         */
         me.callParent(arguments);

         /**
          * Get single fields you've created with the helper functions in your `Bootstrap.php` file.
          */
        me.textThumbnailField = me.getForm().findField('banner_text_element_thumbnail');
        me.textIdField = me.getForm().findField('banner_text_element_id');

         me.textIdField.on('change', Ext.bind(me.onIdChange, me));
     },

     /**
      *
      * @param field
      * @param value
      */
     onIdChange: function (field, value) {
         var me = this;

         me.setPreviewImage(value);
     },

});
//{/block}
