# # AppliedAddOnObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of the applied add-on created by Lago. |
**lago_add_on_id** | **string** | Unique identifier of the add-on created by Lago. |
**add_on_code** | **string** | Unique code used to identify the add-on. |
**lago_customer_id** | **string** | Unique identifier of the customer created by Lago. |
**external_customer_id** | **string** | The customer external unique identifier (provided by your own application) |
**amount_cents** | **int** | The cost of the add-on in cents, excluding any applicable taxes, that is billed to a customer. By creating a one-off invoice, you will be able to override this value. |
**amount_currency** | [**Currency**](Currency.md) |  |
**created_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
