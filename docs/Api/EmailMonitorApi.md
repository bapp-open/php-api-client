# Swagger\Client\EmailMonitorApi

All URIs are relative to *https://app.prod.bapp.ro/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailMonitorAccountCreate**](EmailMonitorApi.md#emailMonitorAccountCreate) | **POST** /email-monitor/account/ | 
[**emailMonitorAccountDelete**](EmailMonitorApi.md#emailMonitorAccountDelete) | **DELETE** /email-monitor/account/{id}/ | 
[**emailMonitorAccountList**](EmailMonitorApi.md#emailMonitorAccountList) | **GET** /email-monitor/account/ | 
[**emailMonitorAccountPartialUpdate**](EmailMonitorApi.md#emailMonitorAccountPartialUpdate) | **PATCH** /email-monitor/account/{id}/ | 
[**emailMonitorAccountRead**](EmailMonitorApi.md#emailMonitorAccountRead) | **GET** /email-monitor/account/{id}/ | 
[**emailMonitorAccountUpdate**](EmailMonitorApi.md#emailMonitorAccountUpdate) | **PUT** /email-monitor/account/{id}/ | 
[**emailMonitorActionsList**](EmailMonitorApi.md#emailMonitorActionsList) | **GET** /email-monitor/actions/ | 


# **emailMonitorAccountCreate**
> \Swagger\Client\Model\EmailAccount emailMonitorAccountCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EmailMonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\EmailAccount(); // \Swagger\Client\Model\EmailAccount | 

try {
    $result = $apiInstance->emailMonitorAccountCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMonitorApi->emailMonitorAccountCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\EmailAccount**](../Model/EmailAccount.md)|  |

### Return type

[**\Swagger\Client\Model\EmailAccount**](../Model/EmailAccount.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailMonitorAccountDelete**
> emailMonitorAccountDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EmailMonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this email account.

try {
    $apiInstance->emailMonitorAccountDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling EmailMonitorApi->emailMonitorAccountDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this email account. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailMonitorAccountList**
> object emailMonitorAccountList($ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EmailMonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->emailMonitorAccountList($ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMonitorApi->emailMonitorAccountList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **ids** | **string**| Specify required IDs separated by comma | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailMonitorAccountPartialUpdate**
> \Swagger\Client\Model\EmailAccount emailMonitorAccountPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EmailMonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this email account.
$data = new \Swagger\Client\Model\EmailAccount(); // \Swagger\Client\Model\EmailAccount | 

try {
    $result = $apiInstance->emailMonitorAccountPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMonitorApi->emailMonitorAccountPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this email account. |
 **data** | [**\Swagger\Client\Model\EmailAccount**](../Model/EmailAccount.md)|  |

### Return type

[**\Swagger\Client\Model\EmailAccount**](../Model/EmailAccount.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailMonitorAccountRead**
> \Swagger\Client\Model\EmailAccount emailMonitorAccountRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EmailMonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this email account.

try {
    $result = $apiInstance->emailMonitorAccountRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMonitorApi->emailMonitorAccountRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this email account. |

### Return type

[**\Swagger\Client\Model\EmailAccount**](../Model/EmailAccount.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailMonitorAccountUpdate**
> \Swagger\Client\Model\EmailAccount emailMonitorAccountUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EmailMonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this email account.
$data = new \Swagger\Client\Model\EmailAccount(); // \Swagger\Client\Model\EmailAccount | 

try {
    $result = $apiInstance->emailMonitorAccountUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMonitorApi->emailMonitorAccountUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this email account. |
 **data** | [**\Swagger\Client\Model\EmailAccount**](../Model/EmailAccount.md)|  |

### Return type

[**\Swagger\Client\Model\EmailAccount**](../Model/EmailAccount.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailMonitorActionsList**
> object emailMonitorActionsList($ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EmailMonitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->emailMonitorActionsList($ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailMonitorApi->emailMonitorActionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **ids** | **string**| Specify required IDs separated by comma | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

