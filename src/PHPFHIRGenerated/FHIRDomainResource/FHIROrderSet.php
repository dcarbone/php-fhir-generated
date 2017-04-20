<?php namespace PHPFHIRGenerated\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource allows for the definition of an order set as a sharable, consumable, and executable artifact in support of clinical decision support.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIROrderSet extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A reference to a ModuleMetadata resource containing metadata for the orderset.
     * @var \PHPFHIRGenerated\FHIRDomainResource\FHIRModuleMetadata
     */
    public $moduleMetadata = null;

    /**
     * A reference to a Library resource containing any formal logic used by the orderset.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $library = array();

    /**
     * The definition of the actions that make up the order set. Order set groups and sections are represented as actions which contain sub-actions.
     * @var \[]
     */
    public $action = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'OrderSet';

    /**
     * A reference to a ModuleMetadata resource containing metadata for the orderset.
     * @return \PHPFHIRGenerated\FHIRDomainResource\FHIRModuleMetadata
     */
    public function getModuleMetadata()
    {
        return $this->moduleMetadata;
    }

    /**
     * A reference to a ModuleMetadata resource containing metadata for the orderset.
     * @param \PHPFHIRGenerated\FHIRDomainResource\FHIRModuleMetadata $moduleMetadata
     * @return $this
     */
    public function setModuleMetadata($moduleMetadata)
    {
        $this->moduleMetadata = $moduleMetadata;
        return $this;
    }

    /**
     * A reference to a Library resource containing any formal logic used by the orderset.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getLibrary()
    {
        return $this->library;
    }

    /**
     * A reference to a Library resource containing any formal logic used by the orderset.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $library
     * @return $this
     */
    public function addLibrary($library)
    {
        $this->library[] = $library;
        return $this;
    }

    /**
     * The definition of the actions that make up the order set. Order set groups and sections are represented as actions which contain sub-actions.
     * @return \[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The definition of the actions that make up the order set. Order set groups and sections are represented as actions which contain sub-actions.
     * @param \ $action
     * @return $this
     */
    public function addAction($action)
    {
        $this->action[] = $action;
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
        $json['resourceType'] = $this->_fhirElementName;
        if (null !== $this->moduleMetadata) $json['moduleMetadata'] = json_encode($this->moduleMetadata);
        if (0 < count($this->library)) {
            $json['library'] = [];
            foreach($this->library as $library) {
                $json['library'][] = json_encode($library);
            }
        }
        if (0 < count($this->action)) {
            $json['action'] = [];
            foreach($this->action as $action) {
                $json['action'][] = json_encode($action);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<OrderSet xmlns="http://hl7.org/fhir"></OrderSet>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->moduleMetadata) $this->moduleMetadata->xmlSerialize(true, $sxe->addChild('moduleMetadata'));
        if (0 < count($this->library)) {
            foreach($this->library as $library) {
                $library->xmlSerialize(true, $sxe->addChild('library'));
            }
        }
        if (0 < count($this->action)) {
            foreach($this->action as $action) {
                $action->xmlSerialize(true, $sxe->addChild('action'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}