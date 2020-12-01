<?php

/*
 * This file is part of the NFQ package.
 *
 * (c) Nfq Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace NFQ\SyliusOmnisendPlugin\Factory\Request;

use NFQ\SyliusOmnisendPlugin\Client\Request\Model\Category;
use Sylius\Component\Core\Model\TaxonInterface;

interface CategoryFactoryInterface
{
    public function create(TaxonInterface $taxon, ?string $localeCode = null): Category;
}
