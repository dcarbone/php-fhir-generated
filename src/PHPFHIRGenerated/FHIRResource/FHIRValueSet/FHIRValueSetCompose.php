<?php namespace PHPFHIRGenerated\FHIRResource\FHIRValueSet;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Copyright (c) 2011+, HL7, Inc.
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 */
class FHIRValueSetCompose extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Includes the contents of the referenced value set as a part of the contents of this value set. This is an absolute URI that is a reference to ValueSet.uri.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $import = array();

    /**
     * Include one or more codes from a code system.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetInclude[]
     */
    public $include = array();

    /**
     * Exclude one or more codes from the value set.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetInclude[]
     */
    public $exclude = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ValueSet.Compose';

    /**
     * Includes the contents of the referenced value set as a part of the contents of this value set. This is an absolute URI that is a reference to ValueSet.uri.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getImport()
    {
        return $this->import;
    }

    /**
     * Includes the contents of the referenced value set as a part of the contents of this value set. This is an absolute URI that is a reference to ValueSet.uri.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $import
     * @return $this
     */
    public function addImport($import)
    {
        $this->import[] = $import;
        return $this;
    }

    /**
     * Include one or more codes from a code system.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetInclude[]
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Include one or more codes from a code system.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetInclude $include
     * @return $this
     */
    public function addInclude($include)
    {
        $this->include[] = $include;
        return $this;
    }

    /**
     * Exclude one or more codes from the value set.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetInclude[]
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * Exclude one or more codes from the value set.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetInclude $exclude
     * @return $this
     */
    public function addExclude($exclude)
    {
        $this->exclude[] = $exclude;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (0 < count($this->import)) {
            $json['import'] = [];
            foreach($this->import as $import) {
                $json['import'][] = json_encode($import);
            }
        }
        if (0 < count($this->include)) {
            $json['include'] = [];
            foreach($this->include as $include) {
                $json['include'][] = json_encode($include);
            }
        }
        if (0 < count($this->exclude)) {
            $json['exclude'] = [];
            foreach($this->exclude as $exclude) {
                $json['exclude'][] = json_encode($exclude);
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ValueSetCompose xmlns="http://hl7.org/fhir"></ValueSetCompose>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->import)) {
            foreach($this->import as $import) {
                $import->xmlSerialize(true, $sxe->addChild('import'));
            }
        }
        if (0 < count($this->include)) {
            foreach($this->include as $include) {
                $include->xmlSerialize(true, $sxe->addChild('include'));
            }
        }
        if (0 < count($this->exclude)) {
            foreach($this->exclude as $exclude) {
                $exclude->xmlSerialize(true, $sxe->addChild('exclude'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}