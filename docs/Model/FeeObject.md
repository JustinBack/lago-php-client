# # FeeObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** |  |
**lago_group_id** | **string** |  | [optional]
**lago_invoice_id** | **string** |  | [optional]
**lago_true_up_fee_id** | **string** |  | [optional]
**lago_true_up_parent_fee_id** | **string** |  | [optional]
**external_subscription_id** | **string** |  | [optional]
**amount_cents** | **int** |  |
**amount_currency** | **string** |  |
**vat_amount_cents** | **int** |  |
**vat_amount_currency** | **string** |  |
**units** | **string** |  |
**total_amount_cents** | **int** |  | [optional]
**total_amount_currency** | **string** |  | [optional]
**events_count** | **int** |  | [optional]
**pay_in_advance** | **bool** |  | [optional]
**invoiceable** | **bool** |  | [optional]
**from_date** | **\DateTime** |  | [optional]
**to_date** | **\DateTime** |  | [optional]
**payment_status** | **string** |  |
**created_at** | **\DateTime** |  |
**succeeded_at** | **\DateTime** |  | [optional]
**failed_at** | **\DateTime** |  | [optional]
**refunded_at** | **\DateTime** |  | [optional]
**item** | [**\LagoClient\Model\FeeObjectItem**](FeeObjectItem.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
