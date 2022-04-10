<?php 

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

use CodeIgniter\Config\Services;
use MumtazHaqiqy\Codeigniter4Psr7\HttpPsr7Factory;
use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config;

use Nyholm\Psr7\Factory\Psr17Factory;

class CrudApi extends \CodeIgniter\Controller
{
    use ResponseTrait;
    
    public function index($method = 'records')
    {
        $requestCodeIgniter = Services::request();

        $psr17Factory = new Psr17Factory;
        $psrHttpFactory = new HttpPsr7Factory($psr17Factory,$psr17Factory,$psr17Factory,$psr17Factory);

        $psrRequest = $psrHttpFactory->createRequest($requestCodeIgniter);

        $config = new Config([
            'username' => 'root',
            'password' => '',
            'database' => 'database',
            'basePath' => '/api',
            'debug' => true,
        ]);

        $api = new Api($config);
        
        $response = $api->handle($psrRequest);

        $body = $response->getBody()->__toString();

        $data = json_decode($body);

        return $this->respond($data, $response->getStatusCode());

    }
    
    
}
