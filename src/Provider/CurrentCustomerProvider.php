<?php

declare(strict_types=1);

namespace Sylius\AdyenPlugin\Provider;

use Sylius\Component\Core\Model\CustomerInterface as CoreCustomerInterface;
use Sylius\Component\Core\Model\ShopUserInterface;
use Symfony\Bundle\SecurityBundle\Security;

final class CurrentCustomerProvider implements CurrentCustomerProviderInterface
{
    public function __construct(private readonly Security $security) {}

    public function getCustomer(): ?CoreCustomerInterface
    {
        $user = $this->security->getUser();
        if (!$user instanceof ShopUserInterface) {
            return null;
        }

        $customer = $user->getCustomer();

        return $customer instanceof CoreCustomerInterface ? $customer : null;
    }
}
