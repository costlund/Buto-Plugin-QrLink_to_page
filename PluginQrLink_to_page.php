<?php
class PluginQrLink_to_page{
  public function widget_link($data){
    wfPlugin::includeonce('wf/yml');
    wfPlugin::enable('qr/php_qr_code_1_1_4');
    $element = new PluginWfYml(__DIR__.'/element/qr.yml');
    $element->setByTag(array('url' => wfServer::calcUrl(true)));
    wfDocument::renderElement($element);
  }
  public function get_src($filename){
    $url = wfServer::calcUrl(true);
    wfPlugin::includeonce('qr/php_qr_code_1_1_4');
    $qr = new PluginQrPhp_qr_code_1_1_4();
    $qr->save_file($filename, $url);
    return $qr->src;
  }
}
