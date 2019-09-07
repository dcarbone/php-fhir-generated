<?php

namespace DCarbone\PHPFHIRGenerated\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 7th, 2019 20:23+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\FHIRResource;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeMap;

/**
 * A resource that includes narrative, extensions, and contained resources.
 *
 * Class FHIRDomainResource
 * @package \DCarbone\PHPFHIRGenerated\FHIRResource
 */
class FHIRDomainResource extends FHIRResource
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE;

    const FIELD_CONTAINED = 'contained';
    const FIELD_EXTENSION = 'extension';
    const FIELD_MODIFIER_EXTENSION = 'modifierExtension';
    const FIELD_TEXT = 'text';

    /**
     * (choose any one of the elements, but only one)
     *
     * These resources do not have an independent existence apart from the resource
     * that contains them - they cannot be identified independently, and nor can they
     * have their own independent transaction scope.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface[]
     */
    private $contained = [];

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource. To make the use of extensions safe and manageable,
     * there is a strict set of governance applied to the definition and use of
     * extensions. Though any implementer can define an extension, there is a set of
     * requirements that SHALL be met as part of the definition of the extension.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    private $extension = [];

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource and that modifies the understanding of the element
     * that contains it and/or the understanding of the containing element's
     * descendants. Usually modifier elements provide negation or qualification. To
     * make the use of extensions safe and manageable, there is a strict set of
     * governance applied to the definition and use of extensions. Though any
     * implementer is allowed to define an extension, there is a set of requirements
     * that SHALL be met as part of the definition of the extension. Applications
     * processing a resource are required to check for modifier extensions. Modifier
     * extensions SHALL NOT change the meaning of any elements on Resource or
     * DomainResource (including cannot change the meaning of modifierExtension
     * itself).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    private $modifierExtension = [];

    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains a summary of the resource and can be
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative. Resource
     * definitions may define what content should be represented in the narrative to
     * ensure clinical safety.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRNarrative
     */
    private $text = null;

    /**
     * FHIRDomainResource Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDomainResource::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CONTAINED])) {
            if (is_array($data[self::FIELD_CONTAINED])) {
                if (is_int(key($data[self::FIELD_CONTAINED]))) {
                    $this->setContained($data[self::FIELD_CONTAINED]);
                } else {
                    $typeClass = PHPFHIRTypeMap::getContainedTypeFromArray($data[self::FIELD_CONTAINED]);
                    if (null === $typeClass) {
                        throw new \InvalidArgumentException(sprintf(
                            'FHIRDomainResource - Unable to determine class for field "contained" from value: %s',
                            json_encode($data[self::FIELD_CONTAINED])
                        ));
                    }
                    $this->addContained(new $typeClass($data[self::FIELD_CONTAINED]));
                }
            } else if ($data[self::FIELD_CONTAINED] instanceof PHPFHIRContainedTypeInterface) {
                $this->addContained($data[self::FIELD_CONTAINED]);
            }
        }
        if (isset($data[self::FIELD_EXTENSION])) {
            if (is_array($data[self::FIELD_EXTENSION])) {
                foreach($data[self::FIELD_EXTENSION] as $v) {
                    if ($v instanceof FHIRExtension) {
                        $this->addExtension($v);
                    } else {
                        $this->addExtension(new FHIRExtension($v));
                    }
                }
            } else if ($data[self::FIELD_EXTENSION] instanceof FHIRExtension) {
                $this->addExtension($data[self::FIELD_EXTENSION]);
            } else {
                $this->addExtension(new FHIRExtension($data[self::FIELD_EXTENSION]));
            }
        }
        if (isset($data[self::FIELD_MODIFIER_EXTENSION])) {
            if (is_array($data[self::FIELD_MODIFIER_EXTENSION])) {
                foreach($data[self::FIELD_MODIFIER_EXTENSION] as $v) {
                    if ($v instanceof FHIRExtension) {
                        $this->addModifierExtension($v);
                    } else {
                        $this->addModifierExtension(new FHIRExtension($v));
                    }
                }
            } else if ($data[self::FIELD_MODIFIER_EXTENSION] instanceof FHIRExtension) {
                $this->addModifierExtension($data[self::FIELD_MODIFIER_EXTENSION]);
            } else {
                $this->addModifierExtension(new FHIRExtension($data[self::FIELD_MODIFIER_EXTENSION]));
            }
        }
        if (isset($data[self::FIELD_TEXT])) {
            if ($data[self::FIELD_TEXT] instanceof FHIRNarrative) {
                $this->setText($data[self::FIELD_TEXT]);
            } else {
                $this->setText(new FHIRNarrative($data[self::FIELD_TEXT]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * (choose any one of the elements, but only one)
     *
     * These resources do not have an independent existence apart from the resource
     * that contains them - they cannot be identified independently, and nor can they
     * have their own independent transaction scope.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface[]
     */
    public function getContained()
    {
        return $this->contained;
    }

    /**
     * (choose any one of the elements, but only one)
     *
     * These resources do not have an independent existence apart from the resource
     * that contains them - they cannot be identified independently, and nor can they
     * have their own independent transaction scope.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface $contained
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
     */
    public function addContained(PHPFHIRContainedTypeInterface $contained = null)
    {
        $this->contained[] = $contained;
        return $this;
    }

    /**
     * (choose any one of the elements, but only one)
     *
     * These resources do not have an independent existence apart from the resource
     * that contains them - they cannot be identified independently, and nor can they
     * have their own independent transaction scope.
     *
     * @param \DCarbone\PHPFHIRGenerated\PHPFHIRContainedTypeInterface[] $contained
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
     */
    public function setContained(array $contained = [])
    {
        $this->contained = [];
        if ([] === $contained) {
            return $this;
        }
        foreach($contained as $v) {
            if (null === $v) {
                continue;
            }
            if (is_object($v)) {
                if ($v instanceof PHPFHIRContainedTypeInterface) {
                    $this->addContained($v);
                } else {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRDomainResource - Field "contained" must be an array of objects implementing PHPFHIRContainedTypeInterface, object of type %s seen',
                        get_class($v)
                    ));
                }
            } else if (is_array($v)) {
                $typeClass = PHPFHIRTypeMap::getContainedTypeFromArray($v);
                if (null === $typeClass) {
                    throw new \InvalidArgumentException(sprintf(
                        'FHIRDomainResource - Unable to determine class for field "contained" from value: %s',
                        json_encode($v)
                    ));
                }
                $this->addContained(new $typeClass($v));
            } else {
                throw new \InvalidArgumentException(sprintf(
                    'FHIRDomainResource - Unable to determine class for field "contained" from value: %s',
                    json_encode($v)
                ));
            }
        }
        return $this;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource. To make the use of extensions safe and manageable,
     * there is a strict set of governance applied to the definition and use of
     * extensions. Though any implementer can define an extension, there is a set of
     * requirements that SHALL be met as part of the definition of the extension.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource. To make the use of extensions safe and manageable,
     * there is a strict set of governance applied to the definition and use of
     * extensions. Though any implementer can define an extension, there is a set of
     * requirements that SHALL be met as part of the definition of the extension.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension $extension
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
     */
    public function addExtension(FHIRExtension $extension = null)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource. To make the use of extensions safe and manageable,
     * there is a strict set of governance applied to the definition and use of
     * extensions. Though any implementer can define an extension, there is a set of
     * requirements that SHALL be met as part of the definition of the extension.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension[] $extension
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
     */
    public function setExtension(array $extension = [])
    {
        $this->extension = [];
        if ([] === $extension) {
            return $this;
        }
        foreach($extension as $v) {
            if ($v instanceof FHIRExtension) {
                $this->addExtension($v);
            } else {
                $this->addExtension(new FHIRExtension($v));
            }
        }
        return $this;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource and that modifies the understanding of the element
     * that contains it and/or the understanding of the containing element's
     * descendants. Usually modifier elements provide negation or qualification. To
     * make the use of extensions safe and manageable, there is a strict set of
     * governance applied to the definition and use of extensions. Though any
     * implementer is allowed to define an extension, there is a set of requirements
     * that SHALL be met as part of the definition of the extension. Applications
     * processing a resource are required to check for modifier extensions. Modifier
     * extensions SHALL NOT change the meaning of any elements on Resource or
     * DomainResource (including cannot change the meaning of modifierExtension
     * itself).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public function getModifierExtension()
    {
        return $this->modifierExtension;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource and that modifies the understanding of the element
     * that contains it and/or the understanding of the containing element's
     * descendants. Usually modifier elements provide negation or qualification. To
     * make the use of extensions safe and manageable, there is a strict set of
     * governance applied to the definition and use of extensions. Though any
     * implementer is allowed to define an extension, there is a set of requirements
     * that SHALL be met as part of the definition of the extension. Applications
     * processing a resource are required to check for modifier extensions. Modifier
     * extensions SHALL NOT change the meaning of any elements on Resource or
     * DomainResource (including cannot change the meaning of modifierExtension
     * itself).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension $modifierExtension
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
     */
    public function addModifierExtension(FHIRExtension $modifierExtension = null)
    {
        $this->modifierExtension[] = $modifierExtension;
        return $this;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource and that modifies the understanding of the element
     * that contains it and/or the understanding of the containing element's
     * descendants. Usually modifier elements provide negation or qualification. To
     * make the use of extensions safe and manageable, there is a strict set of
     * governance applied to the definition and use of extensions. Though any
     * implementer is allowed to define an extension, there is a set of requirements
     * that SHALL be met as part of the definition of the extension. Applications
     * processing a resource are required to check for modifier extensions. Modifier
     * extensions SHALL NOT change the meaning of any elements on Resource or
     * DomainResource (including cannot change the meaning of modifierExtension
     * itself).
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRExtension[] $modifierExtension
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
     */
    public function setModifierExtension(array $modifierExtension = [])
    {
        $this->modifierExtension = [];
        if ([] === $modifierExtension) {
            return $this;
        }
        foreach($modifierExtension as $v) {
            if ($v instanceof FHIRExtension) {
                $this->addModifierExtension($v);
            } else {
                $this->addModifierExtension(new FHIRExtension($v));
            }
        }
        return $this;
    }

    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains a summary of the resource and can be
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative. Resource
     * definitions may define what content should be represented in the narrative to
     * ensure clinical safety.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRNarrative
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A human-readable summary of the resource conveying the essential clinical and
     * business information for the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains a summary of the resource and can be
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative. Resource
     * definitions may define what content should be represented in the narrative to
     * ensure clinical safety.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRNarrative $text
     * @return \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
     */
    public function setText(FHIRNarrative $text = null)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRDomainResource::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDomainResource::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRResource::xmlUnserialize($sxe, new FHIRDomainResource);
        } elseif (!is_object($type) || !($type instanceof FHIRDomainResource)) {
            throw new \RuntimeException(sprintf(
                'FHIRDomainResource::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRResource\FHIRDomainResource or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->contained)) {
            foreach($children->contained as $child) {
                $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($child));
            }
        }
        if (isset($children->extension)) {
            foreach($children->extension as $child) {
                $type->addExtension(FHIRExtension::xmlUnserialize($child));
            }
        }
        if (isset($children->modifierExtension)) {
            foreach($children->modifierExtension as $child) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($child));
            }
        }
        if (isset($children->text)) {
            $type->setText(FHIRNarrative::xmlUnserialize($children->text));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<DomainResource xmlns="http://hl7.org/fhir"></DomainResource>');
        }
        if ([] !== ($vs = $this->getContained())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONTAINED));
            }
        }
        if ([] !== ($vs = $this->getExtension())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EXTENSION));
            }
        }
        if ([] !== ($vs = $this->getModifierExtension())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MODIFIER_EXTENSION));
            }
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getContained())) {
            $a[self::FIELD_CONTAINED] = $vs;
        }
        if ([] !== ($vs = $this->getExtension())) {
            $a[self::FIELD_EXTENSION] = $vs;
        }
        if ([] !== ($vs = $this->getModifierExtension())) {
            $a[self::FIELD_MODIFIER_EXTENSION] = $vs;
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}