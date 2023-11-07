<?php
/**
 *     _______       _______
 *    / ____/ |     / /__  /
 *   / /_   | | /| / / /_ <
 *  / __/   | |/ |/ /___/ /
 * /_/      |__/|__//____/
 *
 * Flywheel3: the inertia php framework
 *
 * @category    Flywheel3
 * @package     file_systems
 * @author      wakaba <wakabadou@gmail.com>
 * @copyright   Copyright (c) @2023  Wakabadou (http://www.wakabadou.net/) / Project ICKX (https://ickx.jp/). All rights reserved.
 * @license     http://opensource.org/licenses/MIT The MIT License.
 *              This software is released under the MIT License.
 * @varsion     1.0.0
 */

declare(strict_types=1);

namespace fw3\file_systems\files\commons\traits\SplFileObjects;

interface SplFileObjectInterface extends \RecursiveIterator, \SeekableIterator
{
    public const DROP_NEW_LINE = \SplFileObject::DROP_NEW_LINE;

    public const READ_AHEAD = \SplFileObject::READ_AHEAD;

    public const SKIP_EMPTY = \SplFileObject::SKIP_EMPTY;

    public const READ_CSV = \SplFileObject::READ_CSV;
}
