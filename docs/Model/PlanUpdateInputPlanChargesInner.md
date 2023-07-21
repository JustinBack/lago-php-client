# # PlanUpdateInputPlanChargesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the charge created by Lago. | [optional]
**billable_metric_id** | **string** | Unique identifier of the billable metric created by Lago. | [optional]
**charge_model** | **string** | Specifies the pricing model used for the calculation of the final fee. It can be &#x60;standard&#x60;, &#x60;graduated&#x60;, &#x60;package&#x60;, &#x60;percentage&#x60; or &#x60;volume&#x60;. | [optional]
**pay_in_advance** | **bool** | This field determines the billing timing for this specific usage-based charge. When set to &#x60;true&#x60;, the charge is due and invoiced immediately. Conversely, when set to false, the charge is due and invoiced at the end of each billing period. | [optional]
**invoiceable** | **bool** | This field specifies whether the charge should be included in a proper invoice. If set to false, no invoice will be issued for this charge. You can only set it to &#x60;false&#x60; when &#x60;pay_in_advance&#x60; is &#x60;true&#x60;. | [optional]
**min_amount_cents** | **int** | The minimum spending amount required for the charge, measured in cents and excluding any applicable taxes. It indicates the minimum amount that needs to be charged for each billing period. | [optional]
**properties** | [**\LagoClient\Model\ChargeObjectProperties**](ChargeObjectProperties.md) |  | [optional]
**group_properties** | [**\LagoClient\Model\PlanCreateInputPlanChargesInnerGroupPropertiesInner[]**](PlanCreateInputPlanChargesInnerGroupPropertiesInner.md) | All charge information, sorted by groups. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
