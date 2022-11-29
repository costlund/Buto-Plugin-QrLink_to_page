# Buto-Plugin-QrLink_to_page
Widget to add a QR code on a page with current page link.

## Widget link
```
type: widget
data:
  plugin: qr/link_to_page
  method: link
```

## Page
This has to be set in order to generate png.
```
plugin_modules:
  qr:
    plugin: 'qr/php_qr_code_1_1_4'
```

## Method get_src
Method get_src save a file and return file src data.
This data can then be used to put in a image attribute/src.
```
wfPlugin::includeonce('qr/link_to_page');
$qr = new PluginQrLink_to_page();
$src = $qr->get_src(__DIR__.'/dump2.png');
```
