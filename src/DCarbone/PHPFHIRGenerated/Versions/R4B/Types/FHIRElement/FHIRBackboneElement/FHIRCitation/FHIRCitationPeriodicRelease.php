<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 21:54+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 */
class FHIRCitationPeriodicRelease extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CITATION_DOT_PERIODIC_RELEASE;

    /* class_default.php:50 */
    public const FIELD_CITED_MEDIUM = 'citedMedium';
    public const FIELD_VOLUME = 'volume';
    public const FIELD_VOLUME_EXT = '_volume';
    public const FIELD_ISSUE = 'issue';
    public const FIELD_ISSUE_EXT = '_issue';
    public const FIELD_DATE_OF_PUBLICATION = 'dateOfPublication';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_VOLUME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ISSUE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $citedMedium;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Volume number of journal in which the article is published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $volume;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Issue, part or supplement of journal in which the article is published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $issue;
    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Defining the date on which the issue of the journal was published.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationDateOfPublication 
     */
    protected FHIRCitationDateOfPublication $dateOfPublication;

    /* constructor.php:61 */
    /**
     * FHIRCitationPeriodicRelease Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $citedMedium
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $volume
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $issue
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationDateOfPublication $dateOfPublication
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $citedMedium = null,
                                null|string|FHIRStringPrimitive|FHIRString $volume = null,
                                null|string|FHIRStringPrimitive|FHIRString $issue = null,
                                null|FHIRCitationDateOfPublication $dateOfPublication = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $citedMedium) {
            $this->setCitedMedium($citedMedium);
        }
        if (null !== $volume) {
            $this->setVolume($volume);
        }
        if (null !== $issue) {
            $this->setIssue($issue);
        }
        if (null !== $dateOfPublication) {
            $this->setDateOfPublication($dateOfPublication);
        }
    }

    /* class_default.php:139 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCitedMedium(): null|FHIRCodeableConcept
    {
        return $this->citedMedium ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $citedMedium
     * @return static
     */
    public function setCitedMedium(null|FHIRCodeableConcept $citedMedium): self
    {
        if (null === $citedMedium) {
            unset($this->citedMedium);
            return $this;
        }
        $this->citedMedium = $citedMedium;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Volume number of journal in which the article is published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getVolume(): null|FHIRString
    {
        return $this->volume ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Volume number of journal in which the article is published.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $volume
     * @return static
     */
    public function setVolume(null|string|FHIRStringPrimitive|FHIRString $volume): self
    {
        if (null === $volume) {
            unset($this->volume);
            return $this;
        }
        if (!($volume instanceof FHIRString)) {
            $volume = new FHIRString(value: $volume);
        }
        $this->volume = $volume;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Issue, part or supplement of journal in which the article is published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getIssue(): null|FHIRString
    {
        return $this->issue ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Issue, part or supplement of journal in which the article is published.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $issue
     * @return static
     */
    public function setIssue(null|string|FHIRStringPrimitive|FHIRString $issue): self
    {
        if (null === $issue) {
            unset($this->issue);
            return $this;
        }
        if (!($issue instanceof FHIRString)) {
            $issue = new FHIRString(value: $issue);
        }
        $this->issue = $issue;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Defining the date on which the issue of the journal was published.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationDateOfPublication
     */
    public function getDateOfPublication(): null|FHIRCitationDateOfPublication
    {
        return $this->dateOfPublication ?? null;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Defining the date on which the issue of the journal was published.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationDateOfPublication $dateOfPublication
     * @return static
     */
    public function setDateOfPublication(null|FHIRCitationDateOfPublication $dateOfPublication): self
    {
        if (null === $dateOfPublication) {
            unset($this->dateOfPublication);
            return $this;
        }
        $this->dateOfPublication = $dateOfPublication;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationPeriodicRelease)) {
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
            } else if (self::FIELD_CITED_MEDIUM === $cen) {
                $type->setCitedMedium(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VOLUME === $cen) {
                $type->setVolume(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ISSUE === $cen) {
                $type->setIssue(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_OF_PUBLICATION === $cen) {
                $type->setDateOfPublication(FHIRCitationDateOfPublication::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VOLUME])) {
            if (isset($type->volume)) {
                $type->volume->setValue((string)$attributes[self::FIELD_VOLUME]);
            } else {
                $type->setVolume((string)$attributes[self::FIELD_VOLUME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VOLUME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ISSUE])) {
            if (isset($type->issue)) {
                $type->issue->setValue((string)$attributes[self::FIELD_ISSUE]);
            } else {
                $type->setIssue((string)$attributes[self::FIELD_ISSUE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ISSUE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->volume) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VOLUME]) {
            $xw->writeAttribute(self::FIELD_VOLUME, $this->volume->_getValueAsString());
        }
        if (isset($this->issue) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ISSUE]) {
            $xw->writeAttribute(self::FIELD_ISSUE, $this->issue->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->citedMedium)) {
            $xw->startElement(self::FIELD_CITED_MEDIUM);
            $this->citedMedium->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->volume)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VOLUME]
                || $this->volume->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VOLUME);
            $this->volume->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VOLUME]);
            $xw->endElement();
        }
        if (isset($this->issue)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ISSUE]
                || $this->issue->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ISSUE);
            $this->issue->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ISSUE]);
            $xw->endElement();
        }
        if (isset($this->dateOfPublication)) {
            $xw->startElement(self::FIELD_DATE_OF_PUBLICATION);
            $this->dateOfPublication->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCitationPeriodicRelease)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->citedMedium) || property_exists($json, self::FIELD_CITED_MEDIUM)) {
            if (is_array($json->citedMedium)) {
                $type->setCitedMedium(FHIRCodeableConcept::jsonUnserialize(reset($json->citedMedium), $config));
            } else {
                $type->setCitedMedium(FHIRCodeableConcept::jsonUnserialize($json->citedMedium, $config));
            }
        }
        if (isset($json->volume)
            || isset($json->_volume)
            || property_exists($json, self::FIELD_VOLUME)
            || property_exists($json, self::FIELD_VOLUME_EXT)) {
            $v = $json->_volume ?? new \stdClass();
            $v->value = $json->volume ?? null;
            $type->setVolume(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->issue)
            || isset($json->_issue)
            || property_exists($json, self::FIELD_ISSUE)
            || property_exists($json, self::FIELD_ISSUE_EXT)) {
            $v = $json->_issue ?? new \stdClass();
            $v->value = $json->issue ?? null;
            $type->setIssue(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->dateOfPublication) || property_exists($json, self::FIELD_DATE_OF_PUBLICATION)) {
            if (is_array($json->dateOfPublication)) {
                $type->setDateOfPublication(FHIRCitationDateOfPublication::jsonUnserialize(reset($json->dateOfPublication), $config));
            } else {
                $type->setDateOfPublication(FHIRCitationDateOfPublication::jsonUnserialize($json->dateOfPublication, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->citedMedium)) {
            $out->citedMedium = $this->citedMedium;
        }
        if (isset($this->volume)) {
            if (null !== ($val = $this->volume->getValue())) {
                $out->volume = $val;
            }
            if ($this->volume->_nonValueFieldDefined()) {
                $ext = $this->volume->jsonSerialize();
                unset($ext->value);
                $out->_volume = $ext;
            }
        }
        if (isset($this->issue)) {
            if (null !== ($val = $this->issue->getValue())) {
                $out->issue = $val;
            }
            if ($this->issue->_nonValueFieldDefined()) {
                $ext = $this->issue->jsonSerialize();
                unset($ext->value);
                $out->_issue = $ext;
            }
        }
        if (isset($this->dateOfPublication)) {
            $out->dateOfPublication = $this->dateOfPublication;
        }
        return $out;
    }
}