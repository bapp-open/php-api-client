# Swagger\Client\EnkiApi

All URIs are relative to *https://app.prod.bapp.ro/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enkiCategoriesList**](EnkiApi.md#enkiCategoriesList) | **GET** /enki/categories/ | 
[**enkiCemeteriesCreate**](EnkiApi.md#enkiCemeteriesCreate) | **POST** /enki/cemeteries/ | 
[**enkiCemeteriesList**](EnkiApi.md#enkiCemeteriesList) | **GET** /enki/cemeteries/ | 
[**enkiPartnersCreate**](EnkiApi.md#enkiPartnersCreate) | **POST** /enki/partners/ | 
[**enkiPartnersPartialUpdate**](EnkiApi.md#enkiPartnersPartialUpdate) | **PATCH** /enki/partners/{id}/ | 
[**enkiPartnersRead**](EnkiApi.md#enkiPartnersRead) | **GET** /enki/partners/{id}/ | 
[**enkiPartnersUpdate**](EnkiApi.md#enkiPartnersUpdate) | **PUT** /enki/partners/{id}/ | 
[**enkiProductsCreate**](EnkiApi.md#enkiProductsCreate) | **POST** /enki/products/ | 
[**enkiProductsDelete**](EnkiApi.md#enkiProductsDelete) | **DELETE** /enki/products/{id}/ | 
[**enkiProductsList**](EnkiApi.md#enkiProductsList) | **GET** /enki/products/ | 
[**enkiProductsPartialUpdate**](EnkiApi.md#enkiProductsPartialUpdate) | **PATCH** /enki/products/{id}/ | 
[**enkiProductsRead**](EnkiApi.md#enkiProductsRead) | **GET** /enki/products/{id}/ | 
[**enkiProductsUpdate**](EnkiApi.md#enkiProductsUpdate) | **PUT** /enki/products/{id}/ | 
[**enkiUserProductsRead**](EnkiApi.md#enkiUserProductsRead) | **GET** /enki/user/products/{category_id}/{cemetery_id} | 


# **enkiCategoriesList**
> enkiCategoriesList($q, $parent, $ordering, $ids)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$parent = "parent_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma

try {
    $apiInstance->enkiCategoriesList($q, $parent, $ordering, $ids);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiCategoriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **parent** | **string**|  | [optional]
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **ids** | **string**| Specify required IDs separated by comma | [optional]

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enkiCemeteriesCreate**
> \Swagger\Client\Model\CompanyCemetery enkiCemeteriesCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\CompanyCemetery(); // \Swagger\Client\Model\CompanyCemetery | 

try {
    $result = $apiInstance->enkiCemeteriesCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiCemeteriesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\CompanyCemetery**](../Model/CompanyCemetery.md)|  |

### Return type

[**\Swagger\Client\Model\CompanyCemetery**](../Model/CompanyCemetery.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enkiCemeteriesList**
> object enkiCemeteriesList($country, $city, $position, $q, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "country_example"; // string | 
$city = "city_example"; // string | 
$position = "position_example"; // string | 
$q = "q_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->enkiCemeteriesList($country, $city, $position, $q, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiCemeteriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **position** | **string**|  | [optional]
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

# **enkiPartnersCreate**
> \Swagger\Client\Model\CompanyEnkiPartner enkiPartnersCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\CompanyEnkiPartner(); // \Swagger\Client\Model\CompanyEnkiPartner | 

try {
    $result = $apiInstance->enkiPartnersCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiPartnersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\CompanyEnkiPartner**](../Model/CompanyEnkiPartner.md)|  |

### Return type

[**\Swagger\Client\Model\CompanyEnkiPartner**](../Model/CompanyEnkiPartner.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enkiPartnersPartialUpdate**
> \Swagger\Client\Model\CompanyEnkiPartner enkiPartnersPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$data = new \Swagger\Client\Model\CompanyEnkiPartner(); // \Swagger\Client\Model\CompanyEnkiPartner | 

try {
    $result = $apiInstance->enkiPartnersPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiPartnersPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\Swagger\Client\Model\CompanyEnkiPartner**](../Model/CompanyEnkiPartner.md)|  |

### Return type

[**\Swagger\Client\Model\CompanyEnkiPartner**](../Model/CompanyEnkiPartner.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enkiPartnersRead**
> \Swagger\Client\Model\CompanyEnkiPartner enkiPartnersRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->enkiPartnersRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiPartnersRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CompanyEnkiPartner**](../Model/CompanyEnkiPartner.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enkiPartnersUpdate**
> \Swagger\Client\Model\CompanyEnkiPartner enkiPartnersUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$data = new \Swagger\Client\Model\CompanyEnkiPartner(); // \Swagger\Client\Model\CompanyEnkiPartner | 

try {
    $result = $apiInstance->enkiPartnersUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiPartnersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\Swagger\Client\Model\CompanyEnkiPartner**](../Model/CompanyEnkiPartner.md)|  |

### Return type

[**\Swagger\Client\Model\CompanyEnkiPartner**](../Model/CompanyEnkiPartner.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enkiProductsCreate**
> \Swagger\Client\Model\CompanyEnkiProduct enkiProductsCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\CompanyEnkiProduct(); // \Swagger\Client\Model\CompanyEnkiProduct | 

try {
    $result = $apiInstance->enkiProductsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiProductsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\CompanyEnkiProduct**](../Model/CompanyEnkiProduct.md)|  |

### Return type

[**\Swagger\Client\Model\CompanyEnkiProduct**](../Model/CompanyEnkiProduct.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enkiProductsDelete**
> enkiProductsDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->enkiProductsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiProductsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enkiProductsList**
> object enkiProductsList($q, $partner, $category, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$partner = "partner_example"; // string | 
$category = "category_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->enkiProductsList($q, $partner, $category, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiProductsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **partner** | **string**|  | [optional]
 **category** | **string**|  | [optional]
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

# **enkiProductsPartialUpdate**
> \Swagger\Client\Model\CompanyEnkiProduct enkiProductsPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$data = new \Swagger\Client\Model\CompanyEnkiProduct(); // \Swagger\Client\Model\CompanyEnkiProduct | 

try {
    $result = $apiInstance->enkiProductsPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiProductsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\Swagger\Client\Model\CompanyEnkiProduct**](../Model/CompanyEnkiProduct.md)|  |

### Return type

[**\Swagger\Client\Model\CompanyEnkiProduct**](../Model/CompanyEnkiProduct.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enkiProductsRead**
> \Swagger\Client\Model\CompanyEnkiProduct enkiProductsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->enkiProductsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiProductsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CompanyEnkiProduct**](../Model/CompanyEnkiProduct.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enkiProductsUpdate**
> \Swagger\Client\Model\CompanyEnkiProduct enkiProductsUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$data = new \Swagger\Client\Model\CompanyEnkiProduct(); // \Swagger\Client\Model\CompanyEnkiProduct | 

try {
    $result = $apiInstance->enkiProductsUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiProductsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\Swagger\Client\Model\CompanyEnkiProduct**](../Model/CompanyEnkiProduct.md)|  |

### Return type

[**\Swagger\Client\Model\CompanyEnkiProduct**](../Model/CompanyEnkiProduct.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enkiUserProductsRead**
> object enkiUserProductsRead($category_id, $cemetery_id, $q, $partner, $category, $ordering, $ids, $page)



Read only public endpoint for user and guest, will receive published products which are part of a given category and part of partners which contain a given cemetery position

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\EnkiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = "category_id_example"; // string | 
$cemetery_id = "cemetery_id_example"; // string | 
$q = "q_example"; // string | 
$partner = "partner_example"; // string | 
$category = "category_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->enkiUserProductsRead($category_id, $cemetery_id, $q, $partner, $category, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnkiApi->enkiUserProductsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**|  |
 **cemetery_id** | **string**|  |
 **q** | **string**|  | [optional]
 **partner** | **string**|  | [optional]
 **category** | **string**|  | [optional]
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

