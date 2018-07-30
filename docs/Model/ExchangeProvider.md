# ExchangeProvider

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | UUID of the exchange provider | [optional] 
**is_provider** | **bool** |  | [optional] 
**visit_card_uuid** | **string** | UUID of the visit card | [optional] 
**is_public** | **bool** | If true, provider is listed in Global Exchange | [optional] 
**pops** | [**\tpn\Model\Pop[]**](Pop.md) | Locations for which exchange requests can be made to this provider | [optional] 
**pending_requests_count** | **int** | Number of requests awaiting provider approval | [optional] 
**approved_requests_count** | **int** | Number of requests provider has approved | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


