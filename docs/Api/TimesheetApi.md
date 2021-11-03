# Swagger\Client\TimesheetApi

All URIs are relative to *https://app.prod.bapp.ro/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timesheetCalendarList**](TimesheetApi.md#timesheetCalendarList) | **GET** /timesheet/calendar/ | 
[**timesheetCalendarPdf**](TimesheetApi.md#timesheetCalendarPdf) | **GET** /timesheet/calendar/pdf/ | 
[**timesheetPresenceList**](TimesheetApi.md#timesheetPresenceList) | **GET** /timesheet/presence/ | 
[**timesheetRegisterMarkCreate**](TimesheetApi.md#timesheetRegisterMarkCreate) | **POST** /timesheet/register-mark | 
[**timesheetRegisterMarkList**](TimesheetApi.md#timesheetRegisterMarkList) | **GET** /timesheet/register-mark | 
[**timesheetRequestsApprove**](TimesheetApi.md#timesheetRequestsApprove) | **POST** /timesheet/requests/{id}/approve/ | 
[**timesheetRequestsCreate**](TimesheetApi.md#timesheetRequestsCreate) | **POST** /timesheet/requests/ | 
[**timesheetRequestsDelete**](TimesheetApi.md#timesheetRequestsDelete) | **DELETE** /timesheet/requests/{id}/ | 
[**timesheetRequestsList**](TimesheetApi.md#timesheetRequestsList) | **GET** /timesheet/requests/ | 
[**timesheetRequestsPartialUpdate**](TimesheetApi.md#timesheetRequestsPartialUpdate) | **PATCH** /timesheet/requests/{id}/ | 
[**timesheetRequestsRead**](TimesheetApi.md#timesheetRequestsRead) | **GET** /timesheet/requests/{id}/ | 
[**timesheetRequestsReject**](TimesheetApi.md#timesheetRequestsReject) | **POST** /timesheet/requests/{id}/reject/ | 
[**timesheetRequestsUpdate**](TimesheetApi.md#timesheetRequestsUpdate) | **PUT** /timesheet/requests/{id}/ | 
[**timesheetTimesheetCreate**](TimesheetApi.md#timesheetTimesheetCreate) | **POST** /timesheet/timesheet/ | 
[**timesheetTimesheetDelete**](TimesheetApi.md#timesheetTimesheetDelete) | **DELETE** /timesheet/timesheet/{id}/ | 
[**timesheetTimesheetList**](TimesheetApi.md#timesheetTimesheetList) | **GET** /timesheet/timesheet/ | 
[**timesheetTimesheetPartialUpdate**](TimesheetApi.md#timesheetTimesheetPartialUpdate) | **PATCH** /timesheet/timesheet/{id}/ | 
[**timesheetTimesheetRead**](TimesheetApi.md#timesheetTimesheetRead) | **GET** /timesheet/timesheet/{id}/ | 
[**timesheetTimesheetUpdate**](TimesheetApi.md#timesheetTimesheetUpdate) | **PUT** /timesheet/timesheet/{id}/ | 


# **timesheetCalendarList**
> object timesheetCalendarList($id, $q, $department, $active, $month, $employee_id, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8.14; // float | 
$q = "q_example"; // string | 
$department = 8.14; // float | 
$active = "active_example"; // string | 
$month = "month_example"; // string | 
$employee_id = 8.14; // float | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->timesheetCalendarList($id, $q, $department, $active, $month, $employee_id, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetCalendarList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**|  | [optional]
 **q** | **string**|  | [optional]
 **department** | **float**|  | [optional]
 **active** | **string**|  | [optional]
 **month** | **string**|  | [optional]
 **employee_id** | **float**|  | [optional]
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

# **timesheetCalendarPdf**
> object timesheetCalendarPdf($id, $q, $department, $active, $month, $employee_id, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8.14; // float | 
$q = "q_example"; // string | 
$department = 8.14; // float | 
$active = "active_example"; // string | 
$month = "month_example"; // string | 
$employee_id = 8.14; // float | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->timesheetCalendarPdf($id, $q, $department, $active, $month, $employee_id, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetCalendarPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**|  | [optional]
 **q** | **string**|  | [optional]
 **department** | **float**|  | [optional]
 **active** | **string**|  | [optional]
 **month** | **string**|  | [optional]
 **employee_id** | **float**|  | [optional]
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

# **timesheetPresenceList**
> object timesheetPresenceList($ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->timesheetPresenceList($ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetPresenceList: ', $e->getMessage(), PHP_EOL;
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

# **timesheetRegisterMarkCreate**
> \Swagger\Client\Model\TimeSheetCheck timesheetRegisterMarkCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\TimeSheetCheck(); // \Swagger\Client\Model\TimeSheetCheck | 

try {
    $result = $apiInstance->timesheetRegisterMarkCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetRegisterMarkCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TimeSheetCheck**](../Model/TimeSheetCheck.md)|  |

### Return type

[**\Swagger\Client\Model\TimeSheetCheck**](../Model/TimeSheetCheck.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetRegisterMarkList**
> object timesheetRegisterMarkList()





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->timesheetRegisterMarkList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetRegisterMarkList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetRequestsApprove**
> object timesheetRequestsApprove($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this cerere pontaj.
$data = new \Swagger\Client\Model\\Swagger\Client\Model\Data(); // \Swagger\Client\Model\Data | 

try {
    $result = $apiInstance->timesheetRequestsApprove($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetRequestsApprove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cerere pontaj. |
 **data** | [**\Swagger\Client\Model\Data**](../Model/.md)|  |

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetRequestsCreate**
> \Swagger\Client\Model\SelfTimesheetRequest timesheetRequestsCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\SelfTimesheetRequest(); // \Swagger\Client\Model\SelfTimesheetRequest | 

try {
    $result = $apiInstance->timesheetRequestsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetRequestsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\SelfTimesheetRequest**](../Model/SelfTimesheetRequest.md)|  |

### Return type

[**\Swagger\Client\Model\SelfTimesheetRequest**](../Model/SelfTimesheetRequest.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetRequestsDelete**
> timesheetRequestsDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this cerere pontaj.

try {
    $apiInstance->timesheetRequestsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetRequestsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cerere pontaj. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetRequestsList**
> object timesheetRequestsList($q, $approved, $type, $solved, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | 
$approved = "approved_example"; // string | 
$type = "type_example"; // string | 
$solved = "solved_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->timesheetRequestsList($q, $approved, $type, $solved, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetRequestsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**|  | [optional]
 **approved** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **solved** | **string**|  | [optional]
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

# **timesheetRequestsPartialUpdate**
> \Swagger\Client\Model\SelfTimesheetRequest timesheetRequestsPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this cerere pontaj.
$data = new \Swagger\Client\Model\SelfTimesheetRequest(); // \Swagger\Client\Model\SelfTimesheetRequest | 

try {
    $result = $apiInstance->timesheetRequestsPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetRequestsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cerere pontaj. |
 **data** | [**\Swagger\Client\Model\SelfTimesheetRequest**](../Model/SelfTimesheetRequest.md)|  |

### Return type

[**\Swagger\Client\Model\SelfTimesheetRequest**](../Model/SelfTimesheetRequest.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetRequestsRead**
> \Swagger\Client\Model\SelfTimesheetRequest timesheetRequestsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this cerere pontaj.

try {
    $result = $apiInstance->timesheetRequestsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetRequestsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cerere pontaj. |

### Return type

[**\Swagger\Client\Model\SelfTimesheetRequest**](../Model/SelfTimesheetRequest.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetRequestsReject**
> object timesheetRequestsReject($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this cerere pontaj.
$data = new \Swagger\Client\Model\\Swagger\Client\Model\Data(); // \Swagger\Client\Model\Data | 

try {
    $result = $apiInstance->timesheetRequestsReject($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetRequestsReject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cerere pontaj. |
 **data** | [**\Swagger\Client\Model\Data**](../Model/.md)|  |

### Return type

**object**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetRequestsUpdate**
> \Swagger\Client\Model\SelfTimesheetRequest timesheetRequestsUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this cerere pontaj.
$data = new \Swagger\Client\Model\SelfTimesheetRequest(); // \Swagger\Client\Model\SelfTimesheetRequest | 

try {
    $result = $apiInstance->timesheetRequestsUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetRequestsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cerere pontaj. |
 **data** | [**\Swagger\Client\Model\SelfTimesheetRequest**](../Model/SelfTimesheetRequest.md)|  |

### Return type

[**\Swagger\Client\Model\SelfTimesheetRequest**](../Model/SelfTimesheetRequest.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetTimesheetCreate**
> \Swagger\Client\Model\TimeSheetCreate timesheetTimesheetCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\TimeSheetCreate(); // \Swagger\Client\Model\TimeSheetCreate | 

try {
    $result = $apiInstance->timesheetTimesheetCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetTimesheetCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TimeSheetCreate**](../Model/TimeSheetCreate.md)|  |

### Return type

[**\Swagger\Client\Model\TimeSheetCreate**](../Model/TimeSheetCreate.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetTimesheetDelete**
> timesheetTimesheetDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this fișă pontaj.

try {
    $apiInstance->timesheetTimesheetDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetTimesheetDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this fișă pontaj. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetTimesheetList**
> object timesheetTimesheetList($type, $month, $employee_id, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | 
$month = "month_example"; // string | 
$employee_id = "employee_id_example"; // string | 
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->timesheetTimesheetList($type, $month, $employee_id, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetTimesheetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  | [optional]
 **month** | **string**|  | [optional]
 **employee_id** | **string**|  | [optional]
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

# **timesheetTimesheetPartialUpdate**
> \Swagger\Client\Model\TimeSheet timesheetTimesheetPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this fișă pontaj.
$data = new \Swagger\Client\Model\TimeSheet(); // \Swagger\Client\Model\TimeSheet | 

try {
    $result = $apiInstance->timesheetTimesheetPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetTimesheetPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this fișă pontaj. |
 **data** | [**\Swagger\Client\Model\TimeSheet**](../Model/TimeSheet.md)|  |

### Return type

[**\Swagger\Client\Model\TimeSheet**](../Model/TimeSheet.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetTimesheetRead**
> \Swagger\Client\Model\TimeSheet timesheetTimesheetRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this fișă pontaj.

try {
    $result = $apiInstance->timesheetTimesheetRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetTimesheetRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this fișă pontaj. |

### Return type

[**\Swagger\Client\Model\TimeSheet**](../Model/TimeSheet.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timesheetTimesheetUpdate**
> \Swagger\Client\Model\TimeSheet timesheetTimesheetUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this fișă pontaj.
$data = new \Swagger\Client\Model\TimeSheet(); // \Swagger\Client\Model\TimeSheet | 

try {
    $result = $apiInstance->timesheetTimesheetUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->timesheetTimesheetUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this fișă pontaj. |
 **data** | [**\Swagger\Client\Model\TimeSheet**](../Model/TimeSheet.md)|  |

### Return type

[**\Swagger\Client\Model\TimeSheet**](../Model/TimeSheet.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

