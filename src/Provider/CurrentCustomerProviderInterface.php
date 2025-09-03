<?php

declare(strict_types=1);

namespace Sylius\AdyenPlugin\Provider;

use Sylius\Component\Core\Model\CustomerInterface;

interface CurrentCustomerProviderInterface
{
    public function getCustomer(): ?CustomerInterface;
}
