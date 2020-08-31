<?php

class Rest
{
  public static function open($requisicao)
  {
    $url = explode('/', $requisicao['url']);
    $class = ucfirst($url[0]);
    array_shift($url);
    $method = $url[0];
    array_shift($url);
    $params = $url;
    
    try {
      if (class_exists($class) && method_exists($class, $method)) {
        $return = call_user_func_array([new $class, $method], $params);
        return json_encode(['status' => 'sucess', 'data' => $return]);
      } else {
        http_response_code(404);
        return json_encode(['status' => 'error', 'data' => 'Method not found!!']);
      }
    } catch (Exception $e) {
      http_response_code(406);
      return json_encode(['status' => 'error', 'data' => $e->getMessage()]);
    }
  }
}