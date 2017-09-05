# connectwise-sales-php-client
ConnectWise Sales API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 3.0.0-beta
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.6.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```bash
composer require spinen/connectwise-sales-php-client
```

Or modify your `composer.json` file:

```json
{
    "require": {
        "spinen/connectwise-sales-php-client": "^3.0.0-beta"
    }
}
```

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/connectwise-sales-php-client/autoload.php');
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

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Sales\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Sales\Api\ActivitiesApi();
$conditions = "conditions_example"; // string | 
$custom_field_conditions = "custom_field_conditions_example"; // string | 

try {
    $result = $api_instance->salesActivitiesCountGet($conditions, $custom_field_conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->salesActivitiesCountGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivitiesApi* | [**salesActivitiesCountGet**](docs/Api/ActivitiesApi.md#salesactivitiescountget) | **GET** /sales/activities/count | 
*ActivitiesApi* | [**salesActivitiesGet**](docs/Api/ActivitiesApi.md#salesactivitiesget) | **GET** /sales/activities | 
*ActivitiesApi* | [**salesActivitiesIdDelete**](docs/Api/ActivitiesApi.md#salesactivitiesiddelete) | **DELETE** /sales/activities/{id} | 
*ActivitiesApi* | [**salesActivitiesIdGet**](docs/Api/ActivitiesApi.md#salesactivitiesidget) | **GET** /sales/activities/{id} | 
*ActivitiesApi* | [**salesActivitiesIdPatch**](docs/Api/ActivitiesApi.md#salesactivitiesidpatch) | **PATCH** /sales/activities/{id} | 
*ActivitiesApi* | [**salesActivitiesIdPut**](docs/Api/ActivitiesApi.md#salesactivitiesidput) | **PUT** /sales/activities/{id} | 
*ActivitiesApi* | [**salesActivitiesPost**](docs/Api/ActivitiesApi.md#salesactivitiespost) | **POST** /sales/activities | 
*ActivityStatusesApi* | [**salesActivitiesStatusesCountGet**](docs/Api/ActivityStatusesApi.md#salesactivitiesstatusescountget) | **GET** /sales/activities/statuses/count | 
*ActivityStatusesApi* | [**salesActivitiesStatusesGet**](docs/Api/ActivityStatusesApi.md#salesactivitiesstatusesget) | **GET** /sales/activities/statuses | 
*ActivityStatusesApi* | [**salesActivitiesStatusesIdDelete**](docs/Api/ActivityStatusesApi.md#salesactivitiesstatusesiddelete) | **DELETE** /sales/activities/statuses/{id} | 
*ActivityStatusesApi* | [**salesActivitiesStatusesIdGet**](docs/Api/ActivityStatusesApi.md#salesactivitiesstatusesidget) | **GET** /sales/activities/statuses/{id} | 
*ActivityStatusesApi* | [**salesActivitiesStatusesIdPatch**](docs/Api/ActivityStatusesApi.md#salesactivitiesstatusesidpatch) | **PATCH** /sales/activities/statuses/{id} | 
*ActivityStatusesApi* | [**salesActivitiesStatusesIdPut**](docs/Api/ActivityStatusesApi.md#salesactivitiesstatusesidput) | **PUT** /sales/activities/statuses/{id} | 
*ActivityStatusesApi* | [**salesActivitiesStatusesPost**](docs/Api/ActivityStatusesApi.md#salesactivitiesstatusespost) | **POST** /sales/activities/statuses | 
*ActivityTypesApi* | [**salesActivitiesTypesCountGet**](docs/Api/ActivityTypesApi.md#salesactivitiestypescountget) | **GET** /sales/activities/types/count | 
*ActivityTypesApi* | [**salesActivitiesTypesGet**](docs/Api/ActivityTypesApi.md#salesactivitiestypesget) | **GET** /sales/activities/types | 
*ActivityTypesApi* | [**salesActivitiesTypesIdDelete**](docs/Api/ActivityTypesApi.md#salesactivitiestypesiddelete) | **DELETE** /sales/activities/types/{id} | 
*ActivityTypesApi* | [**salesActivitiesTypesIdGet**](docs/Api/ActivityTypesApi.md#salesactivitiestypesidget) | **GET** /sales/activities/types/{id} | 
*ActivityTypesApi* | [**salesActivitiesTypesIdPatch**](docs/Api/ActivityTypesApi.md#salesactivitiestypesidpatch) | **PATCH** /sales/activities/types/{id} | 
*ActivityTypesApi* | [**salesActivitiesTypesIdPut**](docs/Api/ActivityTypesApi.md#salesactivitiestypesidput) | **PUT** /sales/activities/types/{id} | 
*ActivityTypesApi* | [**salesActivitiesTypesPost**](docs/Api/ActivityTypesApi.md#salesactivitiestypespost) | **POST** /sales/activities/types | 
*OpportunitiesApi* | [**salesOpportunitiesCountGet**](docs/Api/OpportunitiesApi.md#salesopportunitiescountget) | **GET** /sales/opportunities/count | 
*OpportunitiesApi* | [**salesOpportunitiesGet**](docs/Api/OpportunitiesApi.md#salesopportunitiesget) | **GET** /sales/opportunities | 
*OpportunitiesApi* | [**salesOpportunitiesIdConvertToAgreementPost**](docs/Api/OpportunitiesApi.md#salesopportunitiesidconverttoagreementpost) | **POST** /sales/opportunities/{id}/convertToAgreement | 
*OpportunitiesApi* | [**salesOpportunitiesIdConvertToProjectPost**](docs/Api/OpportunitiesApi.md#salesopportunitiesidconverttoprojectpost) | **POST** /sales/opportunities/{id}/convertToProject | 
*OpportunitiesApi* | [**salesOpportunitiesIdConvertToSalesOrderPost**](docs/Api/OpportunitiesApi.md#salesopportunitiesidconverttosalesorderpost) | **POST** /sales/opportunities/{id}/convertToSalesOrder | 
*OpportunitiesApi* | [**salesOpportunitiesIdConvertToServiceTicketPost**](docs/Api/OpportunitiesApi.md#salesopportunitiesidconverttoserviceticketpost) | **POST** /sales/opportunities/{id}/convertToServiceTicket | 
*OpportunitiesApi* | [**salesOpportunitiesIdDelete**](docs/Api/OpportunitiesApi.md#salesopportunitiesiddelete) | **DELETE** /sales/opportunities/{id} | 
*OpportunitiesApi* | [**salesOpportunitiesIdGet**](docs/Api/OpportunitiesApi.md#salesopportunitiesidget) | **GET** /sales/opportunities/{id} | 
*OpportunitiesApi* | [**salesOpportunitiesIdPatch**](docs/Api/OpportunitiesApi.md#salesopportunitiesidpatch) | **PATCH** /sales/opportunities/{id} | 
*OpportunitiesApi* | [**salesOpportunitiesIdPut**](docs/Api/OpportunitiesApi.md#salesopportunitiesidput) | **PUT** /sales/opportunities/{id} | 
*OpportunitiesApi* | [**salesOpportunitiesPost**](docs/Api/OpportunitiesApi.md#salesopportunitiespost) | **POST** /sales/opportunities | 
*OpportunityContactsApi* | [**salesOpportunitiesIdContactsContactIdDelete**](docs/Api/OpportunityContactsApi.md#salesopportunitiesidcontactscontactiddelete) | **DELETE** /sales/opportunities/{id}/contacts/{contactId} | 
*OpportunityContactsApi* | [**salesOpportunitiesIdContactsContactIdGet**](docs/Api/OpportunityContactsApi.md#salesopportunitiesidcontactscontactidget) | **GET** /sales/opportunities/{id}/contacts/{contactId} | 
*OpportunityContactsApi* | [**salesOpportunitiesIdContactsContactIdPatch**](docs/Api/OpportunityContactsApi.md#salesopportunitiesidcontactscontactidpatch) | **PATCH** /sales/opportunities/{id}/contacts/{contactId} | 
*OpportunityContactsApi* | [**salesOpportunitiesIdContactsContactIdPut**](docs/Api/OpportunityContactsApi.md#salesopportunitiesidcontactscontactidput) | **PUT** /sales/opportunities/{id}/contacts/{contactId} | 
*OpportunityContactsApi* | [**salesOpportunitiesIdContactsCountGet**](docs/Api/OpportunityContactsApi.md#salesopportunitiesidcontactscountget) | **GET** /sales/opportunities/{id}/contacts/count | 
*OpportunityContactsApi* | [**salesOpportunitiesIdContactsGet**](docs/Api/OpportunityContactsApi.md#salesopportunitiesidcontactsget) | **GET** /sales/opportunities/{id}/contacts | 
*OpportunityContactsApi* | [**salesOpportunitiesIdContactsPost**](docs/Api/OpportunityContactsApi.md#salesopportunitiesidcontactspost) | **POST** /sales/opportunities/{id}/contacts | 
*OpportunityForecastsApi* | [**salesOpportunitiesIdForecastCountGet**](docs/Api/OpportunityForecastsApi.md#salesopportunitiesidforecastcountget) | **GET** /sales/opportunities/{id}/forecast/count | 
*OpportunityForecastsApi* | [**salesOpportunitiesIdForecastForecastIdDelete**](docs/Api/OpportunityForecastsApi.md#salesopportunitiesidforecastforecastiddelete) | **DELETE** /sales/opportunities/{id}/forecast/{forecastId} | 
*OpportunityForecastsApi* | [**salesOpportunitiesIdForecastForecastIdGet**](docs/Api/OpportunityForecastsApi.md#salesopportunitiesidforecastforecastidget) | **GET** /sales/opportunities/{id}/forecast/{forecastId} | 
*OpportunityForecastsApi* | [**salesOpportunitiesIdForecastForecastIdPatch**](docs/Api/OpportunityForecastsApi.md#salesopportunitiesidforecastforecastidpatch) | **PATCH** /sales/opportunities/{id}/forecast/{forecastId} | 
*OpportunityForecastsApi* | [**salesOpportunitiesIdForecastForecastIdPut**](docs/Api/OpportunityForecastsApi.md#salesopportunitiesidforecastforecastidput) | **PUT** /sales/opportunities/{id}/forecast/{forecastId} | 
*OpportunityForecastsApi* | [**salesOpportunitiesIdForecastGet**](docs/Api/OpportunityForecastsApi.md#salesopportunitiesidforecastget) | **GET** /sales/opportunities/{id}/forecast | 
*OpportunityForecastsApi* | [**salesOpportunitiesIdForecastPost**](docs/Api/OpportunityForecastsApi.md#salesopportunitiesidforecastpost) | **POST** /sales/opportunities/{id}/forecast | 
*OpportunityNotesApi* | [**salesOpportunitiesIdNotesCountGet**](docs/Api/OpportunityNotesApi.md#salesopportunitiesidnotescountget) | **GET** /sales/opportunities/{id}/notes/count | 
*OpportunityNotesApi* | [**salesOpportunitiesIdNotesGet**](docs/Api/OpportunityNotesApi.md#salesopportunitiesidnotesget) | **GET** /sales/opportunities/{id}/notes | 
*OpportunityNotesApi* | [**salesOpportunitiesIdNotesNoteIdDelete**](docs/Api/OpportunityNotesApi.md#salesopportunitiesidnotesnoteiddelete) | **DELETE** /sales/opportunities/{id}/notes/{noteId} | 
*OpportunityNotesApi* | [**salesOpportunitiesIdNotesNoteIdGet**](docs/Api/OpportunityNotesApi.md#salesopportunitiesidnotesnoteidget) | **GET** /sales/opportunities/{id}/notes/{noteId} | 
*OpportunityNotesApi* | [**salesOpportunitiesIdNotesNoteIdPatch**](docs/Api/OpportunityNotesApi.md#salesopportunitiesidnotesnoteidpatch) | **PATCH** /sales/opportunities/{id}/notes/{noteId} | 
*OpportunityNotesApi* | [**salesOpportunitiesIdNotesNoteIdPut**](docs/Api/OpportunityNotesApi.md#salesopportunitiesidnotesnoteidput) | **PUT** /sales/opportunities/{id}/notes/{noteId} | 
*OpportunityNotesApi* | [**salesOpportunitiesIdNotesPost**](docs/Api/OpportunityNotesApi.md#salesopportunitiesidnotespost) | **POST** /sales/opportunities/{id}/notes | 
*OpportunityRatingsApi* | [**salesOpportunitiesRatingsCountGet**](docs/Api/OpportunityRatingsApi.md#salesopportunitiesratingscountget) | **GET** /sales/opportunities/ratings/count | 
*OpportunityRatingsApi* | [**salesOpportunitiesRatingsGet**](docs/Api/OpportunityRatingsApi.md#salesopportunitiesratingsget) | **GET** /sales/opportunities/ratings | 
*OpportunityRatingsApi* | [**salesOpportunitiesRatingsIdDelete**](docs/Api/OpportunityRatingsApi.md#salesopportunitiesratingsiddelete) | **DELETE** /sales/opportunities/ratings/{id} | 
*OpportunityRatingsApi* | [**salesOpportunitiesRatingsIdGet**](docs/Api/OpportunityRatingsApi.md#salesopportunitiesratingsidget) | **GET** /sales/opportunities/ratings/{id} | 
*OpportunityRatingsApi* | [**salesOpportunitiesRatingsIdPatch**](docs/Api/OpportunityRatingsApi.md#salesopportunitiesratingsidpatch) | **PATCH** /sales/opportunities/ratings/{id} | 
*OpportunityRatingsApi* | [**salesOpportunitiesRatingsIdPut**](docs/Api/OpportunityRatingsApi.md#salesopportunitiesratingsidput) | **PUT** /sales/opportunities/ratings/{id} | 
*OpportunityRatingsApi* | [**salesOpportunitiesRatingsPost**](docs/Api/OpportunityRatingsApi.md#salesopportunitiesratingspost) | **POST** /sales/opportunities/ratings | 
*OpportunityStagesApi* | [**salesStagesCountGet**](docs/Api/OpportunityStagesApi.md#salesstagescountget) | **GET** /sales/stages/count | 
*OpportunityStagesApi* | [**salesStagesGet**](docs/Api/OpportunityStagesApi.md#salesstagesget) | **GET** /sales/stages | 
*OpportunityStagesApi* | [**salesStagesIdDelete**](docs/Api/OpportunityStagesApi.md#salesstagesiddelete) | **DELETE** /sales/stages/{id} | 
*OpportunityStagesApi* | [**salesStagesIdGet**](docs/Api/OpportunityStagesApi.md#salesstagesidget) | **GET** /sales/stages/{id} | 
*OpportunityStagesApi* | [**salesStagesIdPatch**](docs/Api/OpportunityStagesApi.md#salesstagesidpatch) | **PATCH** /sales/stages/{id} | 
*OpportunityStagesApi* | [**salesStagesIdPut**](docs/Api/OpportunityStagesApi.md#salesstagesidput) | **PUT** /sales/stages/{id} | 
*OpportunityStagesApi* | [**salesStagesPost**](docs/Api/OpportunityStagesApi.md#salesstagespost) | **POST** /sales/stages | 
*OpportunityStatusesApi* | [**salesOpportunitiesStatusesCountGet**](docs/Api/OpportunityStatusesApi.md#salesopportunitiesstatusescountget) | **GET** /sales/opportunities/statuses/count | 
*OpportunityStatusesApi* | [**salesOpportunitiesStatusesGet**](docs/Api/OpportunityStatusesApi.md#salesopportunitiesstatusesget) | **GET** /sales/opportunities/statuses | 
*OpportunityStatusesApi* | [**salesOpportunitiesStatusesIdDelete**](docs/Api/OpportunityStatusesApi.md#salesopportunitiesstatusesiddelete) | **DELETE** /sales/opportunities/statuses/{id} | 
*OpportunityStatusesApi* | [**salesOpportunitiesStatusesIdGet**](docs/Api/OpportunityStatusesApi.md#salesopportunitiesstatusesidget) | **GET** /sales/opportunities/statuses/{id} | 
*OpportunityStatusesApi* | [**salesOpportunitiesStatusesIdPatch**](docs/Api/OpportunityStatusesApi.md#salesopportunitiesstatusesidpatch) | **PATCH** /sales/opportunities/statuses/{id} | 
*OpportunityStatusesApi* | [**salesOpportunitiesStatusesIdPut**](docs/Api/OpportunityStatusesApi.md#salesopportunitiesstatusesidput) | **PUT** /sales/opportunities/statuses/{id} | 
*OpportunityStatusesApi* | [**salesOpportunitiesStatusesPost**](docs/Api/OpportunityStatusesApi.md#salesopportunitiesstatusespost) | **POST** /sales/opportunities/statuses | 
*OpportunityTeamsApi* | [**salesOpportunitiesIdTeamCountGet**](docs/Api/OpportunityTeamsApi.md#salesopportunitiesidteamcountget) | **GET** /sales/opportunities/{id}/team/count | 
*OpportunityTeamsApi* | [**salesOpportunitiesIdTeamGet**](docs/Api/OpportunityTeamsApi.md#salesopportunitiesidteamget) | **GET** /sales/opportunities/{id}/team | 
*OpportunityTeamsApi* | [**salesOpportunitiesIdTeamPost**](docs/Api/OpportunityTeamsApi.md#salesopportunitiesidteampost) | **POST** /sales/opportunities/{id}/team | 
*OpportunityTeamsApi* | [**salesOpportunitiesIdTeamTeamIdDelete**](docs/Api/OpportunityTeamsApi.md#salesopportunitiesidteamteamiddelete) | **DELETE** /sales/opportunities/{id}/team/{teamId} | 
*OpportunityTeamsApi* | [**salesOpportunitiesIdTeamTeamIdGet**](docs/Api/OpportunityTeamsApi.md#salesopportunitiesidteamteamidget) | **GET** /sales/opportunities/{id}/team/{teamId} | 
*OpportunityTeamsApi* | [**salesOpportunitiesIdTeamTeamIdPatch**](docs/Api/OpportunityTeamsApi.md#salesopportunitiesidteamteamidpatch) | **PATCH** /sales/opportunities/{id}/team/{teamId} | 
*OpportunityTeamsApi* | [**salesOpportunitiesIdTeamTeamIdPut**](docs/Api/OpportunityTeamsApi.md#salesopportunitiesidteamteamidput) | **PUT** /sales/opportunities/{id}/team/{teamId} | 
*OpportunityTypesApi* | [**salesOpportunitiesTypesCountGet**](docs/Api/OpportunityTypesApi.md#salesopportunitiestypescountget) | **GET** /sales/opportunities/types/count | 
*OpportunityTypesApi* | [**salesOpportunitiesTypesGet**](docs/Api/OpportunityTypesApi.md#salesopportunitiestypesget) | **GET** /sales/opportunities/types | 
*OpportunityTypesApi* | [**salesOpportunitiesTypesIdDelete**](docs/Api/OpportunityTypesApi.md#salesopportunitiestypesiddelete) | **DELETE** /sales/opportunities/types/{id} | 
*OpportunityTypesApi* | [**salesOpportunitiesTypesIdGet**](docs/Api/OpportunityTypesApi.md#salesopportunitiestypesidget) | **GET** /sales/opportunities/types/{id} | 
*OpportunityTypesApi* | [**salesOpportunitiesTypesIdPatch**](docs/Api/OpportunityTypesApi.md#salesopportunitiestypesidpatch) | **PATCH** /sales/opportunities/types/{id} | 
*OpportunityTypesApi* | [**salesOpportunitiesTypesIdPut**](docs/Api/OpportunityTypesApi.md#salesopportunitiestypesidput) | **PUT** /sales/opportunities/types/{id} | 
*OpportunityTypesApi* | [**salesOpportunitiesTypesPost**](docs/Api/OpportunityTypesApi.md#salesopportunitiestypespost) | **POST** /sales/opportunities/types | 
*OrderStatusesApi* | [**salesOrdersStatusesCountGet**](docs/Api/OrderStatusesApi.md#salesordersstatusescountget) | **GET** /sales/orders/statuses/count | 
*OrderStatusesApi* | [**salesOrdersStatusesGet**](docs/Api/OrderStatusesApi.md#salesordersstatusesget) | **GET** /sales/orders/statuses | 
*OrderStatusesApi* | [**salesOrdersStatusesIdDelete**](docs/Api/OrderStatusesApi.md#salesordersstatusesiddelete) | **DELETE** /sales/orders/statuses/{id} | 
*OrderStatusesApi* | [**salesOrdersStatusesIdGet**](docs/Api/OrderStatusesApi.md#salesordersstatusesidget) | **GET** /sales/orders/statuses/{id} | 
*OrderStatusesApi* | [**salesOrdersStatusesIdPatch**](docs/Api/OrderStatusesApi.md#salesordersstatusesidpatch) | **PATCH** /sales/orders/statuses/{id} | 
*OrderStatusesApi* | [**salesOrdersStatusesIdPut**](docs/Api/OrderStatusesApi.md#salesordersstatusesidput) | **PUT** /sales/orders/statuses/{id} | 
*OrderStatusesApi* | [**salesOrdersStatusesPost**](docs/Api/OrderStatusesApi.md#salesordersstatusespost) | **POST** /sales/orders/statuses | 
*OrdersApi* | [**salesOrdersCountGet**](docs/Api/OrdersApi.md#salesorderscountget) | **GET** /sales/orders/count | 
*OrdersApi* | [**salesOrdersGet**](docs/Api/OrdersApi.md#salesordersget) | **GET** /sales/orders | 
*OrdersApi* | [**salesOrdersIdDelete**](docs/Api/OrdersApi.md#salesordersiddelete) | **DELETE** /sales/orders/{id} | 
*OrdersApi* | [**salesOrdersIdGet**](docs/Api/OrdersApi.md#salesordersidget) | **GET** /sales/orders/{id} | 
*OrdersApi* | [**salesOrdersIdPatch**](docs/Api/OrdersApi.md#salesordersidpatch) | **PATCH** /sales/orders/{id} | 
*OrdersApi* | [**salesOrdersIdPut**](docs/Api/OrdersApi.md#salesordersidput) | **PUT** /sales/orders/{id} | 
*OrdersApi* | [**salesOrdersPost**](docs/Api/OrdersApi.md#salesorderspost) | **POST** /sales/orders | 
*RolesApi* | [**salesRolesCountGet**](docs/Api/RolesApi.md#salesrolescountget) | **GET** /sales/roles/count | 
*RolesApi* | [**salesRolesGet**](docs/Api/RolesApi.md#salesrolesget) | **GET** /sales/roles | 
*RolesApi* | [**salesRolesIdDelete**](docs/Api/RolesApi.md#salesrolesiddelete) | **DELETE** /sales/roles/{id} | 
*RolesApi* | [**salesRolesIdGet**](docs/Api/RolesApi.md#salesrolesidget) | **GET** /sales/roles/{id} | 
*RolesApi* | [**salesRolesIdPatch**](docs/Api/RolesApi.md#salesrolesidpatch) | **PATCH** /sales/roles/{id} | 
*RolesApi* | [**salesRolesIdPut**](docs/Api/RolesApi.md#salesrolesidput) | **PUT** /sales/roles/{id} | 
*RolesApi* | [**salesRolesPost**](docs/Api/RolesApi.md#salesrolespost) | **POST** /sales/roles | 
*SalesProbabilitiesApi* | [**salesProbabilitiesCountGet**](docs/Api/SalesProbabilitiesApi.md#salesprobabilitiescountget) | **GET** /sales/probabilities/count | 
*SalesProbabilitiesApi* | [**salesProbabilitiesGet**](docs/Api/SalesProbabilitiesApi.md#salesprobabilitiesget) | **GET** /sales/probabilities | 
*SalesProbabilitiesApi* | [**salesProbabilitiesIdDelete**](docs/Api/SalesProbabilitiesApi.md#salesprobabilitiesiddelete) | **DELETE** /sales/probabilities/{id} | 
*SalesProbabilitiesApi* | [**salesProbabilitiesIdGet**](docs/Api/SalesProbabilitiesApi.md#salesprobabilitiesidget) | **GET** /sales/probabilities/{id} | 
*SalesProbabilitiesApi* | [**salesProbabilitiesIdPatch**](docs/Api/SalesProbabilitiesApi.md#salesprobabilitiesidpatch) | **PATCH** /sales/probabilities/{id} | 
*SalesProbabilitiesApi* | [**salesProbabilitiesIdPut**](docs/Api/SalesProbabilitiesApi.md#salesprobabilitiesidput) | **PUT** /sales/probabilities/{id} | 
*SalesProbabilitiesApi* | [**salesProbabilitiesPost**](docs/Api/SalesProbabilitiesApi.md#salesprobabilitiespost) | **POST** /sales/probabilities | 


## Documentation For Models

 - [Activity](docs/Model/Activity.md)
 - [ActivityStatus](docs/Model/ActivityStatus.md)
 - [ActivityStatusReference](docs/Model/ActivityStatusReference.md)
 - [ActivityType](docs/Model/ActivityType.md)
 - [ActivityTypeReference](docs/Model/ActivityTypeReference.md)
 - [Agreement](docs/Model/Agreement.md)
 - [AgreementReference](docs/Model/AgreementReference.md)
 - [AgreementTypeReference](docs/Model/AgreementTypeReference.md)
 - [BillingTermsReference](docs/Model/BillingTermsReference.md)
 - [BoardReference](docs/Model/BoardReference.md)
 - [CampaignReference](docs/Model/CampaignReference.md)
 - [CompanyReference](docs/Model/CompanyReference.md)
 - [ContactReference](docs/Model/ContactReference.md)
 - [Count](docs/Model/Count.md)
 - [CountryReference](docs/Model/CountryReference.md)
 - [CustomFieldValue](docs/Model/CustomFieldValue.md)
 - [Error](docs/Model/Error.md)
 - [Forecast](docs/Model/Forecast.md)
 - [Guid](docs/Model/Guid.md)
 - [MemberReference](docs/Model/MemberReference.md)
 - [Metadata](docs/Model/Metadata.md)
 - [NoteTypeReference](docs/Model/NoteTypeReference.md)
 - [Opportunity](docs/Model/Opportunity.md)
 - [OpportunityContact](docs/Model/OpportunityContact.md)
 - [OpportunityNote](docs/Model/OpportunityNote.md)
 - [OpportunityPriorityReference](docs/Model/OpportunityPriorityReference.md)
 - [OpportunityProbabilityReference](docs/Model/OpportunityProbabilityReference.md)
 - [OpportunityRating](docs/Model/OpportunityRating.md)
 - [OpportunityRatingReference](docs/Model/OpportunityRatingReference.md)
 - [OpportunityReference](docs/Model/OpportunityReference.md)
 - [OpportunitySalesRoleReference](docs/Model/OpportunitySalesRoleReference.md)
 - [OpportunityStage](docs/Model/OpportunityStage.md)
 - [OpportunityStageReference](docs/Model/OpportunityStageReference.md)
 - [OpportunityStatus](docs/Model/OpportunityStatus.md)
 - [OpportunityStatusReference](docs/Model/OpportunityStatusReference.md)
 - [OpportunityToAgreementConversion](docs/Model/OpportunityToAgreementConversion.md)
 - [OpportunityToProjectConversion](docs/Model/OpportunityToProjectConversion.md)
 - [OpportunityToSalesOrderConversion](docs/Model/OpportunityToSalesOrderConversion.md)
 - [OpportunityToServiceTicketConversion](docs/Model/OpportunityToServiceTicketConversion.md)
 - [OpportunityType](docs/Model/OpportunityType.md)
 - [OpportunityTypeReference](docs/Model/OpportunityTypeReference.md)
 - [Order](docs/Model/Order.md)
 - [OrderStatus](docs/Model/OrderStatus.md)
 - [OrderStatusReference](docs/Model/OrderStatusReference.md)
 - [PatchOperation](docs/Model/PatchOperation.md)
 - [PriorityReference](docs/Model/PriorityReference.md)
 - [ProductRecurring](docs/Model/ProductRecurring.md)
 - [Project](docs/Model/Project.md)
 - [ProjectBoardReference](docs/Model/ProjectBoardReference.md)
 - [ProjectPhaseReference](docs/Model/ProjectPhaseReference.md)
 - [ProjectReference](docs/Model/ProjectReference.md)
 - [ProjectStatusReference](docs/Model/ProjectStatusReference.md)
 - [ProjectTypeReference](docs/Model/ProjectTypeReference.md)
 - [ReminderReference](docs/Model/ReminderReference.md)
 - [Role](docs/Model/Role.md)
 - [SLAReference](docs/Model/SLAReference.md)
 - [SalesProbability](docs/Model/SalesProbability.md)
 - [SalesTeamReference](docs/Model/SalesTeamReference.md)
 - [ScheduleStatusReference](docs/Model/ScheduleStatusReference.md)
 - [ServiceItemReference](docs/Model/ServiceItemReference.md)
 - [ServiceLocationReference](docs/Model/ServiceLocationReference.md)
 - [ServiceSourceReference](docs/Model/ServiceSourceReference.md)
 - [ServiceStatusReference](docs/Model/ServiceStatusReference.md)
 - [ServiceSubTypeReference](docs/Model/ServiceSubTypeReference.md)
 - [ServiceTeamReference](docs/Model/ServiceTeamReference.md)
 - [ServiceTypeReference](docs/Model/ServiceTypeReference.md)
 - [SiteReference](docs/Model/SiteReference.md)
 - [TaxCodeReference](docs/Model/TaxCodeReference.md)
 - [Team](docs/Model/Team.md)
 - [Ticket](docs/Model/Ticket.md)
 - [TicketReference](docs/Model/TicketReference.md)
 - [ValidationError](docs/Model/ValidationError.md)
 - [WorkRoleReference](docs/Model/WorkRoleReference.md)
 - [WorkTypeReference](docs/Model/WorkTypeReference.md)


## Documentation For Authorization


## BasicAuth

- **Type**: HTTP basic authentication
