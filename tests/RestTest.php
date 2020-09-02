<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once 'api/v1/Rest.php';
require_once 'api/v1/Travel.php';
require_once 'app/business/TravelProcess.php';
require_once 'config/config.php';

final class RestTest extends TestCase
{
  private $false_url = ['url' => 'travell/processss/gru/scf'];
  private $true_url = ['url' => 'travel/process/gru/scf'];
  
  public function testMethodNotFound(): void
  {
    $rest = new Rest;
    $response = $rest->open($this->false_url);
    $this->assertJsonStringEqualsJsonString(
      '{"status":"error","data":"Method not found!!"}',
      $response
    );
  }
  
  public function testResponseSuccess(): void
  {
    $rest = new Rest;
    $response = $rest->open($this->true_url);
    $response = json_decode($response, true);
    $this->assertEquals(
      'sucess',
      $response['status']
    );
  }
}
