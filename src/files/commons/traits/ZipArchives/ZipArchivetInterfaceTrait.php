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

namespace fw3\file_systems\files\commons\traits\ZipArchives;

trait ZipArchivetInterfaceTrait
{
    public static function isCompressionMethodSupported(int $method, bool $enc = true)
    {
        return \ZipArchive::isCompressionMethodSupported($method, $enc);
    }

    public static function isEncryptionMethodSupported(int $method, bool $enc = true)
    {
        return \ZipArchive::isEncryptionMethodSupported($method, $enc);
    }

    public function addEmptyDir(string $dirname, int $flags = 0)
    {
        return $this->fileObject->addEmptyDir($dirname, $flags);
    }

    public function addFile(string $filepath, string $entryname = '', int $start = 0, int $length = ZipArchiveInterface::LENGTH_TO_END, int $flags = ZipArchiveInterface::FL_OVERWRITE)
    {
        return $this->fileObject->addFile($filepath, $entryname, $start, $length, $flags);
    }

    public function addFromString(string $name, string $content, int $flags = ZipArchiveInterface::FL_OVERWRITE)
    {
        return $this->fileObject->addFromString($name, $content, $flags);
    }

    public function addGlob(string $pattern, int $flags = 0, array $options = [])
    {
        return $this->fileObject->addGlob($pattern, $flags, $options);
    }

    public function addPattern(string $pattern, string $path = '.', array $options = [])
    {
        return $this->fileObject->addPattern($pattern, $path, $options);
    }

    public function clearError(): void
    {
        $this->fileObject->clearError();
    }

    public function close()
    {
        return $this->fileObject->close();
    }

    public function count(): int
    {
        return $this->fileObject->count();
    }

    public function deleteIndex(int $index)
    {
        return $this->fileObject->deleteIndex($index);
    }

    public function deleteName(string $name)
    {
        return $this->fileObject->deleteName($name);
    }

    public function extractTo(string $pathto, $files = null)
    {
        return $this->fileObject->extractTo($pathto, $files);
    }

    public function getArchiveComment(int $flags = 0)
    {
        return $this->fileObject->getArchiveComment($flags);
    }

    public function getArchiveFlag(int $flag, int $flags = 0)
    {
        return $this->fileObject->getArchiveFlag($flag, $flags);
    }

    public function getCommentIndex(int $index, int $flags = 0)
    {
        return $this->fileObject->getCommentIndex($index, $flags);
    }

    public function getCommentName(string $name, int $flags = 0)
    {
        return $this->fileObject->getCommentName($name, $flags);
    }

    public function getExternalAttributesIndex(int $index, &$opsys, &$attr, int $flags = 0)
    {
        return $this->fileObject->getExternalAttributesIndex($index, $opsys, $attr, $flags);
    }

    public function getExternalAttributesName(string $name, &$opsys, &$attr, int $flags = 0)
    {
        return $this->fileObject->getExternalAttributesName($name, $opsys, $attr, $flags);
    }

    public function getFromIndex(int $index, int $len = 0, int $flags = 0)
    {
        return $this->fileObject->getFromIndex($index, $len, $flags);
    }

    public function getFromName(string $name, int $len = 0, int $flags = 0)
    {
        return $this->fileObject->getFromName($name, $len, $flags);
    }

    public function getNameIndex(int $index, int $flags = 0)
    {
        return $this->fileObject->getNameIndex($index, $flags);
    }

    public function getStatusString()
    {
        return $this->fileObject->getStatusString();
    }

    public function getStream(string $name)
    {
        return $this->fileObject->getStream($name);
    }

    public function getStreamIndex(int $index, int $flags = 0)
    {
        return $this->fileObject->getStreamIndex($index, $flags);
    }

    public function getStreamName(string $name, int $flags = 0)
    {
        return $this->fileObject->getStreamName($name, $flags);
    }

    public function locateName(string $name, int $flags = 0)
    {
        return $this->fileObject->locateName($name, $flags);
    }

