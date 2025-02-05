<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 04:06+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 */
class FHIRCitationWhoClassified extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED;

    /* class_default.php:50 */
    public const FIELD_PERSON = 'person';
    public const FIELD_ORGANIZATION = 'organization';
    public const FIELD_PUBLISHER = 'publisher';
    public const FIELD_CLASSIFIER_COPYRIGHT = 'classifierCopyright';
    public const FIELD_CLASSIFIER_COPYRIGHT_EXT = '_classifierCopyright';
    public const FIELD_FREE_TO_SHARE = 'freeToShare';
    public const FIELD_FREE_TO_SHARE_EXT = '_freeToShare';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_CLASSIFIER_COPYRIGHT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_FREE_TO_SHARE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the classification.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $person;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization who created the classification.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $organization;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The publisher of the classification, not the publisher of the article or
     * artifact being cited.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $publisher;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Rights management statement for the classification.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $classifierCopyright;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to re-use the classification.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $freeToShare;

    /* constructor.php:61 */
    /**
     * FHIRCitationWhoClassified Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $person
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $organization
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $publisher
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $classifierCopyright
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $freeToShare
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRReference $person = null,
                                null|FHIRReference $organization = null,
                                null|FHIRReference $publisher = null,
                                null|string|FHIRStringPrimitive|FHIRString $classifierCopyright = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $freeToShare = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $person) {
            $this->setPerson($person);
        }
        if (null !== $organization) {
            $this->setOrganization($organization);
        }
        if (null !== $publisher) {
            $this->setPublisher($publisher);
        }
        if (null !== $classifierCopyright) {
            $this->setClassifierCopyright($classifierCopyright);
        }
        if (null !== $freeToShare) {
            $this->setFreeToShare($freeToShare);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the classification.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getPerson(): null|FHIRReference
    {
        return $this->person ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the classification.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $person
     * @return static
     */
    public function setPerson(null|FHIRReference $person): self
    {
        if (null === $person) {
            unset($this->person);
            return $this;
        }
        $this->person = $person;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization who created the classification.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getOrganization(): null|FHIRReference
    {
        return $this->organization ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization who created the classification.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $organization
     * @return static
     */
    public function setOrganization(null|FHIRReference $organization): self
    {
        if (null === $organization) {
            unset($this->organization);
            return $this;
        }
        $this->organization = $organization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The publisher of the classification, not the publisher of the article or
     * artifact being cited.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference
     */
    public function getPublisher(): null|FHIRReference
    {
        return $this->publisher ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The publisher of the classification, not the publisher of the article or
     * artifact being cited.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $publisher
     * @return static
     */
    public function setPublisher(null|FHIRReference $publisher): self
    {
        if (null === $publisher) {
            unset($this->publisher);
            return $this;
        }
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Rights management statement for the classification.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getClassifierCopyright(): null|FHIRString
    {
        return $this->classifierCopyright ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Rights management statement for the classification.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $classifierCopyright
     * @return static
     */
    public function setClassifierCopyright(null|string|FHIRStringPrimitive|FHIRString $classifierCopyright): self
    {
        if (null === $classifierCopyright) {
            unset($this->classifierCopyright);
            return $this;
        }
        if (!($classifierCopyright instanceof FHIRString)) {
            $classifierCopyright = new FHIRString(value: $classifierCopyright);
        }
        $this->classifierCopyright = $classifierCopyright;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to re-use the classification.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean
     */
    public function getFreeToShare(): null|FHIRBoolean
    {
        return $this->freeToShare ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to re-use the classification.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $freeToShare
     * @return static
     */
    public function setFreeToShare(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $freeToShare): self
    {
        if (null === $freeToShare) {
            unset($this->freeToShare);
            return $this;
        }
        if (!($freeToShare instanceof FHIRBoolean)) {
            $freeToShare = new FHIRBoolean(value: $freeToShare);
        }
        $this->freeToShare = $freeToShare;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWhoClassified $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWhoClassified
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationWhoClassified)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERSON === $cen) {
                $type->setPerson(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORGANIZATION === $cen) {
                $type->setOrganization(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PUBLISHER === $cen) {
                $type->setPublisher(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLASSIFIER_COPYRIGHT === $cen) {
                $type->setClassifierCopyright(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FREE_TO_SHARE === $cen) {
                $type->setFreeToShare(FHIRBoolean::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CLASSIFIER_COPYRIGHT])) {
            if (isset($type->classifierCopyright)) {
                $type->classifierCopyright->setValue((string)$attributes[self::FIELD_CLASSIFIER_COPYRIGHT]);
            } else {
                $type->setClassifierCopyright((string)$attributes[self::FIELD_CLASSIFIER_COPYRIGHT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CLASSIFIER_COPYRIGHT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_FREE_TO_SHARE])) {
            if (isset($type->freeToShare)) {
                $type->freeToShare->setValue((string)$attributes[self::FIELD_FREE_TO_SHARE]);
            } else {
                $type->setFreeToShare((string)$attributes[self::FIELD_FREE_TO_SHARE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_FREE_TO_SHARE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->classifierCopyright) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CLASSIFIER_COPYRIGHT]) {
            $xw->writeAttribute(self::FIELD_CLASSIFIER_COPYRIGHT, $this->classifierCopyright->_getValueAsString());
        }
        if (isset($this->freeToShare) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_FREE_TO_SHARE]) {
            $xw->writeAttribute(self::FIELD_FREE_TO_SHARE, $this->freeToShare->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->person)) {
            $xw->startElement(self::FIELD_PERSON);
            $this->person->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->organization)) {
            $xw->startElement(self::FIELD_ORGANIZATION);
            $this->organization->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->publisher)) {
            $xw->startElement(self::FIELD_PUBLISHER);
            $this->publisher->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->classifierCopyright)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CLASSIFIER_COPYRIGHT]
                || $this->classifierCopyright->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CLASSIFIER_COPYRIGHT);
            $this->classifierCopyright->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CLASSIFIER_COPYRIGHT]);
            $xw->endElement();
        }
        if (isset($this->freeToShare)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_FREE_TO_SHARE]
                || $this->freeToShare->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_FREE_TO_SHARE);
            $this->freeToShare->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_FREE_TO_SHARE]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWhoClassified $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWhoClassified
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationWhoClassified)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->person) || property_exists($json, self::FIELD_PERSON)) {
            if (is_array($json->person)) {
                $type->setPerson(FHIRReference::jsonUnserialize(reset($json->person), $config));
            } else {
                $type->setPerson(FHIRReference::jsonUnserialize($json->person, $config));
            }
        }
        if (isset($json->organization) || property_exists($json, self::FIELD_ORGANIZATION)) {
            if (is_array($json->organization)) {
                $type->setOrganization(FHIRReference::jsonUnserialize(reset($json->organization), $config));
            } else {
                $type->setOrganization(FHIRReference::jsonUnserialize($json->organization, $config));
            }
        }
        if (isset($json->publisher) || property_exists($json, self::FIELD_PUBLISHER)) {
            if (is_array($json->publisher)) {
                $type->setPublisher(FHIRReference::jsonUnserialize(reset($json->publisher), $config));
            } else {
                $type->setPublisher(FHIRReference::jsonUnserialize($json->publisher, $config));
            }
        }
        if (isset($json->classifierCopyright)
            || isset($json->_classifierCopyright)
            || property_exists($json, self::FIELD_CLASSIFIER_COPYRIGHT)
            || property_exists($json, self::FIELD_CLASSIFIER_COPYRIGHT_EXT)) {
            $v = $json->_classifierCopyright ?? new \stdClass();
            $v->value = $json->classifierCopyright ?? null;
            $type->setClassifierCopyright(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->freeToShare)
            || isset($json->_freeToShare)
            || property_exists($json, self::FIELD_FREE_TO_SHARE)
            || property_exists($json, self::FIELD_FREE_TO_SHARE_EXT)) {
            $v = $json->_freeToShare ?? new \stdClass();
            $v->value = $json->freeToShare ?? null;
            $type->setFreeToShare(FHIRBoolean::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->person)) {
            $out->person = $this->person;
        }
        if (isset($this->organization)) {
            $out->organization = $this->organization;
        }
        if (isset($this->publisher)) {
            $out->publisher = $this->publisher;
        }
        if (isset($this->classifierCopyright)) {
            if (null !== ($val = $this->classifierCopyright->getValue())) {
                $out->classifierCopyright = $val;
            }
            if ($this->classifierCopyright->_nonValueFieldDefined()) {
                $ext = $this->classifierCopyright->jsonSerialize();
                unset($ext->value);
                $out->_classifierCopyright = $ext;
            }
        }
        if (isset($this->freeToShare)) {
            if (null !== ($val = $this->freeToShare->getValue())) {
                $out->freeToShare = $val;
            }
            if ($this->freeToShare->_nonValueFieldDefined()) {
                $ext = $this->freeToShare->jsonSerialize();
                unset($ext->value);
                $out->_freeToShare = $ext;
            }
        }
        return $out;
    }
}