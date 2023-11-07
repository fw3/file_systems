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

interface ZipArchiveInterface extends \Countable
{
    public const LENGTH_TO_END = 0;

    public const CREATE = \ZipArchive::CREATE;

    public const EXCL = \ZipArchive::EXCL;

    public const CHECKCONS = \ZipArchive::CHECKCONS;

    public const OVERWRITE = \ZipArchive::OVERWRITE;

    public const RDONLY = \ZipArchive::RDONLY;

    public const FL_NOCASE = \ZipArchive::FL_NOCASE;

    public const FL_NODIR = \ZipArchive::FL_NODIR;

    public const FL_COMPRESSED = \ZipArchive::FL_COMPRESSED;

    public const FL_UNCHANGED = \ZipArchive::FL_UNCHANGED;

    public const FL_RECOMPRESS = \ZipArchive::FL_RECOMPRESS;

    public const FL_ENCRYPTED = \ZipArchive::FL_ENCRYPTED;

    public const FL_OVERWRITE = \ZipArchive::FL_OVERWRITE;

    public const FL_LOCAL = \ZipArchive::FL_LOCAL;

    public const FL_CENTRAL = \ZipArchive::FL_CENTRAL;

    public const FL_ENC_GUESS = \ZipArchive::FL_ENC_GUESS;

    public const FL_ENC_RAW = \ZipArchive::FL_ENC_RAW;

    public const FL_ENC_STRICT = \ZipArchive::FL_ENC_STRICT;

    public const FL_ENC_UTF_8 = \ZipArchive::FL_ENC_UTF_8;

    public const FL_ENC_CP437 = \ZipArchive::FL_ENC_CP437;

    public const CM_DEFAULT = \ZipArchive::CM_DEFAULT;

    public const CM_STORE = \ZipArchive::CM_STORE;

    public const CM_SHRINK = \ZipArchive::CM_SHRINK;

    public const CM_REDUCE_1 = \ZipArchive::CM_REDUCE_1;

    public const CM_REDUCE_2 = \ZipArchive::CM_REDUCE_2;

    public const CM_REDUCE_3 = \ZipArchive::CM_REDUCE_3;

    public const CM_REDUCE_4 = \ZipArchive::CM_REDUCE_4;

    public const CM_IMPLODE = \ZipArchive::CM_IMPLODE;

    public const CM_DEFLATE = \ZipArchive::CM_DEFLATE;

    public const CM_DEFLATE64 = \ZipArchive::CM_DEFLATE64;

    public const CM_PKWARE_IMPLODE = \ZipArchive::CM_PKWARE_IMPLODE;

    public const CM_BZIP2 = \ZipArchive::CM_BZIP2;

    public const CM_LZMA = \ZipArchive::CM_LZMA;

    public const CM_LZMA2 = \ZipArchive::CM_LZMA2;

    // public const CM_ZSTD = \ZipArchive::CM_ZSTD;

    public const CM_XZ = \ZipArchive::CM_XZ;

    public const CM_TERSE = \ZipArchive::CM_TERSE;

    public const CM_LZ77 = \ZipArchive::CM_LZ77;

    public const CM_WAVPACK = \ZipArchive::CM_WAVPACK;

    public const CM_PPMD = \ZipArchive::CM_PPMD;

    public const ER_OK = \ZipArchive::ER_OK;

    public const ER_MULTIDISK = \ZipArchive::ER_MULTIDISK;

    public const ER_RENAME = \ZipArchive::ER_RENAME;

    public const ER_CLOSE = \ZipArchive::ER_CLOSE;

    public const ER_SEEK = \ZipArchive::ER_SEEK;

    public const ER_READ = \ZipArchive::ER_READ;

    public const ER_WRITE = \ZipArchive::ER_WRITE;

    public const ER_CRC = \ZipArchive::ER_CRC;

    public const ER_ZIPCLOSED = \ZipArchive::ER_ZIPCLOSED;

    public const ER_NOENT = \ZipArchive::ER_NOENT;

    public const ER_EXISTS = \ZipArchive::ER_EXISTS;

    public const ER_OPEN = \ZipArchive::ER_OPEN;

    public const ER_TMPOPEN = \ZipArchive::ER_TMPOPEN;

