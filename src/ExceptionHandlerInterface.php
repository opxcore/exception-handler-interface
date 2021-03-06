<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\ExceptionHandler\Interfaces;

interface ExceptionHandlerInterface
{
    /**
     * Register exceptions and error handlers
     *
     * @return  void
     */
    public function register(): void;
}