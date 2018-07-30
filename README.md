# Messaging SDK
Telstra Programmable Network is a self-provisioning platform that allows its users to create on-demand connectivity services between multiple end-points and add various network functions to those services. Programmable Network enables to connectivity to a global ecosystem of networking services as well as public and private cloud services. Once you are connected to the platform on one or more POPs (points of presence), you can start creating those services based on the use case that you want to accomplish. The Programmable Network API is available to all customers who have registered to use the Programmable Network. To register, please contact your account representative.


- API version: 2.4.2
- Package version: 1.0.3
For more information, please visit [https://dev.telstra.com/content/programmable-network-api](https://dev.telstra.com/content/programmable-network-api)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/Telstra/tpn.git"
    }
  ],
  "require": {
    "Telstra/tpn": "*@master"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new tpn\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = 'password'; // string | 
$username = 'username_example'; // string | 
$password = 'password_example'; // string | 

try {
    $result = $apiInstance->generateToken($grant_type, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->generateToken: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://penapi.pacnetconnect.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**generateToken**](docs/Api/AuthenticationApi.md#generatetoken) | **POST** /1.0.0/auth/generatetoken | Create an authentication token
*AuthenticationApi* | [**validateToken**](docs/Api/AuthenticationApi.md#validatetoken) | **GET** /1.0.0/auth/validatetoken | Validate authentication token
*ContractsApi* | [**inventoryLinksContract**](docs/Api/ContractsApi.md#inventorylinkscontract) | **POST** /1.0.0/inventory/links/{linkid}/contract | Create new Contract on specified link
*ContractsApi* | [**inventoryLinksContractGet**](docs/Api/ContractsApi.md#inventorylinkscontractget) | **GET** /1.0.0/inventory/links/{linkid}/contract/{contractid} | Get active Contract by ContractID
*ContractsApi* | [**inventoryLinksContractPut**](docs/Api/ContractsApi.md#inventorylinkscontractput) | **PUT** /1.0.0/inventory/links/{linkid}/contract/{contractid} | Update active Contract by ContractID
*CustomersApi* | [**account**](docs/Api/CustomersApi.md#account) | **GET** /1.0.0/account/{customeruuid} | Get account information details
*CustomersApi* | [**accountUser**](docs/Api/CustomersApi.md#accountuser) | **GET** /1.0.0/account/{customeruuid}/user | List users
*DatacentresApi* | [**inventoryDatacentres**](docs/Api/DatacentresApi.md#inventorydatacentres) | **GET** /1.0.0/inventory/datacenters | Get list of all the data centers
*EndpointsApi* | [**endpointEndpointuuidGet**](docs/Api/EndpointsApi.md#endpointendpointuuidget) | **GET** /eis/1.0.0/endpoint/endpointuuid/{endpointuuid} | Get Endpoint name and status
*EndpointsApi* | [**endpointEndpointuuidPut**](docs/Api/EndpointsApi.md#endpointendpointuuidput) | **PUT** /eis/1.0.0/endpoint/endpointuuid/{endpointuuid} | Update Endpoint name
*EndpointsApi* | [**endpointsAssignTopologyTag**](docs/Api/EndpointsApi.md#endpointsassigntopologytag) | **POST** /eis/1.0.0/endpoints/{endpointuuid}/assign_topology_tag | Assign an Endpoint to a Topology
*EndpointsApi* | [**endpointsTopologyTagUuid**](docs/Api/EndpointsApi.md#endpointstopologytaguuid) | **GET** /eis/1.0.0/endpoints/topology_tag_uuid/{topotaguuid} | List Endpoints for Topology
*EndpointsApi* | [**endpointsTopologyTagUuidEndpoint**](docs/Api/EndpointsApi.md#endpointstopologytaguuidendpoint) | **DELETE** /eis/1.0.0/endpoints/topology_tag_uuid/{topotaguuid}/endpoint/{endpointuuid} | Remove Endpoint from a Topology
*EndpointsApi* | [**inventoryEndpoint**](docs/Api/EndpointsApi.md#inventoryendpoint) | **GET** /1.0.0/inventory/endpoint/{endpointuuid} | Get information about the specified endpoint
*EndpointsApi* | [**inventoryEndpointsCustomeruuid**](docs/Api/EndpointsApi.md#inventoryendpointscustomeruuid) | **GET** /1.0.0/inventory/endpoints/customeruuid/{customeruuid} | Get list of endpoints for a customer
*EndpointsApi* | [**inventoryLinksStatsEndpoint**](docs/Api/EndpointsApi.md#inventorylinksstatsendpoint) | **GET** /1.0.0/inventory/links-stats/endpoint/{endpointuuid}/{startdate}/{enddate} | Get statistics for endpoint
*EndpointsApi* | [**inventoryLinksStatsEndpointstate**](docs/Api/EndpointsApi.md#inventorylinksstatsendpointstate) | **GET** /1.0.0/inventory/links-stats/endpointstate/{endpointuuid}/{startdate}/{enddate} | Get state statistics for endpoint
*EndpointsApi* | [**inventoryRegularendpoint**](docs/Api/EndpointsApi.md#inventoryregularendpoint) | **POST** /1.0.0/inventory/regularendpoint | Create Physical (Port) Endpoint
*EndpointsApi* | [**inventoryRegularvport**](docs/Api/EndpointsApi.md#inventoryregularvport) | **POST** /1.0.0/inventory/regularvport | Create VPort for physical endpoint
*EndpointsApi* | [**inventoryVnfendpoint**](docs/Api/EndpointsApi.md#inventoryvnfendpoint) | **POST** /1.0.0/inventory/vnfendpoint | Instantiate Virtual Network Function
*EndpointsApi* | [**vnfendpointVnfuuid**](docs/Api/EndpointsApi.md#vnfendpointvnfuuid) | **GET** /eis/1.0.0/vnfendpoint/vnfuuid/{vnfuuid} | Get details of a specific VNF
*ExchangeApi* | [**accountProfileExchange**](docs/Api/ExchangeApi.md#accountprofileexchange) | **GET** /1.0.0/account/profile/exchange | Get the current account&#39;s Exchange profile
*ExchangeApi* | [**exchange**](docs/Api/ExchangeApi.md#exchange) | **GET** /1.0.0/exchange | List all Exchange providers, with POPs
*ExchangeApi* | [**exchangeExprovuuid**](docs/Api/ExchangeApi.md#exchangeexprovuuid) | **GET** /1.0.0/exchange/{exprovuuid} | Exchange provider details
*ExchangeApi* | [**visitcard**](docs/Api/ExchangeApi.md#visitcard) | **GET** /1.0.0/visitcard | Get list of Visit Cards
*ExchangeApi* | [**visitcardUuidGet**](docs/Api/ExchangeApi.md#visitcarduuidget) | **GET** /1.0.0/visitcard/{visitcarduuid} | View details of the specified Visit Card
*ExchangeApi* | [**visitcardUuidPut**](docs/Api/ExchangeApi.md#visitcarduuidput) | **PUT** /1.0.0/visitcard/{visitcarduuid} | Update details of the specified Visit Card
*LinksApi* | [**inventoryLink**](docs/Api/LinksApi.md#inventorylink) | **POST** /1.0.0/inventory/link | Create Link and initial Contract
*LinksApi* | [**inventoryLinks**](docs/Api/LinksApi.md#inventorylinks) | **GET** /1.0.0/inventory/links/{linkid} | Get details of specified link
*LinksApi* | [**inventoryLinksCustomer**](docs/Api/LinksApi.md#inventorylinkscustomer) | **GET** /1.0.0/inventory/links/customer/{customeruuid} | Get active Links
*LinksApi* | [**inventoryLinksHistory**](docs/Api/LinksApi.md#inventorylinkshistory) | **GET** /1.0.0/inventory/links/history/{linkid} | Get Link history
*LinksApi* | [**inventoryLinksStatsFlow**](docs/Api/LinksApi.md#inventorylinksstatsflow) | **GET** /1.0.0/inventory/links-stats/flow/{linkid}/{startdate}/{enddate} | Get statistics for flow
*StatisticsApi* | [**inventoryLinksStatsEndpoint**](docs/Api/StatisticsApi.md#inventorylinksstatsendpoint) | **GET** /1.0.0/inventory/links-stats/endpoint/{endpointuuid}/{startdate}/{enddate} | Get statistics for endpoint
*StatisticsApi* | [**inventoryLinksStatsEndpointstate**](docs/Api/StatisticsApi.md#inventorylinksstatsendpointstate) | **GET** /1.0.0/inventory/links-stats/endpointstate/{endpointuuid}/{startdate}/{enddate} | Get state statistics for endpoint
*StatisticsApi* | [**inventoryLinksStatsFlow**](docs/Api/StatisticsApi.md#inventorylinksstatsflow) | **GET** /1.0.0/inventory/links-stats/flow/{linkid}/{startdate}/{enddate} | Get statistics for flow
*TopologiesApi* | [**endpointsAssignTopologyTag**](docs/Api/TopologiesApi.md#endpointsassigntopologytag) | **POST** /eis/1.0.0/endpoints/{endpointuuid}/assign_topology_tag | Assign an Endpoint to a Topology
*TopologiesApi* | [**endpointsTopologyTagUuid**](docs/Api/TopologiesApi.md#endpointstopologytaguuid) | **GET** /eis/1.0.0/endpoints/topology_tag_uuid/{topotaguuid} | List Endpoints for Topology
*TopologiesApi* | [**endpointsTopologyTagUuidEndpoint**](docs/Api/TopologiesApi.md#endpointstopologytaguuidendpoint) | **DELETE** /eis/1.0.0/endpoints/topology_tag_uuid/{topotaguuid}/endpoint/{endpointuuid} | Remove Endpoint from a Topology
*TopologiesApi* | [**topologyTagGet**](docs/Api/TopologiesApi.md#topologytagget) | **GET** /ttms/1.0.0/topology_tag | List all topology tags
*TopologiesApi* | [**topologyTagObjects**](docs/Api/TopologiesApi.md#topologytagobjects) | **GET** /ttms/1.0.0/topology_tag/{topotaguuid}/objects/ | List objects for Topology
*TopologiesApi* | [**topologyTagPost**](docs/Api/TopologiesApi.md#topologytagpost) | **POST** /ttms/1.0.0/topology_tag | Create a named topology tag
*TopologiesApi* | [**topologyTagUuidDelete**](docs/Api/TopologiesApi.md#topologytaguuiddelete) | **DELETE** /ttms/1.0.0/topology_tag/{topotaguuid}/ | Delete a topology tag
*TopologiesApi* | [**topologyTagUuidGet**](docs/Api/TopologiesApi.md#topologytaguuidget) | **GET** /ttms/1.0.0/topology_tag/{topotaguuid}/ | Get information about the specified topology tag
*TopologiesApi* | [**topologyTagUuidPut**](docs/Api/TopologiesApi.md#topologytaguuidput) | **PUT** /ttms/1.0.0/topology_tag/{topotaguuid}/ | Update a topology tag&#39;s name and/or description
*UsersApi* | [**accountUser**](docs/Api/UsersApi.md#accountuser) | **GET** /1.0.0/account/{customeruuid}/user | List users
*VnfsApi* | [**bmsBackup**](docs/Api/VnfsApi.md#bmsbackup) | **POST** /bms/1.0.0/backup | Create backup of specified VNF
*VnfsApi* | [**bmsBackupDelete**](docs/Api/VnfsApi.md#bmsbackupdelete) | **DELETE** /bms/1.0.0/backup/{backupuuid} | Delete specified backup
*VnfsApi* | [**bmsBackupGet**](docs/Api/VnfsApi.md#bmsbackupget) | **GET** /bms/1.0.0/backup/{backupuuid} | Get information about the specified backup
*VnfsApi* | [**bmsBackupRestore**](docs/Api/VnfsApi.md#bmsbackuprestore) | **POST** /bms/1.0.0/backup/{backupuuid}/restore | Restore VNF from backup
*VnfsApi* | [**bmsBackupVnf**](docs/Api/VnfsApi.md#bmsbackupvnf) | **GET** /bms/1.0.0/backup/vnf/{vnfuuid} | List backups
*VnfsApi* | [**bmsBackupVnfDelete**](docs/Api/VnfsApi.md#bmsbackupvnfdelete) | **POST** /bms/1.0.0/backup/vnf/{vnfuuid}/delete | Delete multiple backups
*VnfsApi* | [**inventoryVnfVport**](docs/Api/VnfsApi.md#inventoryvnfvport) | **POST** /1.0.0/inventory/vnf/vport | Create VNF VPort
*VnfsApi* | [**inventoryVnfendpoint**](docs/Api/VnfsApi.md#inventoryvnfendpoint) | **POST** /1.0.0/inventory/vnfendpoint | Instantiate Virtual Network Function
*VnfsApi* | [**marketplaceImage**](docs/Api/VnfsApi.md#marketplaceimage) | **GET** /1.0.0/marketplace/image | List images in the Marketplace
*VnfsApi* | [**marketplaceImageAdd**](docs/Api/VnfsApi.md#marketplaceimageadd) | **POST** /1.0.0/marketplace/image/{imageid}/add_to_my_images/ | Add specified image to \&quot;My Images\&quot;
*VnfsApi* | [**marketplaceImageImageid**](docs/Api/VnfsApi.md#marketplaceimageimageid) | **GET** /1.0.0/marketplace/image/{imageid}/ | Get information about the specified image
*VnfsApi* | [**marketplaceImageMyImages**](docs/Api/VnfsApi.md#marketplaceimagemyimages) | **GET** /1.0.0/marketplace/image/my_images/ | List images in \&quot;My Images\&quot;
*VnfsApi* | [**marketplaceImageRemove**](docs/Api/VnfsApi.md#marketplaceimageremove) | **POST** /1.0.0/marketplace/image/{imageid}/remove_from_my_images/ | Remove specified image from \&quot;My Images\&quot;
*VnfsApi* | [**vnf**](docs/Api/VnfsApi.md#vnf) | **GET** /vnfds/1.0.0/vnf/{vnfuuid}/ | Get status information about the specified VNF
*VnfsApi* | [**vnfReboot**](docs/Api/VnfsApi.md#vnfreboot) | **POST** /vnfds/1.0.0/vnf/{vnfuuid}/reboot | Reboot the specified VNF
*VnfsApi* | [**vnfResume**](docs/Api/VnfsApi.md#vnfresume) | **POST** /vnfds/1.0.0/vnf/{vnfuuid}/resume | Resume the specified VNF
*VnfsApi* | [**vnfSuspend**](docs/Api/VnfsApi.md#vnfsuspend) | **POST** /vnfds/1.0.0/vnf/{vnfuuid}/suspend | Suspend the specified VNF
*VnfsApi* | [**vnfendpointVnfuuid**](docs/Api/VnfsApi.md#vnfendpointvnfuuid) | **GET** /eis/1.0.0/vnfendpoint/vnfuuid/{vnfuuid} | Get details of a specific VNF
*VportsApi* | [**inventoryRegularvport**](docs/Api/VportsApi.md#inventoryregularvport) | **POST** /1.0.0/inventory/regularvport | Create VPort for physical endpoint
*VportsApi* | [**inventoryVnfVport**](docs/Api/VportsApi.md#inventoryvnfvport) | **POST** /1.0.0/inventory/vnf/vport | Create VNF VPort
*VportsApi* | [**inventoryVport**](docs/Api/VportsApi.md#inventoryvport) | **GET** /1.0.0/inventory/vport/{vportuuid} | Get information about the specified VPort


## Documentation For Models

 - [Assigntopotagrequest](docs/Model/Assigntopotagrequest.md)
 - [Backup](docs/Model/Backup.md)
 - [Backuprequest](docs/Model/Backuprequest.md)
 - [Billing](docs/Model/Billing.md)
 - [Body](docs/Model/Body.md)
 - [Connections](docs/Model/Connections.md)
 - [Contract](docs/Model/Contract.md)
 - [ContractresponseFragment](docs/Model/ContractresponseFragment.md)
 - [ContractresponsefragmentParams](docs/Model/ContractresponsefragmentParams.md)
 - [Createcontractrequest](docs/Model/Createcontractrequest.md)
 - [Createlinkrequest](docs/Model/Createlinkrequest.md)
 - [EndpointPort](docs/Model/EndpointPort.md)
 - [Endpointupdaterequest](docs/Model/Endpointupdaterequest.md)
 - [Error](docs/Model/Error.md)
 - [ExchangeProvider](docs/Model/ExchangeProvider.md)
 - [Flavor](docs/Model/Flavor.md)
 - [Image](docs/Model/Image.md)
 - [ImageClassifications](docs/Model/ImageClassifications.md)
 - [ImageGlanceImage](docs/Model/ImageGlanceImage.md)
 - [ImageProduct](docs/Model/ImageProduct.md)
 - [ImageZeroDayConfigSpec](docs/Model/ImageZeroDayConfigSpec.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20013Endpoints](docs/Model/InlineResponse20013Endpoints.md)
 - [InlineResponse20013Links](docs/Model/InlineResponse20013Links.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20014Endpoints](docs/Model/InlineResponse20014Endpoints.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse2001Endpointlist](docs/Model/InlineResponse2001Endpointlist.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse2002Datacenter](docs/Model/InlineResponse2002Datacenter.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2006Params](docs/Model/InlineResponse2006Params.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse200Datacenters](docs/Model/InlineResponse200Datacenters.md)
 - [InlineResponse202](docs/Model/InlineResponse202.md)
 - [InlineResponse202Errormsg](docs/Model/InlineResponse202Errormsg.md)
 - [InlineResponse401](docs/Model/InlineResponse401.md)
 - [Link](docs/Model/Link.md)
 - [Meta](docs/Model/Meta.md)
 - [Model100inventorylinksstatsflowlinkidstartdateenddateTags](docs/Model/Model100inventorylinksstatsflowlinkidstartdateenddateTags.md)
 - [Pop](docs/Model/Pop.md)
 - [Rebootrequest](docs/Model/Rebootrequest.md)
 - [Regendpointrequest](docs/Model/Regendpointrequest.md)
 - [Regvportrequest](docs/Model/Regvportrequest.md)
 - [RegvportrequestVportvalue](docs/Model/RegvportrequestVportvalue.md)
 - [Role](docs/Model/Role.md)
 - [SuccessFragment](docs/Model/SuccessFragment.md)
 - [Topology](docs/Model/Topology.md)
 - [Topotagcreaterequest](docs/Model/Topotagcreaterequest.md)
 - [Topotagupdateresponse](docs/Model/Topotagupdateresponse.md)
 - [User](docs/Model/User.md)
 - [Visitcard](docs/Model/Visitcard.md)
 - [Vlan](docs/Model/Vlan.md)
 - [VnfTag](docs/Model/VnfTag.md)
 - [Vnfendpointrequest](docs/Model/Vnfendpointrequest.md)
 - [Vport](docs/Model/Vport.md)
 - [Vportrequest](docs/Model/Vportrequest.md)


## Documentation For Authorisation


## oAuth2

- **Type**: OAuth
- **Flow**: password
- **Authorisation URL**: 
- **Scopes**: N/A


## Author

pnapi-support@team.telstra.com


