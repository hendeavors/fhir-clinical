<?php

namespace Endeavors\Fhir\Http\Contracts\Clinical\Four;

use Endeavors\Fhir\Http\Contracts\Clinical\Four\{CareProvision, Diagnostics, Medications, Summary};

interface Clinical extends CareProvision, Diagnostics, Medications, Summary
{
}
