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

namespace fw3\file_systems\files\temps;

use fw3\file_systems\files\commons\temps\TempFilePointer;
use fw3\file_systems\files\commons\traits\ZipArchives\ZipArchiveInterface;
use fw3\file_systems\files\commons\traits\ZipArchives\ZipArchivetInterfaceTrait;

/**
 * 一時ZIPアーカイブを扱います
 */
class TempZip implements ZipArchiveInterface
{
    use ZipArchivetInterfaceTrait;

    /**
     * @var null|tempFilePointer 一時ファイルポインタ
     */
    protected ?TempFilePointer $tempFilePointer;

    /**
     * @var \ZipArchive アーカイブインスタンス
     */
    protected ?\ZipArchive $fileObject;

    /**
     * factory
     *
     * @return static このインスタンス
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * constructor
     */
    protected function __construct()
    {
        $this->tempFilePointer  = TempFilePointer::create();
        $this->fileObject       = new \ZipArchive();
        $this->fileObject->open($this->getPathname(), \ZipArchive::OVERWRITE);
    }

    /**
     * 一時ZIPアーカイブのパスを返します。
     *
     * @return string 一時ZIPアーカイブのパス
     */
    public function getPathname(): string
    {
        return $this->tempFilePointer->getPathname();
    }

    /**
     * 一時ZIPアーカイブインスタンスを返します。
     *
     * @return \ZipArchive 一時ZIPアーカイブインスタンス
     */
    public function getFileObject(): \ZipArchive
    {
        return $this->fileObject;
    }

    /**
     * 一時ZIPアーカイブを閉じます。
     *
     * @return bool 実行結果
     */
    public function close(): bool
    {
        $this->tempFilePointer  = null;
        $this->fileObject       = null;

        return true;
    }

    /**
     * destructor
     */
    public function __destruct()
    {
        $this->close();
    }
}
