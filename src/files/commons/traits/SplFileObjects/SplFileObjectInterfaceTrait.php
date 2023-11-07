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

trait SplFileObjectInterfaceTrait
{
    /**
     * @var null|\SplFileObject ファイルInstance
     */
    protected ?\SplFileObject $fileObject;

    #[\ReturnTypeWillChange]
    public function current()
    {
        return $this->fileObject->current();
    }

    public function eof()
    {
        return $this->fileObject->eof();
    }

    public function fflush()
    {
        return $this->fileObject->fflush();
    }

    public function fgetc()
    {
        return $this->fileObject->fgetc();
    }

    public function fgetcsv(string $separator = ',', string $enclosure = '"', string $escape = '\\')
    {
        return $this->fileObject->fgetcsv($separator, $enclosure, $escape);
    }

    public function fgets()
    {
        return $this->fileObject->fgets();
    }

    public function fgetss(?string $allowable_tags = null)
    {
        return $this->fileObject->fgetss($allowable_tags);
    }

    public function flock(int $operation, &$wouldBlock = null)
    {
        return $this->fileObject->flock($operation, $wouldBlock);
    }

    public function fpassthru()
    {
        return $this->fileObject->fpassthru();
    }

    public function fputcsv(array $fields, string $separator = ',', string $enclosure = '"', string $escape = '\\', string $eol = "\n")
    {
        return $this->fileObject->fputcsv($fields, $separator, $enclosure, $escape, $eol);
    }

    public function fread(int $length)
    {
        return $this->fileObject->fread($length);
    }

    public function fscanf(string $format, &...$vars)
    {
        return $this->fileObject->fscanf($format, ...$vars);
    }

    public function fseek(int $offset, int $whence = \SEEK_SET)
    {
        return $this->fileObject->fseek($offset, $whence);
    }

    public function fstat()
    {
        return $this->fileObject->fstat();
    }

    public function ftell()
    {
        return $this->fileObject->ftell();
    }

    public function ftruncate(int $size)
    {
        return $this->fileObject->ftruncate($size);
    }

    public function fwrite(string $data, int $length = 0)
    {
        if ($length === 0 && \func_num_args() === 1) {
            return $this->fileObject->fwrite($data);
        }

        return $this->fileObject->fwrite($data, $length);
    }

    public function getChildren(): ?\RecursiveIterator
    {
        return $this->fileObject->getChildren();
    }

    public function getCsvControl()
    {
        return $this->fileObject->getCsvControl();
    }

    public function getFlags()
    {
        return $this->fileObject->getFlags();
    }

    public function getMaxLineLen()
    {
        return $this->fileObject->getMaxLineLen();
    }

    public function hasChildren(): bool
    {
        return $this->fileObject->hasChildren();
    }

    #[\ReturnTypeWillChange]
    public function key()
    {
        return $this->fileObject->key();
    }

    public function next(): void
    {
        $this->fileObject->next();
    }

    public function rewind(): void
    {
        $this->fileObject->rewind();
    }

    public function seek(int $line): void
    {
        $this->fileObject->seek($line);
    }

    public function setCsvControl(string $separator = ',', string $enclosure = '"', string $escape = '\\'): void
    {
        $this->fileObject->setCsvControl($separator, $enclosure, $escape);
    }

    public function setFlags(int $flags): void
    {
        $this->fileObject->setFlags($flags);
    }

    public function setMaxLineLen(int $maxLength): void
    {
        $this->fileObject->setMaxLineLen($maxLength);
    }

    public function valid(): bool
    {
        return $this->fileObject->valid();
    }

    public function __toString()
    {
        return $this->fileObject->__toString();
    }
}
