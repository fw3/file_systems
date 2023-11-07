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

use fw3\file_systems\files\commons\traits\SplFileObjects\SplFileObjectInterface;
use fw3\file_systems\files\commons\traits\SplFileObjects\SplFileObjectInterfaceTrait;

/**
 * メモリ上に展開する一時ファイルを扱います。
 *
 * 同時に一つしか使用できません。
 */
class TempMemory implements SplFileObjectInterface
{
    use SplFileObjectInterfaceTrait;

    protected const FILE_PATH = 'php://memory';

    /**
     * @var int メモリ上に展開する一時ファイルポインタ
     */
    protected int $tempFilePointer;

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
        $this->fileObject   = new \SplFileObject(self::FILE_PATH, 'w+b');
    }

    /**
     * メモリ上に展開する一時ファイルのパスを返します。
     *
     * @return string メモリ上に展開する一時ファイルのパス
     */
    public function getPathname(): string
    {
        return self::FILE_PATH;
    }

    /**
     * メモリ上に展開する一時ファイルインスタンスを返します。
     *
     * @return \SplFileObject メモリ上に展開する一時ファイルインスタンス
     */
    public function getFileObject(): \SplFileObject
    {
        return $this->fileObject;
    }

    /**
     * メモリ上に展開する一時ファイルを閉じます。
     *
     * @return bool 実行結果
     */
    public function close(): bool
    {
        $this->fileObject   = null;

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
