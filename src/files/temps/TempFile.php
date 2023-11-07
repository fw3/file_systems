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
use fw3\file_systems\files\commons\traits\SplFileObjects\SplFileObjectInterface;
use fw3\file_systems\files\commons\traits\SplFileObjects\SplFileObjectInterfaceTrait;

/**
 * 一時ファイルを扱います
 */
class TempFile implements SplFileObjectInterface
{
    use SplFileObjectInterfaceTrait;

    /**
     * @var null|tempFilePointer 一時ファイルポインタ
     */
    protected ?TempFilePointer $tempFilePointer;

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
        $this->fileObject       = new \SplFileObject($this->getPathname(), 'r+b');
    }

    /**
     * 一時ファイルのパスを返します。
     *
     * @return string 一時ファイルのパス
     */
    public function getPathname(): string
    {
        return $this->tempFilePointer->getPathname();
    }

    /**
     * 一時ファイルインスタンスを返します。
     *
     * @return \SplFileObject 一時ファイルインスタンス
     */
    public function getFileObject(): \SplFileObject
    {
        return $this->fileObject;
    }

    /**
     * 一時ファイルを閉じます。
     *
     * @return bool 実行結果
     */
    public function close(): bool
    {
        $this->fileObject       = null;
        $this->tempFilePointer  = null;

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
