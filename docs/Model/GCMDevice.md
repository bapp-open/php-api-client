# GCMDevice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**name** | **string** |  | [optional] 
**registration_id** | **string** |  | 
**device_id** | **int** | ANDROID_ID / TelephonyManager.getDeviceId() (e.g: 0x01) | [optional] 
**active** | **bool** | Inactive devices will not be sent notifications | [optional] 
**date_created** | [**\DateTime**](\DateTime.md) |  | [optional] 
**cloud_message_type** | **string** | You should choose FCM or GCM | [optional] 
**application_id** | **string** | Opaque application identity, should be filled in for multiple key/certificate access | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


