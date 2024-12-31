<?php

declare(strict_types=1);

class Information
{
  public function __construct(
    private $data,
  ) {
  }

  public static function fetch_data(string $api_url, string $token): Information
  { 
    $options = [
      "http" => [
          "header" => "Authorization: BEARER " . $token
      ]
    ];
  
    $context = stream_context_create($options);
    $result = file_get_contents($api_url, true, $context); 
    $data = json_decode($result, true);

    return new self(
      $data
    );
  }

  public function get_data()
  {
    return get_object_vars($this);
  }
}
