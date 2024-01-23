<?php
$link = get_option('link', $params['id']);

if (empty($link)) {
    print lnotif(_e("First you must set your Calendly link from the module settings!", true));
    return;
}



$module_template = get_module_option('data-template', $params['id']);


dump(\MicroweberPackages\Option\Models\Option::where('option_group', $params['id'])->get());

if ($module_template == false and isset($params['template'])) {
    $module_template = $params['template'];
}
if ($module_template != false) {
    $template_file = module_templates($config['module'], $module_template);
} else {
    $template_file = module_templates($config['module'], 'default');
}
if (is_file($template_file)) {
    include($template_file);
}
?>
