<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Describes validation requirements, source(s), status and dates for one or more
 * elements.
 */
class FHIRVerificationResultPrimarySource extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_PRIMARY_SOURCE;

    /* class_default.php:48 */
    public const FIELD_WHO = 'who';
    public const FIELD_TYPE = 'type';
    public const FIELD_COMMUNICATION_METHOD = 'communicationMethod';
    public const FIELD_VALIDATION_STATUS = 'validationStatus';
    public const FIELD_VALIDATION_DATE = 'validationDate';
    public const FIELD_VALIDATION_DATE_EXT = '_validationDate';
    public const FIELD_CAN_PUSH_UPDATES = 'canPushUpdates';
    public const FIELD_PUSH_TYPE_AVAILABLE = 'pushTypeAvailable';

    /* class_default.php:67 */
    private static array $_validationRules = [];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_VALIDATION_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the primary source.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $who;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of primary source (License Board; Primary Education; Continuing Education;
     * Postal Service; Relationship owner; Registration Authority; legal source;
     * issuing source; authoritative source).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $type;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $communicationMethod;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of the validation of the target against the primary source (successful;
     * failed; unknown).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $validationStatus;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the target was validated against the primary source.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $validationDate;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $canPushUpdates;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of alerts/updates the primary source can send (specific requested changes;
     * any changes; as defined by source).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $pushTypeAvailable;

    /* constructor.php:63 */
    /**
     * FHIRVerificationResultPrimarySource Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $who
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $communicationMethod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $validationStatus
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $validationDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $canPushUpdates
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $pushTypeAvailable
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRReference $who = null,
                                null|iterable $type = null,
                                null|iterable $communicationMethod = null,
                                null|FHIRCodeableConcept $validationStatus = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $validationDate = null,
                                null|FHIRCodeableConcept $canPushUpdates = null,
                                null|iterable $pushTypeAvailable = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $who) {
            $this->setWho($who);
        }
        if (null !== $type) {
            $this->setType(...$type);
        }
        if (null !== $communicationMethod) {
            $this->setCommunicationMethod(...$communicationMethod);
        }
        if (null !== $validationStatus) {
            $this->setValidationStatus($validationStatus);
        }
        if (null !== $validationDate) {
            $this->setValidationDate($validationDate);
        }
        if (null !== $canPushUpdates) {
            $this->setCanPushUpdates($canPushUpdates);
        }
        if (null !== $pushTypeAvailable) {
            $this->setPushTypeAvailable(...$pushTypeAvailable);
        }
    }

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the primary source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getWho(): null|FHIRReference
    {
        return $this->who ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the primary source.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $who
     * @return static
     */
    public function setWho(null|FHIRReference $who): self
    {
        if (null === $who) {
            unset($this->who);
            return $this;
        }
        $this->who = $who;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of primary source (License Board; Primary Education; Continuing Education;
     * Postal Service; Relationship owner; Registration Authority; legal source;
     * issuing source; authoritative source).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getType(): array
    {
        return $this->type ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getTypeIterator(): iterable
    {
        if (!isset($this->type)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->type);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of primary source (License Board; Primary Education; Continuing Education;
     * Postal Service; Relationship owner; Registration Authority; legal source;
     * issuing source; authoritative source).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @return static
     */
    public function addType(FHIRCodeableConcept $type): self
    {
        if (!isset($this->type)) {
            $this->type = [];
        }
        $this->type[] = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of primary source (License Board; Primary Education; Continuing Education;
     * Postal Service; Relationship owner; Registration Authority; legal source;
     * issuing source; authoritative source).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$type
     * @return static
     */
    public function setType(FHIRCodeableConcept ...$type): self
    {
        if ([] === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCommunicationMethod(): array
    {
        return $this->communicationMethod ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getCommunicationMethodIterator(): iterable
    {
        if (!isset($this->communicationMethod)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->communicationMethod);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $communicationMethod
     * @return static
     */
    public function addCommunicationMethod(FHIRCodeableConcept $communicationMethod): self
    {
        if (!isset($this->communicationMethod)) {
            $this->communicationMethod = [];
        }
        $this->communicationMethod[] = $communicationMethod;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Method for communicating with the primary source (manual; API; Push).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$communicationMethod
     * @return static
     */
    public function setCommunicationMethod(FHIRCodeableConcept ...$communicationMethod): self
    {
        if ([] === $communicationMethod) {
            unset($this->communicationMethod);
            return $this;
        }
        $this->communicationMethod = $communicationMethod;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of the validation of the target against the primary source (successful;
     * failed; unknown).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getValidationStatus(): null|FHIRCodeableConcept
    {
        return $this->validationStatus ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Status of the validation of the target against the primary source (successful;
     * failed; unknown).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $validationStatus
     * @return static
     */
    public function setValidationStatus(null|FHIRCodeableConcept $validationStatus): self
    {
        if (null === $validationStatus) {
            unset($this->validationStatus);
            return $this;
        }
        $this->validationStatus = $validationStatus;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the target was validated against the primary source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getValidationDate(): null|FHIRDateTime
    {
        return $this->validationDate ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the target was validated against the primary source.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $validationDate
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValidationDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $validationDate,
                                      ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $validationDate) {
            unset($this->validationDate);
            return $this;
        }
        if (!($validationDate instanceof FHIRDateTime)) {
            $validationDate = new FHIRDateTime(value: $validationDate);
        }
        $this->validationDate = $validationDate;
        if ($this->_valueXMLLocations[self::FIELD_VALIDATION_DATE] !== $valueXMLLocation) {
            $this->_setValidationDateValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the validationDate element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValidationDateValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALIDATION_DATE];
    }

    /**
     * Set the location the "value" field of the validationDate element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValidationDateValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALIDATION_DATE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getCanPushUpdates(): null|FHIRCodeableConcept
    {
        return $this->canPushUpdates ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Ability of the primary source to push updates/alerts (yes; no; undetermined).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $canPushUpdates
     * @return static
     */
    public function setCanPushUpdates(null|FHIRCodeableConcept $canPushUpdates): self
    {
        if (null === $canPushUpdates) {
            unset($this->canPushUpdates);
            return $this;
        }
        $this->canPushUpdates = $canPushUpdates;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of alerts/updates the primary source can send (specific requested changes;
     * any changes; as defined by source).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getPushTypeAvailable(): array
    {
        return $this->pushTypeAvailable ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getPushTypeAvailableIterator(): iterable
    {
        if (!isset($this->pushTypeAvailable)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->pushTypeAvailable);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of alerts/updates the primary source can send (specific requested changes;
     * any changes; as defined by source).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $pushTypeAvailable
     * @return static
     */
    public function addPushTypeAvailable(FHIRCodeableConcept $pushTypeAvailable): self
    {
        if (!isset($this->pushTypeAvailable)) {
            $this->pushTypeAvailable = [];
        }
        $this->pushTypeAvailable[] = $pushTypeAvailable;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of alerts/updates the primary source can send (specific requested changes;
     * any changes; as defined by source).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$pushTypeAvailable
     * @return static
     */
    public function setPushTypeAvailable(FHIRCodeableConcept ...$pushTypeAvailable): self
    {
        if ([] === $pushTypeAvailable) {
            unset($this->pushTypeAvailable);
            return $this;
        }
        $this->pushTypeAvailable = $pushTypeAvailable;
        return $this;
    }

    /* class_default.php:189 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_WHO])) {
            $v = $this->getWho();
            foreach($validationRules[self::FIELD_WHO] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_WHO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHO])) {
                        $errs[self::FIELD_WHO] = [];
                    }
                    $errs[self::FIELD_WHO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMUNICATION_METHOD])) {
            $v = $this->getCommunicationMethod();
            foreach($validationRules[self::FIELD_COMMUNICATION_METHOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COMMUNICATION_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMUNICATION_METHOD])) {
                        $errs[self::FIELD_COMMUNICATION_METHOD] = [];
                    }
                    $errs[self::FIELD_COMMUNICATION_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATION_STATUS])) {
            $v = $this->getValidationStatus();
            foreach($validationRules[self::FIELD_VALIDATION_STATUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALIDATION_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATION_STATUS])) {
                        $errs[self::FIELD_VALIDATION_STATUS] = [];
                    }
                    $errs[self::FIELD_VALIDATION_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATION_DATE])) {
            $v = $this->getValidationDate();
            foreach($validationRules[self::FIELD_VALIDATION_DATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALIDATION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATION_DATE])) {
                        $errs[self::FIELD_VALIDATION_DATE] = [];
                    }
                    $errs[self::FIELD_VALIDATION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAN_PUSH_UPDATES])) {
            $v = $this->getCanPushUpdates();
            foreach($validationRules[self::FIELD_CAN_PUSH_UPDATES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CAN_PUSH_UPDATES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAN_PUSH_UPDATES])) {
                        $errs[self::FIELD_CAN_PUSH_UPDATES] = [];
                    }
                    $errs[self::FIELD_CAN_PUSH_UPDATES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUSH_TYPE_AVAILABLE])) {
            $v = $this->getPushTypeAvailable();
            foreach($validationRules[self::FIELD_PUSH_TYPE_AVAILABLE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PUSH_TYPE_AVAILABLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUSH_TYPE_AVAILABLE])) {
                        $errs[self::FIELD_PUSH_TYPE_AVAILABLE] = [];
                    }
                    $errs[self::FIELD_PUSH_TYPE_AVAILABLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /* class_default.php:213 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRVerificationResultPrimarySource)) {
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WHO === $cen) {
                $type->setWho(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->addType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COMMUNICATION_METHOD === $cen) {
                $type->addCommunicationMethod(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALIDATION_STATUS === $cen) {
                $type->setValidationStatus(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALIDATION_DATE === $cen) {
                $type->setValidationDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CAN_PUSH_UPDATES === $cen) {
                $type->setCanPushUpdates(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PUSH_TYPE_AVAILABLE === $cen) {
                $type->addPushTypeAvailable(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALIDATION_DATE])) {
            if (isset($type->validationDate)) {
                $type->validationDate->setValue((string)$attributes[self::FIELD_VALIDATION_DATE]);
                $type->_setValidationDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValidationDate((string)$attributes[self::FIELD_VALIDATION_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($this->validationDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALIDATION_DATE]) {
            $xw->writeAttribute(self::FIELD_VALIDATION_DATE, $this->validationDate->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->who)) {
            $xw->startElement(self::FIELD_WHO);
            $this->who->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->type)) {
            foreach ($this->type as $v) {
                $xw->startElement(self::FIELD_TYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->communicationMethod)) {
            foreach ($this->communicationMethod as $v) {
                $xw->startElement(self::FIELD_COMMUNICATION_METHOD);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->validationStatus)) {
            $xw->startElement(self::FIELD_VALIDATION_STATUS);
            $this->validationStatus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->validationDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALIDATION_DATE]
                || $this->validationDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALIDATION_DATE);
            $this->validationDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALIDATION_DATE]);
            $xw->endElement();
        }
        if (isset($this->canPushUpdates)) {
            $xw->startElement(self::FIELD_CAN_PUSH_UPDATES);
            $this->canPushUpdates->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->pushTypeAvailable)) {
            foreach ($this->pushTypeAvailable as $v) {
                $xw->startElement(self::FIELD_PUSH_TYPE_AVAILABLE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRVerificationResultPrimarySource)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_WHO]) || array_key_exists(self::FIELD_WHO, $json)) {
            $type->setWho(FHIRReference::jsonUnserialize($json[self::FIELD_WHO], $config));
        }
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $vs = $json[self::FIELD_TYPE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addType(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_COMMUNICATION_METHOD]) || array_key_exists(self::FIELD_COMMUNICATION_METHOD, $json)) {
            $vs = $json[self::FIELD_COMMUNICATION_METHOD];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCommunicationMethod(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_VALIDATION_STATUS]) || array_key_exists(self::FIELD_VALIDATION_STATUS, $json)) {
            $type->setValidationStatus(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_VALIDATION_STATUS], $config));
        }
        if (isset($json[self::FIELD_VALIDATION_DATE])
            || isset($json[self::FIELD_VALIDATION_DATE_EXT])
            || array_key_exists(self::FIELD_VALIDATION_DATE, $json)
            || array_key_exists(self::FIELD_VALIDATION_DATE_EXT, $json)) {
            $value = $json[self::FIELD_VALIDATION_DATE] ?? null;
            $type->setValidationDate(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_VALIDATION_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CAN_PUSH_UPDATES]) || array_key_exists(self::FIELD_CAN_PUSH_UPDATES, $json)) {
            $type->setCanPushUpdates(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CAN_PUSH_UPDATES], $config));
        }
        if (isset($json[self::FIELD_PUSH_TYPE_AVAILABLE]) || array_key_exists(self::FIELD_PUSH_TYPE_AVAILABLE, $json)) {
            $vs = $json[self::FIELD_PUSH_TYPE_AVAILABLE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addPushTypeAvailable(FHIRCodeableConcept::jsonUnserialize($v, $config));
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
        if (isset($this->who)) {
            $out->who = $this->who;
        }
        if (isset($this->type) && [] !== $this->type) {
            $out->type = $this->type;
        }
        if (isset($this->communicationMethod) && [] !== $this->communicationMethod) {
            $out->communicationMethod = $this->communicationMethod;
        }
        if (isset($this->validationStatus)) {
            $out->validationStatus = $this->validationStatus;
        }
        if (isset($this->validationDate)) {
            if (null !== ($val = $this->validationDate->getValue())) {
                $out->validationDate = $val;
            }
            $ext = $this->validationDate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_validationDate = $ext;
            }
        }
        if (isset($this->canPushUpdates)) {
            $out->canPushUpdates = $this->canPushUpdates;
        }
        if (isset($this->pushTypeAvailable) && [] !== $this->pushTypeAvailable) {
            $out->pushTypeAvailable = $this->pushTypeAvailable;
        }
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}