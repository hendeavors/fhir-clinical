<?php

namespace Endeavors\Fhir\Http\Contracts\Clinical\STU3;

use Endeavors\Fhir\Http\Contracts\Clinical\STU3\{CareProvision, Diagnostics, Summary};

interface Clinical extends CareProvision, Diagnostics, Summary
{
}