    public const ER_ZLIB = \ZipArchive::ER_ZLIB;

    public const ER_MEMORY = \ZipArchive::ER_MEMORY;

    public const ER_CHANGED = \ZipArchive::ER_CHANGED;

    public const ER_COMPNOTSUPP = \ZipArchive::ER_COMPNOTSUPP;

    public const ER_EOF = \ZipArchive::ER_EOF;

    public const ER_INVAL = \ZipArchive::ER_INVAL;

    public const ER_NOZIP = \ZipArchive::ER_NOZIP;

    public const ER_INTERNAL = \ZipArchive::ER_INTERNAL;

    public const ER_INCONS = \ZipArchive::ER_INCONS;

    public const ER_REMOVE = \ZipArchive::ER_REMOVE;

    public const ER_DELETED = \ZipArchive::ER_DELETED;

    public const ER_ENCRNOTSUPP = \ZipArchive::ER_ENCRNOTSUPP;

    public const ER_RDONLY = \ZipArchive::ER_RDONLY;

    public const ER_NOPASSWD = \ZipArchive::ER_NOPASSWD;

    public const ER_WRONGPASSWD = \ZipArchive::ER_WRONGPASSWD;

    public const ER_OPNOTSUPP = \ZipArchive::ER_OPNOTSUPP;

    public const ER_INUSE = \ZipArchive::ER_INUSE;

    public const ER_TELL = \ZipArchive::ER_TELL;

    public const ER_COMPRESSED_DATA = \ZipArchive::ER_COMPRESSED_DATA;

    public const ER_CANCELLED = \ZipArchive::ER_CANCELLED;

    public const OPSYS_DOS = \ZipArchive::OPSYS_DOS;

    public const OPSYS_AMIGA = \ZipArchive::OPSYS_AMIGA;

    public const OPSYS_OPENVMS = \ZipArchive::OPSYS_OPENVMS;

    public const OPSYS_UNIX = \ZipArchive::OPSYS_UNIX;

    public const OPSYS_VM_CMS = \ZipArchive::OPSYS_VM_CMS;

    public const OPSYS_ATARI_ST = \ZipArchive::OPSYS_ATARI_ST;

    public const OPSYS_OS_2 = \ZipArchive::OPSYS_OS_2;

    public const OPSYS_MACINTOSH = \ZipArchive::OPSYS_MACINTOSH;

    public const OPSYS_Z_SYSTEM = \ZipArchive::OPSYS_Z_SYSTEM;

    public const OPSYS_CPM = \ZipArchive::OPSYS_CPM;

    public const OPSYS_WINDOWS_NTFS = \ZipArchive::OPSYS_WINDOWS_NTFS;

    public const OPSYS_MVS = \ZipArchive::OPSYS_MVS;

    public const OPSYS_VSE = \ZipArchive::OPSYS_VSE;

    public const OPSYS_ACORN_RISC = \ZipArchive::OPSYS_ACORN_RISC;

    public const OPSYS_VFAT = \ZipArchive::OPSYS_VFAT;

    public const OPSYS_ALTERNATE_MVS = \ZipArchive::OPSYS_ALTERNATE_MVS;

    public const OPSYS_BEOS = \ZipArchive::OPSYS_BEOS;

    public const OPSYS_TANDEM = \ZipArchive::OPSYS_TANDEM;

    public const OPSYS_OS_400 = \ZipArchive::OPSYS_OS_400;

    public const OPSYS_OS_X = \ZipArchive::OPSYS_OS_X;

    public const OPSYS_DEFAULT = \ZipArchive::OPSYS_DEFAULT;

    public const EM_NONE = \ZipArchive::EM_NONE;

    public const EM_TRAD_PKWARE = \ZipArchive::EM_TRAD_PKWARE;

    public const EM_AES_128 = \ZipArchive::EM_AES_128;

    public const EM_AES_192 = \ZipArchive::EM_AES_192;

    public const EM_AES_256 = \ZipArchive::EM_AES_256;

    public const EM_UNKNOWN = \ZipArchive::EM_UNKNOWN;

    public const LIBZIP_VERSION = \ZipArchive::LIBZIP_VERSION;
}
