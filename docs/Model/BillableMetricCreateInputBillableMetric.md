# # BillableMetricCreateInputBillableMetric

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the billable metric. |
**code** | **string** | Unique code used to identify the billable metric associated with the API request. This code associates each event with the correct metric. |
**description** | **string** | Internal description of the billable metric. | [optional]
**field_name** | **string** | Property of the billable metric used for aggregating usage data. This field is not required for &#x60;count_agg&#x60;. | [optional]
**aggregation_type** | **string** | Aggregation method used to compute usage for this billable metric. Possible values are &#x60;count_agg&#x60;, &#x60;sum_agg&#x60;, &#x60;max_agg&#x60; or &#x60;unique_count_agg&#x60;. |
**group** | [**\LagoClient\Model\BillableMetricGroup**](BillableMetricGroup.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
