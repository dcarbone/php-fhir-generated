<?php namespace PHPFHIRGenerated\FHIRResource\FHIRProfile;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A Resource Profile - a statement of use of one or more FHIR Resources.  It may include constraints on Resources and Data Types, Terminology Binding Statements and Extension Definitions.
 */
class FHIRProfileSearchParam extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The name of the standard or custom search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType
     */
    public $type = null;

    /**
     * A specification for search parameters. For standard parameters, provides additional information on how the parameter is used in this solution.  For custom parameters, provides a description of what the parameter does.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $documentation = null;

    /**
     * An XPath expression that returns a set of elements for the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $xpath = null;

    /**
     * Types of resource (if a resource is referenced).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public $target = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Profile.SearchParam';

    /**
     * The name of the standard or custom search parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the standard or custom search parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSearchParamType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A specification for search parameters. For standard parameters, provides additional information on how the parameter is used in this solution.  For custom parameters, provides a description of what the parameter does.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * A specification for search parameters. For standard parameters, provides additional information on how the parameter is used in this solution.  For custom parameters, provides a description of what the parameter does.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $documentation
     * @return $this
     */
    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * An XPath expression that returns a set of elements for the search parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getXpath()
    {
        return $this->xpath;
    }

    /**
     * An XPath expression that returns a set of elements for the search parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $xpath
     * @return $this
     */
    public function setXpath($xpath)
    {
        $this->xpath = $xpath;
        return $this;
    }

    /**
     * Types of resource (if a resource is referenced).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Types of resource (if a resource is referenced).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $target
     * @return $this
     */
    public function addTarget($target)
    {
        $this->target[] = $target;
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
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->type) $json['type'] = $this->type;
        if (null !== $this->documentation) $json['documentation'] = $this->documentation;
        if (null !== $this->xpath) $json['xpath'] = $this->xpath;
        if (0 < count($this->target)) {
            $json['target'] = [];
            foreach($this->target as $target) {
                $json['target'][] = $target;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProfileSearchParam xmlns="http://hl7.org/fhir"></ProfileSearchParam>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->documentation) $this->documentation->xmlSerialize(true, $sxe->addChild('documentation'));
        if (null !== $this->xpath) $this->xpath->xmlSerialize(true, $sxe->addChild('xpath'));
        if (0 < count($this->target)) {
            foreach($this->target as $target) {
                $target->xmlSerialize(true, $sxe->addChild('target'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}