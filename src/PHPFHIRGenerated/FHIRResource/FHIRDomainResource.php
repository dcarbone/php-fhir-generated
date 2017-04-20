<?php namespace PHPFHIRGenerated\FHIRResource;

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

use PHPFHIRGenerated\FHIRResource;

/**
 * A resource that includes narrative, extensions, and contained resources.
 */
class FHIRDomainResource extends FHIRResource implements \JsonSerializable
{
    /**
     * A human-readable narrative that contains a summary of the resource, and may be used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative. Resource definitions may define what content should be represented in the narrative to ensure clinical safety.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRNarrative
     */
    public $text = null;

    /**
     * These resources do not have an independent existence apart from the resource that contains them - they cannot be identified independently, and nor can they have their own independent transaction scope.
     * @var \PHPFHIRGenerated\FHIRResourceContainer[]
     */
    public $contained = array();

    /**
     * May be used to represent additional information that is not part of the basic definition of the resource. In order to make the use of extensions safe and manageable, there is a strict set of governance  applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public $extension = array();

    /**
     * May be used to represent additional information that is not part of the basic definition of the resource, and that modifies the understanding of the element that contains it. Usually modifier elements provide negation or qualification. In order to make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public $modifierExtension = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'DomainResource';

    /**
     * A human-readable narrative that contains a summary of the resource, and may be used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative. Resource definitions may define what content should be represented in the narrative to ensure clinical safety.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRNarrative
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A human-readable narrative that contains a summary of the resource, and may be used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative. Resource definitions may define what content should be represented in the narrative to ensure clinical safety.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRNarrative $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * These resources do not have an independent existence apart from the resource that contains them - they cannot be identified independently, and nor can they have their own independent transaction scope.
     * @return \PHPFHIRGenerated\FHIRResourceContainer[]
     */
    public function getContained()
    {
        return $this->contained;
    }

    /**
     * These resources do not have an independent existence apart from the resource that contains them - they cannot be identified independently, and nor can they have their own independent transaction scope.
     * @param \PHPFHIRGenerated\FHIRResourceContainer $contained
     * @return $this
     */
    public function addContained($contained)
    {
        $this->contained[] = $contained;
        return $this;
    }

    /**
     * May be used to represent additional information that is not part of the basic definition of the resource. In order to make the use of extensions safe and manageable, there is a strict set of governance  applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * May be used to represent additional information that is not part of the basic definition of the resource. In order to make the use of extensions safe and manageable, there is a strict set of governance  applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRExtension $extension
     * @return $this
     */
    public function addExtension($extension)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * May be used to represent additional information that is not part of the basic definition of the resource, and that modifies the understanding of the element that contains it. Usually modifier elements provide negation or qualification. In order to make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public function getModifierExtension()
    {
        return $this->modifierExtension;
    }

    /**
     * May be used to represent additional information that is not part of the basic definition of the resource, and that modifies the understanding of the element that contains it. Usually modifier elements provide negation or qualification. In order to make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRExtension $modifierExtension
     * @return $this
     */
    public function addModifierExtension($modifierExtension)
    {
        $this->modifierExtension[] = $modifierExtension;
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
        if (null !== $this->text) $json['text'] = json_encode($this->text);
        if (0 < count($this->contained)) {
            $json['contained'] = [];
            foreach($this->contained as $contained) {
                $json['contained'][] = json_encode($contained);
            }
        }
        if (0 < count($this->extension)) {
            $json['extension'] = [];
            foreach($this->extension as $extension) {
                $json['extension'][] = json_encode($extension);
            }
        }
        if (0 < count($this->modifierExtension)) {
            $json['modifierExtension'] = [];
            foreach($this->modifierExtension as $modifierExtension) {
                $json['modifierExtension'][] = json_encode($modifierExtension);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DomainResource xmlns="http://hl7.org/fhir"></DomainResource>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->text) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (0 < count($this->contained)) {
            foreach($this->contained as $contained) {
                $contained->xmlSerialize(true, $sxe->addChild('contained'));
            }
        }
        if (0 < count($this->extension)) {
            foreach($this->extension as $extension) {
                $extension->xmlSerialize(true, $sxe->addChild('extension'));
            }
        }
        if (0 < count($this->modifierExtension)) {
            foreach($this->modifierExtension as $modifierExtension) {
                $modifierExtension->xmlSerialize(true, $sxe->addChild('modifierExtension'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}