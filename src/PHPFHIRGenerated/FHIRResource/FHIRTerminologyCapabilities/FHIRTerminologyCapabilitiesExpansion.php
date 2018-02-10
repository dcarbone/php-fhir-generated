<?php namespace PHPFHIRGenerated\FHIRResource\FHIRTerminologyCapabilities;

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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A Terminology Capabilities documents a set of capabilities (behaviors) of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 */
class FHIRTerminologyCapabilitiesExpansion extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Whether the server can return nested value sets.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $hierarchical = null;

    /**
     * Whether the server supports paging on expansion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $paging = null;

    /**
     * Allow request for incomplete expansions?
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $incomplete = null;

    /**
     * Supported fields on ExpansionProfile.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $definition = null;

    /**
     * Supported expansion profiles.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $profile = [];

    /**
     * Documentation about text searching works.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $textFilter = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'TerminologyCapabilities.Expansion';

    /**
     * Whether the server can return nested value sets.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getHierarchical() {
        return $this->hierarchical;
    }

    /**
     * Whether the server can return nested value sets.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $hierarchical
     * @return $this
     */
    public function setHierarchical($hierarchical) {
        $this->hierarchical = $hierarchical;
        return $this;
    }

    /**
     * Whether the server supports paging on expansion.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getPaging() {
        return $this->paging;
    }

    /**
     * Whether the server supports paging on expansion.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $paging
     * @return $this
     */
    public function setPaging($paging) {
        $this->paging = $paging;
        return $this;
    }

    /**
     * Allow request for incomplete expansions?
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIncomplete() {
        return $this->incomplete;
    }

    /**
     * Allow request for incomplete expansions?
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $incomplete
     * @return $this
     */
    public function setIncomplete($incomplete) {
        $this->incomplete = $incomplete;
        return $this;
    }

    /**
     * Supported fields on ExpansionProfile.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDefinition() {
        return $this->definition;
    }

    /**
     * Supported fields on ExpansionProfile.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $definition
     * @return $this
     */
    public function setDefinition($definition) {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Supported expansion profiles.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getProfile() {
        return $this->profile;
    }

    /**
     * Supported expansion profiles.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $profile
     * @return $this
     */
    public function addProfile($profile) {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * Documentation about text searching works.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getTextFilter() {
        return $this->textFilter;
    }

    /**
     * Documentation about text searching works.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $textFilter
     * @return $this
     */
    public function setTextFilter($textFilter) {
        $this->textFilter = $textFilter;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['hierarchical'])) {
                $this->setHierarchical($data['hierarchical']);
            }
            if (isset($data['paging'])) {
                $this->setPaging($data['paging']);
            }
            if (isset($data['incomplete'])) {
                $this->setIncomplete($data['incomplete']);
            }
            if (isset($data['definition'])) {
                $this->setDefinition($data['definition']);
            }
            if (isset($data['profile'])) {
                if (is_array($data['profile'])) {
                    foreach($data['profile'] as $d) {
                        $this->addProfile($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"profile" must be array of objects or null, '.gettype($data['profile']).' seen.');
                }
            }
            if (isset($data['textFilter'])) {
                $this->setTextFilter($data['textFilter']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->hierarchical)) $json['hierarchical'] = $this->hierarchical;
        if (isset($this->paging)) $json['paging'] = $this->paging;
        if (isset($this->incomplete)) $json['incomplete'] = $this->incomplete;
        if (isset($this->definition)) $json['definition'] = $this->definition;
        if (0 < count($this->profile)) {
            $json['profile'] = [];
            foreach($this->profile as $profile) {
                if (null !== $profile) $json['profile'][] = $profile;
            }
        }
        if (isset($this->textFilter)) $json['textFilter'] = $this->textFilter;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TerminologyCapabilitiesExpansion xmlns="http://hl7.org/fhir"></TerminologyCapabilitiesExpansion>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->hierarchical)) $this->hierarchical->xmlSerialize(true, $sxe->addChild('hierarchical'));
        if (isset($this->paging)) $this->paging->xmlSerialize(true, $sxe->addChild('paging'));
        if (isset($this->incomplete)) $this->incomplete->xmlSerialize(true, $sxe->addChild('incomplete'));
        if (isset($this->definition)) $this->definition->xmlSerialize(true, $sxe->addChild('definition'));
        if (0 < count($this->profile)) {
            foreach($this->profile as $profile) {
                $profile->xmlSerialize(true, $sxe->addChild('profile'));
            }
        }
        if (isset($this->textFilter)) $this->textFilter->xmlSerialize(true, $sxe->addChild('textFilter'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}