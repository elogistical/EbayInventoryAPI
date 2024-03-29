# # ShippingCostOverride

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_shipping_cost** | [**\OpenAPI\Client\Model\Amount**](Amount.md) |  | [optional] 
**priority** | **int** | The integer value input into this field, along with the shippingServiceType value, sets which domestic or international shipping service option in the fulfillment policy will be modified with updated shipping costs. Specifically, the shippingCostOverrides.shippingServiceType value in a createOffer or updateOffer call must match the shippingOptions.optionType value in a fulfillment listing policy, and the shippingCostOverrides.priority value in a createOffer or updateOffer call must match the shippingOptions.shippingServices.sortOrderId value in a fulfillment listing policy. This field is always required when overriding the shipping costs of a shipping service option, and will be always be returned for each shipping service option whose costs are being overridden. | [optional] 
**shipping_cost** | [**\OpenAPI\Client\Model\Amount**](Amount.md) |  | [optional] 
**shipping_service_type** | **string** | This enumerated value indicates whether the shipping service specified in the priority field is a domestic or an international shipping service option. To override the shipping costs for a specific domestic shipping service in the fulfillment listing policy, this field should be set to DOMESTIC, and to override the shipping costs for each international shipping service, this field should be set to INTERNATIONAL. This value, along with priority value, sets which domestic or international shipping service option in the fulfillment policy that will be modified with updated shipping costs. Specifically, the shippingCostOverrides.shippingServiceType value in a createOffer or updateOffer call must match the shippingOptions.optionType value in a fulfillment listing policy, and the shippingCostOverrides.priority value in a createOffer or updateOffer call must match the shippingOptions.shippingServices.sortOrderId value in a fulfillment listing policy. This field is always required when overriding the shipping costs of a shipping service option, and will be always be returned for each shipping service option whose costs are being overridden. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/inventory/types/ShippingServiceTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**surcharge** | [**\OpenAPI\Client\Model\Amount**](Amount.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


