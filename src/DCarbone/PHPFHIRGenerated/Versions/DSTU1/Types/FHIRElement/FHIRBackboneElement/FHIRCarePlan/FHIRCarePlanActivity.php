<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

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
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityStatus;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive\FHIRXmlIdRef;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanActivityStatusList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * Describes the intention of how one or more practitioners intend to deliver care
 * for a particular patient for a period of time, possibly limited to care for a
 * specific condition or set of conditions.
 */
class FHIRCarePlanActivity extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY;

    /* class_default.php:50 */
    public const FIELD_GOAL = 'goal';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_PROHIBITED = 'prohibited';
    public const FIELD_PROHIBITED_EXT = '_prohibited';
    public const FIELD_ACTION_RESULTING = 'actionResulting';
    public const FIELD_NOTES = 'notes';
    public const FIELD_NOTES_EXT = '_notes';
    public const FIELD_DETAIL = 'detail';
    public const FIELD_SIMPLE = 'simple';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_GOAL => [
            Constants::VALIDATE_PATTERN => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_PROHIBITED => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PROHIBITED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NOTES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive\FHIRXmlIdRef[] 
     */
    protected array $goal;
    /**
     * Indicates where the activity is at in its overall life cycle
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityStatus 
     */
    protected FHIRCarePlanActivityStatus $status;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the described activity is one that must NOT be engaged
     * in when following the plan.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $prohibited;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that describe follow-on actions resulting from the plan, such as drug
     * prescriptions, encounter records, appointments, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] 
     */
    protected array $actionResulting;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Notes about the execution of the activity.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $notes;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $detail;
    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * A simple summary of details suitable for a general care plan system (e.g. form
     * driven) that doesn't know about specific resources such as procedure etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple 
     */
    protected FHIRCarePlanSimple $simple;

    /* constructor.php:61 */
    /**
     * FHIRCarePlanActivity Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive\FHIRXmlIdRef[] $goal
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanActivityStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityStatus $status
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $prohibited
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[] $actionResulting
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $notes
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $detail
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple $simple
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $goal = null,
                                null|string|FHIRCarePlanActivityStatusList|FHIRCarePlanActivityStatus $status = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $prohibited = null,
                                null|iterable $actionResulting = null,
                                null|string|FHIRStringPrimitive|FHIRString $notes = null,
                                null|FHIRResourceReference $detail = null,
                                null|FHIRCarePlanSimple $simple = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $goal) {
            $this->setGoal(...$goal);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $prohibited) {
            $this->setProhibited($prohibited);
        }
        if (null !== $actionResulting) {
            $this->setActionResulting(...$actionResulting);
        }
        if (null !== $notes) {
            $this->setNotes($notes);
        }
        if (null !== $detail) {
            $this->setDetail($detail);
        }
        if (null !== $simple) {
            $this->setSimple($simple);
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
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive\FHIRXmlIdRef[]
     */
    public function getGoal(): array
    {
        return $this->goal ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive\FHIRXmlIdRef>
     */
    public function getGoalIterator(): iterable
    {
        if (!isset($this->goal)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->goal);
    }

    /**
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive\FHIRXmlIdRef $goal
     * @return static
     */
    public function addGoal(string|FHIRXmlIdRef $goal): self
    {
        if (!($goal instanceof FHIRXmlIdRef)) {
            $goal = new FHIRXmlIdRef(value: $goal);
        }
        if (!isset($this->goal)) {
            $this->goal = [];
        }
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive\FHIRXmlIdRef ...$goal
     * @return static
     */
    public function setGoal(string|FHIRXmlIdRef ...$goal): self
    {
        if ([] === $goal) {
            unset($this->goal);
            return $this;
        }
        $this->goal = $goal;
        return $this;
    }

    /**
     * Indicates where the activity is at in its overall life cycle
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityStatus
     */
    public function getStatus(): null|FHIRCarePlanActivityStatus
    {
        return $this->status ?? null;
    }

    /**
     * Indicates where the activity is at in its overall life cycle
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanActivityStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRCarePlanActivityStatusList|FHIRCarePlanActivityStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRCarePlanActivityStatus)) {
            $status = new FHIRCarePlanActivityStatus(value: $status);
        }
        $this->status = $status;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the described activity is one that must NOT be engaged
     * in when following the plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getProhibited(): null|FHIRBoolean
    {
        return $this->prohibited ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the described activity is one that must NOT be engaged
     * in when following the plan.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $prohibited
     * @return static
     */
    public function setProhibited(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $prohibited): self
    {
        if (null === $prohibited) {
            unset($this->prohibited);
            return $this;
        }
        if (!($prohibited instanceof FHIRBoolean)) {
            $prohibited = new FHIRBoolean(value: $prohibited);
        }
        $this->prohibited = $prohibited;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that describe follow-on actions resulting from the plan, such as drug
     * prescriptions, encounter records, appointments, etc.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference[]
     */
    public function getActionResulting(): array
    {
        return $this->actionResulting ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference>
     */
    public function getActionResultingIterator(): iterable
    {
        if (!isset($this->actionResulting)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->actionResulting);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that describe follow-on actions resulting from the plan, such as drug
     * prescriptions, encounter records, appointments, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $actionResulting
     * @return static
     */
    public function addActionResulting(FHIRResourceReference $actionResulting): self
    {
        if (!isset($this->actionResulting)) {
            $this->actionResulting = [];
        }
        $this->actionResulting[] = $actionResulting;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that describe follow-on actions resulting from the plan, such as drug
     * prescriptions, encounter records, appointments, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference ...$actionResulting
     * @return static
     */
    public function setActionResulting(FHIRResourceReference ...$actionResulting): self
    {
        if ([] === $actionResulting) {
            unset($this->actionResulting);
            return $this;
        }
        $this->actionResulting = $actionResulting;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Notes about the execution of the activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getNotes(): null|FHIRString
    {
        return $this->notes ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Notes about the execution of the activity.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $notes
     * @return static
     */
    public function setNotes(null|string|FHIRStringPrimitive|FHIRString $notes): self
    {
        if (null === $notes) {
            unset($this->notes);
            return $this;
        }
        if (!($notes instanceof FHIRString)) {
            $notes = new FHIRString(value: $notes);
        }
        $this->notes = $notes;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getDetail(): null|FHIRResourceReference
    {
        return $this->detail ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $detail
     * @return static
     */
    public function setDetail(null|FHIRResourceReference $detail): self
    {
        if (null === $detail) {
            unset($this->detail);
            return $this;
        }
        $this->detail = $detail;
        return $this;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * A simple summary of details suitable for a general care plan system (e.g. form
     * driven) that doesn't know about specific resources such as procedure etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple
     */
    public function getSimple(): null|FHIRCarePlanSimple
    {
        return $this->simple ?? null;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * A simple summary of details suitable for a general care plan system (e.g. form
     * driven) that doesn't know about specific resources such as procedure etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple $simple
     * @return static
     */
    public function setSimple(null|FHIRCarePlanSimple $simple): self
    {
        if (null === $simple) {
            unset($this->simple);
            return $this;
        }
        $this->simple = $simple;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCarePlanActivity)) {
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
            } else if (self::FIELD_GOAL === $cen) {
                $va = $ce->attributes()[FHIRXmlIdRef::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->addGoal((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_GOAL, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->addGoal((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_GOAL, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRCarePlanActivityStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROHIBITED === $cen) {
                $type->setProhibited(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTION_RESULTING === $cen) {
                $type->addActionResulting(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTES === $cen) {
                $type->setNotes(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL === $cen) {
                $type->setDetail(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SIMPLE === $cen) {
                $type->setSimple(FHIRCarePlanSimple::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PROHIBITED])) {
            if (isset($type->prohibited)) {
                $type->prohibited->setValue((string)$attributes[self::FIELD_PROHIBITED]);
            } else {
                $type->setProhibited((string)$attributes[self::FIELD_PROHIBITED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PROHIBITED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NOTES])) {
            if (isset($type->notes)) {
                $type->notes->setValue((string)$attributes[self::FIELD_NOTES]);
            } else {
                $type->setNotes((string)$attributes[self::FIELD_NOTES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NOTES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('CarePlanActivity', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->prohibited) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PROHIBITED]) {
            $xw->writeAttribute(self::FIELD_PROHIBITED, $this->prohibited->_getValueAsString());
        }
        if (isset($this->notes) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NOTES]) {
            $xw->writeAttribute(self::FIELD_NOTES, $this->notes->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->goal) && [] !== $this->goal) {
            foreach($this->goal as $v) {
                $xw->startElement(self::FIELD_GOAL);
                $xw->writeAttribute($v::FIELD_GOAL, $v->_getValueAsString());
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
        if (isset($this->prohibited)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PROHIBITED]
                || $this->prohibited->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PROHIBITED);
            $this->prohibited->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PROHIBITED]);
            $xw->endElement();
        }
        if (isset($this->actionResulting)) {
            foreach ($this->actionResulting as $v) {
                $xw->startElement(self::FIELD_ACTION_RESULTING);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->notes)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NOTES]
                || $this->notes->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NOTES);
            $this->notes->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NOTES]);
            $xw->endElement();
        }
        if (isset($this->detail)) {
            $xw->startElement(self::FIELD_DETAIL);
            $this->detail->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->simple)) {
            $xw->startElement(self::FIELD_SIMPLE);
            $this->simple->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCarePlanActivity)) {
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
            $json = json_decode(json: $json, associative: false, depth: $config->getJSONDecodeMaxDepth());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->goal) || property_exists($json, self::FIELD_GOAL)) {
            if (is_array($json->goal)) {
                foreach($json->goal as $v) {
                    $type->addGoal($v);
                }
            } else {
                $type->addGoal($json->goal);
                $type->_setJSONFieldElideSingletonArray(self::FIELD_GOAL, true);
            }
        }
        if (isset($json->status)
            || isset($json->_status)
            || property_exists($json, self::FIELD_STATUS)
            || property_exists($json, self::FIELD_STATUS_EXT)) {
            $v = $json->_status ?? new \stdClass();
            $v->value = $json->status ?? null;
            $type->setStatus(FHIRCarePlanActivityStatus::jsonUnserialize($v, $config));
        }
        if (isset($json->prohibited)
            || isset($json->_prohibited)
            || property_exists($json, self::FIELD_PROHIBITED)
            || property_exists($json, self::FIELD_PROHIBITED_EXT)) {
            $v = $json->_prohibited ?? new \stdClass();
            $v->value = $json->prohibited ?? null;
            $type->setProhibited(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->actionResulting) || property_exists($json, self::FIELD_ACTION_RESULTING)) {
            if (is_object($json->actionResulting)) {
                $vals = [$json->actionResulting];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ACTION_RESULTING, true);
            } else {
                $vals = $json->actionResulting;
            }
            foreach($vals as $v) {
                $type->addActionResulting(FHIRResourceReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->notes)
            || isset($json->_notes)
            || property_exists($json, self::FIELD_NOTES)
            || property_exists($json, self::FIELD_NOTES_EXT)) {
            $v = $json->_notes ?? new \stdClass();
            $v->value = $json->notes ?? null;
            $type->setNotes(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->detail) || property_exists($json, self::FIELD_DETAIL)) {
            if (is_array($json->detail)) {
                $type->setDetail(FHIRResourceReference::jsonUnserialize(reset($json->detail), $config));
            } else {
                $type->setDetail(FHIRResourceReference::jsonUnserialize($json->detail, $config));
            }
        }
        if (isset($json->simple) || property_exists($json, self::FIELD_SIMPLE)) {
            if (is_array($json->simple)) {
                $type->setSimple(FHIRCarePlanSimple::jsonUnserialize(reset($json->simple), $config));
            } else {
                $type->setSimple(FHIRCarePlanSimple::jsonUnserialize($json->simple, $config));
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
        if (isset($this->goal) && [] !== $this->goal) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_GOAL) && 1 === count($this->goal)) {
                $out->goal = $this->goal[0];
            } else {
                $out->goal = $this->goal;
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
        if (isset($this->prohibited)) {
            if (null !== ($val = $this->prohibited->getValue())) {
                $out->prohibited = $val;
            }
            if ($this->prohibited->_nonValueFieldDefined()) {
                $ext = $this->prohibited->jsonSerialize();
                unset($ext->value);
                $out->_prohibited = $ext;
            }
        }
        if (isset($this->actionResulting) && [] !== $this->actionResulting) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ACTION_RESULTING) && 1 === count($this->actionResulting)) {
                $out->actionResulting = $this->actionResulting[0];
            } else {
                $out->actionResulting = $this->actionResulting;
            }
        }
        if (isset($this->notes)) {
            if (null !== ($val = $this->notes->getValue())) {
                $out->notes = $val;
            }
            if ($this->notes->_nonValueFieldDefined()) {
                $ext = $this->notes->jsonSerialize();
                unset($ext->value);
                $out->_notes = $ext;
            }
        }
        if (isset($this->detail)) {
            $out->detail = $this->detail;
        }
        if (isset($this->simple)) {
            $out->simple = $this->simple;
        }
        return $out;
    }
}