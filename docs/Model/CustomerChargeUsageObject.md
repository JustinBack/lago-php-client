# # CustomerChargeUsageObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**units** | **string** | The number of units consumed by the customer for a specific charge item. |
**amount_cents** | **int** | The amount in cents, tax excluded, consumed by the customer for a specific charge item. |
**amount_currency** | [**Currency**](Currency.md) |  |
**charge** | [**\LagoClient\Model\CustomerChargeUsageObjectCharge**](CustomerChargeUsageObjectCharge.md) |  |
**billable_metric** | [**\LagoClient\Model\CustomerChargeUsageObjectBillableMetric**](CustomerChargeUsageObjectBillableMetric.md) |  |
**groups** | [**\LagoClient\Model\CustomerChargeUsageObjectGroupsInner[]**](CustomerChargeUsageObjectGroupsInner.md) | Array of group object, representing multiple dimensions for a charge item. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
