<?php namespace PHPFHIRGenerated\FHIRResource\FHIRConceptMap;

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
 *   Generated on Tue, Dec 6, 2016 12:22+1100 for FHIR v1.8.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A statement of relationships from one set of concepts to one or more other concepts - either code systems or data elements, or classes in class models.
 */
class FHIRConceptMapGroup extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * An absolute URI that identifies the Code System (if the source is a value set that crosses more than one code system).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $source = null;

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $sourceVersion = null;

    /**
     * An absolute URI that identifies the code system of the target code (if the target is a value set that cross code systems).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $target = null;

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $targetVersion = null;

    /**
     * Mappings for an individual concept in the source to one or more concepts in the target.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapElement[]
     */
    public $element = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'ConceptMap.Group';

    /**
     * An absolute URI that identifies the Code System (if the source is a value set that crosses more than one code system).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * An absolute URI that identifies the Code System (if the source is a value set that crosses more than one code system).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSourceVersion()
    {
        return $this->sourceVersion;
    }

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $sourceVersion
     * @return $this
     */
    public function setSourceVersion($sourceVersion)
    {
        $this->sourceVersion = $sourceVersion;
        return $this;
    }

    /**
     * An absolute URI that identifies the code system of the target code (if the target is a value set that cross code systems).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * An absolute URI that identifies the code system of the target code (if the target is a value set that cross code systems).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $target
     * @return $this
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTargetVersion()
    {
        return $this->targetVersion;
    }

    /**
     * The specific version of the code system, as determined by the code system authority.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $targetVersion
     * @return $this
     */
    public function setTargetVersion($targetVersion)
    {
        $this->targetVersion = $targetVersion;
        return $this;
    }

    /**
     * Mappings for an individual concept in the source to one or more concepts in the target.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapElement[]
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Mappings for an individual concept in the source to one or more concepts in the target.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapElement $element
     * @return $this
     */
    public function addElement($element)
    {
        $this->element[] = $element;
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
        if (null !== $this->source) $json['source'] = json_encode($this->source);
        if (null !== $this->sourceVersion) $json['sourceVersion'] = json_encode($this->sourceVersion);
        if (null !== $this->target) $json['target'] = json_encode($this->target);
        if (null !== $this->targetVersion) $json['targetVersion'] = json_encode($this->targetVersion);
        if (0 < count($this->element)) {
            $json['element'] = [];
            foreach($this->element as $element) {
                $json['element'][] = json_encode($element);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ConceptMapGroup xmlns="http://hl7.org/fhir"></ConceptMapGroup>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->source) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (null !== $this->sourceVersion) $this->sourceVersion->xmlSerialize(true, $sxe->addChild('sourceVersion'));
        if (null !== $this->target) $this->target->xmlSerialize(true, $sxe->addChild('target'));
        if (null !== $this->targetVersion) $this->targetVersion->xmlSerialize(true, $sxe->addChild('targetVersion'));
        if (0 < count($this->element)) {
            foreach($this->element as $element) {
                $element->xmlSerialize(true, $sxe->addChild('element'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}