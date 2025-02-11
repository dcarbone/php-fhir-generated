<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:49+0000
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
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap;

/**
 * Provenance information that describes the activity that led to the creation of a
 * set of resources. This information can be used to help determine their
 * reliability or trace where the information in them came from. The focus of the
 * provenance resource is record keeping, audit and traceability, and not explicit
 * statements of clinical significance.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRProvenance extends FHIRResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PROVENANCE;

    /* class_default.php:50 */
    public const FIELD_TARGET = 'target';
    public const FIELD_PERIOD = 'period';
    public const FIELD_RECORDED = 'recorded';
    public const FIELD_RECORDED_EXT = '_recorded';
    public const FIELD_REASON = 'reason';
    public const FIELD_LOCATION = 'location';
    public const FIELD_POLICY = 'policy';
    public const FIELD_POLICY_EXT = '_policy';
    public const FIELD_AGENT = 'agent';
    public const FIELD_ENTITY = 'entity';
    public const FIELD_INTEGRITY_SIGNATURE = 'integritySignature';
    public const FIELD_INTEGRITY_SIGNATURE_EXT = '_integritySignature';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_TARGET => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_RECORDED => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_RECORDED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_INTEGRITY_SIGNATURE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resource(s) that were generated by the activity described in this resource.
     * A provenance can point to more than one target if multiple resources were
     * created/updated by the same activity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] 
     */
    protected array $target;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $period;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instant of time at which the activity was recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $recorded;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason that the activity was taking place.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $reason;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the activity occurred, if relevant.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $location;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri[] 
     */
    protected array $policy;
    /**
     * Provenance information that describes the activity that led to the creation of a
     * set of resources. This information can be used to help determine their
     * reliability or trace where the information in them came from. The focus of the
     * provenance resource is record keeping, audit and traceability, and not explicit
     * statements of clinical significance.
     *
     * An agent takes a role in an activity such that the agent can be assigned some
     * degree of responsibility for the activity taking place. An agent can be a
     * person, a piece of software, an inanimate object, an organization, or other
     * entities that may be ascribed responsibility.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[] 
     */
    protected array $agent;
    /**
     * Provenance information that describes the activity that led to the creation of a
     * set of resources. This information can be used to help determine their
     * reliability or trace where the information in them came from. The focus of the
     * provenance resource is record keeping, audit and traceability, and not explicit
     * statements of clinical significance.
     *
     * An entity used in this activity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity[] 
     */
    protected array $entity;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital signature on the target resource(s). The signature should match a
     * Provenance.agent.reference in the provenance resource. The signature is only
     * added to support checking cryptographic integrity of the resource, and not to
     * represent workflow and clinical aspects of the signing process, or to support
     * non-repudiation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $integritySignature;

    /* constructor.php:61 */
    /**
     * FHIRProvenance Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] $target
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $period
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $recorded
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $reason
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $location
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri[] $policy
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[] $agent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity[] $entity
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $integritySignature
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $target = null,
                                null|FHIRPeriod $period = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $recorded = null,
                                null|FHIRCodeableConcept $reason = null,
                                null|FHIRResourceReference $location = null,
                                null|iterable $policy = null,
                                null|iterable $agent = null,
                                null|iterable $entity = null,
                                null|string|FHIRStringPrimitive|FHIRString $integritySignature = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            fhirComments: $fhirComments);
        if (null !== $target) {
            $this->setTarget(...$target);
        }
        if (null !== $period) {
            $this->setPeriod($period);
        }
        if (null !== $recorded) {
            $this->setRecorded($recorded);
        }
        if (null !== $reason) {
            $this->setReason($reason);
        }
        if (null !== $location) {
            $this->setLocation($location);
        }
        if (null !== $policy) {
            $this->setPolicy(...$policy);
        }
        if (null !== $agent) {
            $this->setAgent(...$agent);
        }
        if (null !== $entity) {
            $this->setEntity(...$entity);
        }
        if (null !== $integritySignature) {
            $this->setIntegritySignature($integritySignature);
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
     * The resource(s) that were generated by the activity described in this resource.
     * A provenance can point to more than one target if multiple resources were
     * created/updated by the same activity.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[]
     */
    public function getTarget(): array
    {
        return $this->target ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getTargetIterator(): iterable
    {
        if (!isset($this->target)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->target);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resource(s) that were generated by the activity described in this resource.
     * A provenance can point to more than one target if multiple resources were
     * created/updated by the same activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $target
     * @return static
     */
    public function addTarget(FHIRResourceReference $target): self
    {
        if (!isset($this->target)) {
            $this->target = [];
        }
        $this->target[] = $target;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The resource(s) that were generated by the activity described in this resource.
     * A provenance can point to more than one target if multiple resources were
     * created/updated by the same activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$target
     * @return static
     */
    public function setTarget(FHIRResourceReference ...$target): self
    {
        if ([] === $target) {
            unset($this->target);
            return $this;
        }
        $this->target = $target;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        $this->period = $period;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instant of time at which the activity was recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant
     */
    public function getRecorded(): null|FHIRInstant
    {
        return $this->recorded ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The instant of time at which the activity was recorded.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant $recorded
     * @return static
     */
    public function setRecorded(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $recorded): self
    {
        if (null === $recorded) {
            unset($this->recorded);
            return $this;
        }
        if (!($recorded instanceof FHIRInstant)) {
            $recorded = new FHIRInstant(value: $recorded);
        }
        $this->recorded = $recorded;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason that the activity was taking place.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getReason(): null|FHIRCodeableConcept
    {
        return $this->reason ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason that the activity was taking place.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $reason
     * @return static
     */
    public function setReason(null|FHIRCodeableConcept $reason): self
    {
        if (null === $reason) {
            unset($this->reason);
            return $this;
        }
        $this->reason = $reason;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the activity occurred, if relevant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getLocation(): null|FHIRResourceReference
    {
        return $this->location ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the activity occurred, if relevant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $location
     * @return static
     */
    public function setLocation(null|FHIRResourceReference $location): self
    {
        if (null === $location) {
            unset($this->location);
            return $this;
        }
        $this->location = $location;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri[]
     */
    public function getPolicy(): array
    {
        return $this->policy ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri>
     */
    public function getPolicyIterator(): iterable
    {
        if (!isset($this->policy)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->policy);
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri $policy
     * @return static
     */
    public function addPolicy(string|FHIRUriPrimitive|FHIRUri $policy): self
    {
        if (!($policy instanceof FHIRUri)) {
            $policy = new FHIRUri(value: $policy);
        }
        if (!isset($this->policy)) {
            $this->policy = [];
        }
        $this->policy[] = $policy;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Policy or plan the activity was defined by. Typically, a single activity may
     * have multiple applicable policy documents, such as patient consent, guarantor
     * funding, etc.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri ...$policy
     * @return static
     */
    public function setPolicy(string|FHIRUriPrimitive|FHIRUri ...$policy): self
    {
        if ([] === $policy) {
            unset($this->policy);
            return $this;
        }
        $this->policy = [];
        foreach($policy as $v) {
            if ($v instanceof FHIRUri) {
                $this->policy[] = $v;
            } else {
                $this->policy[] = new FHIRUri(value: $v);
            }
        }
        return $this;
    }

    /**
     * Provenance information that describes the activity that led to the creation of a
     * set of resources. This information can be used to help determine their
     * reliability or trace where the information in them came from. The focus of the
     * provenance resource is record keeping, audit and traceability, and not explicit
     * statements of clinical significance.
     *
     * An agent takes a role in an activity such that the agent can be assigned some
     * degree of responsibility for the activity taking place. An agent can be a
     * person, a piece of software, an inanimate object, an organization, or other
     * entities that may be ascribed responsibility.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    public function getAgent(): array
    {
        return $this->agent ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent>
     */
    public function getAgentIterator(): iterable
    {
        if (!isset($this->agent)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->agent);
    }

    /**
     * Provenance information that describes the activity that led to the creation of a
     * set of resources. This information can be used to help determine their
     * reliability or trace where the information in them came from. The focus of the
     * provenance resource is record keeping, audit and traceability, and not explicit
     * statements of clinical significance.
     *
     * An agent takes a role in an activity such that the agent can be assigned some
     * degree of responsibility for the activity taking place. An agent can be a
     * person, a piece of software, an inanimate object, an organization, or other
     * entities that may be ascribed responsibility.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent $agent
     * @return static
     */
    public function addAgent(FHIRProvenanceAgent $agent): self
    {
        if (!isset($this->agent)) {
            $this->agent = [];
        }
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * Provenance information that describes the activity that led to the creation of a
     * set of resources. This information can be used to help determine their
     * reliability or trace where the information in them came from. The focus of the
     * provenance resource is record keeping, audit and traceability, and not explicit
     * statements of clinical significance.
     *
     * An agent takes a role in an activity such that the agent can be assigned some
     * degree of responsibility for the activity taking place. An agent can be a
     * person, a piece of software, an inanimate object, an organization, or other
     * entities that may be ascribed responsibility.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent ...$agent
     * @return static
     */
    public function setAgent(FHIRProvenanceAgent ...$agent): self
    {
        if ([] === $agent) {
            unset($this->agent);
            return $this;
        }
        $this->agent = $agent;
        return $this;
    }

    /**
     * Provenance information that describes the activity that led to the creation of a
     * set of resources. This information can be used to help determine their
     * reliability or trace where the information in them came from. The focus of the
     * provenance resource is record keeping, audit and traceability, and not explicit
     * statements of clinical significance.
     *
     * An entity used in this activity.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity[]
     */
    public function getEntity(): array
    {
        return $this->entity ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity>
     */
    public function getEntityIterator(): iterable
    {
        if (!isset($this->entity)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->entity);
    }

    /**
     * Provenance information that describes the activity that led to the creation of a
     * set of resources. This information can be used to help determine their
     * reliability or trace where the information in them came from. The focus of the
     * provenance resource is record keeping, audit and traceability, and not explicit
     * statements of clinical significance.
     *
     * An entity used in this activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity $entity
     * @return static
     */
    public function addEntity(FHIRProvenanceEntity $entity): self
    {
        if (!isset($this->entity)) {
            $this->entity = [];
        }
        $this->entity[] = $entity;
        return $this;
    }

    /**
     * Provenance information that describes the activity that led to the creation of a
     * set of resources. This information can be used to help determine their
     * reliability or trace where the information in them came from. The focus of the
     * provenance resource is record keeping, audit and traceability, and not explicit
     * statements of clinical significance.
     *
     * An entity used in this activity.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity ...$entity
     * @return static
     */
    public function setEntity(FHIRProvenanceEntity ...$entity): self
    {
        if ([] === $entity) {
            unset($this->entity);
            return $this;
        }
        $this->entity = $entity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital signature on the target resource(s). The signature should match a
     * Provenance.agent.reference in the provenance resource. The signature is only
     * added to support checking cryptographic integrity of the resource, and not to
     * represent workflow and clinical aspects of the signing process, or to support
     * non-repudiation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getIntegritySignature(): null|FHIRString
    {
        return $this->integritySignature ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A digital signature on the target resource(s). The signature should match a
     * Provenance.agent.reference in the provenance resource. The signature is only
     * added to support checking cryptographic integrity of the resource, and not to
     * represent workflow and clinical aspects of the signing process, or to support
     * non-repudiation.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $integritySignature
     * @return static
     */
    public function setIntegritySignature(null|string|FHIRStringPrimitive|FHIRString $integritySignature): self
    {
        if (null === $integritySignature) {
            unset($this->integritySignature);
            return $this;
        }
        if (!($integritySignature instanceof FHIRString)) {
            $integritySignature = new FHIRString(value: $integritySignature);
        }
        $this->integritySignature = $integritySignature;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProvenance)) {
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
            } else if (self::FIELD_TARGET === $cen) {
                $type->addTarget(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD === $cen) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RECORDED === $cen) {
                $type->setRecorded(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON === $cen) {
                $type->setReason(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOCATION === $cen) {
                $type->setLocation(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POLICY === $cen) {
                $type->addPolicy(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AGENT === $cen) {
                $type->addAgent(FHIRProvenanceAgent::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENTITY === $cen) {
                $type->addEntity(FHIRProvenanceEntity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INTEGRITY_SIGNATURE === $cen) {
                $type->setIntegritySignature(FHIRString::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_RECORDED])) {
            if (isset($type->recorded)) {
                $type->recorded->setValue((string)$attributes[self::FIELD_RECORDED]);
            } else {
                $type->setRecorded((string)$attributes[self::FIELD_RECORDED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_RECORDED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_INTEGRITY_SIGNATURE])) {
            if (isset($type->integritySignature)) {
                $type->integritySignature->setValue((string)$attributes[self::FIELD_INTEGRITY_SIGNATURE]);
            } else {
                $type->setIntegritySignature((string)$attributes[self::FIELD_INTEGRITY_SIGNATURE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_INTEGRITY_SIGNATURE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Provenance', $this->_getSourceXMLNS());
        }
        if (isset($this->recorded) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RECORDED]) {
            $xw->writeAttribute(self::FIELD_RECORDED, $this->recorded->_getValueAsString());
        }
        if (isset($this->integritySignature) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_INTEGRITY_SIGNATURE]) {
            $xw->writeAttribute(self::FIELD_INTEGRITY_SIGNATURE, $this->integritySignature->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->target)) {
            foreach ($this->target as $v) {
                $xw->startElement(self::FIELD_TARGET);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->period)) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->recorded)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RECORDED]
                || $this->recorded->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RECORDED);
            $this->recorded->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RECORDED]);
            $xw->endElement();
        }
        if (isset($this->reason)) {
            $xw->startElement(self::FIELD_REASON);
            $this->reason->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->location)) {
            $xw->startElement(self::FIELD_LOCATION);
            $this->location->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->policy) && [] !== $this->policy) {
            foreach($this->policy as $v) {
                $xw->startElement(self::FIELD_POLICY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->agent)) {
            foreach ($this->agent as $v) {
                $xw->startElement(self::FIELD_AGENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->entity)) {
            foreach ($this->entity as $v) {
                $xw->startElement(self::FIELD_ENTITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->integritySignature)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_INTEGRITY_SIGNATURE]
                || $this->integritySignature->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_INTEGRITY_SIGNATURE);
            $this->integritySignature->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_INTEGRITY_SIGNATURE]);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRProvenance)) {
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
        if (isset($json->target) || property_exists($json, self::FIELD_TARGET)) {
            if (is_object($json->target)) {
                $vals = [$json->target];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_TARGET, true);
            } else {
                $vals = $json->target;
            }
            foreach($vals as $v) {
                $type->addTarget(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->period) || property_exists($json, self::FIELD_PERIOD)) {
            if (is_array($json->period)) {
                $type->setPeriod(FHIRPeriod::jsonUnserialize(reset($json->period), $config));
            } else {
                $type->setPeriod(FHIRPeriod::jsonUnserialize($json->period, $config));
            }
        }
        if (isset($json->recorded)
            || isset($json->_recorded)
            || property_exists($json, self::FIELD_RECORDED)
            || property_exists($json, self::FIELD_RECORDED_EXT)) {
            $v = $json->_recorded ?? new \stdClass();
            $v->value = $json->recorded ?? null;
            $type->setRecorded(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($json->reason) || property_exists($json, self::FIELD_REASON)) {
            if (is_array($json->reason)) {
                $type->setReason(FHIRCodeableConcept::jsonUnserialize(reset($json->reason), $config));
            } else {
                $type->setReason(FHIRCodeableConcept::jsonUnserialize($json->reason, $config));
            }
        }
        if (isset($json->location) || property_exists($json, self::FIELD_LOCATION)) {
            if (is_array($json->location)) {
                $type->setLocation(FHIRResourceReference::jsonUnserialize(reset($json->location), $config));
            } else {
                $type->setLocation(FHIRResourceReference::jsonUnserialize($json->location, $config));
            }
        }
        if (isset($json->policy)
            || isset($json->_policy)
            || property_exists($json, self::FIELD_POLICY)
            || property_exists($json, self::FIELD_POLICY_EXT)) {
            $vals = (array)($json->policy ?? []);
            $exts = (array)($json->FIELD_POLICY_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addPolicy(FHIRUri::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->agent) || property_exists($json, self::FIELD_AGENT)) {
            if (is_object($json->agent)) {
                $vals = [$json->agent];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_AGENT, true);
            } else {
                $vals = $json->agent;
            }
            foreach($vals as $v) {
                $type->addAgent(FHIRProvenanceAgent::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->entity) || property_exists($json, self::FIELD_ENTITY)) {
            if (is_object($json->entity)) {
                $vals = [$json->entity];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ENTITY, true);
            } else {
                $vals = $json->entity;
            }
            foreach($vals as $v) {
                $type->addEntity(FHIRProvenanceEntity::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->integritySignature)
            || isset($json->_integritySignature)
            || property_exists($json, self::FIELD_INTEGRITY_SIGNATURE)
            || property_exists($json, self::FIELD_INTEGRITY_SIGNATURE_EXT)) {
            $v = $json->_integritySignature ?? new \stdClass();
            $v->value = $json->integritySignature ?? null;
            $type->setIntegritySignature(FHIRString::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->target) && [] !== $this->target) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_TARGET) && 1 === count($this->target)) {
                $out->target = $this->target[0];
            } else {
                $out->target = $this->target;
            }
        }
        if (isset($this->period)) {
            $out->period = $this->period;
        }
        if (isset($this->recorded)) {
            if (null !== ($val = $this->recorded->getValue())) {
                $out->recorded = $val;
            }
            if ($this->recorded->_nonValueFieldDefined()) {
                $ext = $this->recorded->jsonSerialize();
                unset($ext->value);
                $out->_recorded = $ext;
            }
        }
        if (isset($this->reason)) {
            $out->reason = $this->reason;
        }
        if (isset($this->location)) {
            $out->location = $this->location;
        }
        if (isset($this->policy) && [] !== $this->policy) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->policy as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->policy = $vals;
            }
            if ($hasExts) {
                $out->_policy = $exts;
            }
        }
        if (isset($this->agent) && [] !== $this->agent) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_AGENT) && 1 === count($this->agent)) {
                $out->agent = $this->agent[0];
            } else {
                $out->agent = $this->agent;
            }
        }
        if (isset($this->entity) && [] !== $this->entity) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ENTITY) && 1 === count($this->entity)) {
                $out->entity = $this->entity[0];
            } else {
                $out->entity = $this->entity;
            }
        }
        if (isset($this->integritySignature)) {
            if (null !== ($val = $this->integritySignature->getValue())) {
                $out->integritySignature = $val;
            }
            if ($this->integritySignature->_nonValueFieldDefined()) {
                $ext = $this->integritySignature->jsonSerialize();
                unset($ext->value);
                $out->_integritySignature = $ext;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}