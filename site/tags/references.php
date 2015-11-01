<?php

kirbytext::$tags['ref'] = array(
  'html' => function($tag) {
    return '<a href="#ref'.$tag->attr('ref').'">['.$tag->attr('ref').']</a>';
  }
);

kirbytext::$tags['source'] = array(
  'attr' => array(
    'url',
    'popup'
  ),
  'html' => function($tag) {
	$returnVal='<div>';
	$returnVal.='<a name="ref'.$tag->attr('source').'">['.$tag->attr('source').'] </a>';
	$url=$tag->attr('url');
	$returnVal.='<a href='.$url;
	if (0 === strpos($tag->attr('popup'), 'yes')) {
		$returnVal.=' target=_blank';	
	}
	else if (0 === strpos($tag->attr('popup'), 'true')) {
		$returnVal.=' target=_blank';	
	}
	$returnVal.='>'.$url.'</a>';
	$returnVal.='</div>';
	return $returnVal;
  }
);

?>