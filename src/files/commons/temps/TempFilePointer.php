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

namespace fw3\file_systems\files\commons\temps;

/**
 * 一時ファイルポインタを扱います
 */
class TempFilePointer
{
    /**
     * @var resource 一時ファイルポインタ
     */
    protected $fp;

    /**
     * @var array 一時ファイルメタデータ
     */
    protected array $metaData;

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
        $this->fp   = \tmpfile();

        if (!\is_resource($this->fp)) {
            throw new \Exception('一時ファイルを作成出来ませんでした。');
        }

        $this->metaData = \stream_get_meta_data($this->fp);
    }

    /**
     * 一時ファイルメタデータを返します。
     *
     * @return array 一時ファイルメタデータ
     */
    public function getMetData(): array
    {
        return $this->metaData;
    }

    /**
     * 一時ファイルメタデータを返します。
     *
     * @return mixed メタデータ
     */
    public function getMetDataByName(string $name): mixed
    {
        return $this->metaData[$name] ?? null;
    }

    /**
     * 一時ファイルのパスを返します。
     *
     * @return ?string 一時ファイルのパス
     */
    public function getPathname(): ?string
    {
        return $this->getMetDataByName('uri');
    }

    /**
     * 一時ファイルを閉じます。
     *
     * @return bool 実行結果
     */
    public function close(): bool
    {
        $this->fp = null;

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
