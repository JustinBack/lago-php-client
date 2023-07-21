# # OrganizationUpdateInputOrganization

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_url** | **string** | The URL of your newest updated webhook endpoint. This URL allows your organization to receive important messages, notifications, or data from the Lago system. By configuring your webhook endpoint to this URL, you can ensure that your organization stays informed and receives relevant information in a timely manner. | [optional]
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
**email_settings** | **string[]** | Represents the email settings of the organization. It allows you to define which documents are sent by email. The field value determines the types of documents that trigger email notifications. Possible values for are &#x60;invoice.finalized&#x60; and &#x60;credit_note.created&#x60;. By configuring this field, you can specify whether invoices, credit notes, or both should be sent to recipients via email. | [optional]
**billing_configuration** | [**\LagoClient\Model\OrganizationBillingConfiguration**](OrganizationBillingConfiguration.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
