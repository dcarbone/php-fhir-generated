<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 01:55+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Describes validation requirements, source(s), status and dates for one or more
 * elements.
 */
class FHIRVerificationResultPrimarySource extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_PRIMARY_SOURCE;

    /* class_default.php:50 */
    public const FIELD_WHO = 'who';
    public const FIELD_TYPE = 'type';
    public const FIELD_COMMUNICATION_METHOD = 'communicationMethod';
    public const FIELD_VALIDATION_STATUS = 'validationStatus';
    public const FIELD_VALIDATION_DATE = 'validationDate';
    public const FIELD_VALIDATION_DATE_EXT = '_validationDate';
    public const FIELD_CAN_PUSH_UPDATES = 'canPushUpdates';
    public const FIELD_PUSH_TYPE_AVAILABLE = 'pushTypeAvailable';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_VALIDATION_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
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

    /* constructor.php:61 */
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
     * @return static
     */
    public function setValidationDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $validationDate): self
    {
        if (null === $validationDate) {
            unset($this->validationDate);
            return $this;
        }
        if (!($validationDate instanceof FHIRDateTime)) {
            $validationDate = new FHIRDateTime(value: $validationDate);
        }
        $this->validationDate = $validationDate;
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

    /* class_default.php:199 */
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
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
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
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALIDATION_DATE])) {
            if (isset($type->validationDate)) {
                $type->validationDate->setValue((string)$attributes[self::FIELD_VALIDATION_DATE]);
            } else {
                $type->setValidationDate((string)$attributes[self::FIELD_VALIDATION_DATE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_VALIDATION_DATE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->writeAttribute(self::FIELD_VALIDATION_DATE, $this->validationDate->_getValueAsString());
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
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
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
        if (isset($json->who) || property_exists($json, self::FIELD_WHO)) {
            if (is_array($json->who)) {
                $type->setWho(FHIRReference::jsonUnserialize(reset($json->who), $config));
            } else {
                $type->setWho(FHIRReference::jsonUnserialize($json->who, $config));
            }
        }
        if (isset($json->type) || property_exists($json, self::FIELD_TYPE)) {
            if (is_object($json->type)) {
                $vals = [$json->type];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TYPE, true);
            } else {
                $vals = $json->type;
            }
            foreach($vals as $v) {
                $type->addType(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->communicationMethod) || property_exists($json, self::FIELD_COMMUNICATION_METHOD)) {
            if (is_object($json->communicationMethod)) {
                $vals = [$json->communicationMethod];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_COMMUNICATION_METHOD, true);
            } else {
                $vals = $json->communicationMethod;
            }
            foreach($vals as $v) {
                $type->addCommunicationMethod(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->validationStatus) || property_exists($json, self::FIELD_VALIDATION_STATUS)) {
            if (is_array($json->validationStatus)) {
                $type->setValidationStatus(FHIRCodeableConcept::jsonUnserialize(reset($json->validationStatus), $config));
            } else {
                $type->setValidationStatus(FHIRCodeableConcept::jsonUnserialize($json->validationStatus, $config));
            }
        }
        if (isset($json->validationDate)
            || isset($json->_validationDate)
            || property_exists($json, self::FIELD_VALIDATION_DATE)
            || property_exists($json, self::FIELD_VALIDATION_DATE_EXT)) {
            $v = $json->_validationDate ?? new \stdClass();
            $v->value = $json->validationDate ?? null;
            $type->setValidationDate(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->canPushUpdates) || property_exists($json, self::FIELD_CAN_PUSH_UPDATES)) {
            if (is_array($json->canPushUpdates)) {
                $type->setCanPushUpdates(FHIRCodeableConcept::jsonUnserialize(reset($json->canPushUpdates), $config));
            } else {
                $type->setCanPushUpdates(FHIRCodeableConcept::jsonUnserialize($json->canPushUpdates, $config));
            }
        }
        if (isset($json->pushTypeAvailable) || property_exists($json, self::FIELD_PUSH_TYPE_AVAILABLE)) {
            if (is_object($json->pushTypeAvailable)) {
                $vals = [$json->pushTypeAvailable];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PUSH_TYPE_AVAILABLE, true);
            } else {
                $vals = $json->pushTypeAvailable;
            }
            foreach($vals as $v) {
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
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TYPE) && 1 === count($this->type)) {
                $out->type = $this->type[0];
            } else {
                $out->type = $this->type;
            }
        }
        if (isset($this->communicationMethod) && [] !== $this->communicationMethod) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_COMMUNICATION_METHOD) && 1 === count($this->communicationMethod)) {
                $out->communicationMethod = $this->communicationMethod[0];
            } else {
                $out->communicationMethod = $this->communicationMethod;
            }
        }
        if (isset($this->validationStatus)) {
            $out->validationStatus = $this->validationStatus;
        }
        if (isset($this->validationDate)) {
            if (null !== ($val = $this->validationDate->getValue())) {
                $out->validationDate = $val;
            }
            if ($this->validationDate->_nonValueFieldDefined()) {
                $ext = $this->validationDate->jsonSerialize();
                unset($ext->value);
                $out->_validationDate = $ext;
            }
        }
        if (isset($this->canPushUpdates)) {
            $out->canPushUpdates = $this->canPushUpdates;
        }
        if (isset($this->pushTypeAvailable) && [] !== $this->pushTypeAvailable) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PUSH_TYPE_AVAILABLE) && 1 === count($this->pushTypeAvailable)) {
                $out->pushTypeAvailable = $this->pushTypeAvailable[0];
            } else {
                $out->pushTypeAvailable = $this->pushTypeAvailable;
            }
        }
        return $out;
    }
}