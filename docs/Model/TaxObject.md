# # TaxObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of the tax, created by Lago. |
**name** | **string** | Name of the tax. |
**code** | **string** | Unique code used to identify the tax associated with the API request. |
**description** | **string** | Internal description of the taxe | [optional]
**rate** | **float** | The percentage rate of the tax |
**applied_to_organization** | **bool** | Set to &#x60;true&#x60; if the tax is used as one of the organization&#39;s default |
**customers_count** | **int** | Number of customers this tax is applied to (directly or via the organization&#39;s default) |
**created_at** | **\DateTime** | Creation date of the tax. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
