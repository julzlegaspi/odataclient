# Installation
```
composer require julzlegaspi/odataclient
```

# Publish Provider
```
php artisan vendor:publish --provider="Julzlegaspi\Odataclient\ODataClientServiceProvider"
```

# Add to .env file
```
SAP_DB=your_sap_b1_database_name
SAP_USER=your_sap_b1_username
SAP_PASSWORD=your_sap_b1_password
SAP_PATH=https://xxx.xxx.xxx.xxx:50000/b1s/v1
VERIFY_SSL=true //change to false if using self-signed SSL
```

# Usage
```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Julzlegaspi\Odataclient\SAPODataClient;

class TestController extends Controller
{
    public function index()
    {
        $odata = new SAPODataClient;

        $result = $odata->getOdataClient()->from('Orders')->get();

        dd($result);
    }
}
```
