<?php

namespace Endeavors\Fhir\Http\Contracts\Clinical\DSTU2;

use Endeavors\Fhir\Http\Contracts\Clinical\DSTU2\{CareProvision, Diagnostics, General};

interface Clinical extends CareProvision, Diagnostics, General
{
}
