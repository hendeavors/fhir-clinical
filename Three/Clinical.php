<?php

namespace Endeavors\Fhir\Http\Contracts\Clinical\Three;

use Endeavors\Fhir\Http\Contracts\Clinical\Three\Section{CareProvision, Diagnostics, Summary};

interface Clinical extends CareProvision, Diagnostics, Summary
{
}
