<?php

kirbytext::$tags['ref'] = array(
  'html' => function($tag) {
    return '<a href="#ref'.$tag->attr('ref').'">['.$tag->attr('ref').']</a>';
  }
);

kirbytext::$tags['source'] = array(
  'attr' => array(
    'url'
  ),
  'html' => function($tag) {
	$returnVal='<a name="ref'.$tag->attr('source').'">['.$tag->attr('source').'] </a>';
	$url=$tag->attr('url');
	$returnVal=$returnVal.$url;
	return $returnVal;
  }
);

?>