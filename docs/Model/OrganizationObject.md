# # OrganizationObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier assigned to the organization within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the organization&#39;s record within the Lago system |
**name** | **string** | The name of your organization. |
**created_at** | **\DateTime** | The date of creation of your organization, represented in ISO 8601 datetime format and expressed in Coordinated Universal Time (UTC). |
**webhook_url** | **string** | The URL of your newest updated webhook endpoint. This URL allows your organization to receive important messages, notifications, or data from the Lago system. By configuring your webhook endpoint to this URL, you can ensure that your organization stays informed and receives relevant information in a timely manner. | [optional]
**webhook_urls** | **string[]** | The array containing your webhooks URLs. | [optional]
**country** | [**Country**](Country.md) |  | [optional]
**address_line1** | **string** | The first line of your organization’s billing address. | [optional]
**address_line2** | **string** | The second line of your organization’s billing address. | [optional]
**state** | **string** | The state of your organization’s billing address. | [optional]
**zipcode** | **string** | The zipcode of your organization’s billing address. | [optional]
**email** | **string** | The email address of your organization used to bill your customers. | [optional]
**city** | **string** | The city of your organization’s billing address. | [optional]
**legal_name** | **string** | The legal name of your organization. | [optional]
**legal_number** | **string** | The legal number of your organization. | [optional]
**tax_identification_number** | **string** | The tax identification number of your organization. | [optional]
**timezone** | [**Timezone**](Timezone.md) |  | [optional]
**billing_configuration** | [**\LagoClient\Model\OrganizationBillingConfiguration**](OrganizationBillingConfiguration.md) |  |
**taxes** | [**\LagoClient\Model\TaxObject[]**](TaxObject.md) | List of default organization taxes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
