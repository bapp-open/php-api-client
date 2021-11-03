# Swagger\Client\GraveyardApi

All URIs are relative to *https://app.prod.bapp.ro/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**graveyardCategoriesCreate**](GraveyardApi.md#graveyardCategoriesCreate) | **POST** /graveyard/categories/ | 
[**graveyardCategoriesDelete**](GraveyardApi.md#graveyardCategoriesDelete) | **DELETE** /graveyard/categories/{id}/ | 
[**graveyardCategoriesList**](GraveyardApi.md#graveyardCategoriesList) | **GET** /graveyard/categories/ | 
[**graveyardCategoriesPartialUpdate**](GraveyardApi.md#graveyardCategoriesPartialUpdate) | **PATCH** /graveyard/categories/{id}/ | 
[**graveyardCategoriesRead**](GraveyardApi.md#graveyardCategoriesRead) | **GET** /graveyard/categories/{id}/ | 
[**graveyardCategoriesUpdate**](GraveyardApi.md#graveyardCategoriesUpdate) | **PUT** /graveyard/categories/{id}/ | 
[**graveyardCemeteryCreate**](GraveyardApi.md#graveyardCemeteryCreate) | **POST** /graveyard/cemetery/ | 
[**graveyardCemeteryDelete**](GraveyardApi.md#graveyardCemeteryDelete) | **DELETE** /graveyard/cemetery/{id}/ | 
[**graveyardCemeteryList**](GraveyardApi.md#graveyardCemeteryList) | **GET** /graveyard/cemetery/ | 
[**graveyardCemeteryPartialUpdate**](GraveyardApi.md#graveyardCemeteryPartialUpdate) | **PATCH** /graveyard/cemetery/{id}/ | 
[**graveyardCemeteryRead**](GraveyardApi.md#graveyardCemeteryRead) | **GET** /graveyard/cemetery/{id}/ | 
[**graveyardCemeteryUpdate**](GraveyardApi.md#graveyardCemeteryUpdate) | **PUT** /graveyard/cemetery/{id}/ | 
[**graveyardPartnersCreate**](GraveyardApi.md#graveyardPartnersCreate) | **POST** /graveyard/partners/ | 
[**graveyardPartnersDelete**](GraveyardApi.md#graveyardPartnersDelete) | **DELETE** /graveyard/partners/{id}/ | 
[**graveyardPartnersList**](GraveyardApi.md#graveyardPartnersList) | **GET** /graveyard/partners/ | 
[**graveyardPartnersPartialUpdate**](GraveyardApi.md#graveyardPartnersPartialUpdate) | **PATCH** /graveyard/partners/{id}/ | 
[**graveyardPartnersRead**](GraveyardApi.md#graveyardPartnersRead) | **GET** /graveyard/partners/{id}/ | 
[**graveyardPartnersUpdate**](GraveyardApi.md#graveyardPartnersUpdate) | **PUT** /graveyard/partners/{id}/ | 
[**graveyardProductsList**](GraveyardApi.md#graveyardProductsList) | **GET** /graveyard/products/ | 
[**graveyardProductsPartialUpdate**](GraveyardApi.md#graveyardProductsPartialUpdate) | **PATCH** /graveyard/products/{id}/ | 
[**graveyardProductsRead**](GraveyardApi.md#graveyardProductsRead) | **GET** /graveyard/products/{id}/ | 
[**graveyardProductsUpdate**](GraveyardApi.md#graveyardProductsUpdate) | **PUT** /graveyard/products/{id}/ | 
[**graveyardPublicDataCreate**](GraveyardApi.md#graveyardPublicDataCreate) | **POST** /graveyard/public-data/ | 
[**graveyardPublicDataDelete**](GraveyardApi.md#graveyardPublicDataDelete) | **DELETE** /graveyard/public-data/{id}/ | 
[**graveyardPublicDataList**](GraveyardApi.md#graveyardPublicDataList) | **GET** /graveyard/public-data/ | 
[**graveyardPublicDataPartialUpdate**](GraveyardApi.md#graveyardPublicDataPartialUpdate) | **PATCH** /graveyard/public-data/{id}/ | 
[**graveyardPublicDataPhotosCreate**](GraveyardApi.md#graveyardPublicDataPhotosCreate) | **POST** /graveyard/public-data/{public_id}/photos/ | 
[**graveyardPublicDataPhotosDelete**](GraveyardApi.md#graveyardPublicDataPhotosDelete) | **DELETE** /graveyard/public-data/{public_id}/photos/{id}/ | 
[**graveyardPublicDataPhotosList**](GraveyardApi.md#graveyardPublicDataPhotosList) | **GET** /graveyard/public-data/{public_id}/photos/ | 
[**graveyardPublicDataPhotosPartialUpdate**](GraveyardApi.md#graveyardPublicDataPhotosPartialUpdate) | **PATCH** /graveyard/public-data/{public_id}/photos/{id}/ | 
[**graveyardPublicDataPhotosRead**](GraveyardApi.md#graveyardPublicDataPhotosRead) | **GET** /graveyard/public-data/{public_id}/photos/{id}/ | 
[**graveyardPublicDataPhotosUpdate**](GraveyardApi.md#graveyardPublicDataPhotosUpdate) | **PUT** /graveyard/public-data/{public_id}/photos/{id}/ | 
[**graveyardPublicDataRead**](GraveyardApi.md#graveyardPublicDataRead) | **GET** /graveyard/public-data/{id}/ | 
[**graveyardPublicDataUpdate**](GraveyardApi.md#graveyardPublicDataUpdate) | **PUT** /graveyard/public-data/{id}/ | 


# **graveyardCategoriesCreate**
> \Swagger\Client\Model\EnkiCategory graveyardCategoriesCreate($data)



Manage Enki categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\EnkiCategory(); // \Swagger\Client\Model\EnkiCategory | 

try {
    $result = $apiInstance->graveyardCategoriesCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardCategoriesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\EnkiCategory**](../Model/EnkiCategory.md)|  |

### Return type

[**\Swagger\Client\Model\EnkiCategory**](../Model/EnkiCategory.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardCategoriesDelete**
> graveyardCategoriesDelete($id)



Manage Enki categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this enki category.

try {
    $apiInstance->graveyardCategoriesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardCategoriesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this enki category. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardCategoriesList**
> object graveyardCategoriesList($name, $parent, $ordering, $ids, $page)



Manage Enki categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$parent = "parent_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->graveyardCategoriesList($name, $parent, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardCategoriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **parent** | **string**|  | [optional]
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

# **graveyardCategoriesPartialUpdate**
> \Swagger\Client\Model\EnkiCategory graveyardCategoriesPartialUpdate($id, $data)



Manage Enki categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this enki category.
$data = new \Swagger\Client\Model\EnkiCategory(); // \Swagger\Client\Model\EnkiCategory | 

try {
    $result = $apiInstance->graveyardCategoriesPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardCategoriesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this enki category. |
 **data** | [**\Swagger\Client\Model\EnkiCategory**](../Model/EnkiCategory.md)|  |

### Return type

[**\Swagger\Client\Model\EnkiCategory**](../Model/EnkiCategory.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardCategoriesRead**
> \Swagger\Client\Model\EnkiCategory graveyardCategoriesRead($id)



Manage Enki categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this enki category.

try {
    $result = $apiInstance->graveyardCategoriesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardCategoriesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this enki category. |

### Return type

[**\Swagger\Client\Model\EnkiCategory**](../Model/EnkiCategory.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardCategoriesUpdate**
> \Swagger\Client\Model\EnkiCategory graveyardCategoriesUpdate($id, $data)



Manage Enki categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this enki category.
$data = new \Swagger\Client\Model\EnkiCategory(); // \Swagger\Client\Model\EnkiCategory | 

try {
    $result = $apiInstance->graveyardCategoriesUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardCategoriesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this enki category. |
 **data** | [**\Swagger\Client\Model\EnkiCategory**](../Model/EnkiCategory.md)|  |

### Return type

[**\Swagger\Client\Model\EnkiCategory**](../Model/EnkiCategory.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardCemeteryCreate**
> \Swagger\Client\Model\Cemetery graveyardCemeteryCreate($data)



Manage cemeteries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\Cemetery(); // \Swagger\Client\Model\Cemetery | 

try {
    $result = $apiInstance->graveyardCemeteryCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardCemeteryCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Cemetery**](../Model/Cemetery.md)|  |

### Return type

[**\Swagger\Client\Model\Cemetery**](../Model/Cemetery.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardCemeteryDelete**
> graveyardCemeteryDelete($id)



Manage cemeteries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Cimitir.

try {
    $apiInstance->graveyardCemeteryDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardCemeteryDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Cimitir. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardCemeteryList**
> object graveyardCemeteryList($country, $city, $position, $identifier, $name, $q, $ordering, $ids, $page)



Manage cemeteries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "country_example"; // string | 
$city = "city_example"; // string | 
$position = "position_example"; // string | 
$identifier = "identifier_example"; // string | 
$name = "name_example"; // string | 
$q = "q_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->graveyardCemeteryList($country, $city, $position, $identifier, $name, $q, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardCemeteryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **position** | **string**|  | [optional]
 **identifier** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **q** | **string**|  | [optional]
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

# **graveyardCemeteryPartialUpdate**
> \Swagger\Client\Model\Cemetery graveyardCemeteryPartialUpdate($id, $data)



Manage cemeteries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Cimitir.
$data = new \Swagger\Client\Model\Cemetery(); // \Swagger\Client\Model\Cemetery | 

try {
    $result = $apiInstance->graveyardCemeteryPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardCemeteryPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Cimitir. |
 **data** | [**\Swagger\Client\Model\Cemetery**](../Model/Cemetery.md)|  |

### Return type

[**\Swagger\Client\Model\Cemetery**](../Model/Cemetery.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardCemeteryRead**
> \Swagger\Client\Model\Cemetery graveyardCemeteryRead($id)



Manage cemeteries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Cimitir.

try {
    $result = $apiInstance->graveyardCemeteryRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardCemeteryRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Cimitir. |

### Return type

[**\Swagger\Client\Model\Cemetery**](../Model/Cemetery.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardCemeteryUpdate**
> \Swagger\Client\Model\Cemetery graveyardCemeteryUpdate($id, $data)



Manage cemeteries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Cimitir.
$data = new \Swagger\Client\Model\Cemetery(); // \Swagger\Client\Model\Cemetery | 

try {
    $result = $apiInstance->graveyardCemeteryUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardCemeteryUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Cimitir. |
 **data** | [**\Swagger\Client\Model\Cemetery**](../Model/Cemetery.md)|  |

### Return type

[**\Swagger\Client\Model\Cemetery**](../Model/Cemetery.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPartnersCreate**
> \Swagger\Client\Model\EnkiPartner graveyardPartnersCreate($data)



Manage Enki partners

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\EnkiPartner(); // \Swagger\Client\Model\EnkiPartner | 

try {
    $result = $apiInstance->graveyardPartnersCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPartnersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\EnkiPartner**](../Model/EnkiPartner.md)|  |

### Return type

[**\Swagger\Client\Model\EnkiPartner**](../Model/EnkiPartner.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPartnersDelete**
> graveyardPartnersDelete($id)



Manage Enki partners

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this enki partner.

try {
    $apiInstance->graveyardPartnersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPartnersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this enki partner. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPartnersList**
> object graveyardPartnersList($active, $partner, $ordering, $ids, $page)



Manage Enki partners

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$active = "active_example"; // string | 
$partner = "partner_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->graveyardPartnersList($active, $partner, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPartnersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **active** | **string**|  | [optional]
 **partner** | **string**|  | [optional]
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

# **graveyardPartnersPartialUpdate**
> \Swagger\Client\Model\EnkiPartner graveyardPartnersPartialUpdate($id, $data)



Manage Enki partners

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this enki partner.
$data = new \Swagger\Client\Model\EnkiPartner(); // \Swagger\Client\Model\EnkiPartner | 

try {
    $result = $apiInstance->graveyardPartnersPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPartnersPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this enki partner. |
 **data** | [**\Swagger\Client\Model\EnkiPartner**](../Model/EnkiPartner.md)|  |

### Return type

[**\Swagger\Client\Model\EnkiPartner**](../Model/EnkiPartner.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPartnersRead**
> \Swagger\Client\Model\EnkiPartner graveyardPartnersRead($id)



Manage Enki partners

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this enki partner.

try {
    $result = $apiInstance->graveyardPartnersRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPartnersRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this enki partner. |

### Return type

[**\Swagger\Client\Model\EnkiPartner**](../Model/EnkiPartner.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPartnersUpdate**
> \Swagger\Client\Model\EnkiPartner graveyardPartnersUpdate($id, $data)



Manage Enki partners

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this enki partner.
$data = new \Swagger\Client\Model\EnkiPartner(); // \Swagger\Client\Model\EnkiPartner | 

try {
    $result = $apiInstance->graveyardPartnersUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPartnersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this enki partner. |
 **data** | [**\Swagger\Client\Model\EnkiPartner**](../Model/EnkiPartner.md)|  |

### Return type

[**\Swagger\Client\Model\EnkiPartner**](../Model/EnkiPartner.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardProductsList**
> object graveyardProductsList($category, $published, $partner, $ordering, $ids, $page)



Manage Enki published products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | 
$published = "published_example"; // string | 
$partner = "partner_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->graveyardProductsList($category, $published, $partner, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardProductsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**|  | [optional]
 **published** | **string**|  | [optional]
 **partner** | **string**|  | [optional]
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

# **graveyardProductsPartialUpdate**
> \Swagger\Client\Model\EnkiProduct graveyardProductsPartialUpdate($id, $data)



Manage Enki published products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this enki product.
$data = new \Swagger\Client\Model\EnkiProduct(); // \Swagger\Client\Model\EnkiProduct | 

try {
    $result = $apiInstance->graveyardProductsPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardProductsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this enki product. |
 **data** | [**\Swagger\Client\Model\EnkiProduct**](../Model/EnkiProduct.md)|  |

### Return type

[**\Swagger\Client\Model\EnkiProduct**](../Model/EnkiProduct.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardProductsRead**
> \Swagger\Client\Model\EnkiProduct graveyardProductsRead($id)



Manage Enki published products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this enki product.

try {
    $result = $apiInstance->graveyardProductsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardProductsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this enki product. |

### Return type

[**\Swagger\Client\Model\EnkiProduct**](../Model/EnkiProduct.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardProductsUpdate**
> \Swagger\Client\Model\EnkiProduct graveyardProductsUpdate($id, $data)



Manage Enki published products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this enki product.
$data = new \Swagger\Client\Model\EnkiProduct(); // \Swagger\Client\Model\EnkiProduct | 

try {
    $result = $apiInstance->graveyardProductsUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardProductsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this enki product. |
 **data** | [**\Swagger\Client\Model\EnkiProduct**](../Model/EnkiProduct.md)|  |

### Return type

[**\Swagger\Client\Model\EnkiProduct**](../Model/EnkiProduct.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPublicDataCreate**
> \Swagger\Client\Model\PublicData graveyardPublicDataCreate($data)



Manage public data information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\PublicData(); // \Swagger\Client\Model\PublicData | 

try {
    $result = $apiInstance->graveyardPublicDataCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPublicDataCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PublicData**](../Model/PublicData.md)|  |

### Return type

[**\Swagger\Client\Model\PublicData**](../Model/PublicData.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPublicDataDelete**
> graveyardPublicDataDelete($id)



Manage public data information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Profil public.

try {
    $apiInstance->graveyardPublicDataDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPublicDataDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Profil public. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPublicDataList**
> object graveyardPublicDataList($identifier, $company, $name, $ordering, $ids, $page)



Manage public data information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = "identifier_example"; // string | 
$company = "company_example"; // string | 
$name = "name_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->graveyardPublicDataList($identifier, $company, $name, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPublicDataList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**|  | [optional]
 **company** | **string**|  | [optional]
 **name** | **string**|  | [optional]
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

# **graveyardPublicDataPartialUpdate**
> \Swagger\Client\Model\PublicData graveyardPublicDataPartialUpdate($id, $data)



Manage public data information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Profil public.
$data = new \Swagger\Client\Model\PublicData(); // \Swagger\Client\Model\PublicData | 

try {
    $result = $apiInstance->graveyardPublicDataPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPublicDataPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Profil public. |
 **data** | [**\Swagger\Client\Model\PublicData**](../Model/PublicData.md)|  |

### Return type

[**\Swagger\Client\Model\PublicData**](../Model/PublicData.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPublicDataPhotosCreate**
> \Swagger\Client\Model\PublicDataPhoto graveyardPublicDataPhotosCreate($public_id, $data)



Manage public data photo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 
$data = new \Swagger\Client\Model\PublicDataPhoto(); // \Swagger\Client\Model\PublicDataPhoto | 

try {
    $result = $apiInstance->graveyardPublicDataPhotosCreate($public_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPublicDataPhotosCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |
 **data** | [**\Swagger\Client\Model\PublicDataPhoto**](../Model/PublicDataPhoto.md)|  |

### Return type

[**\Swagger\Client\Model\PublicDataPhoto**](../Model/PublicDataPhoto.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPublicDataPhotosDelete**
> graveyardPublicDataPhotosDelete($id, $public_id)



Manage public data photo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this public data photo.
$public_id = "public_id_example"; // string | 

try {
    $apiInstance->graveyardPublicDataPhotosDelete($id, $public_id);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPublicDataPhotosDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this public data photo. |
 **public_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPublicDataPhotosList**
> object graveyardPublicDataPhotosList($public_id, $ordering, $ids, $page)



Manage public data photo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_id = "public_id_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->graveyardPublicDataPhotosList($public_id, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPublicDataPhotosList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_id** | **string**|  |
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

# **graveyardPublicDataPhotosPartialUpdate**
> \Swagger\Client\Model\PublicDataPhoto graveyardPublicDataPhotosPartialUpdate($id, $public_id, $data)



Manage public data photo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this public data photo.
$public_id = "public_id_example"; // string | 
$data = new \Swagger\Client\Model\PublicDataPhoto(); // \Swagger\Client\Model\PublicDataPhoto | 

try {
    $result = $apiInstance->graveyardPublicDataPhotosPartialUpdate($id, $public_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPublicDataPhotosPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this public data photo. |
 **public_id** | **string**|  |
 **data** | [**\Swagger\Client\Model\PublicDataPhoto**](../Model/PublicDataPhoto.md)|  |

### Return type

[**\Swagger\Client\Model\PublicDataPhoto**](../Model/PublicDataPhoto.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPublicDataPhotosRead**
> \Swagger\Client\Model\PublicDataPhoto graveyardPublicDataPhotosRead($id, $public_id)



Manage public data photo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this public data photo.
$public_id = "public_id_example"; // string | 

try {
    $result = $apiInstance->graveyardPublicDataPhotosRead($id, $public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPublicDataPhotosRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this public data photo. |
 **public_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PublicDataPhoto**](../Model/PublicDataPhoto.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPublicDataPhotosUpdate**
> \Swagger\Client\Model\PublicDataPhoto graveyardPublicDataPhotosUpdate($id, $public_id, $data)



Manage public data photo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this public data photo.
$public_id = "public_id_example"; // string | 
$data = new \Swagger\Client\Model\PublicDataPhoto(); // \Swagger\Client\Model\PublicDataPhoto | 

try {
    $result = $apiInstance->graveyardPublicDataPhotosUpdate($id, $public_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPublicDataPhotosUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this public data photo. |
 **public_id** | **string**|  |
 **data** | [**\Swagger\Client\Model\PublicDataPhoto**](../Model/PublicDataPhoto.md)|  |

### Return type

[**\Swagger\Client\Model\PublicDataPhoto**](../Model/PublicDataPhoto.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPublicDataRead**
> \Swagger\Client\Model\PublicData graveyardPublicDataRead($id)



Manage public data information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Profil public.

try {
    $result = $apiInstance->graveyardPublicDataRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPublicDataRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Profil public. |

### Return type

[**\Swagger\Client\Model\PublicData**](../Model/PublicData.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **graveyardPublicDataUpdate**
> \Swagger\Client\Model\PublicData graveyardPublicDataUpdate($id, $data)



Manage public data information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GraveyardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Profil public.
$data = new \Swagger\Client\Model\PublicData(); // \Swagger\Client\Model\PublicData | 

try {
    $result = $apiInstance->graveyardPublicDataUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraveyardApi->graveyardPublicDataUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Profil public. |
 **data** | [**\Swagger\Client\Model\PublicData**](../Model/PublicData.md)|  |

### Return type

[**\Swagger\Client\Model\PublicData**](../Model/PublicData.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

