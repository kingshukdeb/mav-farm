# mav-farm

A module which exposes a custom API REST endpoint for Magento customer.

## Getting Started

Download as zip and merge it with app folder in magento2 root.

### Prerequisites

After merging run below command (clear cache for any issues)

```
php bin/magento module:enable Kingshuk_Api
```
* That should be all. Now you can call it using this REST API endpoint below

```
rest/V1/kingshuk/1 (1 here is the customer id for whom you want to get all the unique product ids.)
```
