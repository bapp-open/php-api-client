# Swagger\Client\AnnouncementApi

All URIs are relative to *https://app.prod.bapp.ro/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**announcementAnnouncementsAttachmentsCreate**](AnnouncementApi.md#announcementAnnouncementsAttachmentsCreate) | **POST** /announcement/announcements/{id}/attachments/ | 
[**announcementAnnouncementsAttachmentsDelete**](AnnouncementApi.md#announcementAnnouncementsAttachmentsDelete) | **DELETE** /announcement/announcements/{id}/attachments/{id}/ | 
[**announcementAnnouncementsAttachmentsList**](AnnouncementApi.md#announcementAnnouncementsAttachmentsList) | **GET** /announcement/announcements/{id}/attachments/ | 
[**announcementAnnouncementsAttachmentsPartialUpdate**](AnnouncementApi.md#announcementAnnouncementsAttachmentsPartialUpdate) | **PATCH** /announcement/announcements/{id}/attachments/{id}/ | 
[**announcementAnnouncementsAttachmentsRead**](AnnouncementApi.md#announcementAnnouncementsAttachmentsRead) | **GET** /announcement/announcements/{id}/attachments/{id}/ | 
[**announcementAnnouncementsAttachmentsUpdate**](AnnouncementApi.md#announcementAnnouncementsAttachmentsUpdate) | **PUT** /announcement/announcements/{id}/attachments/{id}/ | 
[**announcementAnnouncementsCreate**](AnnouncementApi.md#announcementAnnouncementsCreate) | **POST** /announcement/announcements/ | 
[**announcementAnnouncementsDelete**](AnnouncementApi.md#announcementAnnouncementsDelete) | **DELETE** /announcement/announcements/{id}/ | 
[**announcementAnnouncementsList**](AnnouncementApi.md#announcementAnnouncementsList) | **GET** /announcement/announcements/ | 
[**announcementAnnouncementsPartialUpdate**](AnnouncementApi.md#announcementAnnouncementsPartialUpdate) | **PATCH** /announcement/announcements/{id}/ | 
[**announcementAnnouncementsRead**](AnnouncementApi.md#announcementAnnouncementsRead) | **GET** /announcement/announcements/{id}/ | 
[**announcementAnnouncementsSendNotifications**](AnnouncementApi.md#announcementAnnouncementsSendNotifications) | **POST** /announcement/announcements/{id}/send-notifications/ | 
[**announcementAnnouncementsUpdate**](AnnouncementApi.md#announcementAnnouncementsUpdate) | **PUT** /announcement/announcements/{id}/ | 


# **announcementAnnouncementsAttachmentsCreate**
> \Swagger\Client\Model\Attachment announcementAnnouncementsAttachmentsCreate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this attachment.
$data = new \Swagger\Client\Model\Attachment(); // \Swagger\Client\Model\Attachment | 

try {
    $result = $apiInstance->announcementAnnouncementsAttachmentsCreate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->announcementAnnouncementsAttachmentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this attachment. |
 **data** | [**\Swagger\Client\Model\Attachment**](../Model/Attachment.md)|  |

### Return type

[**\Swagger\Client\Model\Attachment**](../Model/Attachment.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementAnnouncementsAttachmentsDelete**
> announcementAnnouncementsAttachmentsDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this attachment.

try {
    $apiInstance->announcementAnnouncementsAttachmentsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->announcementAnnouncementsAttachmentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this attachment. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementAnnouncementsAttachmentsList**
> object announcementAnnouncementsAttachmentsList($id, $ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this attachment.
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->announcementAnnouncementsAttachmentsList($id, $ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->announcementAnnouncementsAttachmentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this attachment. |
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

# **announcementAnnouncementsAttachmentsPartialUpdate**
> \Swagger\Client\Model\Attachment announcementAnnouncementsAttachmentsPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this attachment.
$data = new \Swagger\Client\Model\Attachment(); // \Swagger\Client\Model\Attachment | 

try {
    $result = $apiInstance->announcementAnnouncementsAttachmentsPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->announcementAnnouncementsAttachmentsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this attachment. |
 **data** | [**\Swagger\Client\Model\Attachment**](../Model/Attachment.md)|  |

### Return type

[**\Swagger\Client\Model\Attachment**](../Model/Attachment.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementAnnouncementsAttachmentsRead**
> \Swagger\Client\Model\Attachment announcementAnnouncementsAttachmentsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this attachment.

try {
    $result = $apiInstance->announcementAnnouncementsAttachmentsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->announcementAnnouncementsAttachmentsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this attachment. |

### Return type

[**\Swagger\Client\Model\Attachment**](../Model/Attachment.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementAnnouncementsAttachmentsUpdate**
> \Swagger\Client\Model\Attachment announcementAnnouncementsAttachmentsUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this attachment.
$data = new \Swagger\Client\Model\Attachment(); // \Swagger\Client\Model\Attachment | 

try {
    $result = $apiInstance->announcementAnnouncementsAttachmentsUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->announcementAnnouncementsAttachmentsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this attachment. |
 **data** | [**\Swagger\Client\Model\Attachment**](../Model/Attachment.md)|  |

### Return type

[**\Swagger\Client\Model\Attachment**](../Model/Attachment.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementAnnouncementsCreate**
> \Swagger\Client\Model\Announcement announcementAnnouncementsCreate($data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \Swagger\Client\Model\Announcement(); // \Swagger\Client\Model\Announcement | 

try {
    $result = $apiInstance->announcementAnnouncementsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->announcementAnnouncementsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Announcement**](../Model/Announcement.md)|  |

### Return type

[**\Swagger\Client\Model\Announcement**](../Model/Announcement.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementAnnouncementsDelete**
> announcementAnnouncementsDelete($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Anunt intern.

try {
    $apiInstance->announcementAnnouncementsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->announcementAnnouncementsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Anunt intern. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementAnnouncementsList**
> object announcementAnnouncementsList($ordering, $ids, $page)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = "ordering_example"; // string | Which field to use when ordering the results.
$ids = "ids_example"; // string | Specify required IDs separated by comma
$page = 56; // int | A page number within the paginated result set.

try {
    $result = $apiInstance->announcementAnnouncementsList($ordering, $ids, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->announcementAnnouncementsList: ', $e->getMessage(), PHP_EOL;
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

# **announcementAnnouncementsPartialUpdate**
> \Swagger\Client\Model\Announcement announcementAnnouncementsPartialUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Anunt intern.
$data = new \Swagger\Client\Model\Announcement(); // \Swagger\Client\Model\Announcement | 

try {
    $result = $apiInstance->announcementAnnouncementsPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->announcementAnnouncementsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Anunt intern. |
 **data** | [**\Swagger\Client\Model\Announcement**](../Model/Announcement.md)|  |

### Return type

[**\Swagger\Client\Model\Announcement**](../Model/Announcement.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementAnnouncementsRead**
> \Swagger\Client\Model\Announcement announcementAnnouncementsRead($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Anunt intern.

try {
    $result = $apiInstance->announcementAnnouncementsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->announcementAnnouncementsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Anunt intern. |

### Return type

[**\Swagger\Client\Model\Announcement**](../Model/Announcement.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementAnnouncementsSendNotifications**
> announcementAnnouncementsSendNotifications($id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Anunt intern.

try {
    $apiInstance->announcementAnnouncementsSendNotifications($id);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->announcementAnnouncementsSendNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Anunt intern. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementAnnouncementsUpdate**
> \Swagger\Client\Model\Announcement announcementAnnouncementsUpdate($id, $data)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this Anunt intern.
$data = new \Swagger\Client\Model\Announcement(); // \Swagger\Client\Model\Announcement | 

try {
    $result = $apiInstance->announcementAnnouncementsUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->announcementAnnouncementsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this Anunt intern. |
 **data** | [**\Swagger\Client\Model\Announcement**](../Model/Announcement.md)|  |

### Return type

[**\Swagger\Client\Model\Announcement**](../Model/Announcement.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

