<?php

declare(strict_types=1);

/*
 * This file is part of Coinbase PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Coinbase\API\Merchant;

use BrianFaust\Coinbase\API\AbstractAPI;

class Merchants extends AbstractAPI
{
    /**
     * @see https://developers.coinbase.com/api/v2#show-a-merchant
     *
     * @param int $merchant
     *
     * @return array
     */
    public function details(int $merchant): array
    {
        return $this->get("merchants/{$merchant}");
    }
}
