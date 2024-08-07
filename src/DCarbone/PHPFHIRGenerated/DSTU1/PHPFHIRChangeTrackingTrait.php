<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU1;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 7th, 2024 02:07+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011-2013, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

/**
 * Trait PHPFHIRChangeTrackingTrait
 * @package \DCarbone\PHPFHIRGenerated\DSTU1
 */
trait PHPFHIRChangeTrackingTrait
{
    /** @var int */
    private int $_valuesAdded = 0;
    /** @var int */
    private int $_valuesRemoved = 0;

    /**
     * Used to track the setting of a given value, taking into consideration whether a value is being overwritten
     *
     * @param mixed $original
     * @param mixed $new
     * @return void
     */
    protected function _trackValueSet(mixed $original, mixed $new): void {
        if ($original === $new) {
            return;
        }
        if (null === $original && null !== $new) {
            $this->_valuesAdded++;
        } elseif (null !== $original && null === $new) {
            $this->_valuesRemoved++;
        } else {
            $this->_valuesAdded++;
            $this->_valuesRemoved++;
        }
    }

    /**
     * Used to record a value being added to a collection
     *
     * @return void
     */
    protected function _trackValueAdded(): void
    {
        $this->_valuesAdded++;
    }

    /**
     * Used to record $n items being removed from a collection
     *
     * @param int $n
     * @return void
     */
    protected function _trackValuesRemoved(int $n): void
    {
        $this->_valuesRemoved += $n;
    }

    /**
     * Returns true if there are valued fields on the contained type
     *
     * @return bool
     */
    public function _isValued(): bool
    {
        return $this->_valuesAdded > $this->_valuesRemoved;
    }

    /**
     * Returns the number of times any field has been set on this type
     *
     * @return int
     */
    public function _getValueAddedCount(): int
    {
        return $this->_valuesAdded;
    }

    /**
     * Returns the number of times any field has been removed on this type
     *
     * @return int
     */
    public function _getValueRemovedCount(): int
    {
        return $this->_valuesRemoved;
    }

    /**
     * Returns the current number of values defined on this type
     *
     * @return int
     */
    public function _getValueSetCount(): int
    {
        return $this->_valuesAdded - $this->_valuesRemoved;
    }
}
