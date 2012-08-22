<?php
class Plugin_bacon_ipsum extends Plugin {

  var $meta = array(
    'name'       => 'Bacon Ipsum Generator',
    'version'    => '0.9',
    'author'     => 'Jack McDade',
    'author_url' => 'http://jackmcdade.com'
  );

  public function index()
  {
    $paragraphs       = $this->fetch_param('paragraphs', '3', 'is_numeric');
    $type             = $this->fetch_param('type', '3', 'meat-and-filler');
    $sentences        = $this->fetch_param('sentences', false);
    $start_with_lorem = $this->fetch_param('start_with_lorem', true, false, true);

    $request_url = "http://baconipsum.com/api/?type={$type}&paras={$paragraphs}";

    if ($sentences) {
      $request_url .= "&sentences={$sentences}";
    }

    if ($start_with_lorem) {
      $request_url = "&start_with_lorem=1";
    }

    $json = file_get_contents($request_url);

    $html = "<p>".implode("</p><p>", json_decode($json))."</p>";

    return $html;

  }
}