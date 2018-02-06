<?php

/**
 * YML, SOAP, Unicode.
 */
use Drupal\Component\Utility\Unicode;
use Drupal\Component\Serialization\Json;
use Symfony\Component\Yaml\Yaml;

// при декодирования json данных от криворуких разработчиков (напр 1С).
$json = Unicode::substr($result, $start - 2);
$json = trim($json); 
$array   = Json::decode($json);
$human = json_encode($array, JSON_UNESCAPED_UNICODE);
$yaml = Yaml::dump($array);
$array = Yaml::parse($yaml);

/**
 * Markup.
 */
use Drupal\Core\Render\Markup;
drupal_set_message(Markup::create($message), 'warning');

/**
 * SOAP.
 */
$options = [
  'login'    => '***',
  'password' => '***',
];

$url = 'https://*****/ExchangeWebSite.1cws?wsdl';
$client = new \SoapClient($url, $options);

try {
  $res = $client->$method($params);
}
catch (\Exception $e) {
  drupal_set_message('Извините, наш сервис недоступен.', 'error');
  drupal_set_message("Отладочная информация SOAP:$method " . $e->faultstring, 'error');
}

/**
 * PhpTransliteration.
 */
use Drupal\Component\Transliteration\PhpTransliteration;
$langcode = '';
$trans = new PhpTransliteration();
$name = $trans->transliterate($name, $langcode);

/**
 * JSON.
 */
$json = trim($json); // при декодирования json данных от криворуких разработчиков (напр 1С)
$raws  = \Drupal\Component\Serialization\Json::decode($json);
// Кодировать правильно
$response = new \Symfony\Component\HttpFoundation\JsonResponse($tree);
return $response;
// Кодировать в русские буковы:
$json = json_encode($tree, JSON_UNESCAPED_UNICODE);
$response = new \Symfony\Component\HttpFoundation\Response($json);
$response->headers->set('Content-Type', 'application/json');
return $response;


/**
 * Field Formatter
 */
drush ev "print_r(array_keys(\Drupal::service('plugin.manager.field.formatter')->getDefinitions()));"