    public function open($filename, int $flags = 0)
    {
        return $this->fileObject->open($filename, $flags);
    }

    public function registerCancelCallback(callable $callback)
    {
        return $this->fileObject->registerCancelCallback($callback);
    }

    public function registerProgressCallback(float $rate, callable $callback)
    {
        return $this->fileObject->registerProgressCallback($rate, $callback);
    }

    public function renameIndex(int $index, string $new_name)
    {
        return $this->fileObject->renameIndex($index, $new_name);
    }

    public function renameName(string $name, string $new_name)
    {
        return $this->fileObject->renameName($name, $new_name);
    }

    public function replaceFile(string $filepath, int $index, int $start = 0, int $length = ZipArchiveInterface::LENGTH_TO_END, int $flags = 0)
    {
        return $this->fileObject->replaceFile($filepath, $index, $start, $length, $flags);
    }

    public function setArchiveComment(string $comment)
    {
        return $this->fileObject->setArchiveComment($comment);
    }

    public function setArchiveFlag(int $flag, int $value)
    {
        return $this->fileObject->setArchiveFlag($flag, $value);
    }

    public function setCommentIndex(int $index, string $comment)
    {
        return $this->fileObject->setCommentIndex($index, $comment);
    }

    public function setCommentName(string $name, string $comment)
    {
        return $this->fileObject->setCommentName($name, $comment);
    }

    public function setCompressionIndex(int $index, int $method, int $compflags = 0)
    {
        return $this->fileObject->setCompressionIndex($index, $method, $compflags);
    }

    public function setCompressionName(string $name, int $method, int $compflags = 0)
    {
        return $this->fileObject->setCompressionName($name, $method, $compflags);
    }

    public function setEncryptionIndex(int $index, int $method, $password = null)
    {
        return $this->fileObject->setEncryptionIndex($index, $method, $password);
    }

    public function setEncryptionName(string $name, int $method, $password = null)
    {
        return $this->fileObject->setEncryptionName($name, $method, $password);
    }

    public function setExternalAttributesIndex(int $index, int $opsys, int $attr, int $flags = 0)
    {
        return $this->fileObject->setExternalAttributesIndex($index, $opsys, $attr, $flags);
    }

    public function setExternalAttributesName(string $name, int $opsys, int $attr, int $flags = 0)
    {
        return $this->fileObject->setExternalAttributesName($name, $opsys, $attr, $flags);
    }

    public function setMtimeIndex(int $index, int $timestamp, int $flags = 0)
    {
        return $this->fileObject->setMtimeIndex($index, $timestamp, $flags);
    }

    public function setMtimeName(string $name, int $timestamp, int $flags = 0)
    {
        return $this->fileObject->setMtimeName($name, $timestamp, $flags);
    }

    public function setPassword(string $password)
    {
        return $this->fileObject->setPassword($password);
    }

    public function statIndex(int $index, int $flags = 0)
    {
        return $this->fileObject->statIndex($index, $flags);
    }

    public function statName(string $name, int $flags = 0)
    {
        return $this->fileObject->statName($name, $flags);
    }

    public function unchangeAll()
    {
        return $this->fileObject->unchangeAll();
    }

    public function unchangeArchive()
    {
        return $this->fileObject->unchangeArchive();
    }

    public function unchangeIndex(int $index)
    {
        return $this->fileObject->unchangeIndex($index);
    }

    public function unchangeName(string $name)
    {
        return $this->fileObject->unchangeName($name);
    }

    public function __get($name)
    {
        $readonly_properties    = [
            'lastId'    => 'lastId',
            'status'    => 'status',
            'statusSys' => 'statusSys',
            'numFiles'  => 'numFiles',
            '$filename' => '$filename',
            '$comment'  => '$comment',
        ];

        if (isset($readonly_properties[$name])) {
            return $this->fileObject->{$readonly_properties[$name]};
        }

        return null;
    }
}
