<?php

$style = get_option('style', $params['id']);
$link = get_option('link', $params['id']);

$link_text = get_option('link_text', $params['id']);
if (empty($link_text)) {
    $link_text = 'Schedule time with me';
}

$text_color = get_option('text_color', $params['id']);
if (empty($text_color)) {
    $text_color = '#ffffff';
}

$background_color = get_option('background_color', $params['id']);
if (empty($background_color)) {
    $background_color = '#00a2ff';
}

$primary_color = get_option('primary_color', $params['id']);
if (empty($primary_color)) {
    $primary_color = '#00a2ff';
}

$primary_color = str_replace('#', '', $primary_color);
$text_color = str_replace('#', '', $text_color);
$background_color = str_replace('#', '', $background_color);

if (empty($link)) {
    print lnotif(_e("First you must set your Calendly link from the module settings!", true));
    return;
}

$module_template = get_module_option('template', $params['id']);

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
