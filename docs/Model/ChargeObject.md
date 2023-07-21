# # ChargeObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of charge, created by Lago. |
**lago_billable_metric_id** | **string** | Unique identifier of the billable metric created by Lago. |
**billable_metric_code** | **string** | Unique code identifying a billable metric. |
**created_at** | **\DateTime** | The date and time when the charge was created. It is expressed in UTC format according to the ISO 8601 datetime standard. |
**charge_model** | **string** | Specifies the pricing model used for the calculation of the final fee. It can be &#x60;standard&#x60;, &#x60;graduated&#x60;, &#x60;package&#x60;, &#x60;percentage&#x60; or &#x60;volume&#x60;. |
**pay_in_advance** | **bool** | This field determines the billing timing for this specific usage-based charge. When set to &#x60;true&#x60;, the charge is due and invoiced immediately. Conversely, when set to &#x60;false&#x60;, the charge is due and invoiced at the end of each billing period. | [optional]
**invoiceable** | **bool** | This field specifies whether the charge should be included in a proper invoice. If set to &#x60;false&#x60;, no invoice will be issued for this charge. You can only set it to &#x60;false&#x60; when &#x60;pay_in_advance&#x60; is &#x60;true&#x60;. | [optional]
**min_amount_cents** | **int** | The minimum spending amount required for the charge, measured in cents and excluding any applicable taxes. It indicates the minimum amount that needs to be charged for each billing period. | [optional]
**properties** | [**\LagoClient\Model\ChargeObjectProperties**](ChargeObjectProperties.md) |  | [optional]
**group_properties** | [**\LagoClient\Model\GroupPropertiesObject[]**](GroupPropertiesObject.md) | All charge information, sorted by groups. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
