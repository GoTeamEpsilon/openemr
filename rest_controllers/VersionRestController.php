<?php
/**
 * VersionRestController
 *
 * Copyright (C) 2018 Matthew Vita <matthewvita48@gmail.com>
 *
 * LICENSE: This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://opensource.org/licenses/gpl-license.php>;.
 *
 * @package OpenEMR
 * @author  Matthew Vita <matthewvita48@gmail.com>
 * @link    http://www.open-emr.org
 */

namespace OpenEMR\RestControllers;

use OpenEMR\Services\VersionService;
use OpenEMR\RestControllers\RestControllerHelper;

class VersionRestController
{
    private $versionService;

    public function __construct()
    {
        $this->versionService = new VersionService();
    }

    public function getOne()
    {
        $serviceResult = $this->versionService->fetch()->toSerializedObject();
        return RestControllerHelper::responseHandler($serviceResult, null, 200);
    }
}