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
    <a href="" onclick="Calendly.initPopupWidget({url: '<?php echo $link; ?>?hide_event_type_details=1&hide_gdpr_banner=1&background_color=ed1212&text_color=1668d8&primary_color=50e711'});return false;">
        <?php echo $text; ?>
    </a>
    <!-- Calendly link widget end -->

</div>
