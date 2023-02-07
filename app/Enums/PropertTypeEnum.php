<?php

namespace App\Enums;


enum PropertTypeEnum :string
{
    case SINGLE = 'Single-family Home';
    case TOWNHOUSE = 'Townhouse';
    case MULTIFAMILY = 'Multi-family Home';
    case BANGALOW = 'Bangalow';
}
