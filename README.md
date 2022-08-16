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
