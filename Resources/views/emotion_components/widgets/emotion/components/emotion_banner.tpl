{block name="widgets_emotion_components_text_element"}


    <div class="banner-section">
        <img src="/shopware/{$Data.preview_image}" alt="image">

        <div class="banner-content">
            <div class="custom-text-element">
                <h1>{$Data.banner_element_id}</h1>
            </div>

            <div class="description_text">
               <p>{$Data.description_text}</p>
            </div>

            <div class="button_text">
               <h3>{$Data.button_text}</h3>
            </div>

            <div class="button_link">
                <a href="{$Data.button_link}" class="banner-button">Button Text</a>
            </div>
        </div>

    </div>

{/block}