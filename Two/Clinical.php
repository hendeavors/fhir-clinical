<?php

namespace Endeavors\Fhir\Http\Contracts\Clinical\Two;

use Endeavors\Fhir\Http\Contracts\Clinical\Two\Section\{CareProvision, Diagnostics, General};

interface Clinical extends CareProvision, Diagnostics, General
{
}
