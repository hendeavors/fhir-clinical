<?php

namespace Endeavors\Fhir\Http\Contracts\Clinical\R4;

use Endeavors\Fhir\Http\Contracts\Clinical\R4\{CareProvision, Diagnostics, Medications, Summary};

interface Clinical extends CareProvision, Diagnostics, Medications, Summary
{
}
