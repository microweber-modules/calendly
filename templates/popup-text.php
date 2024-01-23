<?php

/*

  type: layout

  name: Popup Text

  description: Add a text link that opens a popup


*/

?>
<div class="relative">

    <script>
        mw.require('https://assets.calendly.com/assets/external/widget.css', true);
        mw.require('https://assets.calendly.com/assets/external/widget.js', true);
    </script>

    <!-- Calendly link widget begin -->
    <button type="button" class="btn btn-outline-primary" onclick="Calendly.initPopupWidget({url: '<?php echo $link; ?>?hide_event_type_details=1&hide_gdpr_banner=1&background_color=<?php echo $background_color;?>&text_color=<?php echo $text_color;?>&primary_color=<?php echo $primary_color;?>'});return false;">
        <?php echo $text; ?>
    </button>
    <!-- Calendly link widget end -->

</div>
