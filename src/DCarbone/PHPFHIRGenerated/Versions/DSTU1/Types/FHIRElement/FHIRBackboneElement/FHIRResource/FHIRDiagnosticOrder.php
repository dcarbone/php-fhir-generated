<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderPriority;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderStatus;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticOrderPriorityList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticOrderStatusList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap;

/**
 * A request for a diagnostic investigation service to be performed.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRDiagnosticOrder extends FHIRResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER;

    /* class_default.php:50 */
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_ORDERER = 'orderer';
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_CLINICAL_NOTES = 'clinicalNotes';
    public const FIELD_CLINICAL_NOTES_EXT = '_clinicalNotes';
    public const FIELD_SPECIMEN = 'specimen';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_PRIORITY_EXT = '_priority';
    public const FIELD_EVENT = 'event';
    public const FIELD_ITEM = 'item';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_SUBJECT => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_CLINICAL_NOTES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PRIORITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what the investigation is to be performed on. This is usually a human
     * patient, but diagnostic tests can also be requested on animals, groups of humans
     * or animals, devices such as dialysis machines, or even locations (typically for
     * environmental scans).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $subject;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner that holds legal responsibility for ordering the investigation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $orderer;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order or by the receiver.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional informaton about the healthcare context in
     * which this request is made.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $encounter;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explanation or justification for why this diagnostic investigation is being
     * requested.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $clinicalNotes;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more specimens that the diagnostic investigation is about.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] 
     */
    protected array $specimen;
    /**
     * The status of a diagnostic order
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the order.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderStatus 
     */
    protected FHIRDiagnosticOrderStatus $status;
    /**
     * The clinical priority of a diagnostic order
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The clinical priority associated with this order.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderPriority 
     */
    protected FHIRDiagnosticOrderPriority $priority;
    /**
     * A request for a diagnostic investigation service to be performed.
     *
     * A summary of the events of interest that have occurred as the request is
     * processed. E.g. when the order was made, various processing steps (specimens
     * received), when it was completed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent[] 
     */
    protected array $event;
    /**
     * A request for a diagnostic investigation service to be performed.
     *
     * The specific diagnostic investigations that are requested as part of this
     * request. Sometimes, there can only be one item per request, but in most
     * contexts, more than one investigation can be requested.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem[] 
     */
    protected array $item;

    /* constructor.php:61 */
    /**
     * FHIRDiagnosticOrder Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $subject
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $orderer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $encounter
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $clinicalNotes
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] $specimen
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticOrderStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderStatus $status
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticOrderPriorityList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderPriority $priority
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent[] $event
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem[] $item
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|FHIRResourceReference $subject = null,
                                null|FHIRResourceReference $orderer = null,
                                null|iterable $identifier = null,
                                null|FHIRResourceReference $encounter = null,
                                null|string|FHIRStringPrimitive|FHIRString $clinicalNotes = null,
                                null|iterable $specimen = null,
                                null|string|FHIRDiagnosticOrderStatusList|FHIRDiagnosticOrderStatus $status = null,
                                null|string|FHIRDiagnosticOrderPriorityList|FHIRDiagnosticOrderPriority $priority = null,
                                null|iterable $event = null,
                                null|iterable $item = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            fhirComments: $fhirComments);
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $orderer) {
            $this->setOrderer($orderer);
        }
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $clinicalNotes) {
            $this->setClinicalNotes($clinicalNotes);
        }
        if (null !== $specimen) {
            $this->setSpecimen(...$specimen);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $priority) {
            $this->setPriority($priority);
        }
        if (null !== $event) {
            $this->setEvent(...$event);
        }
        if (null !== $item) {
            $this->setItem(...$item);
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

    /* class_default.php:151 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what the investigation is to be performed on. This is usually a human
     * patient, but diagnostic tests can also be requested on animals, groups of humans
     * or animals, devices such as dialysis machines, or even locations (typically for
     * environmental scans).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getSubject(): null|FHIRResourceReference
    {
        return $this->subject ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who or what the investigation is to be performed on. This is usually a human
     * patient, but diagnostic tests can also be requested on animals, groups of humans
     * or animals, devices such as dialysis machines, or even locations (typically for
     * environmental scans).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $subject
     * @return static
     */
    public function setSubject(null|FHIRResourceReference $subject): self
    {
        if (null === $subject) {
            unset($this->subject);
            return $this;
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner that holds legal responsibility for ordering the investigation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getOrderer(): null|FHIRResourceReference
    {
        return $this->orderer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The practitioner that holds legal responsibility for ordering the investigation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $orderer
     * @return static
     */
    public function setOrderer(null|FHIRResourceReference $orderer): self
    {
        if (null === $orderer) {
            unset($this->orderer);
            return $this;
        }
        $this->orderer = $orderer;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order or by the receiver.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order or by the receiver.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier): self
    {
        if (!isset($this->identifier)) {
            $this->identifier = [];
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers assigned to this order by the order or by the receiver.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        if ([] === $identifier) {
            unset($this->identifier);
            return $this;
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional informaton about the healthcare context in
     * which this request is made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getEncounter(): null|FHIRResourceReference
    {
        return $this->encounter ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An encounter that provides additional informaton about the healthcare context in
     * which this request is made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRResourceReference $encounter): self
    {
        if (null === $encounter) {
            unset($this->encounter);
            return $this;
        }
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explanation or justification for why this diagnostic investigation is being
     * requested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getClinicalNotes(): null|FHIRString
    {
        return $this->clinicalNotes ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An explanation or justification for why this diagnostic investigation is being
     * requested.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $clinicalNotes
     * @return static
     */
    public function setClinicalNotes(null|string|FHIRStringPrimitive|FHIRString $clinicalNotes): self
    {
        if (null === $clinicalNotes) {
            unset($this->clinicalNotes);
            return $this;
        }
        if (!($clinicalNotes instanceof FHIRString)) {
            $clinicalNotes = new FHIRString(value: $clinicalNotes);
        }
        $this->clinicalNotes = $clinicalNotes;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more specimens that the diagnostic investigation is about.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[]
     */
    public function getSpecimen(): array
    {
        return $this->specimen ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getSpecimenIterator(): iterable
    {
        if (!isset($this->specimen)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->specimen);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more specimens that the diagnostic investigation is about.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $specimen
     * @return static
     */
    public function addSpecimen(FHIRResourceReference $specimen): self
    {
        if (!isset($this->specimen)) {
            $this->specimen = [];
        }
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * One or more specimens that the diagnostic investigation is about.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$specimen
     * @return static
     */
    public function setSpecimen(FHIRResourceReference ...$specimen): self
    {
        if ([] === $specimen) {
            unset($this->specimen);
            return $this;
        }
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * The status of a diagnostic order
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderStatus
     */
    public function getStatus(): null|FHIRDiagnosticOrderStatus
    {
        return $this->status ?? null;
    }

    /**
     * The status of a diagnostic order
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of the order.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticOrderStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRDiagnosticOrderStatusList|FHIRDiagnosticOrderStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRDiagnosticOrderStatus)) {
            $status = new FHIRDiagnosticOrderStatus(value: $status);
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The clinical priority of a diagnostic order
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The clinical priority associated with this order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderPriority
     */
    public function getPriority(): null|FHIRDiagnosticOrderPriority
    {
        return $this->priority ?? null;
    }

    /**
     * The clinical priority of a diagnostic order
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The clinical priority associated with this order.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticOrderPriorityList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderPriority $priority
     * @return static
     */
    public function setPriority(null|string|FHIRDiagnosticOrderPriorityList|FHIRDiagnosticOrderPriority $priority): self
    {
        if (null === $priority) {
            unset($this->priority);
            return $this;
        }
        if (!($priority instanceof FHIRDiagnosticOrderPriority)) {
            $priority = new FHIRDiagnosticOrderPriority(value: $priority);
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * A request for a diagnostic investigation service to be performed.
     *
     * A summary of the events of interest that have occurred as the request is
     * processed. E.g. when the order was made, various processing steps (specimens
     * received), when it was completed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent[]
     */
    public function getEvent(): array
    {
        return $this->event ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent>
     */
    public function getEventIterator(): iterable
    {
        if (!isset($this->event)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->event);
    }

    /**
     * A request for a diagnostic investigation service to be performed.
     *
     * A summary of the events of interest that have occurred as the request is
     * processed. E.g. when the order was made, various processing steps (specimens
     * received), when it was completed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent $event
     * @return static
     */
    public function addEvent(FHIRDiagnosticOrderEvent $event): self
    {
        if (!isset($this->event)) {
            $this->event = [];
        }
        $this->event[] = $event;
        return $this;
    }

    /**
     * A request for a diagnostic investigation service to be performed.
     *
     * A summary of the events of interest that have occurred as the request is
     * processed. E.g. when the order was made, various processing steps (specimens
     * received), when it was completed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent ...$event
     * @return static
     */
    public function setEvent(FHIRDiagnosticOrderEvent ...$event): self
    {
        if ([] === $event) {
            unset($this->event);
            return $this;
        }
        $this->event = $event;
        return $this;
    }

    /**
     * A request for a diagnostic investigation service to be performed.
     *
     * The specific diagnostic investigations that are requested as part of this
     * request. Sometimes, there can only be one item per request, but in most
     * contexts, more than one investigation can be requested.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem[]
     */
    public function getItem(): array
    {
        return $this->item ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem>
     */
    public function getItemIterator(): iterable
    {
        if (!isset($this->item)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->item);
    }

    /**
     * A request for a diagnostic investigation service to be performed.
     *
     * The specific diagnostic investigations that are requested as part of this
     * request. Sometimes, there can only be one item per request, but in most
     * contexts, more than one investigation can be requested.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem $item
     * @return static
     */
    public function addItem(FHIRDiagnosticOrderItem $item): self
    {
        if (!isset($this->item)) {
            $this->item = [];
        }
        $this->item[] = $item;
        return $this;
    }

    /**
     * A request for a diagnostic investigation service to be performed.
     *
     * The specific diagnostic investigations that are requested as part of this
     * request. Sometimes, there can only be one item per request, but in most
     * contexts, more than one investigation can be requested.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem ...$item
     * @return static
     */
    public function setItem(FHIRDiagnosticOrderItem ...$item): self
    {
        if ([] === $item) {
            unset($this->item);
            return $this;
        }
        $this->item = $item;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDiagnosticOrder)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORDERER === $cen) {
                $type->setOrderer(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENCOUNTER === $cen) {
                $type->setEncounter(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLINICAL_NOTES === $cen) {
                $type->setClinicalNotes(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SPECIMEN === $cen) {
                $type->addSpecimen(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRDiagnosticOrderStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRIORITY === $cen) {
                $type->setPriority(FHIRDiagnosticOrderPriority::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVENT === $cen) {
                $type->addEvent(FHIRDiagnosticOrderEvent::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ITEM === $cen) {
                $type->addItem(FHIRDiagnosticOrderItem::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_LANGUAGE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CLINICAL_NOTES])) {
            if (isset($type->clinicalNotes)) {
                $type->clinicalNotes->setValue((string)$attributes[self::FIELD_CLINICAL_NOTES]);
            } else {
                $type->setClinicalNotes((string)$attributes[self::FIELD_CLINICAL_NOTES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CLINICAL_NOTES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PRIORITY])) {
            if (isset($type->priority)) {
                $type->priority->setValue((string)$attributes[self::FIELD_PRIORITY]);
            } else {
                $type->setPriority((string)$attributes[self::FIELD_PRIORITY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PRIORITY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('DiagnosticOrder', $this->_getSourceXMLNS());
        }
        if (isset($this->clinicalNotes) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CLINICAL_NOTES]) {
            $xw->writeAttribute(self::FIELD_CLINICAL_NOTES, $this->clinicalNotes->_getValueAsString());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->priority) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PRIORITY]) {
            $xw->writeAttribute(self::FIELD_PRIORITY, $this->priority->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->orderer)) {
            $xw->startElement(self::FIELD_ORDERER);
            $this->orderer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->encounter)) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $this->encounter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->clinicalNotes)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CLINICAL_NOTES]
                || $this->clinicalNotes->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CLINICAL_NOTES);
            $this->clinicalNotes->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CLINICAL_NOTES]);
            $xw->endElement();
        }
        if (isset($this->specimen)) {
            foreach ($this->specimen as $v) {
                $xw->startElement(self::FIELD_SPECIMEN);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->priority)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PRIORITY]
                || $this->priority->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PRIORITY);
            $this->priority->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PRIORITY]);
            $xw->endElement();
        }
        if (isset($this->event)) {
            foreach ($this->event as $v) {
                $xw->startElement(self::FIELD_EVENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->item)) {
            foreach ($this->item as $v) {
                $xw->startElement(self::FIELD_ITEM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if ($rootOpened ?? false) {
            $xw->endElement();
        }
        if ($docStarted ?? false) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDiagnosticOrder)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->subject) || property_exists($json, self::FIELD_SUBJECT)) {
            if (is_array($json->subject)) {
                $type->setSubject(FHIRResourceReference::jsonUnserialize(reset($json->subject), $config));
            } else {
                $type->setSubject(FHIRResourceReference::jsonUnserialize($json->subject, $config));
            }
        }
        if (isset($json->orderer) || property_exists($json, self::FIELD_ORDERER)) {
            if (is_array($json->orderer)) {
                $type->setOrderer(FHIRResourceReference::jsonUnserialize(reset($json->orderer), $config));
            } else {
                $type->setOrderer(FHIRResourceReference::jsonUnserialize($json->orderer, $config));
            }
        }
        if (isset($json->identifier) || property_exists($json, self::FIELD_IDENTIFIER)) {
            if (is_object($json->identifier)) {
                $vals = [$json->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $json->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->encounter) || property_exists($json, self::FIELD_ENCOUNTER)) {
            if (is_array($json->encounter)) {
                $type->setEncounter(FHIRResourceReference::jsonUnserialize(reset($json->encounter), $config));
            } else {
                $type->setEncounter(FHIRResourceReference::jsonUnserialize($json->encounter, $config));
            }
        }
        if (isset($json->clinicalNotes)
            || isset($json->_clinicalNotes)
            || property_exists($json, self::FIELD_CLINICAL_NOTES)
            || property_exists($json, self::FIELD_CLINICAL_NOTES_EXT)) {
            $v = $json->_clinicalNotes ?? new \stdClass();
            $v->value = $json->clinicalNotes ?? null;
            $type->setClinicalNotes(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->specimen) || property_exists($json, self::FIELD_SPECIMEN)) {
            if (is_object($json->specimen)) {
                $vals = [$json->specimen];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_SPECIMEN, true);
            } else {
                $vals = $json->specimen;
            }
            foreach($vals as $v) {
                $type->addSpecimen(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->status)
            || isset($json->_status)
            || property_exists($json, self::FIELD_STATUS)
            || property_exists($json, self::FIELD_STATUS_EXT)) {
            $v = $json->_status ?? new \stdClass();
            $v->value = $json->status ?? null;
            $type->setStatus(FHIRDiagnosticOrderStatus::jsonUnserialize($v, $config));
        }
        if (isset($json->priority)
            || isset($json->_priority)
            || property_exists($json, self::FIELD_PRIORITY)
            || property_exists($json, self::FIELD_PRIORITY_EXT)) {
            $v = $json->_priority ?? new \stdClass();
            $v->value = $json->priority ?? null;
            $type->setPriority(FHIRDiagnosticOrderPriority::jsonUnserialize($v, $config));
        }
        if (isset($json->event) || property_exists($json, self::FIELD_EVENT)) {
            if (is_object($json->event)) {
                $vals = [$json->event];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_EVENT, true);
            } else {
                $vals = $json->event;
            }
            foreach($vals as $v) {
                $type->addEvent(FHIRDiagnosticOrderEvent::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->item) || property_exists($json, self::FIELD_ITEM)) {
            if (is_object($json->item)) {
                $vals = [$json->item];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ITEM, true);
            } else {
                $vals = $json->item;
            }
            foreach($vals as $v) {
                $type->addItem(FHIRDiagnosticOrderItem::jsonUnserialize($v, $config));
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
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->orderer)) {
            $out->orderer = $this->orderer;
        }
        if (isset($this->identifier) && [] !== $this->identifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->clinicalNotes)) {
            if (null !== ($val = $this->clinicalNotes->getValue())) {
                $out->clinicalNotes = $val;
            }
            if ($this->clinicalNotes->_nonValueFieldDefined()) {
                $ext = $this->clinicalNotes->jsonSerialize();
                unset($ext->value);
                $out->_clinicalNotes = $ext;
            }
        }
        if (isset($this->specimen) && [] !== $this->specimen) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_SPECIMEN) && 1 === count($this->specimen)) {
                $out->specimen = $this->specimen[0];
            } else {
                $out->specimen = $this->specimen;
            }
        }
        if (isset($this->status)) {
            if (null !== ($val = $this->status->getValue())) {
                $out->status = $val;
            }
            if ($this->status->_nonValueFieldDefined()) {
                $ext = $this->status->jsonSerialize();
                unset($ext->value);
                $out->_status = $ext;
            }
        }
        if (isset($this->priority)) {
            if (null !== ($val = $this->priority->getValue())) {
                $out->priority = $val;
            }
            if ($this->priority->_nonValueFieldDefined()) {
                $ext = $this->priority->jsonSerialize();
                unset($ext->value);
                $out->_priority = $ext;
            }
        }
        if (isset($this->event) && [] !== $this->event) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_EVENT) && 1 === count($this->event)) {
                $out->event = $this->event[0];
            } else {
                $out->event = $this->event;
            }
        }
        if (isset($this->item) && [] !== $this->item) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ITEM) && 1 === count($this->item)) {
                $out->item = $this->item[0];
            } else {
                $out->item = $this->item;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}