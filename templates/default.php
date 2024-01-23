<?php

/*

  type: layout

  name: Inline Embed

  description: Add a scheduling page to your site


*/
?>
<div class="relative">

    <script>
        mw.require('https://assets.calendly.com/assets/external/widget.js', true);
    </script>

<!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="<?php echo $link; ?>?hide_event_type_details=1&hide_gdpr_banner=1&background_color=<?php echo $background_color;?>&text_color=<?php echo $text_color;?>&primary_color=<?php echo $primary_color;?>" style="min-width:320px;height:700px;"></div>

<!-- Calendly inline widget end -->
</div>
