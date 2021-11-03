# Fiscal

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**partner** | **int** |  | 
**location** | **int** |  | [optional] 
**currency** | **string** |  | 
**language** | **string** |  | 
**delegate** | **int** |  | [optional] 
**uuid** | **string** |  | [optional] 
**series** | **int** |  | [optional] 
**number** | **string** |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) |  | 
**due_days** | **int** |  | [optional] 
**status** | **int** |  | [optional] 
**observations** | **string** |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**discount** | **string** | Procentaj default, dacă este completat rescrie discountul articolelor | [optional] 
**subtotal** | **string** | Subtotal RON redus/întreg | [optional] 
**tax_value** | **string** | TVA RON redus/întreg | [optional] 
**total** | **string** | Total RON redus/întreg | [optional] 
**discounted_total** | **string** | Suma valorilor reduse din articole | [optional] 
**subtotal_currency** | **string** | Subtotal valută redus/întreg | [optional] 
**tax_value_currency** | **string** | TVA valută redus/întreg | [optional] 
**total_currency** | **string** | Total valută redus/întreg | [optional] 
**discounted_total_currency** | **string** | Suma valorilor reduse din articole | [optional] 
**exchange_rate** | **string** |  | [optional] 
**extra** | **object** | Acest field este pentru a se stoca idul și tipul facturii la generarea din invoice_1 în invoice_2. | [optional] 
**amount_paid** | **string** |  | [optional] 
**is_storno** | **bool** |  | [optional] 
**former_document_id** | **int** |  | [optional] 
**items** | [**\Swagger\Client\Model\FiscalItemModel[]**](FiscalItemModel.md) |  | 
**order** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


