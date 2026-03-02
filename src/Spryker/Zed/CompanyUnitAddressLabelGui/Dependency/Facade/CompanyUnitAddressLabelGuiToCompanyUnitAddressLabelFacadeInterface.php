<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CompanyUnitAddressLabelGui\Dependency\Facade;

use Generated\Shared\Transfer\CompanyUnitAddressLabelCollectionTransfer;

interface CompanyUnitAddressLabelGuiToCompanyUnitAddressLabelFacadeInterface
{
    public function getCompanyUnitAddressLabelsByAddress(int $idCompanyUnitAddress): CompanyUnitAddressLabelCollectionTransfer;
}
