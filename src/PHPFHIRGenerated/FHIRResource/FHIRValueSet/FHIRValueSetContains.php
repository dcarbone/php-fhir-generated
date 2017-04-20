<?php namespace PHPFHIRGenerated\FHIRResource\FHIRValueSet;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
class FHIRValueSetContains extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * An absolute URI which is the code system in which the code for this item in the expansion is defined.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $system = null;

    /**
     * If true, this entry is included in the expansion for navigational purposes, and the user cannot select the code directly as a proper value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $abstract = null;

    /**
     * If the concept is inactive in the code system that defines it. Inactive codes are those that are no longer to be used, but are maintained by the code system for understanding legacy data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $inactive = null;

    /**
     * The version of this code system that defined this code and/or display. This should only be used with code systems that do not enforce concept permanence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * The code for this item in the expansion hierarchy. If this code is missing the entry in the hierarchy is a place holder (abstract) and does not represent a valid code in the value set.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * The recommended display for this item in the expansion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * Additional representations for this item - other languages, aliases, specialized purposes, used for particular purposes, etc. These are relevant when the conditions of the expansion do not fix to a single correct representation.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetDesignation[]
     */
    public $designation = array();

    /**
     * Other codes and entries contained under this entry in the hierarchy.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContains[]
     */
    public $contains = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ValueSet.Contains';

    /**
     * An absolute URI which is the code system in which the code for this item in the expansion is defined.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * An absolute URI which is the code system in which the code for this item in the expansion is defined.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $system
     * @return $this
     */
    public function setSystem($system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * If true, this entry is included in the expansion for navigational purposes, and the user cannot select the code directly as a proper value.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * If true, this entry is included in the expansion for navigational purposes, and the user cannot select the code directly as a proper value.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $abstract
     * @return $this
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * If the concept is inactive in the code system that defines it. Inactive codes are those that are no longer to be used, but are maintained by the code system for understanding legacy data.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    /**
     * If the concept is inactive in the code system that defines it. Inactive codes are those that are no longer to be used, but are maintained by the code system for understanding legacy data.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $inactive
     * @return $this
     */
    public function setInactive($inactive)
    {
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * The version of this code system that defined this code and/or display. This should only be used with code systems that do not enforce concept permanence.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version of this code system that defined this code and/or display. This should only be used with code systems that do not enforce concept permanence.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * The code for this item in the expansion hierarchy. If this code is missing the entry in the hierarchy is a place holder (abstract) and does not represent a valid code in the value set.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The code for this item in the expansion hierarchy. If this code is missing the entry in the hierarchy is a place holder (abstract) and does not represent a valid code in the value set.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The recommended display for this item in the expansion.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * The recommended display for this item in the expansion.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $display
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Additional representations for this item - other languages, aliases, specialized purposes, used for particular purposes, etc. These are relevant when the conditions of the expansion do not fix to a single correct representation.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetDesignation[]
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Additional representations for this item - other languages, aliases, specialized purposes, used for particular purposes, etc. These are relevant when the conditions of the expansion do not fix to a single correct representation.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetDesignation $designation
     * @return $this
     */
    public function addDesignation($designation)
    {
        $this->designation[] = $designation;
        return $this;
    }

    /**
     * Other codes and entries contained under this entry in the hierarchy.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContains[]
     */
    public function getContains()
    {
        return $this->contains;
    }

    /**
     * Other codes and entries contained under this entry in the hierarchy.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContains $contains
     * @return $this
     */
    public function addContains($contains)
    {
        $this->contains[] = $contains;
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
        if (null !== $this->system) $json['system'] = json_encode($this->system);
        if (null !== $this->abstract) $json['abstract'] = json_encode($this->abstract);
        if (null !== $this->inactive) $json['inactive'] = json_encode($this->inactive);
        if (null !== $this->version) $json['version'] = json_encode($this->version);
        if (null !== $this->code) $json['code'] = json_encode($this->code);
        if (null !== $this->display) $json['display'] = json_encode($this->display);
        if (0 < count($this->designation)) {
            $json['designation'] = [];
            foreach($this->designation as $designation) {
                $json['designation'][] = json_encode($designation);
            }
        }
        if (0 < count($this->contains)) {
            $json['contains'] = [];
            foreach($this->contains as $contains) {
                $json['contains'][] = json_encode($contains);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ValueSetContains xmlns="http://hl7.org/fhir"></ValueSetContains>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->system) $this->system->xmlSerialize(true, $sxe->addChild('system'));
        if (null !== $this->abstract) $this->abstract->xmlSerialize(true, $sxe->addChild('abstract'));
        if (null !== $this->inactive) $this->inactive->xmlSerialize(true, $sxe->addChild('inactive'));
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->display) $this->display->xmlSerialize(true, $sxe->addChild('display'));
        if (0 < count($this->designation)) {
            foreach($this->designation as $designation) {
                $designation->xmlSerialize(true, $sxe->addChild('designation'));
            }
        }
        if (0 < count($this->contains)) {
            foreach($this->contains as $contains) {
                $contains->xmlSerialize(true, $sxe->addChild('contains'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}