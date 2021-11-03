# PartnerOrderRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**company** | **int** | Firma care deține această înregistrare. | 
**currency** | **string** |  | 
**language** | **string** |  | 
**source** | **int** |  | [optional] 
**source_text** | **string** | Descrierea sursei | [optional] 
**delivery_type** | **int** |  | [optional] 
**delivered_by** | **string** |  | [optional] 
**delivery_identifier** | **string** |  | [optional] 
**delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**delivery_country** | **string** |  | [optional] 
**delivery_region** | **int** |  | [optional] 
**delivery_city** | **int** |  | [optional] 
**delivery_address** | **string** |  | [optional] 
**specific_date_time_requested** | [**\DateTime**](\DateTime.md) |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) |  | 
**exchange_rate** | **string** |  | [optional] 
**payment_type** | **int** |  | [optional] 
**discount** | **string** | Procentaj default, daca este completat rescrie discountul articolelor | [optional] 
**uuid** | **string** |  | [optional] 
**number** | **string** |  | [optional] 
**status** | **int** |  | [optional] 
**subtotal** | **string** | Subtotal RON redus/întreg | [optional] 
**tax_value** | **string** | TVA RON redus/întreg | [optional] 
**total** | **string** | Total RON redus/întreg | [optional] 
**discounted_total** | **string** | Suma valorilor reduse din articole | [optional] 
**subtotal_currency** | **string** | Subtotal valută redus/întreg | [optional] 
**tax_value_currency** | **string** | TVA valută redus/întreg | [optional] 
**total_currency** | **string** | Total valută redus/întreg | [optional] 
**discounted_total_currency** | **string** | Suma valorilor reduse din articole | [optional] 
**extra** | **object** | Acest field este pentru a se stoca idul și tipul facturii. | [optional] 
**items** | [**\Swagger\Client\Model\PartnerOrderItemReadModel[]**](PartnerOrderItemReadModel.md) |  | 
**order_partner** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


