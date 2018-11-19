<?php

declare(strict_types=1);

namespace App\Entity\Addressing;

use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping\Table;
use Sylius\Component\Addressing\Model\AddressLogEntry as BaseAddressLogEntry;

/**
 * @MappedSuperclass
 * @Table(name="sylius_address_log_entries")
 */
class AddressLogEntry extends BaseAddressLogEntry
{
}
