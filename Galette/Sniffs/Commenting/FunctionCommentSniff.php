<?php
/**
 * Extends PEAR functions commenting to not check params nor return.
 *
 * @copyright 2025 Galette and contributors
 */

namespace Galette\Sniffs\Commenting;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\FunctionCommentSniff as PEARFunctionCommentSniff;

class FunctionCommentSniff extends PEARFunctionCommentSniff
{
    protected function processReturn(File $phpcsFile, int $stackPtr, int $commentStart)
    {
        //Do nothing, return tags are handled elsewhere
    }

    protected function processParams(File $phpcsFile, int $stackPtr, int $commentStart)
    {
        //Do nothing, parameters tags are handled elsewhere
    }
}
